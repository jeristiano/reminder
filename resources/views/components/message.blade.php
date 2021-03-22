@foreach (array_flip(['Error'=>'red-500', 'Warning'=>'yellow-500', 'Success'=>'green-400',
'Info'=>'blue-400']) as $color=>$msg)
    @if(session()->has($msg))
            <div class="overflow-x-auto">
                <div
                    class="inline-flex w-full bg-white shadow-md rounded-lg
                    overflow-hidden">
                    <div class="flex justify-center items-center w-12 bg-{{$color}}">

                        @include('components.message_svg',['msg'=>$msg])

                    </div>
                    <div class="-mx-3 py-2 px-4">
                        <div class="mx-3"><span class="text-{{$color}} font-semibold">{{$msg}}</span>
                            <p class="text-gray-600 text-sm">  {{ session()->get($msg) }} </p>
                        </div>
                    </div>
                </div>
            </div>

    @endif
@endforeach



