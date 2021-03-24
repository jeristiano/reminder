<div class="container mx-auto px-4 py-4">
    <div class="max-auto w-full bg-white shadow-md rounded-md overflow-hidden border">
        <form method="POST" action=" {{ route('content.update',[$content->id,'page'=>$page]) }} ">
           @csrf
            @method('put')
            <div
                class="flex justify-between items-center px-5 py-3 text-gray-700 border-b  w-full">
                <h3 class="text-md">
                    <a class="hover:text-green-500" href="{{route('content',['page'=>$page])}}"
                       title="返回内容">内容</a>
                    <svg class="h-5 w-5 fill-current text-green-600 inline-block"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                    修改
                </h3>
            </div>

            <x-jet-validation-errors class="text-red-500 px-3 py-3 inline-block"/>

            <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                <div class="mt-2 relative rounded-md ">
                    <label class="text-md ">主题：</label>
                    <input type="text" required
                           name="title"
                           value="{{$content->title}}"
                           class="mt-2 w-full appearance-none rounded-md  focus:border-indigo-200
                           border-green-300 text-gray-900">

                </div>
            </div>

            <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                <div class="mt-2 relative rounded-md">
                    <label
                        class="text-md mb-2">标签：</label>
                    <select type="text" class="w-full  mt-2 appearance-none rounded-md
                    focus:border-indigo-200 border-green-300 text-sm text-gray-900" name="tag_id" id="">
                        @foreach($tags as $key=>$name){
                        <option value="{{$key}}" {{ ($content->tag_id == $key ?"selected":"")}}>{{$name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="px-5 py-6 bg-gray-200">
                    <label class="text-md text-gray-900">内容：</label>
                    <textarea required name="text" id="editor">
                         {!! $content->text !!}
                    </textarea>
            </div>

            <div class="flex justify-between items-center px-5 py-3">
                <button class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">
                    重置
                </button>
                <button type="submit" class="px-3 py-1 bg-green-600 text-white rounded-md text-sm hover:bg-green-500 focus:outline-none">
                    保存
                </button>
            </div>
        </form>
    </div>
</div>

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

    <script>
        $(document).ready(function(){
            var editor = new Simditor({
                textarea: $('#editor'),
            });
        });
    </script>


@stop
