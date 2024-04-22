@extends('admin.layouts.template')
@section('page_title')
Edit Product Image - Thrift
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Product Image</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Product Image</h5>
                </div>
                <form action="{{route('updateproductimg') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Previous Image</label>
                            <div class="col-sm-10">
                                <img src="{{ asset($productinfo->product_img) }}" alt="">
                            </div>
                        </div>

                        <input type="hidden" value="{{$productinfo->id}}" name="id">

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Upload New Image</label>
                            <input type="file" class="form-control" id="product_img" name="product_img" />
                        </div>
                        <button type="submit" class="btn btn-primary">Update Product Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
