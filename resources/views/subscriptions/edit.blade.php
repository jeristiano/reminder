@extends('layouts.app')
@section('title', '订阅-修改')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">
                        <a style="color:#212529; text-decoration:none" href="{{route('subscriptions')}}">
                            <h5>订阅修改</h5>
                        </a>
                    </div>

                    <div class="card-body">
                        @include('layouts._message')
                        <form method="POST" action="{{ route('subscriptions.save',$subscription->id) }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="category">订阅标签：</label>
                                <select required name="tag_id[]" id="" class="form-control
                                selectpicker" multiple data-live-search="true">

                                    @foreach($tags as $key=>$name){
                                    <option value="{{$key}}"
                                    @foreach   ($subscription->tag_ids??[] as $ot_id)

                                        {{ ($ot_id == $key ? "selected":"") }}

                                        @endforeach
                                    >{{$name}}</option>
                                    }
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="author">推送时间(小时)：</label>
                                <input type="text" name="hours" class="form-control" required
                                       placeholder="0~23" value="{{$subscription->hours}}">
                            </div>
                            <div class="form-group">
                                <label for="author">推送时间(分钟)：</label>
                                <input type="text" name="minutes" class="form-control" required  placeholder="0~59"  value="{{$subscription->minutes}}">
                            </div>

                            <button type="submit" class="btn btn-success">提交</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <h6>注意：不能重复发布订阅</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>


@stop

@section('scripts')

    <script  type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/i18n/defaults-zh_CN.js')}}"></script>

    <script>
        $(function () {
            $('select').selectpicker();
        });

    </script>
@stop
