@extends('layout.mainlayout')

@section('main_content')

<div class="container mt-3">
    <h2 class="alert alert-dark text-center">K-Market Member List</h2>
    
    <div class="text-right">
        <a class="btn bg-light pull-right" href="{{ route('ownerlist.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create new Owner</a>
    </div>

    <h6 class="badge rounded-pill bg-dark">Owner List from K-Market:</h6>

    <br>

    <table class="table table-dark table-striped">
        <tr>
          <th>No</th>
          <th>Code</th>
          <th>Owner</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Contact Person</th>
          <th>Description</th>
          <th class="text-center">Actions</th>
        </tr>
        @php $index = 1 @endphp
        @foreach ($owners as $own)
            <tr>
            <th scope="row">{{ $index }}</th>
            @php $index++ @endphp
            <td> {{ $own['owner_code']}} </td>
            <td> {{ $own['fullname']}} </td>
            <td> {{ $own['age']}} </td>
            <td> {{ $own['gender']}} </td>
            <td> {{ $own['contactperson']}} </td>
            <td> {{ $own['description']}} </td>
                <td class="text-center">
                <form action="{{ route('ownerlist.destroy',$own['owner_code']) }}" action method="POST">
                    <a class="btn bg-light" href="{{ route('ownerlist.show', $own['owner_code']) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
  </div>

@endsection