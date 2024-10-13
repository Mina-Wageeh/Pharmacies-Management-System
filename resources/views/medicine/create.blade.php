@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Add A New Medicine</h3>
                <form  method="POST" action="{{ route('medicine.store') }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <input name="medicine_name" type="text" class="form-control" id="" placeholder="Name">
                        @error('medicine_name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="medicine_code" type="text" class="form-control" id="" placeholder="Code">
                        @error('medicine_code')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="medicine_price" type="text" class="form-control" id="" placeholder="Price">
                        @error('medicine_price')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="medicine_quantity"  min="0" max="1000" type="number" class="form-control" id="" placeholder="Quantity">
                        @error('medicine_quantity')
                           <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select name="category_id" class="custom-select text-muted">
                            <option selected>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <input name="branch_id" value="" type="text" class="form-control text-muted" readonly>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
