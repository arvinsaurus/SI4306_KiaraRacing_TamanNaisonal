<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donation');
    }

    public function adminIndex()
    {
        $donasi = Donation::all();

        return view('admin.donation', compact('donasi'));
    }

    public function userIndex()
    {
        $id = Auth::user()->id;
        $donasi = Donation::where('users_id', $id)->get();

        return view('user.donation-history', compact('donasi'));
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
        if (!Auth::check()) {
            Session::flash('error', 'Silakan login terlebih dahulu');
            return redirect()->back()->with('code', 2);
        } elseif (Auth::user()->level == "admin") {
            return redirect()->back();
        }

        $id = Auth::user()->id;

        $donasi = new Donation();
        $donasi->users_id = $id;
        $donasi->nominal = Str::replace(".", "", $request->nominal);
        $donasi->status = 'Pending';

        $save = $donasi->save();

        if ($save) {
            return redirect()->route('user.donation-history');

            // $donation = Donation::where('users_id', $id)->orderByDesc('id')->first();
            // return redirect()->route('donation')->with(compact('donation'))->with('code', 3);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Donation::find($id)->update([
            'status' => "Completed",
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
