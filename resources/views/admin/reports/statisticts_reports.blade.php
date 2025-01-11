@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Statistics Reports')

@section('body')

    <div class="container-xl">
            <div class="card-body">
                <table class="table table-responsive-sm table-striped" id="report">
                    <tbody>
                            <tr>
                                <th>Todays Users</th>
                                <td>{{ $today_visits }}</td>
                            </tr>

                            <tr>
                                <th>This Week Users</th>
                                <td>{{ $week_visits }}</td>
                            </tr>

                            <tr>
                                <th>This Month Users</th>
                                <td>{{ $this_month_visits }}</td>
                            </tr>

                            <tr>
                                <th>This Year Users</th>
                                <td>{{ $this_year_visits }}</td>
                            </tr>

                            <tr>
                                <th>Total Users</th>
                                <td>{{ $all_visits }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
