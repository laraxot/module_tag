<<<<<<< HEAD
<div>
    <h1>{{ class_basename($model_class) }}</h1>
    <x-input.group type="text" name="tag_type" label="Type Tag" />
    <x-input.group type="text" name="tag_name" label="Nome Tag" />
    <button type="button" class="btn btn-primary" wire:click="addTagType()">+</button>

    @foreach($group_tags as $group => $tags)
        <hr/>
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
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            //confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            var $callback=event.detail.callback;
            if (result.isConfirmed) {
                @this[$callback]();

                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })
});
</script>
@endpush

{{--
// function we want to run
var fnstring = "runMe";

// find object
var fn = window[fnstring];

// is object a function?
if (typeof fn === "function") fn();

https://www.sitepoint.com/call-javascript-function-string-without-using-eval/

// function name and parameters to pass
var fnstring = "runMe";
var fnparams = [1, 2, 3];

// find object
var fn = window[fnstring];

// is object a function?
if (typeof fn === "function") fn.apply(null, fnparams);

=======
<div>
    <h1>{{ class_basename($model_class) }}</h1>
    <x-input.group type="text" name="tag_type" label="Type Tag" />
    <x-input.group type="text" name="tag_name" label="Nome Tag" />
    <button type="button" class="btn btn-primary" wire:click="addTagType()">+</button>

    @foreach($group_tags as $group => $tags)
        <hr/>
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
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            //confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            var $callback=event.detail.callback;
            if (result.isConfirmed) {
                @this[$callback]();

                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })
});
</script>
@endpush

{{--
// function we want to run
var fnstring = "runMe";

// find object
var fn = window[fnstring];

// is object a function?
if (typeof fn === "function") fn();

https://www.sitepoint.com/call-javascript-function-string-without-using-eval/

// function name and parameters to pass
var fnstring = "runMe";
var fnparams = [1, 2, 3];

// find object
var fn = window[fnstring];

// is object a function?
if (typeof fn === "function") fn.apply(null, fnparams);

>>>>>>> 9bd68a9 (.)
--}}