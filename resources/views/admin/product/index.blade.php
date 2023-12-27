@extends('admin.master')

@section('title', 'Manage Product Page')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Manage Product</h3>
                </div>
                <div class="table-responsive export-table">
                    <div class="card-body">
                        <table class="table " id="file-datatable">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Categry</th>
                                    <th>Image</th>
                                    <th>Stock Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->category->name }}</td>

                                        <td>
                                            <img src="{{ asset($product->image) }}" alt="" style="height: 50px">
                                        </td>
                                        <td>{{ $product->stock_amount }}</td>

                                        <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>

                                        <td class="d-flex">
                                            <a href="{{ route('product.show', $product->id) }}"
                                                class="btn btn-primary btn-sm "><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-secondary btn-sm ms-2"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="post" id="deleteItem">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn  btn-danger btn-sm ms-2 delete-item"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
@endsection
