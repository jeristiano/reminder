@component('mail::message')

# 每日箴言 {{\Carbon\Carbon::today()->toDateString()}}
@foreach ($messages as $message)

`{{ $message->tag->name }}`

##  {{ $message->author->name }}

{{ $message->text }}

-----

@endforeach

@endcomponent


@component('mail::footer')

@endcomponent
