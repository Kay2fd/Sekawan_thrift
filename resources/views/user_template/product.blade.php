@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="box_main">
                <div class="tshirt_img"><img src="{{ asset($product->product_img) }}"></div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_main">
                <div class="product-info">
                    <h4 class="shirt_text">{{$product->product_name}}</h4>
                    <p class="price_text">Price: <span style="color: #262626;">${{$product->price}}</span></p>
                </div>
                <div class="my-3 product-details">
                    <p class="lead">{{$product->product_short_des}} </p>
                    <ul class="py-2 bg-light">
                        <li>Category: {{$product->product_category_name}}</li>
                        <li>Sub Category: {{$product->product_subcategory_name}}</li>
                        <li>Available Quantity: {{$product->quantity}}</li>
                    </ul>
                </div>

                <div class="btn_main">
                    <form action="{{route('addproducttocart')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <div class="form-group">
                            <input type="hidden" value="{{$product->price}}" name="price">
                            <label for="quantity">Amount</label>
                            <input class="form-control" type="number" min="1" placeholder="1" name="quantity">
                        </div>
                        <br>
                        <input class="btn btn-warning" type="submit" value="Add To Cart">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="container">
                <h1 class="fashion_taital">Related Products</h1>
                <div class="fashion_section_2">
                    <div class="row">
                        @foreach ($related_products as $relatedProduct)
                        <div class="col-lg-4 col-sm-4">
                            <div class="box_main">
                                <h4 class="shirt_text">{{$relatedProduct->product_name}}</h4>
                                <p class="price_text">Price: <span
                                        style="color: #262626;">${{$relatedProduct->price}}</span></p>
                                <div class="tshirt_img"><img src="{{ asset($relatedProduct->product_img) }}"></div>
                                <div class="btn_main">
                                    <div class="buy_bt">
                                        <form action="{{route('addproducttocart')}}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{$product->id}}" name="product_id">
                                            <input type="hidden" value="{{$product->price}}" name="price">
                                            <input type="hidden" value="1" name="quantity">
                                            <br>
                                            <input class="btn btn-warning" type="submit" value="Add To Cart">
                                        </form>
                                    </div>
                                    <div class="seemore_bt"> <a
                                            href="{{ route('singleproduct', [$relatedProduct->id, $relatedProduct->slug]) }}">See
                                            More</a> </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection