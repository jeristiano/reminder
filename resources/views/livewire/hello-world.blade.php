<div>
    {{--    Hello world-{{$name}}  {{$greeting}}  {{implode(', ',$greetings)}}--}}
    {{--    @if($loud)--}}
    {{--        !!!--}}
    {{--    @endif--}}
    {{--    <input wire:model="name" type="text">--}}


    {{--    <input wire:model="loud" type="checkbox">--}}

    {{--    <select wire:model="greeting">--}}
    {{--        <option>Hello</option>--}}
    {{--        <option>Goodbye</option>--}}
    {{--        <option>Adios</option>--}}
    {{--    </select>--}}
    {{--    <select wire:model="greetings" multiple>--}}
    {{--        <option>Hello</option>--}}
    {{--        <option>Goodbye</option>--}}
    {{--        <option>Adios</option>--}}
    {{--    </select>--}}

    {{--    <div>--}}
    {{--        <form action="#" wire:submit.prevent="$set('name','bingo')">--}}
    {{--            <button>resetName</button>--}}
    {{--        </form>--}}

    {{--    </div>--}}


    @foreach($contacts as $contact)
        @livewire('say-hi',['user'=>$contact],key($contact->name))
    @endforeach

    <hr>
    <button wire:click="refreshChildren">refreshAll</button>
    <button wire:click="$emit('refreshChildren')">refreshChildren</button>
    {{now()}}


</div>
