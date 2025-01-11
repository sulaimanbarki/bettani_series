<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bettani Series (Roll No Slip)</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/urdu-web-fonts@1.0.3/Nafees-Nastaleeq/css/nafees-nastaleeq.min.css"
        rel="stylesheet"> --}}

    <style>
        @font-face {
            font-family: 'jameel-nastaleeq';
            src: url('https://cdn.jsdelivr.net/gh/tariq-abdullah/urdu-web-font-CDN/_PDMS_Jauhar_Regular.woff') format('woff');
            font-stretch: condensed;
            font-size: 15px;
        }

        /* how to use the above font for .note-text-urdu class  */
        .note-text-urdu {
            font-family: 'jameel-nastaleeq';
        }
    </style>
</head>

<body>
    <!-- download Roll No button -->
    <div class="download-button">
        <button onclick="window.print()">Download Roll Number</button>
    </div>

    <!-- make me a div for printable size -->
    <div class="main-dive">
        <div class="main-text">
            <h1 class="battain-text">Bettani Series</h1> (www.bettaniseries.com)
        </div>

        <div class="right-profile-image">
            {{-- <img src="{{ asset('images/profile.png') }}" alt="profile image" width="100px" height="100px"> --}}
            {{-- <img src="{{ asset('uploads/test_apply/' . $student->picture) }}" alt="profile image" width="100px" height="100px"> --}}

            @if ($student->picture)
                <img src="{{ asset('uploads/test_apply/' . $student->picture) }}" alt="profile image" width="100px"
                    height="100px">
            @else
                @if ($student->gender == 'male')
                    {{-- <img src="{{ asset('uploads/male.png') }}" alt="" width="120" class="img-fluid"> --}}
                    <img src="{{ asset('uploads/male.png') }}" alt="profile image" width="100px" height="100px">
                @else
                    {{-- <img src="{{ asset('uploads/female.png') }}" alt="" width="120" class="img-fluid"> --}}
                    <img src="{{ asset('uploads/female.png') }}" alt="profile image" width="100px" height="100px">
                @endif
            @endif
        </div>

        <div class="slip-text">
            <h2>Roll No Slip</h2>
        </div>

        <!-- table with two coloumns -->
        <table>
            <tr>
                <th>Name:</th>
                <th>{{ $student->name }}</th>
            </tr>
            <!-- cnic -->
            <tr>
                <th>CNIC:</th>
                <th>{{ $student->cnic }}</th>
            </tr>
            <!-- Email -->
            <tr>
                <th>Email:</th>
                <th>{{ $user_email }}</th>
            </tr>
            <!-- password -->
            <tr>
                <th>Password:</th>
                <th>{{ $student->password_value }}</th>
            </tr>
            <!-- test name -->
            <tr>
                <th>Test Name:</th>
                <th>{{ $test->title }}</th>
            </tr>
            <!-- test date -->
            <tr>
                <th>Test Date & Time:</th>
                <th>{{ $test->date }}</th>
            </tr>
            <!-- Test Center -->
            <tr>
                <th>Test Center:</th>
                <th>Online <a href="https://www.bettaniseries.com">(<u>www.bettaniseries.com</u>)</a></th>
            </tr>
        </table>

        <div class="text-container">
            <div class="note-text-urdu">
                : نوٹ
            </div>

            <ol class="note">
                <li>	اپنا ای- میل(e-mail)اور پاسورڈ  (password)کسی کے ساتھ شئیر نہ کریں  ورنہ کوئی اور   آپ کی جگہ ٹیسٹ   اٹیمپٹ کرسکتا ہے۔ </li>
                <li>	یہ ٹیسٹ صرف اور صرف آپ کو اپنی   کارکردگی  (یعنی تیاری )  صوبائی/ڈویژن/ضلعی  / تحصیل / اور یونین کونسل  کی سطح  پر  پوزیشن معلوم کرنے کے لئے  لیا جارہا ہے۔ تو  براہ کرم کسی دوسرے فرد /کتاب/انٹرنیٹ وغیرہ سے مدد لینے کی  کوشش نہ کریں۔ کیونکہ ایسا کرنے سے  آپ  کو  اپنی  تیاری کا اندازہ نہیں ہوگا۔</li>
                <li>	اب بیٹنی سیریز ویب سائٹ (www.bettaniseries.com) پر آپ  بیٹنی سیریز کی ساری  کتب  آنلائن پڑھ سکتے ہیں۔ </li>
            </ol>

            <div class="note-text-urdu">
                : خبردار
            </div>

            <ol class="note">
                <li>
                    	کوئی بھی امیدوار کسی غیر قانونی سرگرمی میں پایا گیا تو اسے ویب سائٹ سے مستقل طور پر بلاک کردیا جائے گا۔
                </li>
            </ol>

        </div>

        <div class="text-container best-of-luck">
            <h4>Best of Luck</h4>
        </div>


    </div>



