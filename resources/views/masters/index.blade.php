@extends('layouts.app')

@section('title', __('Manage Schools')) 

@section('content')







<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <script>
  $(document).ready(function () {
    $('.nav-item.active').removeClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').closest('ul').closest('li').addClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').addClass('active');
  });
</script>
<style>
  .nav-item.active {
    background-color: #fce8e6;
    font-weight: bold;
  }

  .nav-item.active a {
    color: #d93025;
  }

  .nav-link-text {
    padding-left: 10%;
  }

  #side-navbar ul>li>a {
    padding: 8px 15px;
  }

  #side-navbar {
    height: 600px;
  }
</style>

<ul class="nav flex-column">
<li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
        class="material-icons">line_style</i> <span class="nav-link-text">@lang('Reports')</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('report/individual') }}"><i class="material-icons">developer_board</i> <span class="nav-link-text">@lang('Individual')</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('report/all') }}"><i class="material-icons">developer_board</i> <span
            class="nav-link-text">@lang('All Network')</span></a>
      </li>
     
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('roles.index') }}"><i class="material-icons">class</i> <span class="nav-link-text"> @lang('Roles')</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('imp') }}"><i class="material-icons">class</i> <span class="nav-link-text"> @lang('Impersonate')</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('schools.index') }}"><i class="material-icons">class</i> <span class="nav-link-text"> @lang('Manage Schools ')</span></a>
  </li>
      
    
    </ul>
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default" style="border-top: 0px;">
                <div class="panel-body">
                <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
            @include('schools.form')
                    <h4>@lang('School List')</h4>
                    <h4>@lang('Manage Departments, Classs, Sections, Student Promotion, Course')</h4>
          
            @foreach($schools->chunk(3) as  $chunk)
            <div class="row">
            
            @foreach ($chunk as $school)
                     <div class="col-md-4 mb-3 ">
                    <div class="card  h-100">
                    <div class="card-body text-center bg-info text-white ">
                        <h3 class="card-title">{{$school->name}}</h3>
                        <p>{{$school->code}}</p>
                        <p class="card-text">{{$school->about}}</p>
                       <p class="card-text">{{$school->campus_name}}</p>
                        <a  role="button" href="{{ route('schools.edit', $school) }}" dusk="edit-school-link" class="btn btn-info btn-sm">@lang('Edit')</a>
                        <a href="{{url('register/admin/'.$school->id.'/'.$school->code)}}" class="btn btn-primary btn-sm">+ @lang('Create Admin')</a>
                        <a  href="{{url('school/admin-list/'.$school->id)}}" class="btn btn-success btn-sm">@lang('View Admins')</a>
                    </div>
                    </div>
                    </div>

                    @endforeach
                    </div>
                    @endforeach

                    {{ $schools->links() }}



               
            </div>
        </div> 
                    
                   
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>













   
@endsection
