@extends('admin.layouts.template')

@section('page_title')
Add Sub Category - Thrift
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Sub Category</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Sub Category</h5>
                </div>
                <form action="{{ route('storesubcategory') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="subcategory_name">Sub Category Name</label>
                            <input type="text" class="form-control" id="subcategory_name" name="subcategory_name"
                                placeholder="Sub Category Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Select Category</label>
                            <select class="form-select" id="category_id" name="category_id"
                                aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-15">
                                <button type="submit" class="btn btn-primary">Add Sub Category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection