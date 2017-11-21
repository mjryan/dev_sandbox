const cacheName = 'mycache';

self.onfetch = event => {
  const request = event.request;

  const networkResponsePromise = fetch(request).catch(_ => {});
  const cachedResponsePromise = caches.match(request);

  event.respondWith(async function(){
    const cacheResponse = await cachedResponsePromise;
    if(cacheResponse)
      return cacheResponse;
    const networkResponse = await networkResponsePromise;
    if (networkResponse)
      return networkResponse.clone();
    throw new Error(`Neither network nor cache had a response for ${request.url}`);
  }());

  event.waitUntil(async function(){
    const networkResponse = await networkResponsePromise;
    if (networkResponse)
      cache.put(request, networkResponse.clone());
  }());
  
}
