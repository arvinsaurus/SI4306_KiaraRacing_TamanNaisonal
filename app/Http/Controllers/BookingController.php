<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Donation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('ticket-booking');
    }

    public function adminIndex()
    {
        $booking = Booking::all();

        return view('admin.booking', compact('booking'));
    }

    public function userIndex()
    {
        $id = Auth::user()->id;
        $booking = Booking::where('users_id', $id)->get();

        return view('user.booking-history', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        if (!Auth::check()) {
            Session::flash('error', 'Silakan login terlebih dahulu');
            return redirect()->back()->with('code', 2);
        } elseif (Auth::user()->level == "admin") {
            return redirect()->route('admin.news');
        }

        $validator = Validator::make(
            $request->all(),
            [
                'tanggal_tiket' => 'required|date',
                'dewasa' => 'required|numeric|min:0',
                'anak' => 'required|numeric|min:0',
                'total_harga' => 'required|numeric|min:1',
            ],
            [
                'total_harga.min' => 'Minimal pembelian 1 tiket',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $id = Auth::user()->id;

        $book = new Booking();
        $book->users_id = $id;
        $book->tanggal_tiket = $request->tanggal_tiket;
        $book->tiket_dewasa = $request->dewasa;
        $book->tiket_anak = $request->anak;
        $book->total = $request->total_harga;
        $book->status = 'Pending';

        $save = $book->save();

        if ($save) {
            return redirect()->route('user.booking-history');

            // $donation = Donation::where('users_id', $id)->orderByDesc('id')->first();
            // return redirect()->route('donation')->with(compact('donation'))->with('code', 3);
        }
        return redirect()->back();
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
        Booking::find($id)->update([
            'status' => "Completed",
        ]);

        return redirect()->back();
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
