<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{

    public function index()
    {
        return view('apply');
    }

    public function list()
    {
        return view('panel');
    }

    public function store(Request $request)
    {

        $candidate = new Candidate();
        $candidate->first_name = $request->first_name;
        $candidate->last_name = $request->last_name;
        $candidate->full_name = $request->first_name;
        $candidate->gender = $request->gender;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->address_street = $request->address_street;
        $candidate->address_number = $request->address_number;
        $candidate->address_code = $request->address_code;
        $candidate->address_town = $request->address_town;
        $candidate->address_country = $request->address_country;

        $candidate->birth_date = $request->birth_date;
        $candidate->birth_town = $request-> birth_town;
        $candidate->birth_country = $request->birth_country;
        $candidate->marital_status = $request->marital_status;

        $candidate->sozialversicherungsnummer = $request->sozialversicherungsnummer;
        $candidate->steuer_id = $request->steuer_id;
        $candidate->krankenkasse = $request->krankenkasse;
        $candidate->versichertennummer = $request->versichertennummer;

        $candidate->save();

    }

    public function select($id)
    {
        dd($id);
    }





}
