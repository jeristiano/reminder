@if (count($contents))
    <ul class="list-unstyled">
        @foreach ($contents as $content)
            <li class="media">

                <div class="media-body">
                    <div class="media-heading mt-0 mb-1 ">
                        <a href="{{route('preview', ['id'=>$content->id]) }}" target="_blank"
                           title="预览邮件：{{$content->title }}" style="font-size:16px;color:  #58b06d; !important">
                        {{$content->title}}
                        </a>
                    </div>

                    <div class="media-body" style="margin:6px;" >
                            {!! $content->text !!}
                    </div>

                    <small class="media-body meta text-secondary">

                        <a class="text-secondary" href="{{route('content',
                        ['tag'=>$content->tag->id])}}"
                           title="{{ $content->tag->name }}">
                            <i class="far fa-folder"></i>
                            {{ $content->tag->name }}
                        </a>
                        <span> • </span>
                        <i class="far fa-clock"></i>
                        <span class="timeago">{{ $content->updated_at->diffForHumans() }}</span>
                        <span> • </span>

                        <a href="{{ route('content.edit', [$content->id])  }}"
                           class="text-secondary"> <i class="far fa-edit"></i>
                            编辑
                        </a>
                        <span> • </span>
                        <a href="{{ route('content.delete', [$content->id])  }}"
                           class="text-secondary"> <i class="fa fa-trash"></i>
                            删除
                        </a>
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
