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
{{--                        话题列表--}}
                        @include('content._topic_list', ['contents' => $contents])
{{--                        分页--}}
                        <div class="mt-5">
                            {!! $contents->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection

