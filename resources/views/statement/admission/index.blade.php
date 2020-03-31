@extends('layouts.app')

@section('title', __('Add Routine'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>

        <div class="col-md-10" id="main-container">
     
            <div class="panel panel-default">
            
              @if(count($registrations) > 0)
            
              <div class="panel-body">
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
<table class="table table-bordered table-data-div table-condensed table-striped table-hover" id="registration">
  <thead>

            <tr>
                <th>Student Name</th>
               <th>Studdent Class</th>
                <th>Email</th>
                <th>Student Father Name</th>
                <th>Student Mother Name</th>
                <th>Number</th>
                <th>Class</th>
                <th>Role</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Nationality</th>
                <th>Address</th>
                <th>Father address</th>
                <th>Mother address</th>
                <th>Father Occupation</th>
                <th>Mother Occupation</th>
                <th>Guardian Name</th>
                <th>Guardian Occupation</th>
                <th>Guardian Address</th>
                <th>Admission Test Date</th>
                <th>Admission Test Time</th>
                <th>Interview Time</th>
                <th>Action</th>
               
         
            </tr>
        </thead>
        <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{$registration->name}}</td>
                <td>{{$registration->class}}</td>
                <td>{{$registration->email}}</td>
                <td>{{$registration->father_name}}</td>
                <td>{{$registration->mother_name}}</td>
                <td>{{$registration->phone_number}}</td>
                <td>{{$registration->class}}</td>
                <td>{{$registration->role}}</td>
                <td>{{$registration->gender}}</td>
                <td>{{$registration->blood_group}}</td>
                <td>{{$registration->nationality}}</td>
            <td>{{$registration->address}}</td>
               
            <td>{{$registration->f_address}}</td>
            <td>{{$registration->m_address}}</td>
            <td>{{$registration->occupation}}</td>
            <td>{{$registration->mother_occupation}}</td>
            <td>{{$registration->guardian_name}}</td>
            <td>{{$registration->guardian_occupation}}</td>
            <td>{{$registration->g_address}}</td>
            <td>{{$registration->admission_test_date}}</td>
            <td>{{$registration->admission_test_time}}</td>
            <td>{{$registration->interview_time}}</td>
            <td><a href="{{route('statement.deleteadmission',$registration->id)}}"><button class="btn btn-primary">Delete</button></a></td>

                
              
            @endforeach
            </tbody>
            </table>
            </div>
            {{ $registrations->links() }}

                    </div>
              @else
                <div class="panel-body">
                    @lang('No Related Data Found.')
                </div>
              @endif
              </div>
        </div>
    </div>
</div>





             
            @endsection



            
            <script>
            $(document).ready(function() {
                $('#registration').DataTable();
            } );
            </script>