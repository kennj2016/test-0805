@extends('layout.master')

@section('content')

    <h2>Add a Contact</h2>



    <form method="post" action="/" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="first_name_id" class="col-sm-3 col-form-label">First name</label>
            <div class="col-sm-9">
                <input name="first_name" type="text" class="form-control" id="first_name_id" placeholder="first name" required
                       value="{{ old('first_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="middle_name_id" class="col-sm-3 col-form-label">Middle name</label>
            <div class="col-sm-9">
                <input name="middle_name" type="text" class="form-control" id="middle_name_id" placeholder="middle name" required
                       value="{{ old('middle_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name_id" class="col-sm-3 col-form-label">Last name</label>
            <div class="col-sm-9">
                <input name="last_name" type="text" class="form-control" id="last_name_id" placeholder="last name" required
                       value="{{ old('last_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="address_1_id" class="col-sm-3 col-form-label">Address 1</label>
            <div class="col-sm-9">
                <input name="address_1" type="text" class="form-control" id="address_1_id" placeholder="" required
                       value="{{ old('address_1') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="address_2_id" class="col-sm-3 col-form-label">Address 2</label>
            <div class="col-sm-9">
                <input name="address_2" type="text" class="form-control" id="address_2_id" placeholder=""
                       value="{{ old('address_2') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="phone_number_id" class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-9">
                <input name="phone_number" type="text" class="form-control" id="phone_number_id" placeholder=""
                       value="{{ old('phone_number') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-3">
                <button type="submit" class="btn btn-primary">Submit contact</button>
                <a href="/" class="btn btn-default">Back</a>
            </div>


        </div>
        @include('partials.formerrors')
    </form>

@endsection
