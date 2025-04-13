@extends('front/layout/layout')

@section('meta_description', $metaData['test']['meta_description'] ?? $defaultMeta['meta_description'])
@section('meta_keywords', $metaData['test']['meta_keywords'] ?? $defaultMeta['meta_keywords'])

@section('content')
@section('title', 'Tests')
<main id="content">
    <div class="py-3 py-lg-7">
        <h6 class="font-weight-medium font-size-7 text-center my-1">Tests</h6>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h4>Upcomming Tests</h4>
                @if (count($upcoming) > 0)
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 30%">Test Name</th>
                                <th>Test Date</th>
                                {{-- <th>Test Time</th> --}}
                                <th class="announced-col">Announced</th>
                                <th>Last</th>
                                {{-- <th>Test Fee</th> --}}
                                <th>Apply</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($upcoming as $test)
                                <tr>
                                    <td>{{ $test->title }}</td>
                                    <td>{{ date('d/m/Y h:i A', strtotime($test->date)) }}</td>
                                    <td class="announced-col">{{ date('d/m/Y', strtotime($test->announce_date)) }}</td>
                                    <td>{{ date('d/m/Y', strtotime($test->last_date)) }}</td>
                                    <td>
                                        @if (date('Y-m-d', strtotime($test->date)) == date('Y-m-d'))
                                            <button href="#"
                                                class="btn btn-primary btn-sm border border-light {{ $test->enabled ? 'btn-success' : 'btn-secondary' }}"
                                                onclick="testStart({{ $test->id }})"
                                                @if (!$test->enabled) disabled @endif>Start Test</button>
                                        @else
                                            <button class="btn btn-primary btn-sm border border-light"
                                                onclick="testApplyModal({{ $test->id }}, {{ $test->ispaid }})">Apply</button>
                                        @endif

                                        <button class="btn btn-primary btn-sm border border-light"
                                            onclick="printSlipModal({{ $test->id }})">Download Slip</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                @else
                    <div class="alert alert-info">
                        No Upcomming Test
                    </div>

                @endif
            </div>
            
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
            
            <div class="col-md-12">
                <h4>Previous Tests</h4>
                @if (count($done) > 0)
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 30%">Test Name</th>
                                <th>Test Date</th>
                                {{-- <th>Test Time</th> --}}
                                <th class="announced-col">Announced</th>
                                <th>Last</th>
                                {{-- <th>Test Fee</th> --}}
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($done as $test)
                                <tr>
                                    <td>{{ $test->title }}</td>
                                    <td>{{ date('d/m/Y h:i A', strtotime($test->date)) }}</td>
                                    <td class="announced-col">{{ date('d/m/Y', strtotime($test->announce_date)) }}</td>
                                    <td>{{ date('d/m/Y', strtotime($test->last_date)) }}</td>
                                    {{-- <td>{{$test->test_status}}</td> --}}
                                    <td>
                                        @if ($test->individual_result)
                                            <button href="test-result/details/{{ base64_encode($test->id) }}"
                                                onclick="launch_result_modal('{{ $test->id }}')"
                                                class="btn btn-primary btn-sm mt-1">Result</button>
                                        @endif

                                        @if ($test->overall_result)
                                            <a href="test-result/overall/{{ base64_encode($test->id) }}"
                                                class="btn btn-primary btn-sm mt-1">Overall Result</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                @else
                    <div class="alert alert-info">
                        No Previous Test
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

<style>
    /* announced-col, on mobile screen hide the above coloumn */
    @media (max-width: 767px) {
        .announced-col {
            display: none;
        }
    }
</style>

