@extends('layout.mainlayout')

@section('main_content')

<div class="container mt-3">
    <h2 class="alert alert-dark text-center">K-Market Store List</h2>
    
    <div class="text-right">
        <a class="btn bg-light pull-right" href="{{ route('storelist.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Store</a>
    </div>

    <h6 class="badge rounded-pill bg-dark text-center">Store List from K-Market:</h6>

    <br>

    <table class="table table-dark table-striped">
        <tr>
          <th>No</th>
          <th>Code</th>
          <th>Store</th>
          <th>Owner</th>
          <th>Description</th>
          <th class="text-center">Actions</th>
        </tr>
        @php $index = 1 @endphp
        @foreach ($stores as $sto)
            <tr>
            <th scope="row">{{ $index }}</th>
            @php $index++ @endphp
            <td> {{ $sto['code']}} </td>
            <td> {{ $sto['store']}} </td>
            <td> {{ $sto->ownerforeign->fullname}} </td>
            <td> {{ $sto['description']}} </td>
                <td class="text-center">
                <form action="{{ route('storelist.destroy', $sto->id) }}" action method="POST">
                    <a class="btn bg-light" href="{{ route('storelist.show', $sto->code) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
  </div>

@endsection