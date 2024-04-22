@extends('admin.layouts.template')
@section('page_title')
Edit Product - Thrift
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Product</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Product</h5>
                </div>
                <form action="{{route('updateproduct')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$productinfo->id}}" name="id">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name"
                                value="{{$productinfo->product_name}}" />
                        </div>                        
                        
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{$productinfo->price}}" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                value="{{$productinfo->quantity}}" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Short Description</label>
                            <textarea class="form-control" id="product_short_des" name="product_short_des" cols="30"
                                rows="10">{{$productinfo->product_short_des}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Long Description</label>
                            <textarea class="form-control" id="product_long_des" name="product_long_des" cols="30"
                                rows="10">{{$productinfo->product_long_des}}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
