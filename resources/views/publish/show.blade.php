@extends('layouts.app')
@section('title', '发 布')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-8">
                <div class="card ">
                    <div class="card-header alert-success">
                        <h5>发 布</h5>
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
                        <form method="POST" action="{{ route('publish.create') }}">
                            @csrf
                            <div class="form-group">
                                <label for="author">来源（主题）：</label>
                                <input type="text" name="title" class="form-control" required value="{{ old
                        ('title') }}">
                                <input type="hidden" name="user_id" class="form-control"
                                       value="{{$user_id}}">
                            </div>

                            <div class="form-group">
                                <label for="category">标签分类：</label>
                                <select required name="tag_id" id="" class="form-control">
                                    @foreach($tags as $key=>$name){
                                    <option value="{{$key}}" {{ (old("tag_id") == $key ? "selected":"") }}>{{$name}}</option>
                                    }
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="content">内容：</label>
                                <textarea name="text"  id="editor" class="form-control" required rows="3"
                                          placeholder="注意:多条请以 ---- 分割">{{ old('text')}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-success">发布</button>
                        </form>
                    </div>

                    <div class="card-footer">
                        <h6>当前共有数据：{{$count }}条！</h6>
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
