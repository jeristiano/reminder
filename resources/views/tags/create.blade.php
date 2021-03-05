@extends('layouts.app')
@section('title', '标签-创建')

@section('content')
    <div class="offset-md-3 col-md-5">
        <div class="card ">
            <div class="card-header">
                <a style="color:#212529; text-decoration:none" href="{{route('tags')}}">
                    <h5>标签</h5>
                </a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('layouts._message')

                <form method="POST" action="{{ route('tags.create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="author">标签名称：</label>
                        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">

                    </div>

                    <button type="submit" class="btn btn-success">提交</button>
                </form>
            </div>

            <div class="card-footer">
                当前标签 :
                @foreach($tags as $tag)
                    <span style="color:#c7254e;background-color: #f9f2f4;border-radius:4px">{{$tag
                    }}</span>
                @endforeach

            </div>
        </div>
    </div>
@stop
