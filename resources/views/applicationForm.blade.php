@extends('layouts.form')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Work Base Learning</h3>
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-12">
                <div class="flash-msg">
                        @include('flash::message')
                </div>
                @if ($errors->any())
                    <div class="row">
                        <div class="col-md-12 alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            {{ Form::open(['route' => 'ApplicationForm.store', 'class' => 'form']) }}
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-md-2 form-group">
                                    {{ Form::label('application_id','Application ID:',['class' => 'req']) }}<br>
                                    {{ Form::text('application_id',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                    {{ Form::label('application_date','Application Date:',['class' => 'req']) }}<br>
                                    {{ Form::date('application_date',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                    {{ Form::label('enrollment_date','Enrollment Date:',['class' => 'req']) }}<br>
                                    {{ Form::date('enrollment_date',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('assigned_agency','Assigned Agency:',['class' => 'req']) }}<br>
                                    {{ Form::text('assigned_agency',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('current_status','Current Status:',['class' => 'req']) }}<br>
                                    {{ Form::text('current_status',null,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                    {{ Form::label('last_name','Last Name:',['class' => 'req']) }}<br>
                                    {{ Form::text('last_name',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('first_name','First Name:',['class' => 'req']) }}<br>
                                    {{ Form::text('first_name',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('ssn','SSN#:',['class' => 'req']) }}<br>
                                    {{ Form::text('ssn',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-4 form-group">
                                    {{ Form::label('funding_source','Funding Source:',['class' => 'req']) }}<br>
                                    {{ Form::select('funding_source',$funding_source,null,['class' => 'form-control full-width']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('caljobs_app','CalJOBS App#:',['class' => 'req']) }}<br>
                                    {{ Form::text('caljobs_app',null,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                    {{ Form::label('birth_date','Birth Date:',['class' => 'req']) }}<br>
                                    {{ Form::date('birth_date',null,['class' => 'form-control  birth']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('age','Age:',['class' => 'req']) }}<br>
                                    {{ Form::text('age',null,['class' => 'form-control  age','disabled']) }}
                            </div>
                            <div class="col-md-4 form-group">
                                    {{ Form::label('gender','Gender:',['class' => 'req']) }}<br>
                                    {{ Form::radio('gender','male') }} Male
                                    {{ Form::radio('gender','female') }} Female
                                    {{ Form::radio('gender','not_identify') }} Did Not Self Identify
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                    {{ Form::label('address_residence','Address(Residence):',['class' => 'req']) }}<br>
                                    {{ Form::text('address_residence',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('city','City:',['class' => 'req']) }}<br>
                                    {{ Form::text('city',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('state','State:',['class' => 'req']) }}<br>
                                    {{ Form::text('state',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('zip_code','Zip Code:',['class' => 'req']) }}<br>
                                    {{ Form::text('zip_code',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('phone_residence','Phone(Residence):',['class' => 'req']) }}<br>
                                    {{ Form::text('phone_residence',null,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                    {{ Form::label('citizen','Citizen:',['class' => 'req']) }}<br>
                                    {{ Form::radio('citizen','Yes') }} Yes 
                                    {{ Form::radio('citizen','No') }} No
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('eligible_to_work','Eligible to work In U.S.:',['class' => 'req']) }}<br>
                                    {{ Form::radio('eligible_to_work','Yes') }} Yes 
                                    {{ Form::radio('eligible_to_work','No') }} No
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('alien_doc','Alien Doc#:',['class' => 'req']) }}<br>
                                    {{ Form::text('alien_doc',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                        {{ Form::label('race','Race:',['class' => 'req']) }}<br>
                                        {{ Form::select('race',$race,null,['class' => 'form-control full-width']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                {{ Form::label('ethinicity','Ethinicity:',['class' => 'req']) }}<br>
                                {{ Form::select('ethinicity',$ethinicity,null,['class' => 'form-control full-width']) }}
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-2 form-group">
                                        {{ Form::label('unincorporated_area','Unincorporated Area:') }}<br>
                                        {{ Form::radio('unincorporated_area','Yes') }} Yes 
                                        {{ Form::radio('unincorporated_area','No') }} No
                                </div>
                                <div class="col-md-4 form-group">
                                        {{ Form::label('email_address','Email Address:',['class' => 'req']) }}<br>
                                        {{ Form::text('email_address',null,['class' => 'form-control']) }}
                                </div>
                        </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    @foreach ($radio_buttons as $radio_button=>$options)
                        @php
                            $radio_buttons_name = str_replace(' ','_',$radio_button);
                            $radio_buttons_name = str_replace('/','_',$radio_buttons_name);
                            $radio_buttons_name = strtolower($radio_buttons_name);
                        @endphp
                        <div class="form-group radio-buttons">
                            <div class="">
                                {{ Form::label($radio_buttons_name, $radio_button.':',['class' => 'req']) }}<br>
                                @foreach ($options as $option)
                                    {{ Form::radio($radio_buttons_name,$option['option_name']) }} {{$option['option_name']}}
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2">
                                {{ Form::label('education_status','Education Status:',['class' => 'req']) }}<br>
                        </div>
                        <div class="col-md-4">
                                {{ Form::select('education_status',$education_status,null,['class' => 'form-control full-width']) }}
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-4 form-group">
                                    {{ Form::label('highest_grade_completed','Highest Grade Completed:') }}<br>
                                    {{ Form::text('highest_grade_completed',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-4 form-group">
                                    {{ Form::label('referred_by','Referred by:') }}<br>
                                    {{ Form::text('referred_by',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-4 form-group">
                                    {{ Form::label('tse','TSE:') }}<br>
                                    {{ Form::text('tse',null,['class' => 'form-control']) }}
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3 form-group">
                                    {{ Form::label('agency','Agency:',['class' => 'req']) }}<br>
                                    {{ Form::text('agency',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-3 col-md-offset-1  form-group">
                                    {{ Form::label('staff_id','Staff Id:',['class' => 'req']) }}<br>
                                    {{ Form::text('staff_id',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-4 col-md-offset-1 form-group">
                                    {{ Form::label('note','Note:',['class' => 'req']) }}<br>
                                    {{ Form::text('note',null,['class' => 'form-control']) }}
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6 form-group">
                                {{ Form::label('work_permit_on_file','Work Permit On File (Required for age < 18):',['class' => 'req']) }}<br>
                                {{ Form::radio('work_permit_on_file','Yes') }} Yes 
                                {{ Form::radio('work_permit_on_file','No') }} No
                                {{ Form::radio('work_permit_on_file','Not Applicable') }} Not Applicable
                            </div>
                            <div class="col-md-6 form-group">
                                {{ Form::label('parent_signature_on_file','Parent Signature on File (Required for age < 18):',['class' => 'req']) }}<br>
                                {{ Form::radio('parent_signature_on_file','Yes') }} Yes 
                                {{ Form::radio('parent_signature_on_file','No') }} No
                                {{ Form::radio('parent_signature_on_file','Not Applicable') }} Not Applicable
                            </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                                <b>Probation Department</b>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3 form-group">
                                    {{ Form::label('pdj','PDJ#:',['class' => 'req']) }}<br>
                                    {{ Form::text('pdj',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                    {{ Form::label('cluster','Cluster:',['class' => 'req']) }}<br>
                                    {{ Form::text('cluster',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                    {{ Form::label('area_office','Area Office:',['class' => 'req']) }}<br>
                                    {{ Form::text('area_office',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                    {{ Form::label('caseload_no','Caseload No:',['class' => 'req']) }}<br>
                                    {{ Form::text('caseload_no',null,['class' => 'form-control']) }}
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    {{ Form::submit('Submit', ['class' => 'btn btn-info']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
