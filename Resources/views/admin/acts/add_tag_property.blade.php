@extends('adm_theme::layouts.app')
@section('content')

<livewire:tag-crud :modelClass="get_class($row)" />

@endsection