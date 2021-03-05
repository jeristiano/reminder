@extends('layouts.app')
@section('title', '标签')

@section('content')
    <div class="offset-md-3 col-md-6">
        <div class="card ">
            <div class="card-header alert-success">
                <h5>我的标签</h5>
            </div>
            <div class="card-body table-responsive ">
                <a class="btn btn-sm btn-success" href="{{ route('tags.create') }}"
                   role="button">创建</a>
            </div>

            <div class="card-body table-responsive ">

                @include('layouts._message')
                <table class="table table-striped">
                    <!-- On rows -->
                    <tr>
                        <th>便签名</th>
                        <th>内容数</th>
                        <th>创建时间</th>
                        <th>修改</th>
                    </tr>
                    @foreach($tags as $tag)
                        <tr>
                            <td>
                                <a  href="{{ route('tags.show',['tag'=>1])}}">{{$tag->name}}</a>
                            </td>
                            <td>{{$tag->note->count()}}</td>
                            <td>{{$tag->created_at}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('tags.edit',
                                ['tag'=>$tag->id]) }}">修改</a>
                                <a class="btn btn-danger btn-sm"
                                   href="{{ route('tags.delete',['tag'=>$tag->id]) }}">删除</a>

                            </td>
                        </tr>
                    @endforeach


                </table>
                {{ $tags->links() }}
            </div>

            <div class="card-footer">
                <h6>当前共有标签：{{$tags->count()}} 个！</h6>
            </div>

        </div>


    </div>

@stop
