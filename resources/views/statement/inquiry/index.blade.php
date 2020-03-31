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
            <a href="{{url('statement/add_inquiry')}}" class="btn btn-default btn-sm  ">New inquiry </a>
            </div>
            <div class="panel panel-default">
            
              @if(count($inquirys) > 0)
              <div class="page-panel-title">@lang('List of Inquiry')</div>
              <div class="panel-body">
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
<table class="table table-bordered table-data-div table-condensed table-striped table-hover" id="inquiry">
  <thead>

            <tr>
                <th>Student Name</th>
               <th>Studdent Class</th>
                <th>Inquiry Id</th>
                <th>Student Father Name</th>
                <th>Student Mother Name</th>
                <th>Number</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inquirys as $inquiry)
            <tr>
                <td>{{$inquiry->name}}</td>
                <td>{{$inquiry->class}}</td>
                <td>{{$inquiry->inquiry_id}}</td>
                <td>{{$inquiry->father_name}}</td>
                <td>{{$inquiry->mother_name}}</td>
                <td>{{$inquiry->number}}</td>
                <td>{{$inquiry->class}}</td>
                <td> <a href="{{url('statement/edit_inquiry/'.$inquiry->id)}}" class="btn btn-info btn-sm">Edit</a> <a href="{{url('statement/delete_inquiry/'.$inquiry->id)}}" class="btn btn-danger btn-sm">delete</a></td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            {{ $inquirys->links() }}

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
                $('#inquiry').DataTable();
            } );
            </script>