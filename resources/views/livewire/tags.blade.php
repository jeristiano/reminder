<div class="mt-10 container mx-auto px-8 md:w-2/4">
    <div class="mb-3">
        <x-message />

    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">

        <div class="px-4 py-5 sm:px-6 bg-green-500">
            <h3 class="text-lg leading-6 font-medium text-white">
                <a class="hover:text-green-500" href="{{route('content')}}" title="所有标签">标签</a>
            </h3>
            <p class="mt-4 max-w-2xl text-sm text-white">
                当前共有标签: {{$total}} 个！
            </p>
        </div>

        <div class="border-t divide-gray-500">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        名称
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        内容数量
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        创建时间
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        修改
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <livewire:tags-list :tags="$tags" />
                                </tbody>
                            </table>
                            <div class="pt-6 pb-8 pl-6 pr-6 space-y-2 md:space-y-5">
                                {{ $tags->onEachSide(0)->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
