@extends('layout.master')

@section('content')
    <h2>Form Edit Donation</h2>
    <form action="/finance/{{ $finance->slug }}/edit" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $finance->name }}">
        </div>
        <div class="form-group">
            <label for="donation">Donation:</label>
            <input type="text" class="form-control" id="donation" name="donation"
                value="{{ old('donation') ?? $finance->donation }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
