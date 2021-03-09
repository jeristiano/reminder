@extends('layouts.app')
@section('title', '内容编辑')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-8">
                <div class="card ">
                    <div class="card-header alert-success">
                        <h5>内容编辑</h5>
                    </div>
                    <div class="card-body">
                        @include('layouts._message')
                        <form method="POST" action="{{ route('content.update',$content->id) }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="author">来源（主题）：</label>
                                <input type="text" name="title" class="form-control" required
                                       value="{{$content->title}}">
                            </div>

                            <div class="form-group">
                                <label for="category">标签分类：</label>
                                <select required name="tag_id" id="" class="form-control">
                                    @foreach($tags as $key=>$name){
                                    <option value="{{$key}}" {{ ($content->tag_id == $key ?"selected":"")}}>{{$name}}</option>
                                    }
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="content">内容：</label>
                                <textarea name="text"  id="editor" class="form-control" required rows="3">
                                    {!! $content->text !!}
                                </textarea>
                            </div>

                            <button type="submit" class="btn btn-success">提交</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop


@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

    <script>
        $(document).ready(function(){
            var editor = new Simditor({
                textarea: $('#editor'),
            });
        });
    </script>

@stop

