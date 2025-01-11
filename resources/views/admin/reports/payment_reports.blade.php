@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Book Reports')

@section('body')

    <div class="container-xl">

        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Book Reports
                <form action="{{ url()->current() }}">
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="">Book</label>
                            <select class="form-group form-control" name="book_id" id="book">
                                <option value="">Select Book</option>
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}"
                                        {{ isset($_GET['book_id']) && $_GET['book_id'] == $book->id ? 'selected' : '' }}>
                                        {{ $book->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @php
                            $from_date = $oldest_date;
                            $to_date = $newest_date;
                            if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                                $from_date = $_GET['from_date'];
                                $to_date = $_GET['to_date'];
                            }
                        @endphp
                        <div class="col-md-3">
                            <label for="">From Date</label>
                            <input type="date" value="{{ $from_date }}" class="form-group form-control"
                                name="from_date" id="from_date">
                        </div>
                        <div class="col-md-3">
                            <label for="">To Date</label>
                            <input type="date" value="{{ $to_date }}" class="form-group form-control" name="to_date"
                                id="to_date">
                        </div>
                        <div class="col-md-3">
                            <label for="">&nbsp;</label>
                            <button class="btn btn-primary form-group form-control">Generate</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped" id="report">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Date</th>
                            <th>Ex. Date</th>
                            <th>M. No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Amount</th>
                            <th>Book</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ date('d/m/y', strtotime($item->created_at)) }}</td>
                                <td>{{ date('d/m/y', strtotime($item->expired_at)) }}</td>
                                <td>{{ $item->phoneno }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->title }}</td>
                            </tr>
                            @php
                                $total += $item->amount;
                            @endphp
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="" class="text-right"></td>
                            <td colspan="" class="text-right"></td>
                            <td colspan="" class="text-right"></td>
                            <td colspan="" class="text-right"></td>
                            <td colspan="" class="text-right"></td>
                            <td colspan="" class="text-right">Total</td>
                            <td>{{ $total }}</td>
                            {{-- <td colspan=""></td> --}}
                            <td colspan="" onclick="exportToExcel()"><button class="btn btn-primary">Download
                                    Excel</button></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>


    <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="application/javascript" src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

    <script type="application/javascript">
        function exportToExcel() {
            $('#report').table2excel({
                exclude: ".no-export",
                filename: "download.xls",
                fileext: ".xls",
                exclude_links: true,
                exclude_inputs: true
            });
        }
    </script>
@endsection
