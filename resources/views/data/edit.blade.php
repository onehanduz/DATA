@extends('data.layout.index')

@section('content')

<form method="POST" action="{{ route('data.update', ['id' => $item->id ]) }}" autocomplete="off">
    @include('data.components.input')
</form>
@endsection