@extends('layout.mainlayout')

@section('main_content')

<div class="container">
    <div class="row justify-content-center">
        <h1 class="alert alert-dark text-center">Fill your Identity</h1>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('ownerlist.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Full Name: </label>
                    <input type="text" class="form-control" placeholder="Enter Full Name" name="fullname" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Contact Person: </label>
                    <input type="text" class="form-control" placeholder="Enter Contact Person" name="contactperson" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Age: </label>
                    <input type="text" class="form-control" placeholder="Enter Your Age" name="age" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Gender:</label>
                    <select name="gender" class="form-select">
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Description of Yourself: </label>
                    <input type="text" class="form-control" placeholder="Enter Description" name="description" required>
                </div>
                <br>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn bg-light">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection