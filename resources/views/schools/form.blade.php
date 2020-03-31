<button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#schoolModal" dusk="create-school-button">
    + @lang('Create School')
</button>

<!-- Modal -->
<div class="modal fade" id="schoolModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <form class="form-horizontal" method="POST" action="{{ route('schools.store') }}">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">@lang('Create School')</h4>
                </div>
                <div class="modal-body">
                <div class="col-md-6">
                <div class="form-group{{ $errors->has('school_name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">@lang('School Name')</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="Stream-School" placeholder="@lang('School Name')" readonly>

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
                            <input id="name" type="text" class="form-control" name="campus_name" value="{{ old('campus_name') }}" placeholder="@lang('Campus Name')" required>

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
                            <input id="fno" type="text" class="form-control" name="fno" value="{{ old('fno') }}" placeholder="@lang('F.A (Fame)')" required>

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
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="@lang('Email')" required>

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
                            <input id="fano" type="text" class="form-control" name="fano" value="{{ old('fano') }}" placeholder="@lang('F.A(No)')" required>

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
                            <input id="land_line" type="text" class="form-control" name="land_line" value="{{ old('land_line') }}" placeholder="@lang('Land Line')" required>

                            @if ($errors->has('land_line'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('land_line') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                   
                  


                  
                </div>
                <div class="col-md-6">

                
                   
             

                  

                   
                    <div class="form-group{{ $errors->has('school_level') ? ' has-error' : '' }}">
                        <label for="school_level" class="col-md-4 control-label">@lang('School Level')</label>

                        <div class="col-md-6">
                            
                             <select id="school_level" type="text" class="form-control" name="school_level" value="{{ old('school_level') }}" placeholder="@lang('School Level')" required>
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
                            <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="@lang('City')" required>

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
                            <input id="address" type="text" class="form-control" name="fano" value="{{ old('address') }}" placeholder="@lang('Address')" required>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>


                    </div>

                    <!--<div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">-->
                    <!--    <label for="about" class="col-md-4 control-label">@lang('About')</label>-->

                    <!--    <div class="col-md-6">-->
                    <!--        <textarea id="about" class="form-control" rows="3" name="about" placeholder="@lang('About School')" required>{{ old('about') }}</textarea>-->

                    <!--        @if ($errors->has('about'))-->
                    <!--            <span class="help-block">-->
                    <!--                <strong>{{ $errors->first('about') }}</strong>-->
                    <!--            </span>-->
                    <!--        @endif-->
                    <!--    </div>-->
                    <!--</div>-->

                    
               
                </div>
                   
                   
                 


                    <!-- <div class="form-group{{ $errors->has('medium') ? ' has-error' : '' }}">
                        <label for="medium" class="col-md-4 control-label">@lang('School Medium')</label>

                        <div class="col-md-6">
                            <select id="medium" class="form-control" name="medium">
                                <option selected="selected">@lang('Bangla')</option>
                                <option>@lang('English')</option>
                                <option>@lang('Hindi')</option>
                                <option>@lang('Spanish')</option>
                                <option>@lang('Chinese')</option>
                                <option>@lang('Arabic')</option>
                            </select> 

                            @if ($errors->has('medium'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('medium') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> -->

               

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                    <button type="submit" class="btn btn-primary">@lang('Save changes')</button>
                </div>
            </div>
        </form>
    </div>
</div>
