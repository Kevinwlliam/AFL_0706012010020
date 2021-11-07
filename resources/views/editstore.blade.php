@extends('layout.mainlayout')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Edit your Store</h1>
            <!-- Content Row -->
            <div class="">
                <form action="{{ route('storelist.update', $store['id']) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                        <div class="row">
                          <div class="col">
                            <label>Store Name </label>
                            <input type="text" class="form-control" placeholder="Enter Store Name" name="store" value="{{ $store->store }}" required>
                          </div>
                          <div class="col">
                            <label>Store Founded on </label>
                            <input type="date" class="form-control" placeholder="Founded on" name="datestore" value="{{ $store->datestore }}">
                          </div>
                        </div>
                    <br>
                    <div class="col form-group">
                        <label>Type of Store:</label>
                        <select name="typestore" class="form-select">
                            <option hidden value="{{ $store->typestore }}">
                                {{ $store->typestore }}
                            </option>
                            <option value="Food">Food</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Gadget">Gadget</option>
                            <option value="OnlineGames">Online Games / Diamond</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label>Owner:</label>
                        <select name="owner_code" class="form-select">
                            @foreach ($owner as $own)
                                <option value="{{ $own['owner_code'] }}">{{ $own['fullname'] }}</option>  
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Description Store </label>
                        <input type="text" class="form-control" placeholder="Describe Your Store" name="description" value="{{ $store->description }}" required>
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection