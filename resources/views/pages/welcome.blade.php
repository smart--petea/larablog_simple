@extends('main')

@section('title', ' | Homepage');

@section('stylesheets')
    <link rel='stylesheet' type='text/css' href='styles.css'>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
                <p><a href="#" role="button" class="btn btn-primary btn-lg">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- end of head row -->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="col-md-3 offset-md-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection('content')