{{-- testApplyModal --}}
<div class="modal fade" id="testApplyModal" tabindex="-1" role="dialog" aria-labelledby="testApplyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testApplyModalLabel">Apply for Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('testapplies.store') }}" method="POST" enctype="multipart/form-data">
                    {{-- <form action="" method="POST"> --}}
                    @csrf
                    <input type="hidden" name="test_id" id="test_id">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Enter your name" required>
                    </div>
                    {{-- fname --}}
                    <div class="form-group">
                        <label for="fname">Father's Name</label>
                        <input type="text" name="fname" id="fname" class="form-control"
                            placeholder="Enter your father's name" required>
                    </div>
                    <div class="form-group">
                        <label for="cnic">CNIC (without dashes)</label>
                        <input type="text" name="cnic" id="cnic" class="form-control cnic_input_box"
                            placeholder="Enter your cnic" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Enter your email" required>
                    </div>
                    {{-- gender --}}
                    <div class="form-group">
                        <label for="province">Gender</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    {{-- provice is dropdown --}}
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
                    {{-- district is dropdown based on provice onchange --}}
                    <div class="form-group">
                        <label for="district">District</label>
                        <select name="district" id="district" class="form-control">
                            <option value="">Select District</option>
                            <option value="Peshawar">Peshawar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zone">Zone</label>
                        <select name="zone" id="zone" class="form-control" required>
                            <option value="">Select zone</option>
                            <option value="1">Zone 1</option>
                            <option value="2">Zone 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            placeholder="Enter your phone" required>
                    </div>
                    {{-- highest qualification --}}
                    <div class="form-group">
                        <label for="qualification">Highest Qualification</label>
                        <select name="qualification" id="qualification" required class="form-control" required>
                            <option value="">Select Qualification</option>
                            <option value="matric">Matric</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="bachelors">Bachelors</option>
                            <option value="masters">Masters</option>
                            <option value="mphil">M. Phil</option>
                            <option value="phd">PhD</option>
                        </select>
                    </div>
                    {{-- picture --}}
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" name="picture" id="picture" class="form-control">
                    </div>

                    <div class="form-group" id="payment_method_box">
                        <label for="payment_method">Payment Method</label>
                        <select name="payment_method" id="payment_method" class="form-control" required>
                            <option>Select Payment Method</option>
                            <option value="jazzcash">Jazz Cash</option>
                            <!-- <option value="creditcard">Credit card</option> -->
                        </select>
                    </div>


                    <!--  Bank Payment Modal   -->
                    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="paymentModal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Bank Payment Modal  -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="testStartModal" tabindex="-1" role="dialog" aria-labelledby="testStartModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testStartModalLabel">Start Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="test-take" method="POST" id="test-take-form">
                    @csrf
                    <input type="hidden" name="test_id" id="test_iddd">
                    <div class="form-group">
                        <label for="test_code">CNIC</label>
                        <input type="text" name="test_code" id="test_code" class="form-control"
                            placeholder="Enter your CNIC" required>
                    </div>
                    <div class="form-group">
                        <label for="test_password">Test Password</label>
                        <input type="password" name="test_password" id="test_password" class="form-control"
                            placeholder="Enter your test password" required>
                    </div>
                    {{-- user agreement --}}
                    <div class="form-group">

                        <label for="agreement"><input type="checkbox" name="agreement" id="agreement" required> I
                            undertake not to take help from any other means during the test. I will not share the test
                            and will only solve it according to my knowledge.</label>
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="checkUserCredentials()"
                            class="btn btn-primary btn-block">Start Test</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- printSlipModal --}}
<div class="modal fade" id="printSlipModal" tabindex="-1" role="dialog" aria-labelledby="printSlipModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="printSlipModalLabel">Download Slip</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="slipForm">
                    <input type="hidden" name="test_id" id="test_idd">
                    <div class="form-group">
                        <label for="cnic">CNIC</label>
                        <input type="text" name="cnic" id="cnic" class="form-control"
                            placeholder="Enter your cnic" required>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block printSubmit"
                            onclick="apply()">Download
                            Slip</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- testResultModal --}}
<div class="modal fade" id="testResultModal" tabindex="-1" role="dialog" aria-labelledby="testResultModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testResultModal">Show Result</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="resultForm">
                    <input type="hidden" name="test_id" id="test_id_result">
                    <div class="form-group">
                        <label for="cnic">CNIC</label>
                        <input type="text" name="cnic" id="text_result_cnic" class="form-control"
                            placeholder="Enter your cnic" required>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block result_print"
                            onclick="check_result()">Result</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection

