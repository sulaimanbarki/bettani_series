<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Shetabit\Visitor\Models\Visit;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function book_reports (Request $request) {
        $data = DB::table('order_hds')
            ->join('order_items', 'order_hds.id', '=', 'order_items.orderhd_id')
            ->join('books', 'order_items.model_id', '=', 'books.id')
            ->select('books.id', 'books.title', 'books.status',
                DB::raw('COUNT(order_items.model_id) as total_order'),
                DB::raw('SUM(order_items.amount) as total_price'))
            ->when($request->book_id, function ($query) use ($request) {
                return $query->where('books.id', $request->book_id);
            })
            ->when($request->from_date && $request->to_date, function ($query) use ($request) {
                return $query->whereBetween('order_hds.created_at', [
                    $request->from_date . ' 00:00:00',
                    $request->to_date . ' 23:59:59',
                ]);
            })
            ->where('order_hds.free', 0)
            ->where('order_hds.paid', 1)
            ->where('order_hds.deleted_at', null)
            ->groupBy('order_items.model_id', 'books.id', 'books.title', 'books.price', 'books.status')
            ->get();

        $oldest_date = DB::table('order_hds')->oldest()->first();
        $oldest_date = date('Y-m-d', strtotime($oldest_date->created_at));
        $newest_date = date('Y-m-d');

        $books = Book::where('status', '!=', 'deleted')->get();

        return view('admin.reports.book_reports', compact('books', 'data', 'oldest_date', 'newest_date'));
    }

    public function payment_reports (Request $request){
        $data = DB::table('order_hds')
            ->join('order_items', 'order_hds.id', '=', 'order_items.orderhd_id')
            ->join('books', 'order_items.model_id', '=', 'books.id')
            ->select('order_hds.id', 'order_hds.created_at', 'order_items.amount', 'order_hds.paid', 'order_hds.payment_method', 'order_hds.email', 'order_hds.name', 'order_hds.transaction_no', 'order_items.model_id', 'books.title', 'order_hds.phoneno', 'order_hds.expired_at', 'order_hds.name')
            ->when($request->from_date && $request->to_date, function ($query) use ($request) {
                return $query->whereBetween('order_hds.created_at', [
                    $request->from_date . ' 00:00:00',
                    $request->to_date . ' 23:59:59',
                ]);
            })
            ->when($request->book_id, function ($query) use ($request) {
                return $query->where('books.id', $request->book_id);
            })
            ->where('order_hds.paid', 1)
            ->where('order_hds.free', 0)
            // ignore deleted order_hds
            ->where('order_hds.deleted_at', null)
            ->get();

        $books = Book::where('status', '!=', 'deleted')->get();

        // if book_id is not set, then make the data empty
        if (!$request->book_id) {
            $data = [];
        }

        $oldest_date = DB::table('order_hds')->oldest()->first();
        $oldest_date = date('Y-m-d', strtotime($oldest_date->created_at));
        $newest_date = date('Y-m-d');

        return view('admin.reports.payment_reports', compact('data', 'oldest_date', 'newest_date', 'books'));
    }

    public function statistics()
    {
        $today_visits = Visit::where('created_at', '>=', now()->startOfDay())->distinct('ip')->count();

        $week_visits = Visit::where('created_at', '>=', now()->startOfWeek())->distinct('ip')->count();
        $this_month_visits = Visit::where('created_at', '>=', now()->startOfMonth())->distinct('ip')->count();
        $this_year_visits = Visit::where('created_at', '>=', now()->startOfYear())->distinct('ip')->count();
        $all_visits = Visit::distinct('ip')->count();

        return view('admin.reports.statisticts_reports', compact('today_visits', 'this_month_visits', 'all_visits', 'week_visits', 'this_year_visits'));
    }

}
