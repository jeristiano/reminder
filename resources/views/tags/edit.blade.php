@extends('layouts.app')
@section('title', '标签-编辑')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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

                        <form method="POST" action="{{ route('tags.save',$tagModel->id) }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="author">标签名称：</label>
                                <input type="text" name="name" class="form-control" required value="{{ $tagModel->name }}">

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

        </div>
    </div>


@stop
