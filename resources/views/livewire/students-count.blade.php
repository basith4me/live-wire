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

    <div>
        @foreach ($entries as $item)
            <p>{{ $item->count }}</p>
            <p>{{ $item->descreption }}</p>
        @endforeach
    </div>
</div>
