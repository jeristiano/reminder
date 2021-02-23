@extends('layouts.default')
@section('title', '发 布')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card ">
            <div class="card-header">
                <h5>发 布</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('publish.create') }}">
                    <div class="form-group">
                        <label for="author">作者：</label>
                        <input type="text" name="author" class="form-control"
                               value="{{ old('author') }}">
                    </div>

                    <div class="form-group">
                        <label for="category">类别：</label>
                        <input type="text" name="category" class="form-control" value="{{ old
                        ('category') }}">
                    </div>

                    <div class="form-group">
                        <label for="content">内容：</label>
                        <textarea name="content" class="form-control" rows="3" placeholder="注意:多条请以 || 号结尾">{{ old('content')}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">发布</button>
                </form>
            </div>

            <div class="card-footer">
                <h6>当前共有数据：{{ $info['total_items'] }}条！</h6>
            </div>
        </div>
    </div>
@stop
