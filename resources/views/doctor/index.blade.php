@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('doctor.create')}}" type="button" class="btn btn-success rounded w-100 col-12">Create New Doctor</a>
            </div>
            @include('doctor.show')
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
                var doctor_id = $(this).attr('doctor_id')
                var parent = $(this).parent().parent().parent();
                $.ajax({
                    type: 'post',
                    url: '{{route('doctor.delete')}}',
                    data:
                        {
                            '_token' : '{{csrf_token()}}',
                            'doctor_id' : doctor_id
                        },
                    success : function(data)
                    {
                        parent.fadeOut(500);
                    }
                })
            })
        })
    </script>
@endsection
