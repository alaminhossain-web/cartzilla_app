@extends('admin.master')

@section('title','Manage Unit Page')

@section('body')

<div class="page-header">
    <div>
        <h1 class="page-title">Unit Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Unit</li>
        </ol>
    </div>
</div>
<div class="row row-sm">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header bg-light">
                <h3 class="card-title">Manage Unit</h3>
            </div>
            <div class="table-responsive export-table">
                <div class="card-body">
                    <table class="table" id="file-datatable example3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $unit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $unit->name }}</td>
                                    <td>{{ $unit->code }}</td>
                                    <td>{{ $unit->description }}</td>
                                    <td>{{ $unit->status == 1 ? 'Published' : 'Unpublished' }}</td>

                                    <td class="d-flex">
                                        <a href="{{ route('unit.edit', $unit->id) }}"
                                            class="btn btn-secondary "><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('unit.destroy', $unit->id) }}" method="post" id="deleteItem">
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