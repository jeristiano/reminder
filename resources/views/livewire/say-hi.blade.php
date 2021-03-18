<div>
    {{$contact->name}}
    <button wire:click="$refresh">refresh</button>  {{now()}}

    <button wire:click="refreshFoo">refreshParents</button>  {{now()}}
</div>
