@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Add A New Branch</h3>
                <form  method="POST" action="{{ route('branch.store') }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <input name="branch_name" type="text" class="form-control" id="" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input name="branch_phone" type="text" class="form-control" id="" placeholder="Phone">
                    </div>
                    <div class="mb-3">
                        <input name="branch_address" type="text" class="form-control" id="" placeholder="Address">
                    </div>
                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
