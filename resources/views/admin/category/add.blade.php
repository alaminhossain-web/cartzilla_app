@extends('admin.master')

@section('title','Add Category Page')

@section('body')
<div class="page-header">
    <div>
        <h1 class="page-title">Category Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Category</li>
        </ol>
    </div>
</div>
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Add Category Page</h3>
                </div>
                <div class="card-body">
                    <span class="text-success"> {{ session('success') }} </span>
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description"  cols="10" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image"  class="dropify" accept="image/*">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label ><input type="radio" name="status"  value="1"><span>Published</span></label>
                                    <label class="ms-3"><input type="radio" name="status"  value="0"><span>Unpublished</span></label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="image" class="btn btn-success">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection