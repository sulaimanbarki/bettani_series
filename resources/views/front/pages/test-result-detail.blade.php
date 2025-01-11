@extends('front/layout/layout')
@section('content')
@section('title', 'Tests')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">

<main id="content">
    <div class="py-3 py-lg-7">
        <h6 class="font-weight-medium font-size-7 text-center my-1">{{ $test->title }} result</h6>
    </div>
    <div class="container">
    
        <form action="" id="filter_form">
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <div class="form-group">
                        <input type="hidden" name="test_id" value="{{ $test->id }}">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Select Gender Filter</option>
                            {{-- male --}}
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>

                @if ($test->province_result)
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="province">Province</label>
                            <select name="province" id="province" onchange="fetchDistricts(this.value)"
                                class="form-control" required>
                                <option value="">Select Province</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                @endif

                @if ($test->zone_result)
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="zone">Zone</label>
                            <select name="zone" id="zone" class="form-control" required>
                                <option value="">Select zone</option>
                                <option value="1">Zone 1</option>
                                <option value="2">Zone 2</option>
                            </select>
                        </div>
                    </div>
                @endif

                @if ($test->district_result)
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="district">District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="">Select District</option>
                                <option value="Peshawar">Peshawar</option>
                            </select>
                        </div>
                    </div>
                @endif

                <div class="col-md-2">
                    <div class="form-group">
                        {{-- apply filter --}}
                        <button type="button" onclick="apply_filter()" class="btn btn-primary mt-5 btn-block">Apply
                            Filter</button>
                    </div>
                </div>

            </div>
        </form>
        <script type="text/javascript">
            	atOptions = {
            		'key' : '8289a9236ddcfa77abaf7c470e453b65',
            		'format' : 'iframe',
            		'height' : 60,
            		'width' : 468,
            		'params' : {}
            	};
            	document.write('');
            </script>
        <style>
            @media (max-width: 767px) {
                .col {
                    width: 100% !important;
                }
            }
        </style>

        <div class="row mb-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tbody id="body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>



@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('.table-bordered').DataTable({
            "paging": false,
            "ordering": true,
            "info": false,
            "searching": true
        });
    });

    function apply_filter() {
        // ajax post request to result_filter route
        // ajax setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ route('result_filter') }}',
            type: 'POST',
            data: $('#filter_form').serialize(),
            success: function(data) {
                // destroy table
                $('.table-bordered').DataTable().destroy();
                var html = '';
                $.each(data, function(key, value) {
                    html += '<tr>';
                    html += '<td>' + value.sno + '</td>';
                    html += '<td>' + value.name + '</td>';
                    html += '<td>' + value.fname + '</td>';
                    html += '<td>' + value.marks + '</td>';
                    html += '</tr>';
                });
                $('#body').html(html);
                $('.table-bordered').DataTable({
                    "paging": false,
                    "ordering": true,
                    "info": false,
                    "searching": true,
                    // default order = false
                    "order": []
                });
            }
        });
    }

    // fetchDistricts
    function fetchDistricts(province_id) {
        $.ajax({
            url: '/fetch-districts/' + province_id,
            type: 'GET',
            success: function(data) {
                let districts = data[0];
                let zones = data[1];

                var html = '';
                html += '<option value="">Select District</option>';
                $.each(districts, function(key, value) {
                    html += '<option value="' + value.id + '">' + value.district_name + '</option>';
                });
                $('#district').html(html);

                var html2 = '';
                html2 += '<option value="">Select Zone</option>';
                $.each(zones, function(key, value) {
                    html2 += '<option value="' + value.id + '">' + value.name + '</option>';
                });
                $('#zone').html(html2);
            }
        });
    }
</script>

@stop
