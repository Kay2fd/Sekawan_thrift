@extends('admin.layouts.template')
@section('content')
<div class="container">
    <div class="card">
        <div class="cardr-body">
            <table class="table">
                <tr>
                    <th>User Id</th>
                    <th>Shipping Address</th>
                    <th>Product Id</th>
                    <th>Quantity</th>
                    <th>Total Will Pay</th>
                    <th>Action</th>
                </tr>
                @foreach ($pending_orders as $order)
                <tr>
                    <td>{{$order->userid}}</td>
                    <td>
                        <ul>
                            <li>Phone Number - {{$order->shipping_phoneNumber}}</li>
                            <li>City - {{$order->shipping_city}}</li>
                            <li>Postal Code - {{$order->shipping_postalcode}}</li>
                        </ul>
                    </td>
                    <td>{{$order->product_id}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->total_price}}</td>
                    <td><a href="" class="btn btn-success">Approv Now</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection