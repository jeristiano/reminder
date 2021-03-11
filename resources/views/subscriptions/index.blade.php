@extends('layouts.app')
@section('title', '订阅')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header alert-success">
                        <h5>我的订阅</h5>
                    </div>
                    <div class="card-body table-responsive ">
                        @include('layouts._message')
                        <a class="btn btn-sm btn-success" href="{{ route('subscriptions.create') }}" role="button">创建</a>
                    </div>

                    <div class="card-body table-responsive ">


                        <table class="table table-striped">
                            <!-- On rows -->
                            <tr>
                                <th>订阅标签</th>
                                <th>设置时间</th>
                                <th>执行时间</th>
                                <th>创建时间</th>
                                <th>更新时间</th>
                                <th>修改</th>
                            </tr>
                            @foreach($subscriptions as $sub)
                                <tr>
                                    <td>
                                        @foreach($sub->tag_ids as $tag_id)
                                            <a  href="{{ route('content',['tag'=>$tag_id]) }}">{{$tags[$tag_id]}}</a>
                                        @endforeach

                                    </td>
                                    <td>{{$sub->hours}} : {{$sub->minutes}}</td>
                                    <td>{{$sub->pushed_time}}</td>
                                    <td>{{$sub->created_at}}</td>
                                    <td>{{$sub->updated_at}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('subscriptions.edit', $sub->id) }}">修改</a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('subscriptions.delete',$sub->id) }}">删除</a>

                                    </td>
                                </tr>
                            @endforeach

                        </table>
{{--                        {{ $subscriptions->links() }}--}}
                    </div>

{{--                    <div class="card-footer">--}}
{{--                        <h6>当前共有标签：{{$subscriptions->count()}} 个！</h6>--}}
{{--                    </div>--}}

                </div>


            </div>
        </div>
    </div>


@stop
