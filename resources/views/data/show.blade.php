@extends('data.layout.index')

@section('content')
<div class="card">
  <div class="card-body">
    <h2 class="card-title d-flex justify-content-center">EN-UZ: {{ $item->en }} - {{ $item->uz }}</h2>
    <h3 class="card-text  d-flex justify-content-center">Text: {{ $item->text }}</h3>
  </div>
</div>
@endsection