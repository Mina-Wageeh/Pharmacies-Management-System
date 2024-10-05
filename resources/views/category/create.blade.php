@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Add A New Category</h3>
                <form  method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input name="category_name" type="text" class="form-control" id="" placeholder="Name">
                    </div>

                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
