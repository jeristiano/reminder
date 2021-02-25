@component('mail::message')
    # 每日箴言-{{\Carbon\Carbon::today()->toDateString()}}

@foreach ($messages as $message)
`{{$message['tag']}}`
##  {{$message['author']}}

{{$message['contents']}}

-----
@endforeach

@endcomponent


@component('mail::footer')

@endcomponent
