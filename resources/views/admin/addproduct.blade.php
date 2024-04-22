@extends('admin.layouts.template')
@section('page_title')
Add Product - Thrift
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Product</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Product</h5>
                </div>
                <form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name"
                                placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                placeholder="12" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                placeholder="1000" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Short Description</label>
                            <textarea class="form-control" id="product_short_des" name="product_short_des" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Product Long Description</label>
                            <textarea class="form-control" id="product_long_des" name="product_long_des" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Select Category</label>
                            <select class="form-select" id="product_category_id" name="product_category_id"
                                aria-label="Default select example">
                                <option selected>Select Product Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Select Sub Category</label>
                            <select class="form-select" id="product_subcategory_id" name="product_subcategory_id"
                                aria-label="Default select example">
                                <option selected>Select Product Sub Category</option>
                                @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Upload Product Image</label>
                            <input type="file" class="form-control" id="product_img" name="product_img" />
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection