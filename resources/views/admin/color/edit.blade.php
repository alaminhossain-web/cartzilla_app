@extends('admin.master')

@section('title','Edit Color Page')

@section('body')
<div class="page-header">
    <div>
        <h1 class="page-title">Color Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Color</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Color</li>
        </ol>
    </div>
</div>
<div class="row py-5">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-light">
                <h3 class="card-title">Edit Color Form</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('color.update',$color->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <div class="row">
                            <label for="" class="col-md-4">Color Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $color->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Color Code</label>
                            <div class="col-md-8">
                                <input type="color" name="code" value="{{ $color->code }}" class="form-control p-0 wpx-30">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description"  cols="10" rows="3" class="form-control">{{ $color->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label ><input type="radio" name="status" {{ $color->status == 1 ? 'checked' : '' }}  value="1"><span>Published</span></label>
                                <label ><input type="radio" name="status" {{ $color->status == 0 ? 'checked' : '' }} value="0"><span>Unpublished</span></label>
                                
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection