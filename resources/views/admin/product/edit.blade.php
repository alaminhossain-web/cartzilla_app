@extends('admin.master')

@section('title','Edit Product Page')

@section('body')
<div class="page-header">
    <div>
        <h1 class="page-title">Product Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
        </ol>
    </div>
</div>
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Edit Product Info</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="row">
                            <label for="" class="col-md-3">Category Name</label>
                            <div class="col-md-9 form-group">
                                <select class=" form-control select2-show-search form-select" onchange="setSubCategory(this.value)" name="category_id" >
                                    <option disabled selected >--Select Category--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Sub Category Name</label>
                            <div class="col-md-9 form-group">
                                <select class=" form-control select2-show-search form-select" id="subCategoryId"  name="sub_category_id">
                                    <option disabled selected >--Select Sub Category--</option>
                                    @foreach ($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}" @selected($sub_category->id == $product->sub_category_id)>{{ $sub_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Brand</label>
                            <div class="col-md-9 form-group">
                                <select class=" form-control select2-show-search form-select" name="brand_id">
                                    <option disabled selected >--Select Brand--</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"  @selected($brand->id == $product->brand_id)>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Unit</label>
                            <div class="col-md-9 form-group">
                                <select class=" form-control select2-show-search form-select" name="unit_id">
                                    <option disabled selected >--Select Unit--</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}"  @selected($unit->id == $product->unit_id)>{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Color</label>
                            <div class="col-md-9 form-group">
                                <select multiple class=" form-control select2-show-search form-select" name="colors[]" data-placeholder="Choose Color">
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}" @foreach($product->colors as $singleColor) @selected($color->id == $singleColor->color_id)  @endforeach>{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Size</label>
                            <div class="col-md-9 form-group">
                                <select multiple class=" form-control select2-show-search form-select" name="sizes[]" data-placeholder="Choose Size">

                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}"  @foreach($product->sizes as $singleSize) @selected($size->id == $singleSize->size_id)  @endforeach>{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                                <label for="" class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3">Product Code</label>
                                <div class="col-md-9">
                                    <input type="text" name="code" value="{{ $product->code }}"class="form-control" placeholder="Product Code">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3">Short Description</label>
                                <div class="col-md-9">
                                    <textarea name="short_description"  cols="10" rows="3" class="form-control" placeholder="Short Description">{{ $product->short_description }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3">Long Description</label>
                                <div class="col-md-9">
                                    <textarea name="long_description" id="summernote" rows="3" class="form-control" placeholder="Long Description">{!! $product->long_description !!}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image"  class="dropify" data-default-file="{{ asset($product->image) }}" accept="image/*">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3">Other Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="other_images[]" accept=" image/*" multiple />
                                    @foreach($product->productImages as $productImage) 
                                    <img src="{{ asset($productImage->image) }}" alt="nvbn" height="100" width="100">  
                                    @endforeach
                                    
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-3">Product Price</label>
                                <div class="col-md-9 input-group">
                                    <input type="number" name="regular_price" class="form-control" value="{{ $product->regular_price }}" placeholder="Regular Price">
                                    <input type="number" name="selling_price" class="form-control" value="{{ $product->selling_price }}" placeholder="Selling Price">
                                </div>
                            </div>
                           
                            <div class="row mt-3">
                                <label for="" class="col-md-3">Stock Amount</label>
                                <div class="col-md-9">
                                    <input type="number" name="stock_amount" class="form-control" value="{{ $product->stock_amount }}" placeholder="Stock Amount">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label ><input type="radio" name="status" {{ $product->status == 1 ? 'checked' : '' }}  value="1"><span>Published</span></label>
                                <label ><input type="radio" name="status" {{ $product->status == 0 ? 'checked' : '' }} value="0"><span>Unpublished</span></label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Create Product">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection