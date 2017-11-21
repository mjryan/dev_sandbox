<h3>From the blog</h3>
<div class="list-group">
@foreach($blogPosts as $blogPost)
    <a class="list-group-item" href="@url($blogPost->path)">{{ $blogPost->title }}</a>
@endforeach
</div>
<br>
Want to read more?
<br>
<a href="@url('blog')">Check all posts</a>