@section('script')
<script>
    $(document).ready(function() {
        // $('#payment_method').on('change', function() {
        //     console.log('i am working');
        //     $('#paymentModal').modal({
        //         backdrop: 'static',
        //         keyboard: false
        //     }, 'show');
        //     let value = $(this).val();
        //     // if (value === 'easypaisa' || value === 'creditcard') {

        //     // }
        // });

    });

    // fetchDistricts
    function fetchDistricts(province_id) {
        $.ajax({
            url: 'fetch-districts/' + province_id,
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

    function checkUserCredentials() {
        // give warning if agreement is not checked
        if (!$('#agreement').is(':checked')) {
            alert('Please agree to the terms and conditions');
            return;
        }
        var test_id = $('#test_iddd').val();
        var test_code = $('#test_code').val();
        var test_password = $('#test_password').val();
        if ($('#agreement').is(':checked')) {
            $.ajax({
                url: "{{ route('testapplies.checkUserCredentials') }}",
                type: "POST",
                data: {
                    test_id: test_id,
                    test_code: test_code,
                    test_password: test_password,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    data = data.replace(/^\s+|\s+$/gm, '');

                    if (data == 'success') {
                        $('#test-take-form').submit();
                    } else if (data == 'Invalid') {
                        alert('Invalid Credentials');
                    } else if (data == 'payment') {
                        alert('Please pay the fee first');
                    }

                    if (data == 'taken') {
                        alert('You have already taken this test');
                    }
                }
            });
        } else {
            alert('Please agree to the terms and conditions');
        }
    }


    function testStart(id) {
        $('#test_iddd').val(id);
        $('#testStartModal').modal({
            backdrop: 'static',
            keyboard: false
        }, 'show');
    }

    function testApplyModal(id, ispaid) {

        if (ispaid == 0) {
            // hide payment_method_box if test is free otherwise show it
            $('#payment_method_box').hide();
            // makes input optional
            $('#payment_method').prop('required', false);
        } else {
            $('#payment_method_box').show();
            $('#payment_method').prop('required', true);
        }

        $('#test_id').val(id);
        $('#testApplyModal').modal({
            backdrop: 'static',
            keyboard: false
        }, 'show');
    }

    function printSlipModal(id) {
        $('#test_idd').val(id);
        console.log(id);
        $('#printSlipModal').modal({
            backdrop: 'static',
            keyboard: false
        }, 'show');
    }

    function apply() {
        var form = $('#slipForm');
        var formData = form.serialize();
        // ajax setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('testapplies.print') }}",
            type: "POST",
            data: formData,
            success: function(data) {
                // trim the data
                var data = data.trim();
                if (data == 'success') {
                    // redirect to print page with the formData in post method
                    form.attr('action', "{{ route('testapplies.printOurSlip') }}");
                    form.attr('method', 'POST');
                    // include csrf token
                    form.append('<input type="hidden" name="_token" value="{{ csrf_token() }}">');
                    form.submit();
                } else {
                    alert('Invalid CNIC');
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    function launch_result_modal(id) {

        $('#test_id_result').val(id);
        $('#testResultModal').modal({
            backdrop: 'static',
            keyboard: false
        }, 'show');
    }

    function check_result() {
        var form = $('#resultForm');
        var formData = form.serialize();
        // ajax setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('testapplies.check_result') }}",
            type: "POST",
            data: formData,
            success: function(data) {
                // trim the data
                var data = data.trim();
                if (data == 'success') {
                    // redirect to print page with the formData in post method
                    form.attr('action', "{{ route('test-result.submit') }}");
                    form.attr('method', 'POST');
                    // include csrf token
                    form.append('<input type="hidden" name="_token" value="{{ csrf_token() }}">');
                    form.submit();
                } else {
                    alert('No result found');
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    // .cnic_input_box class, only numbers allowed and remove anythins other than numbers, remove decimal points
    $('.cnic_input_box').keyup(function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>

@stop
