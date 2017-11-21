@extends('_includes.base')

@section('pageTitle', '- Contact')

@section('body')
  <h1>Contact Us</h1>
  <p>Contact us with the form below</p>
  <form>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" class="form-control"></textarea>
    </div>
    <button type="button" name="button" class="btn btn-primary">Submit</button>
  </form>
@stop
