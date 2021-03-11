@extends('layouts.app')

@section('title', '内容列表')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert-success topic-list">
                        <h5>内容列表</h5>
                    </div>

                    <div class="card-body">
                        @include('layouts._message')
                        @include('content._topic_list', ['contents' => $contents])
                        <div class="mt-5">
                            {!! $contents->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <h6>当前便签共有笔记：{{$total}} 个！</h6>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection

