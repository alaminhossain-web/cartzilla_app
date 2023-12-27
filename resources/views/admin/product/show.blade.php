@extends('admin.master')

@section('title','Product Detail')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Product Detail Information</h3>
                </div>
                <div class="table-responsive export-table">
                    <div class="card-body">
                        <table class="table table-bordered table-hover" >
                            <tr>
                                <th>Product Id</th>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{ $product->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Sub</th>
                                <td>{{ $product->subCategory->name }}</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>{{ $product->brand->name }}</td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td>{{ $product->unit->name }}</td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>
                                    @foreach ($product->colors as $color)
                                        <span>{{ $color->color->name }},</span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Size</th>
                                <td>
                                    @foreach ($product->sizes as $size)
                                    <span>{{ $size->size->name }},</span>
                                @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td>
                                    <img src="{{ asset($product->image) }}" alt="" height="100" width="100"> 
                                </td>
                            </tr>
                            <tr>
                                <th>Product Other Image</th>
                                <td>
                                    @foreach ($product->productImages as $productImage)
                                    <img src="{{ asset($productImage->image) }}" alt="" height="100" width="100" class="ps-3">
                                @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ $product->short_description }}</td>
                            </tr>
                            <tr>
                                <th>Long Description</th>
                                <td>{!! $product->long_description !!}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>
                                    <span>Regular Price : {{ $product->regular_price }}</span> <br />
                                    <span>Selling Price : {{ $product->selling_price }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Stock Amount</th>
                                <td>{{ $product->stock_amount }}</td>
                            </tr>
                            <tr>
                                <th>Total View</th>
                                <td>{{ $product->hit_count }}</td>
                            </tr>
                            <tr>
                                <th>Total Sale</th>
                                <td>{{ $product->sales_count }}</td>
                            </tr>
                            <tr>
                                <th>Featured Status</th>
                                
                                    <td>{{ $product->featured_status == 1 ? 'Featured' : 'Not Featured' }}</td>
                            
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td>{{ $product->status == 1 ? 'Published' : 'Not Published' }}</td>
                            </tr>
                            
                            
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection
