@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Work Base Learning</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    {{ Form::open(['route' => 'ApplicationForm.store', 'class' => 'form']) }}
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
                        <br>
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
                                    {{ Form::select('funding_source',[1=>'-- Select Funding Source --'],['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('caljobs_app','CalJOBS App#:',['class' => 'req']) }}<br>
                                    {{ Form::text('caljobs_app',null,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                    {{ Form::label('birth_date','Birth Date:',['class' => 'req']) }}<br>
                                    {{ Form::date('birth_date',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                    {{ Form::label('age','Age:',['class' => 'req']) }}<br>
                                    {{ Form::text('age',null,['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-4 form-group">
                                    {{ Form::label('gender','Gender:',['class' => 'req']) }}<br>
                                    {{ Form::radio('gender','male',['class' => 'form-control']) }} Male
                                    {{ Form::radio('gender','female',['class' => 'form-control']) }} Female
                                    {{ Form::radio('gender','not_identify',['class' => 'form-control']) }} Did Not Self Identify
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                {{ Form::submit('Submit', ['class' => 'btn btn-info']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
