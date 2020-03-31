@extends('layouts.app')

@section('title', __('Edit School'))

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="text-center">@lang('Edit') Stream-School</h2>
          

            <form class="form-horizontal" action="{{ route('schools.update', $school) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('school_name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">@lang('School Name')</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$school->name}}" placeholder="@lang('School Name')" disabled>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('campus_name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">@lang('Campus Name')</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="campus_name" value="{{ $school->campus_name }}" placeholder="@lang('Campus Name')" required>

                            @if ($errors->has('campus_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('campus_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                       <div class="form-group{{ $errors->has('fno') ? ' has-error' : '' }}">
                        <label for="fno" class="col-md-4 control-label">@lang('F.A(Fname)')</label>

                        <div class="col-md-6">
                            <input id="fno" type="text" class="form-control" name="fno" value="{{ $school->fno }}" placeholder="@lang('F.A (Fname)')" required>

                            @if ($errors->has('fnno'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fno') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                   
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">@lang('Email')</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control" name="email" value="{{ $school->email }}" placeholder="@lang('Email')" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('FA(No) ') ? ' has-error' : '' }}">
                        <label for="fano" class="col-md-4 control-label">@lang('F.A (No)')</label>

                        <div class="col-md-6">
                            <input id="fano" type="text" class="form-control" name="fano" value="{{ $school->fano }}" placeholder="@lang('F.A(No)')" required>

                            @if ($errors->has('fano'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fano') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                   
                    <div class="form-group{{ $errors->has('land_line') ? ' has-error' : '' }}">
                        <label for="land_line" class="col-md-4 control-label">@lang('Land Line')</label>

                        <div class="col-md-6">
                            <input id="land_line" type="text" class="form-control" name="land_line" value="{{ $school->land_line }}" placeholder="@lang('Land Line')" required>

                            @if ($errors->has('land_line'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('land_line') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                   
                   


                  
               
              

                
                   
             

                  

                   
                    <div class="form-group{{ $errors->has('school_level') ? ' has-error' : '' }}">
                        <label for="school_level" class="col-md-4 control-label">@lang('School Level')</label>

                        <div class="col-md-6">
                            
                             <select id="school_level" type="text" class="form-control" name="school_level" value="{{ $school->school_level }}" placeholder="@lang('School Level')" required>
                             <option value='pre'>Pre</option>
                             <option value="primary">primary</option>
                             <option value="comprehensive">comprehensive</option>
                             </select>
                            @if ($errors->has('school_level'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('school_level') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                 
                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="city" class="col-md-4 control-label">@lang('City')</label>

                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control" name="city" value="{{ $school->city }}" placeholder="@lang('City')" required>

                            @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                     
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="adddress" class="col-md-4 control-label">@lang('Address')</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address" value="{{ $school->address }}" placeholder="@lang('Address')" required>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>


                    </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <a href="{{ route('schools.index') }}" class="btn btn-primary">@lang('Back')</a>
                        <button type="submit" class="btn btn-danger">@lang('Save')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
