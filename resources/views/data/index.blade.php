@extends('data.layout.index')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">English</th>
                <th scope="col">Uzbek</th>
                <th scope="col">Text</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)  
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->en }}</td>
                    <td>{{ $item->uz }}</td>
                    <td>{{ $item->text }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('data.show', ['id' => $item->id]) }}" class="btn btn-outline-success btn-sm ms-1">Show</a>
                            <a href="{{ route('data.edit', ['id' => $item->id]) }}" class="btn btn-outline-primary btn-sm ms-1">Edit</a>
                            <a href="{{ route('data.delete', ['id' => $item->id]) }}" class="btn btn-outline-danger btn-sm ms-1">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{$items->links()}}
    </table>
@endsection