@extends('layouts.app')
@section('title', '发 布')

@section('content')
    <div class="offset-md-3 col-md-6">
        <div class="card ">
            <div class="card-header">
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
                        <label for="category">标签：</label>
                        <input type="text" name="tag_id" class="form-control" required value="{{ old
                        ('tag_id') }}">
                    </div>

                    <div class="form-group">
                        <label for="content">内容：</label>
                        <textarea name="text" class="form-control" required rows="3"
                                  placeholder="注意:多条请以 ||号结尾">{{ old('text')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">发布</button>
                </form>
            </div>

            <div class="card-footer">
                <h6>当前共有数据：{{$count }}条！</h6>
            </div>
        </div>
    </div>
@stop
