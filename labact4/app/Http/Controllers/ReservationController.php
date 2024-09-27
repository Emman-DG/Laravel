<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation-form');
    }

    public function store(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'check_in_date' => 'required|date',
            'room_preferences' => 'required|in:Standard,Deluxe,Suite',
            'number_of_days' => 'required|integer|min:1',
            'number_of_guests' => 'required|integer|min:1',
            'special_request' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->route('reservation.form')
                ->withErrors($validator)
                ->withInput();
        }

        // Calculate total price
        $roomPrices = [
            'Standard' => 1500,
            'Deluxe' => 3000,
            'Suite' => 4500,
        ];

        $roomPrice = $roomPrices[$request->room_preferences];
        $totalRoomPrice = $roomPrice * $request->number_of_days;

        return view('reservation-details', [
            'data' => $request->all(),
            'totalRoomPrice' => $totalRoomPrice,
        ]);
    }
}
