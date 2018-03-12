<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationFormRequest;


class ApplicationForm extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicationForm');
    }

    /**
     * 
     */
    public function store(ApplicationFormRequest $request)
    {
        $data = [];

        $data['application_id'] = $request->get('application_id');
        $data['application_date'] = $request->get('application_date');
        $data['enrollment_date'] = $request->get('enrollment_date');
        $data['assigned_agency'] = $request->get('assigned_agency');
        $data['current_status'] = $request->get('current_status');

        //flash('Your data has been saved!')->success();
        return redirect()->route('ApplicationForm.create');
    }
}
