@extends('layout.mainlayout')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="alert alert-dark text-center">Create your Store</h1>
            <!-- Content Row -->
            <div class="">
                <form action="{{ route('storelist.store') }}" method="POST">
                    @csrf
                        <div class="row">
                          <div class="col">
                            <label>Store Name </label>
                            <input type="text" class="form-control" placeholder="Enter Store Name" name="store" required>
                          </div>
                          <div class="col">
                            <label>Store Founded on </label>
                            <input type="date" class="form-control" placeholder="Founded on" name="datestore">
                          </div>
                        </div>
                    <br>
                    <div class="col form-group">
                        <label>Type of Store:</label>
                        <select name="typestore" class="form-select">
                            <option value="Food">Food</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Gadget">Gadget</option>
                            <option value="OnlineGames">Online Games / Diamond</option>
                        </select>
                    </div>
                    <br>
                    <div class="col form-group">
                        <label>Owner:</label>
                        <select name="owner_code" class="form-select">
                            @foreach ($owners as $own)
                                <option value="{{ $own['owner_code'] }}">{{ $own['fullname'] }}</option>  
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Description Store </label>
                        <input type="text" class="form-control" placeholder="Describe Your Store" name="description" required>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn bg-light">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
