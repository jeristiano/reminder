@if (count($contents))
    <ul class="list-unstyled">
        @foreach ($contents as $content)
            <li class="media">
{{--                <div class="media-left">--}}
{{--                    <a href="{{ route('users.show', [$content->user_id]) }}">--}}
{{--                        <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $content->user->avatar }}" title="{{ $content->user->name }}">--}}
{{--                    </a>--}}
{{--                </div>--}}

                <div class="media-body">
{{--                    {{ route('content.show', [$content->id]) }}" title="{{$content->title }}--}}
                    <div class="media-heading mt-0 mb-1">
                        <a href="">
                            {{ $content->title }}
                        </a>
{{--                        {{ route('topics.show', [$content->id]) }}--}}
                        <a class="float-right" href="">
{{--                            <span class="badge badge-secondary badge-pill"> {{ $content->reply_count }} </span>--}}
                        </a>
                    </div>

                    <small class="media-body meta text-secondary">

                        <a class="text-secondary" href="#" title="{{ $content->tag->name }}">
                            <i class="far fa-folder"></i>
                            {{ $content->tag->name }}
                        </a>

                        <span> • </span>

{{--                        {{ route('users.show', [$content->user_id]) }}" title="{{ $content->user->name }}--}}
                        <a class="text-secondary" href="">
                            <i class="far fa-user"></i>
{{--                            {{ $content->user->name }}--}}
                        </a>
                        <span> • </span>
                        <i class="far fa-clock"></i>
                        <span class="timeago">{{ $content->updated_at->diffForHumans() }}</span>
                    </small>

                </div>
            </li>

            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>

@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif
