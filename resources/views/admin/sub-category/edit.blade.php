@extends('admin.master')

@section('title','Edit Sub Category Page')

@section('body')
    

 <!-- PAGE-HEADER -->
 <div class="page-header">
    <div>
        <h1 class="page-title">Sub Category Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Sub Category</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Edit Sub Category Form</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('sub-category.update',$sub_category->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <label class="col-md-3">Category Name</label>
                        <div class="col-md-9 form-group">
                            <select class=" form-control select2" name="category_id">
                                <option disabled selected >--Select Category--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"{{ $sub_category->category_id == $category->id ?'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="col-md-3">Sub Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{ $sub_category->name }}" class="form-control" placeholder="Sub Category Name" />
                                </div>
                    </div>
                    <div class="row mt-4">
                        <label for="" class="col-md-3">Sub Category Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control mb-4" name="description" placeholder="Sub Category Description" rows="3" >{{ $sub_category->description }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="col-md-3">Sub Category Image</label>
                        <div class="col-md-6 ">
                            <input type="file" name="image" class="dropify" data-default-file="{{ asset($sub_category->image) }}"  >
                        </div>
                    </div>
                    <div class="row mt-4">
                        <label for="" class="col-md-3 ">Publication Status</label>
                        <div class="col-md-9 ">
                            <label>
                                <input type="radio" name="status" value="1" {{ $sub_category->status == 1 ? 'checked' : '' }} ><span>Published</span></label>
                            <label>
                                <input type="radio" name="status" value="0" {{ $sub_category->status == 0 ? 'checked' : '' }} ><span>Unpublished</span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success rounded-0" value="Update Sub Category">
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection