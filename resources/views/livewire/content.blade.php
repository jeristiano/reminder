<dl>
    <div class="bg-gray-50 px-4 py-5 sm:gap-4 sm:px-6">
        <ul class="divide-y divide-gray-300">
            <x-message />
            @foreach($contents as $content)

                <li class="mt-2 mb-6">
                    <div class="text-gray-700 mt-4 text-lg hover:text-green-500 leading-10">
                        <a href="{{route('preview', ['id'=>$content->id]) }}" target="_blank"
                           title="预览邮件：{{$content->title }}">
                            {{$content->title}}
                        </a>
                    </div>

                    <div class="markdown text-sm pl-4 mt-5 mb-3 bg-gray-100 border-8
                    border-gray-100">
                        {!! $content->text !!}
                    </div>

                    <small class="text-base">

                        <a class="text-base text-gray-500" href="{{route('content',
                        ['tag'=>$content->tag->id])}}"
                           title="{{ $content->tag->name }}">
                            <svg class="w-4 h-4 fill-current inline-block"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fillRule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clipRule="evenodd" />
                            </svg>
                            {{ $content->tag->name }}
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        <span class="timeago text-gray-500">{{ $content->updated_at->diffForHumans() }}</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>

                        <a href="{{ route('content.edit', [$content->id])  }}"
                           class="text-base text-blue-500"> <i class="far fa-edit"></i>
                            编辑
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <a href="{{ route('content.delete', [$content->id])  }}"
                           class="text-base text-red-500"> <i class="fa fa-trash"></i>
                            删除
                        </a>
                    </small>

                </li>
            @endforeach


        </ul>
    </div>
    <div class="pt-6 pb-8 pl-6 pr-6 space-y-2 md:space-y-5">
        {{ $contents->onEachSide(0)->links() }}
    </div>
</dl>
