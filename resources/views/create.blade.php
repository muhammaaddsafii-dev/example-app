@extends('layout.master')

@section('content')
    <h2>Form Donation</h2>
    <form action="{{ url('/finance/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="donation">Donation:</label>
            <input type="text" class="form-control" id="donation" placeholder="Enter Donation" name="donation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
