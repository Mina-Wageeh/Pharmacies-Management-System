@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('inv_medicine.create')}}" type="button" class="btn btn-success rounded w-100 col-12">Add Medicine To Inventory</a>
            </div>
            @include('inv_medicine.show')
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function()
        {
            $(document).on('click' , '.delete-btn' , function(e)
            {
                e.preventDefault()
                var inv_medicine_id = $(this).attr('inv_medicine_id')
                var parent = $(this).parent().parent().parent();
                $.ajax({
                    type: 'post',
                    url: '{{route('inv_medicine.delete')}}',
                    data:
                        {
                            '_token' : '{{csrf_token()}}',
                            'inv_medicine_id' : inv_medicine_id
                        },
                    success : function(data)
                    {
                        parent.fadeOut(500);
                    }
                })
            })
        });
    </script>
@endsection
