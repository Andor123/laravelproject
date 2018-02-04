<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function show($id)
    {
        $countries = DB::table('countries')->find($id);
        return view('country.show', ['countries' => $countries]);
    }
}
