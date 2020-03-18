<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->paginate(5);
        return view('bookings.index', compact('bookings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Car $car)
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request, [

    		'car_id' => 'required',
            'pickup_loc' => 'required',
            'drop_loc' => 'required',
            'pickup_date' => 'required|date',
            'pickup_time' => 'required',
            'drop_date' => 'required|date',
            'drop_time' => 'required',
        ]);

        // $validator = Validator::make($request->all(), [
        //     'pickup_date' => [
        //         'required',
        //         'date_format:"Y-m-d H:i:s"',
        //         function($attribute, $value, $fail) {
        //             $pickupDate = Carbon::parse($value);
        
        //             // is date < now?
        //             if ($pickupDate->lt(now()) {
        //                 return $fail($attribute.' must be on or after ' . now()->toDateTimeString());
        //             }
        
        //             // is time between 5pm and 9:30pm? (Can you pickup 7 days/week?)
        //             $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        //             $earliestTime = Carbon::createFromTimeString('17:00:00');
        //             $latestTime = Carbon::createFromTimeString('21:30:00');
        
        //             if ( ! $pickupTime->between($earliestTime, $latestTime)) {
        //                 return $fail($attribute.' must be between 5pm and 9:30pm');
        //             }
        //         },
        //     ],
        // ]);

        $booking = Booking::create([

    		'pickup_loc' => $request->pickup_loc,
    		'drop_loc' => $request->drop_loc,
    		'pickup_date' => $request->pickup_date,
    		'pickup_time' => $request->pickup_time,
    		'drop_date' => $request->drop_date,
    		'drop_time' => $request->drop_time,
    		'car_id' => $request->car_id,
    		'user_id' => Auth::id(),
    	]);

        return redirect(route('bookings.index'))->with('success', 'Car has been booked successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->back()->with('info', 'Booking has been cancelled!');
        // try {
        //     $delete = Car::find($booking);
        //     $delete->delete();
        //     return redirect()->back()->with('info', 'Booking has been cancelled!');
        // } catch (\Exception $exception) {
        //     return redirect()->back()->with('error', 'Whoops!, Something went wrong during deletion, Please try again.');
        // }
    }
}
