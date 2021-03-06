<?php

namespace App\Http\Controllers;

use App\Models\itineraires;
use Illuminate\Http\Request;
use App\Models\departcity;
use App\Models\arrivalcity;
use App\Models\times;
use App\Models\prices;
use App\Models\days;
use App\Models\bus;
use App\Models\compagnies;

class AllPagesController extends Controller
{
    public function index(){

        return view('pages.usersPage');
    }

    public function search(Request $request)
    {
        $itineraires = itineraires::with('departcity')->get();
        $itineraires = itineraires::with('arrivalcity')->get();
        $itineraires = itineraires::with('times')->get();
        $itineraires = itineraires::with('prices')->get();
        $itineraires = itineraires::with('days')->get();
        $itineraires = itineraires::with('bus')->get();
        $itineraires = itineraires::with('compagnies')->get();

        $departcity = departcity::all();
        $arrivalcity = arrivalcity::all();
        $times = times::all();
        $prices = prices::all();
        $days = days::all();
        $bus = bus::all();
        $compagnies = compagnies::all();

        $fromcity = $request->fromcity;
        $tocity = $request->tocity;
        $doj = $request->jour;
        $fromcity = departcity::where('dcity_name', 'like', '%' . request('dest_from') . '%')->get();
        $tocity = arrivalcity::where('acity_name', 'like', '%' . request('dest_to') . '%')->get();
        $doj = days::where('jour', 'like', '%' . request('doj') . '%')->get();
        $dor = $request->dor;
        $result = itineraires::where('departcity_id', '=', $fromcity)
            ->where('arrivalcity_id', '=', $tocity)
            ->where('jour ', '=', $doj)
            ->get();
        // $sellTickets = SellTicket::all();
        // dd($result);
        return view('pages.reservation', compact('departcity', 'arrivalcity', 'times', 'prices', 'days', 'bus', 'compagnies'))
        ->with(['result' => $result, 'data' => $request]);
    }
}
