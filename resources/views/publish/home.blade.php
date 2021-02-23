@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello 读 客</h1>
        <p class="lead">
            当你还钱给某个人之后，你再也不会遇到他们。但是在此之前，他们无所不在。
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('publish') }}" role="button">开始发布</a>
        </p>
    </div>
@stop
