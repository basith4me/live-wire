<div>
    <form action="" wire:submit='submit'>
        <input type="number" wire:model='studentCount'>
        <textarea name="" id="" wire:model='note'></textarea>
        <button>Add Student</button>
    </form>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div>
                    {{ $error }}
                </div>
            @endforeach
        </div>

    @endif

   
        @foreach ($entries as $item)
        <div wire:key='{{ $item->id }}' wire:wire:transition style="margin: 0">
            <div><p>{{ $item->count }}</p></div>
            <div><p>{{ $item->descreption }}</p></div>
            <button wire:click='deleteStudent({{$item->id}})'>Delete</button>
           
        </div>
            @endforeach
  
</div>
