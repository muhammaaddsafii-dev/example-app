@extends('layout.master')

@section('content')
    <h2>TABLE CRUD</h2>
    <a href="/finance/create" class="btn btn-sm btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($finances as $finance)
                <tr>
                    <td>{{ $finance->id }}</td>
                    <td>{{ $finance->name }}</td>
                    <td>{{ $finance->donation }}</td>
                    <td>
                        <a class="btn btn-warning" href="/finance/{{ $finance->slug }}/edit">Edit</a>
                        <form action="/finance/{{ $finance->slug }}/delete" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
