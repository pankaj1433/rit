<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationFormRequest;
use App\FundingSource;
use App\RadioButtons;
use App\RadioButtonOptions;
use App\EducationStatus;
use App\ApplicationFormModel;
use App\RaceModel;
use App\EthinicityModel;

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
     * Checks for exisiting application in the database.
     */
    private function doesExist($application_id){
        return (ApplicationFormModel::where('application_id', $application_id)->count() > 0)?true:false;
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
     * Returns Race from model.
     */
    private function race() {
        $race_temp = RaceModel::where('active', 'yes')
                            ->orderBy('sort_key')
                            ->get(['label'])
                            ->toArray();
        $race[1] = '-- Select Race --';
        foreach($race_temp as $data) {
            $race[$data['label']] = $data['label'];
        }
        return $race;
    }

    /**
     * Returns Ethinicity from model.
     */
    private function ethinicity() {
        $ethinicity_temp = EthinicityModel::where('active', 'yes')
                            ->orderBy('sort_key')
                            ->get(['label'])
                            ->toArray();
        $ethinicity[1] = '-- Select Education Status --';
        foreach($ethinicity_temp as $data) {
            $ethinicity[$data['label']] = $data['label'];
        }
        return $ethinicity;
    }

    /**
     * Creates the Application Form.
     */
    public function create()
    {
        return view('applicationForm')
                    ->with('funding_source',$this->fundingSource())
                    ->with('radio_buttons',$this->radioButtons())
                    ->with('race',$this->race())
                    ->with('ethinicity',$this->ethinicity())
                    ->with('education_status',$this->educationStatus());
    }

    /**
     * Saves the Application form into the database
     */
    public function store(ApplicationFormRequest $request)
    {
        //check if the record already exist in the database.
        if ( $this->doesExist($request->get('application_id'))) {
            flash('Application Id exist!')->error();
            return redirect()->route('ApplicationForm.create');
        }

        $form_object = new ApplicationFormModel;
        $form_object->application_id = $request->get('application_id');
        $form_object->data_json = json_encode($request->all());

        $form_object->save();

        flash('Your data has been saved!')->success();
        return redirect()->route('ApplicationForm.create');
    }
}
