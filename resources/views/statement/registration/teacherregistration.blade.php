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
                <div class="page-panel-title">@lang('Teacher Registration Form')</div>
                <div class="panel-body">
                <form action="{{isset($edit) ? route('statement.editteacher',$edit->id)  : route('statement.teachrregistration')}}" method="POST">
                            {{ csrf_field() }}
                            @if(isset($edit))
                                {{ method_field('PUT')}}
                            @endif
                            <div class="row">
                                <div style="background:black; border:1px solid black; color:white;">
                                    <p> Personal Information</p>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Teacher's Name</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="name"
                                                 value="{{isset($edit) ? $edit->name : ''}}"
                                                placeholder="Teacher Name" >

                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Teacher Email</label>

                                        <div class="col-md-6">
                                            <input id="title" type="email" class="form-control" name="email"
                                                value="{{isset($edit) ? $edit->email : ''}}"
                                                placeholder="Teacher Email" required >
                                        </div>
                                    </div>
                                </div>
                               
                                
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Teacher Phone No</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="phone"
                                            value="{{isset($edit) ? $edit->phone : ''}}"
                                               
                                                placeholder="Teacher Contact No" >

                                        </div>
                                    </div>
                                </div>
                               
                                @if(!isset($edit))
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Teacher Password</label>

                                        <div class="col-md-6">
                                            <input id="title" type="password" class="form-control" name="password"
                                       
                                                placeholder="Teacher Password" required >

                                        </div>
                                    </div>
                                </div>
                             @endif

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Teacher Address</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="address"
                                        value="{{isset($edit) ? $edit->address : ''}}"
                                                placeholder="Teacher address" >

                                        </div>
                                    </div>
                                </div>
                               

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Gender</label>

                                        <div class="col-md-6">
                                            <input  type="radio" name="gender"
                                               value="male" @if(isset($edit) ? $edit->gender == 'male' : '') checked  @endif>Male
                                               <input type="radio" name="gender" value="female" @if(isset($edit) ? $edit->gender == 'female' : '')checked  @endif>Female

                                        </div>
                                    </div>
                                </div>
                               
                               

                                

                                </div>


                                <hr />

                                <div style="background:black; border:1px solid black; color:white;">
                                    <p> Job Information</p>
                                </div>

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Prefered Subjects</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="subjects"
                                            value="{{isset($edit) ? $edit->subjects : ''}}"
                                                placeholder="Write Preferedd Subjects">
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Teaching Experience</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="experience"
                                        value="{{isset($edit) ? $edit->experience : ''}}"
                                                placeholder="Teaching Experience Year" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Previous School Name</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="prevschool"
                                        placeholder="Previous School Name" value="{{isset($edit) ? $edit->prevschool : ''}}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <button type="submit" class="btn btn-danger">Save</button>
                                            </div>
                                        </div>


                        </form>

                </div>

            </div>
        </div>
    </div>
</div>






@endsection


