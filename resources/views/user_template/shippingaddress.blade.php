@extends('user_template.layouts.template')
@section('main-content')
<h2>Shipping Address Page</h2>
<div class="row">
    <div class="col-12">
        <div class="box_main">
        <form action="{{route('addshippingaddress')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" id="">
            </div>

            <div class="form-group">
                <label for="city_name">City/Village Name</label>
                <input type="text" class="form-control" name="city_name" id="">
            </div>

            <div class="form-group">
                <label for="postal_code">Postal Code</label>
                <input type="text" class="form-control" name="postal_code" id="">
            </div>

            <input type="submit" value="Next" name="" id="" class="btn btn-primary">
        </form>
        </div>
    </div>
</div>
@endsection()