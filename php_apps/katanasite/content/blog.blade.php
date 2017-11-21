@extends('_includes.base')

@section('pageTitle', '- Blog')

@section('body')

@foreach($paginatedBlogPosts as $post)

  <div class="card mb-4">
    <div class="card-block p-3">
      <h3 class="card-title">{{ $post->title }}</h3>
      <small>{{ $post->date }}</small>
      <hr>
      <p class="card-text">{{ str_limit($post->brief, 130) }}</p>
      <a class="btn btn-primary" href="@url($post->path)">Read More</a>
    </div>
  </div>
@endforeach

@stop
