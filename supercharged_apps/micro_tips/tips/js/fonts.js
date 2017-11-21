async function loadFonts() {
  const font = new FontFace('myfont', 'url(myfont.woff)');
  await font.load();
  document.fonts.add(font);
  document.body.classList.add('fonts-loaded');
}
