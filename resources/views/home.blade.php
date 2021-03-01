@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert-success"><b>Dashboard</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="card-body">
                            <h3>Hello 读客 :</h3>

                            <p>
                                一切，将从这里开始。
                            </p>
                            <p>
                                <a class="btn btn-mid btn-success" href="{{ route('publish') }}"
                                   role="button">开始发布</a>
                            </p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
