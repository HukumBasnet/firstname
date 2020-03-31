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
            
              <div class="panel-body">
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
<table class="table table-bordered table-data-div table-condensed table-striped table-hover" id="teacherlist">
  <thead>

            <tr>
                <th>S.N</th>
                <th>Teacher Name</th>
               <th>Teacher Email</th>
                <th>Teacher Phone</th>
                <th>Teacher Gender</th>
                <th>Teacher Prefered Subjects</th>
                <th>Teaher Experience</th>
                <th>Teacher Previous School</th>
                <th>Teacher Address</th>
                <th>Action</th>
               
         
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $key=>$teach)
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$teach->name}}</td>
                <td>{{$teach->email}}</td>
                <td>{{$teach->phone}}</td>
                <td>{{$teach->gender}}</td>
                <td>{{$teach->subjects}}</td>
                <td>{{$teach->experience}}</td>
                <td>{{$teach->prevschool}}</td>
                <td>{{$teach->address}}</td>
                <td>
                <a href="{{route('statement.teachereditpage',$teach->id)}}"><i class="material-icons" style="color:blue;">edit</i></a>
                    <a href="{{route('statement.deleteteacher',$teach->id)}}"><i class="material-icons" style="color:red;">delete</i></a></td>
                </tr>
            @endforeach

            </tbody>
            </table>
            </div>
           

                    </div>
             
              </div>
        </div>
    </div>
</div>





             
            @endsection



            
            <script>
            $(document).ready(function() {
                $('#teacherlist').DataTable();
            } );
            </script>