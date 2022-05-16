@component('mail::message')

# 每日箴言 {{\Carbon\Carbon::today()->toDateString()}}
@foreach ($messages as $message)

`{{ $message->tag->name??null }}`

##  {{ $message->title??null }}

{!! $message->text??null !!}

-----

@endforeach

@endcomponent


@component('mail::footer')

@endcomponent
