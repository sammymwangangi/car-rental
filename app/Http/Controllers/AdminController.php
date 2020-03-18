<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Car;
use App\User;
use App\Brand;
use App\Category;
use App\Charts\CarReports;
use Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $cars = Car::all();
        $fleet = Car::pluck('likes', 'name');
        $bookings = Booking::all();
        $users = User::all();

        $chart = new CarReports;
        $chart->labels($fleet->keys());
        $chart->dataset('Most Rated', 'bar', $fleet->values())->backgroundColor('#e5167a');
        return view('dashboard.index', compact('cars', 'bookings', 'users', 'chart'));
    }

    public function getBookings()
    {
        $bookings = Booking::all();
        return view('dashboard.bookings', compact('bookings'));
    }

    public function payments()
    {
        $bookings = Booking::all();
        return view('dashboard.payments', compact('bookings'));
    }

    public function getCars()
    {
        $cars = Car::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('dashboard.cars', compact('cars','brands','categories'));
    }

    public function reports()
    {
        $cars = Car::pluck('likes', 'name');
        // $bookings = Booking::pluck('car_id');
        // $bookings = Booking::where('created_at','=',Carbon\Carbon::now()->format('d'))->get();
        // $users = User::all('likes', 'created_at');
        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();

        // $users = User::all('likes', 'created_at');
        $today_bookings = Booking::whereDate('created_at', today())->count();
        $yesterday_bookings = Booking::whereDate('created_at', today()->subDays(1))->count();
        $bookings_2_days_ago = Booking::whereDate('created_at', today()->subDays(2))->count();

        $chart = new CarReports;
        $chart->labels($cars->keys());
        $chart->dataset('Most Rated', 'bar', $cars->values())->backgroundColor('#81eab9');

        // $rented = new CarReports;
        // $rented->labels($bookings->keys());
        // $rented->dataset('Most Rented', 'line', $bookings->values());

        $rented = new CarReports;
        $rented->labels(['2 days ago', 'Yesterday', 'Today']);
        $rented->dataset('Booking Reports', 'bar', [$bookings_2_days_ago, $yesterday_bookings, $today_bookings])->options([
    'backgroundColor' => '#f4f767']);

        $user = new CarReports;
        $user->labels(['2 days ago', 'Yesterday', 'Today']);
        $user->dataset('User Reports', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);

        return view('dashboard.reports', compact('cars', 'chart', 'rented', 'user'));
    }

    // ---------------- Toggle status ----------
    public function toggle_status($id)
    {
        //dd($id);
        try {
            $status = Booking::where('id', $id)->first()->is_approved;
            if ($status == 1) {
                Booking::where('id', $id)->update(['is_approved' => 0]);
            } else {
                Booking::where('id', $id)->update(['is_approved' => 1]);
            }
            return redirect()->back()->with('info', 'Booking status has been updated!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong when updating status, Please try again.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
