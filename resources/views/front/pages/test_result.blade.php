<html>

<head>
    <title>Result Card</title>
    <meta name="viewport" content="width=device-width, initail-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('result-card/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('result-card/css/custom.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
</head>

<style>
    ul {
        display: flex;
        list-style: none;
        padding: auto;
    }

    ul li {

        padding: 11px;

    }
</style>

<body>
    <div class="container" id="pdf_body">
        <div class="row ">
            <div class="col-sm-12 ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 pt-4 mx-auto">
                        <div class="card l-bg-blue-dark ">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 text-uppercase">Candidate Report Card</h5>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="mb-4"><img src="{{asset('result-card/images/logo.jpg') }}" /></div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-lg-2 h-75  yellow-lable">
                                        <h5 class="card-title  ">RESULT CARD </h5>
                                    </div>

                                    <div class="col-sm-12 offset-md-1 h-75  offset-lg-1 col-lg-9  yellow-lable">
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
                                <div class="row align-items-center mb-4 pt-2 d-flex">
                                    <div class="col-6">
                                        <span>NAME</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>{{isset($test_apply) ? $test_apply->name : ""}}</span>
                                    </div>
                                </div>

                                <div class="row align-items-center mb-4 p-2 d-flex">
                                    <div class="col-6">
                                        @php
                                        // if marks is less than 33% then result is fail else pass
                                        // count total questions in testquestions table
                                        $total_questions = DB::table('test_questions')->where('test_take_id', $test->id)->where('test_id', $test->test_id)->count();
                                        if(($test->marks / $total_questions * 100) <= 50){ $result='Fail' ; }else{ $result='Pass' ; } @endphp <span>TOTAL MARKS</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>{{$total_questions}}</span>
                                    </div>
                                </div>


                                <div class="row card align-items-center text-black mb-4 p-2 d-flex">
                                    <div class="col-12">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        Test Title
                                                    </th>
                                                    <th>
                                                        {{ $oldTest->title}}
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Description
                                                    </th>
                                                    <th>
                                                        {!!  $oldTest->description !!}
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Time Duration
                                                    </th>
                                                    <th>
                                                        {{ $oldTest->test_duration }} minutes
                                                    </th>
                                                </tr>
                                                <tr>
                                                    @php
                                                    $date = date('d-m-Y', strtotime($test->startingtime));
                                                    @endphp
                                                    <th>
                                                        Test Date & Time
                                                    </th>
                                                    <th>
                                                        {{ $test->startingtime }}
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        Total Questions (marks)
                                                    </th>
                                                    @php
                                                        // total questions in test
                                                        $total_questions = DB::table('test_questions')->where('test_take_id', $test->id)->where('test_id', $test->test_id)->count();
                                                    @endphp
                                                    <th>
                                                        {{ $total_questions }}
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        Obtained Marks
                                                    </th>
                                                    <th>
                                                        {{ $test->marks }} 
                                                        {{-- show percentage of obtained marks upto 1 decimal place --}}
                                                        ({{ number_format($test->marks / $total_questions * 100, 1) }}%)
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        Result
                                                    </th>
                                                    <th>
                                                        {{ $result }} (above or equal 50% pass)
                                                    </th>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                                <div class="row align-items-center text-black  p-2 d-flex">
                                    <div class="col-sm-6">
                                        <button class="btn mb-3 mr-3 btn-primary"><span>Share</span></button>
                                        {!!Share::page(url('result/details', base64_encode($test->id)), 'Bettani Series Result')
                                        ->facebook()
                                        ->twitter()
                                        ->linkedin('e')
                                        ->whatsapp();!!}

                                    </div>
                                    <div class="col-sm-6">

                                        <!-- <button class="btn mb-3 mr-3 btn-primary"><span>Share</span></button> -->
                                        <form class="d-inline" action="wrong-questions-test" method="post" id="wrong_question_form">
                                            @csrf
                                            <input type="hidden" name="test_id" value="{{ $test->test_id}}">
                                            <input type="hidden" name="test_take_id" value="{{ $test->id }}">
                                            <button type="submit" class="btn mb-3 mr-3 btn-danger"><span>Wrong Questions</span></button>
                                        </form>
                                        <button class="btn mb-3 mr-3 btn-secondary" id="btnprint"><span>Print</span></button>
                                        <button class="btn mb-3 mr-3 btn-warning" id="btndownload"><span>Download</span></button>

                                    </div>

                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('UI/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" integrity="sha512-vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('result-card/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#btnprint").click(function() {
                window.print();
            });
            $("#btndownload").click(function() {
                var pdf_content = document.getElementById("pdf_body");
                var options = {
                    margin: 1,
                    filename: 'auth_user_name' + "_Result" + '.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                };
                html2pdf(pdf_content, options);
            });

        });
    </script>
</body>

</html>
