@extends('layouts.main')

@section('title', '| Home')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
          <h1>Johnny's Blog</h1>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3>
            <p>123</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>123</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>

        <hr>
        
        <div class="post">
            <h3>Post Title</h3>
            <p>123</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>sidebar</h2>
    </div>
</div>
@stop