@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('inv_medicine.create')}}" type="button" class="btn btn-success rounded w-100 col-12">Add Medicine To Inventory</a>
            </div>
            @include('inv_medicine.show')
            @include('inv_medicine.select_number')
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
            }),


            $(document).on('click' , '.send-to-branch' , function(e)
            {
                e.preventDefault()

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
            }),



            $(document).on('click' , '.increment-btn' , function(e)
            {
                e.preventDefault();

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

                var inv_medicine_quantity = $(this).attr('inv_medicine_quantity');
                var qty_input = $('.qty-input').val();
                var value = parseInt(qty_input);
                value = isNaN(value) ? 0 : value;
                if(value < inv_medicine_quantity)
                {
                    value++;
                    $('.qty-input').val(value);
                }
                else if(value > inv_medicine_quantity)
                {
                    $('.qty-input').val(inv_medicine_quantity);
                }
            })

            $(document).on('click' , '.decrement-btn' , function(e)
            {
                e.preventDefault();
                var qty_input = $('.qty-input').val();
                var value = parseInt(qty_input);
                value = isNaN(value) ? 0 : value;
                if(value > 0)
                {
                    value--;
                    $('.qty-input').val(value);
                }
            })



        });
    </script>
@endsection
