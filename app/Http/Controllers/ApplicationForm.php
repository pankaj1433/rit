<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationFormRequest;
use App\FundingSource;
use App\RadioButtons;
use App\RadioButtonOptions;
use App\EducationStatus;

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
     * Returns funding source from the model.
     */
    private function fundingSource() {
        $funding_source_temp = FundingSource::where('active', 'yes')
                            ->orderBy('sort_key')
                            ->get(['label'])
                            ->toArray();
        $funding_source[1] = '-- Select Funding Source --';
        foreach($funding_source_temp as $data) {
            $funding_source[$data['label']] = $data['label'];
        }
        return $funding_source;
    }

    /**
     * Returns Radio buttons from the model.
     */
    private function radioButtons() {
        $radio_buttons = RadioButtons::where('active', 'yes')
                                ->get(['label','id'])
                                ->toArray();
        foreach ($radio_buttons as $radio_button) {
            $data[$radio_button['label']] = RadioButtonOptions::where('radio_id', '=', $radio_button['id'])
                                                ->orderBy('sort_key')                                    
                                                ->get(['option_name'])
                                                ->toArray();
        }
        return $data;
    }

    /**
     * Returns Education status from model.
     */
    private function educationStatus() {
        $education_status_temp = EducationStatus::where('active', 'yes')
                            ->orderBy('sort_key')
                            ->get(['label'])
                            ->toArray();
        $education_status[1] = '-- Select Education Status --';
        foreach($education_status_temp as $data) {
            $education_status[$data['label']] = $data['label'];
        }
        return $education_status;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicationForm')
                    ->with('funding_source',$this->fundingSource())
                    ->with('radio_buttons',$this->radioButtons())
                    ->with('education_status',$this->educationStatus());
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
