@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Css Application Administrator</div>
                <div class="panel-body">
                    <ul>
                        <li>Administration
                            <ul>
                                <li><a href="#">Create Agency User</a></li>
                                <li><a href="#">Assign Agency User Responsibility</a></li>
                                <li><a href="#">Create Department User</a></li>
                                <li><a href="#">Assign Department User Responsibility</a></li>
                                <li><a href="#">Search Applicant - DPSS Data Source - 2018</a></li>
                                <li><a href="#">Search Applicant( as administrator for update )</a></li>
                                <li><a href="#">NA/CS Reference</a></li>
                            </ul>
                        </li>
                        <li>Reports
                                <ul>
                                    <li><a href="#">Application Summary</a></li>
                                    <li><a href="#">Application by Funding Source</a></li>
                                </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
