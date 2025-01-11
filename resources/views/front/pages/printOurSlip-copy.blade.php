<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Slip</title>
    {{-- bootstrap cdn --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- font awesome cdn --}}
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Roll Number Slip</h3>
                    </div>
                    <div class="card-body">
                        {{-- user profile picture --}}
                        <div class="row bg-danger">
                            <div class="col-sm-12 text-white pt-2">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title"> Bettani Series</h5>
                                    </div>
                                    <div class="col text-end">
                                        <h5> www.bettaniseries.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($test->isPaid)
                        <div class="row">
                            <div class="col-12 text-center pt-3">
                                <div class="feestatus">


                                    <p><strong>Processing Fee Status:</strong>
                                        @if($student->payment_status!=1)
                                        <span class="badge badge-warning">Pending</span>

                                        @else
                                        <span class="badge badge-success">Verified</span>
                                        @endif
                                    </p>

                                </div>
                                @if($student->payment_status!=1)
                                @php
                                $tokenRef='';
                                $expireDate='';

                                if(!empty($student->detail)){
                                $detail=json_decode($student->detail);
                                $tokenRef= $detail->pp_RetreivalReferenceNo;
                                $expireDate=date('d-m-Y', strtotime($detail->pp_TxnDateTime. ' + 8 days'));

                                }


                                @endphp
                                <div class="token-wrapper text-center ">
                                    <h4 class="green">Token: {{ $tokenRef}}</h4>
                                    <p class="red">This token must be paid at any JAZZ CASH or through JAZZ CASH APP on or<br> before  {{date('M d Y',strtotime( $expireDate))}} </p>
                                </div>
                                @endif
                            </div>

                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 text-center pt-4">
                                @if($student->picture)
                                <img src="{{ asset('uploads/test_apply/'.$student->picture) }}" width="120" alt="" class="img-fluid">
                                @else
                                @if($student->gender == 'male')
                                <img src="{{ asset('uploads/male.png') }}" alt="" width="120" class="img-fluid">
                                @else
                                <img src="{{ asset('uploads/female.png') }}" alt="" width="120" class="img-fluid">
                                @endif
                                @endif

                            </div>
                        </div>
                        {{-- test title --}}
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 class="text-center">{{ $test->title }}</h4>
                            </div>
                        </div>
                        {{-- test date --}}
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 class="text-center">Test date and time {{ $test->date }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="father_name">CNIC</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control" value="{{ $student->cnic }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mother_name">Email</label>
                                    <input type="text" name="mother_name" id="mother_name" class="form-control" value="{{ $user_email }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="roll_number">Password for test</label>
                                    <input type="text" name="roll_number" id="roll_number" class="form-control" value="{{ $student->password_value }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hideonprint">
            <div class="col-md-12">
                <p class="text-danger bg-warning">Kindly store this information for later purposes</p>
            </div>
            <div class="col-md-12">
                {{-- print button --}}
                <button class="btn btn-primary" onclick="window.print()">Download Roll Number</button>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    .hideonprint {
        display: block;
    }

    @media print {
        .hideonprint {
            display: none;
        }
    }
</style>