@extends('data.layout.index')

@section('content')

<form method="POST" action="{{ route('data.store') }}" autocomplete="off">
    @include('data.components.input')
</form>
@endsection