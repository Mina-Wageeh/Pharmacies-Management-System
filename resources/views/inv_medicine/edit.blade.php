@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Edit Medicine Info</h3>
                <form  method="POST" action="{{ route('medicine.update' , $medicine->id) }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <input name="medicine_name" type="text" class="form-control" value="{{$medicine->name}}">
                    </div>
                    <div class="mb-3">
                        <input name="medicine_code" type="text" class="form-control text-muted" value="Code : {{$medicine->code}}" readonly>
                    </div>
                    <div class="mb-3">
                        <input name="medicine_price" type="text" class="form-control" value="{{$medicine->price}}">
                    </div>
                    <div class="mb-3">
                        <input name="medicine_quantity"  min="1" max="1000" type="number" class="form-control" value="{{$medicine->quantity}}">
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <select name="category_id" class="custom-select text-muted">--}}
{{--                            <option selected>Select Category</option>--}}
{{--                            @foreach($categories as $category)--}}
{{--                                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-primary col-md-12">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