</body>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .main-dive {
        width: 8.5in;
        height: 11in;
        /* padding: 1in; */
        background-color: #EAF0DD;
        -webkit-print-color-adjust: exact;
        background-image: url("{{ $test->ispaid ? url('public/images/cbimage-without.png') : url('public/images/cbimage.png') }}");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        padding: 50px;

    }

    .main-text {
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
        margin-top: 70px;
        font-family: Cambria !important;
        color: red;
        font-weight: bold;
    }

    .main-text .battain-text {
        font-weight: bold;
        display: inline;
        font-size: 18px;
        color: rgb(23, 54, 93);

    }

    .right-profile-image {
        float: right;
        margin-top: -48px;
        margin-right: 56px;
        /* background-color: rgb(79, 129, 189); */
    }

    .right-profile-image img {
        width: 139px;
        height: 157px;
    }

    .slip-text {
        text-align: center;
        font-family: Cambria !important;
        font-weight: bold;
        color: rgb(23, 54, 93);
        font-size: 11px;
        margin-top: 28px;
        margin-left: 200px;
    }

    table {
        margin-left: 50px;
        /* font-family calibri sans-serif */
        font-family: sans-serif, Arial, Helvetica, Verdana;
        font-weight: bold;
        color: rgb(23, 54, 93);
        font-size: 15px;
    }

    table th {
        text-align: left;
        padding-right: 32px;
    }

    /* first coloumn color = red */
    table th:first-child {
        color: red;
        text-transform: capitalize;
        /* margin-right: 30px; */
    }

    table a {
        text-decoration: none;
    }

    .note-text-urdu {
        font-family: 'Times New Roman', Times, serif;
        text-align: right;
        margin-top: 20px;
        font-family: Cambria !important;
        color: red;
        font-weight: bold;
        font-size: 15px;
        font-family: jameel-nastaleeq;
    }

    ol li {
        /* font-family: Nafees Nastaleeq; */
        font-family: 'jameel-nastaleeq';
        font-stretch: expanded;
        font-size: 15px;
    }

    .text-container {
        margin-right: 50px;
        margin-top: 50px;
    }

    .note {
        direction: rtl;
    }

    .text-container h4 {
        /* font-family: Cambria !important; */
        color: red;
        text-align: center;
        font-weight: bold;
        font-size: 15px;
    }

    .text-container {
        padding-left: 60px;
        padding-right: 10px;
    }

    .best-of-luck {
        margin-top: -15px;
        font-family: Cambria !important;
    }

    .download-button button {
        /* disign the button like bootstrap primary */
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        border-radius: .25rem;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border: 1px solid transparent;
        cursor: pointer;
        margin-top: 20px;
        margin-bottom: 20px;

    }

    /* for print use the same color */
    @media print {
        .main-dive {
            background-color: #EAF0DD !important;
            display: block;
            background-image: url("{{ $test->ispaid ? url('public/images/cbimage-without.png') : url('public/images/cbimage.png') }}");
            /* remove margin */
            margin: 0;
        }

        .download-button {
            display: none;
        }
    }

    /* @page {
        margin: 0;
    } */
</style>



</html>
