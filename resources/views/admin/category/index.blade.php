@extends('admin.master')

@section('title', 'Manage Category Page')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Manage Category</h3>
                </div>
                <div class="table-responsive export-table">
                    <div class="card-body">
                        <table class="table " id="file-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <span class="text-success"> {{ session('success') }} </span>
    
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <img src="{{ asset($category->image) }}" alt="" style="height: 50px">
                                        </td>
                                        <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>

                                        <td class="d-flex">
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="btn btn-secondary "><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('category.destroy', $category->id) }}" method="post" id="deleteItem">
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
