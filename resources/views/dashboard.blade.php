<x-app-layout>

    <div class="py-28">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-12 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="lg:text-center">
                            <h1 class="text-base text-gray-600 font-semibold tracking-wide
                            uppercase">
                                Welcome Home
                            </h1>
                            <p class="mt-6 leading-8 font-extrabold tracking-tight
                            text-gray-700 sm:text-3xl">
                                敬畏是智慧的开端
                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                一切阅读从这里开始
                            </p>
                        </div>
                    </div>

                    <div class="mt-20">
                        <div class="flex flex-wrap-mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-lg rounded-md
                                bg-gray-150">

                                    <div class="p-3 rounded-full bg-pink-600 bg-opacity-75 text-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24"stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"  d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <a  href="{{route('content')}}" title="内容数量">
                                    <div class="mx-5"><h4 class="text-2xl font-semibold text-gray-700">
                                        {{$info['total_notes']}}</h4>
                                          <div class="text-gray-500">内容数量</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-lg rounded-md
                                bg-gray-150">
                                    <div class="p-3 rounded-full bg-purple-600 bg-opacity-75 text-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                                        </svg>
                                    </div>
                                    <a  href="{{route('tags')}}" title="标签主题">
                                    <div class="mx-5"><h4 class="text-2xl font-semibold text-gray-700">
                                            {{$info['total_tags']}}</h4>
                                        <div class="text-gray-500">标签主题</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-lg rounded-md bg-gray-150">
                                    <div class="p-3 rounded-full bg-yellow-600 bg-opacity-75 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor"
                                             class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                        </svg>
                                    </div>
                                    <a  href="{{route('subscriptions')}}" title="订阅数">
                                    <div class="mx-5"><h4 class="text-2xl font-semibold text-gray-700">
                                            {{$info['total_subs']}}</h4>
                                        <div class="text-gray-500">订阅数</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-lg rounded-md bg-gray-150">
                                    <div class="p-3 rounded-full bg-green-600 bg-opacity-75 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor"
                                             class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </div>
                                    <div class="mx-5"><h4 class="text-2xl font-semibold text-gray-700">
                                            {{$info['recent_pubs']}}</h4>
                                        <div class="text-gray-500">本周发布</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
