<div>

    @foreach($group_tags as $group => $tags)
        <h3>{{ $group }}</h3>
            <div class="input-group mb-3">
            <x-input type="text" name="tag.{{$group}}" />
            <button type="button" class="btn btn-primary" wire:click="addTag('{{$group}}')">+</button>
            </div>
        <ol>
        @foreach($tags as $tag)
        <li>{{ $tag->name}} [{{ $tag->order_column}}]
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary" wire:click="moveUp('{{ $tag->id }}')">
                    <i class="fas fa-chevron-up"></i>
                </button>
                <button type="button" class="btn btn-primary" wire:click="moveDown('{{ $tag->id }}')">
                    <i class="fas fa-chevron-down"></i>
                </button>
                {{--
                <button type="button" class="btn btn-primary" wire:click="rename('{{ $tag->id }}')">Rename</button>
                --}}
                <button type="button" class="btn btn-danger btn-confirm" wire:click="delete('{{ $tag->id }}')">Delete</button>
            </div>
        </li>
        @endforeach
        </ol>
    @endforeach
</div>

@push('scripts')
<script>
   window.addEventListener('swal:confirm', event => {
        Swal.fire({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.livewire.emit('remove');
            }
        });
});
</script>
@endpush