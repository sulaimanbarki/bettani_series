@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.test.actions.index'))
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">

@section('body')

    <div class="container-fluid">
        <form action="" id="filter_form">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="hidden" name="test_id" value="{{ $test->id }}">
                        <label for="province">Province</label>
                        <select name="province" id="province" onchange="fetchDistricts(this.value)" class="form-control"
                            required>
                            <option value="">Select Province</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

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

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="district">District</label>
                        <select name="district" id="district" class="form-control">
                            <option value="">Select District</option>
                            <option value="Peshawar">Peshawar</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        {{-- apply filter --}}
                        <button type="button" onclick="apply_filter()" class="btn btn-primary mt-5 btn-block">Apply
                            Filter
                        </button>
                    </div>
                </div>

                {{-- downlad button to download the data as excel in the below table --}}
                <div class="col-md-2">
                    <div class="form-group">
                        <button type="button" onclick="download()" class="btn btn-success mt-5 btn-block">Download
                        </button>
                    </div>
                </div>

            </div>
        </form>
        <div class="row">
            <div class="col-lg-12 card">
                <div class="card-header">
                    <h3>Total Application {{ count($data) }}</h3>
                </div>
                <table class="table my-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Pass</th>
                            <th>Payment Status</th>
                            <th>Marks</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="body">
                        @foreach ($data as $application)
                            <tr>
                                <td>{{ $application->sno }}</td>
                                <td>{{ $application->name }}</td>
                                <td>"{{ $application->cnic }}"</td>
                                <td>{{ $application->password_value }}</td>
                                <td>
                                    @if ($application->payment_status != 1)
                                        <span class="badge badge-warning">Pending</span>
                                    @else
                                        <span class="badge badge-success">Verified</span>
                                    @endif
                                </td>

                                @php
                                    $marks = \App\Models\TestTake::where('cnic', $application->cnic)->where('test_id', $application->test_id)->first()->marks ?? 0;
                                @endphp

                                <td>{{ $marks }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.test.application.edit', [$application->id]) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.test.application.destroy', [$application->id]) }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    {{-- jquery cdn --}}
    {{-- <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script type="application/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script type="application/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function () {
            $('.my-table').DataTable({
                "paging": false,
                "ordering": true,
                "info": false,
                "searching": true
            });
        });

        function apply_filter() {

            $.ajax({
                url: '{{ route('paymentDetails') }}',
                type: 'GET',
                data: $('#filter_form').serialize(),
                success: function (data) {
                    // destroy table
                    $('.my-table').DataTable().destroy();
                    var html = '';
                    $.each(data, function (key, value) {
                        html += '<tr>';
                        html += '<td>' + value.sno + '</td>';
                        html += '<td>' + value.name + '</td>';
                        html += '<td>"' + value.cnic + '"</td>';
                        html += '<td>' + value.password + '</td>';
                        html += value.payment_status ? '<td><span class="badge badge-success">Verified</span></td>' : '<td><span class="badge badge-warning">Pending</span></td>';
                        html += '<td>' + value.marks + '</td>';
                        html += '<td><a href="/admin/test/application/edit/' + value.apply_id + '"> <i class="fa fa-edit"></i></a><a href="/admin/test/application/destroy/' + value.apply_id + '"><i class="fa fa-trash"></i></a></td>';
                        html += '</tr>';
                    });
                    $('#body').html(html);
                    $('.my-table').DataTable({
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
                success: function (data) {
                    let districts = data[0];
                    let zones = data[1];

                    var html = '';
                    html += '<option value="">Select District</option>';
                    $.each(districts, function (key, value) {
                        html += '<option value="' + value.id + '">' + value.district_name + '</option>';
                    });
                    $('#district').html(html);

                    var html2 = '';
                    html2 += '<option value="">Select Zone</option>';
                    $.each(zones, function (key, value) {
                        html2 += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#zone').html(html2);
                }
            });
        }

        function download() {
            var table = document.querySelector('.my-table');
            var wb = XLSX.utils.table_to_book(table, {sheet: "Sheet JS"});
            var wbout = XLSX.write(wb, {bookType: 'xlsx', bookSST: true, type: 'binary'});
            saveAs(new Blob([s2ab(wbout)], {type: "application/octet-stream"}), 'test.xlsx');
        }

        function s2ab(s) {
            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i = 0; i != s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;
        }

        // saveAs
        function saveAs(obj, fileName) {
            var tmpa = document.createElement("a");
            tmpa.download = fileName || "下载";
            tmpa.href = URL.createObjectURL(obj); //绑定a标签
            tmpa.click(); //模拟点击实现下载
            setTimeout(function () { //延时释放
                URL.revokeObjectURL(obj); //用URL.revokeObjectURL()来释放这个object URL
            }, 100);
        }
    </script>
@endsection
