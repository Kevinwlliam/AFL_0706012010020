@extends('layout.mainlayout')

@section('main_content')

<div class="container">
    <div class="row justify-content-center">
        <h1>Fill your Identity</h1>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('ownerlist.update', $owner['owner_code']) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Full Name: </label>
                    <input type="text" class="form-control" name="fullname" value="{{ $owner->fullname }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Contact Person: </label>
                    <input type="text" class="form-control" name="contactperson" value="{{ $owner->contactperson }}" required>
                </div>
                <div class="form-group">
                    <label>Age: </label>
                    <input type="text" class="form-control" name="age" value="{{ $owner->age }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Gender:</label>
                    <select name="gender" class="form-select">
                        <option hidden value="{{ $owner->gender }}">
                            {{ $owner->gender }}
                        </option>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Description of Yourself: </label>
                    <input type="text" class="form-control" name="description" value="{{ $owner->description }}" required>
                </div>
                <br>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection