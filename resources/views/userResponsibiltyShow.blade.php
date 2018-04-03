@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">User Responsibility</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                              <th>Application_Name</th>
                              <th>Full_Name</th>
                              <th>User_Name</th>
                              <th>Responsibility</th>
                              <th>Start_Date</th>
                              <th>End_Date</th>
                              <th>Edit_User_Responsibility</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($responsibilities as $responsibility)
                                <tr>
                                    {{-- {{print_r($responsibility['Application_Name'])}} --}}
                                    <td>{{$responsibility['Application_Name']}}</td>
                                    <td>{{$responsibility['Full_Name']}}</td>
                                    <td>{{$responsibility['User_Name']}}</td>
                                    <td>{{$responsibility['Responsibility']}}</td>
                                    <td>{{$responsibility['Start_Date']}}</td>
                                    <td>{{$responsibility['End_Date']}}</td>
                                    <td>Edit_User_Responsibility</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
