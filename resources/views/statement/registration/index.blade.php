@extends('layouts.app')

@section('title', __('Add Routine'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>

        <div class="col-md-10" id="main-container">
        <div class=" text-right">
            <a href="{{url('statement/new_registration')}}" class="btn btn-default btn-sm  ">New registration </a>
            </div>
            <div class="panel panel-default">
            
              @if(count($registrations) > 0)
              <div class="page-panel-title">@lang('List of Registraion')</div>
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
                <th>registration Id</th>
                <th>Student Father Name</th>
                <th>Student Mother Name</th>
                <th>Number</th>
                <th>Class</th>
                <th>Registration Fee</th>
                <th>Registration Class</th>
                <th>Registration Year</th>
                <th>Registation month</th>
                <th>Guardians Details</th>
                <th>Admission</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{$registration->name}}</td>
                <td>{{$registration->class}}</td>
                <td>{{$registration->inquiry_id}}</td>
                <td>{{$registration->father_name}}</td>
                <td>{{$registration->mother_name}}</td>
                <td>{{$registration->number}}</td>
                <td>{{$registration->class}}</td>
                <td>{{$registration->fees}}</td>
                <td>{{$registration->r_class}}</td>
                <td>{{$registration->years}}</td>
                <td>{{$registration->month}}</td>
                <td>{{$registration->guardians_details}}</td>
                <td><a href="{{route('statement.admission_form',$registration->id)}}"><button class="btn btn-primary">Admission Form</button></a></td>
                <td> <a href="{{url('statement/edit_registration/'.$registration->id)}}" class="btn btn-info btn-sm">Edit</a> <a href="{{url('statement/delete_registration/'.$registration->id)}}" class="btn btn-danger btn-sm">delete</a></td>
            </tr>
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