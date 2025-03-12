<div>
   
    <h1>this is from live wire</h1>
    {{ $count}}
    <input type="number" wire:model.blur='number' />
    <button wire:click="changeCount({{ $number }})">Change value</button>
</div>
