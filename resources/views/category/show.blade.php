<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="show-table">
                    <thead>
                    <tr>
                        <th class="col-6">ID</th>
                        <th class="col-6">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{--<!--Script-->--}}
{{--<script>--}}
{{--    function showPharmacyModal(event) {--}}
{{--        var pharmacyId = event.target.id;--}}
{{--            $.ajax({--}}
{{--                url: "".replace(':id', pharmacyId),--}}
{{--                method: "GET",--}}
{{--                success: function(response) {--}}
{{--                    $('#pharmacyAvatar').attr("src","{{ asset('storage/pharmacies_Images/image') }}".replace('image', response.pharmacy.avatar_image));--}}
{{--                    $('#pharmacyID').text(response.pharmacy.id);--}}
{{--                    $('#pharmacyName').text(response.pharmacy.pharmacy_name);--}}
{{--                    $('#pharmacyOwnerName').text(response.user.name);--}}
{{--                    $('#pharmacyOwnerEmail').text(response.user.email);--}}
{{--                    $('#pharmacyPriority').text(response.pharmacy.priority)--}}
{{--                    $('#pharmacyArea').text(response.areas.find(area=>area.id === response.pharmacy.area_id).name)--}}
{{--                }--}}
{{--            });--}}
{{--    }--}}
{{--</script>--}}


