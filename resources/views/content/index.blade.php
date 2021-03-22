<x-app-layout>
    <div class="mt-10 container mx-auto px-8 md:w-2/4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6" >
                <h3 class="text-lg leading-6 font-medium text-gray-900">

                    <a class="hover:text-green-500" href="{{route('content')}}" title="所有标签">标签</a>
                         <svg class="h-5 w-5 fill-current text-green-600 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    {{$tagModel->name??"全部"}}

                </h3>
                <p class="mt-4 max-w-2xl text-sm text-gray-500">
                    当前主题共有笔记: {{$total}} 条！
                </p>
            </div>
            <div class="border-t divide-gray-500">
                <livewire:content :tag="$tag" :key="$tag"/>
            </div>
        </div>
    </div>


</x-app-layout>
