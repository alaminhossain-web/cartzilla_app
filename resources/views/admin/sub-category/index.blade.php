@extends('admin.master')

@section('title', 'Manage Category Page')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Sub Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Sub Category</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Manage Sub Category</h3>
                </div>
                <div class="table-responsive export-table">
                    <div class="card-body">
                        <table class="table " id="file-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>    
                                @foreach ($sub_categories as $sub_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_category->category->name }}</td>
                                        <td>{{ $sub_category->name }}</td>
                                        <td>{{ $sub_category->description }}</td>
                                        <td>
                                            <img src="{{ asset($sub_category->image) }}" alt="" style="height: 50px">
                                        </td>
                                        <td>{{ $sub_category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('sub-category.edit', $sub_category->id) }}"
                                                class="btn btn-secondary "><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('sub-category.destroy', $sub_category->id) }}" method="post" id="deleteItem">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn  btn-danger ms-2 delete-item"><i class="fa fa-trash"></i></button>
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
