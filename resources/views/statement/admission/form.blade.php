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
                <div class="page-panel-title">@lang('Admission Form')</div>
                <div class="panel-body">
                <form action="{{route('statement.studentadmission')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div style="background:black; border:1px solid black; color:white;">
                                    <p> Personal Information</p>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Student Name</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="name"
                                                value="@if(!empty($students->name)) {{$students->name}} @endif"
                                                placeholder="Student Name" >

                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Student Email</label>

                                        <div class="col-md-6">
                                            <input id="title" type="email" class="form-control" name="email"
                                                value="@if(!empty($students->email)) {{$students->email}} @endif"
                                                placeholder="Student Email" required >
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Student Password</label>

                                        <div class="col-md-6">
                                            <input id="title" type="password" class="form-control" name="password"
                                               
                                                placeholder="Student Password" required >

                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row" style="margin-bottom: 10px;">
                                    <label for="title" class="col-md-4 control-label">Age</label>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="title" class="col-md-4 control-label">Age</label>

                                            <div class="col-md-6">
                                                <input id="title" type="text" class="form-control" name="age"
                                            placeholder="age" value="{{old('age')}}">

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <hr />

                                <div class="row" style="margin-bottom: 10px;">
                                    <label for="title" class="col-md-4 control-label">Date Of Birth</label>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="title" class="col-md-4 control-label">Day</label>

                                            <div class="col-md-8">
                                            <input id="title" type="text" class="form-control" name="d_day" value="{{old('d_day')}}"
                                                     placeholder="Day"
                                                    >

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="title" class="col-md-4 control-label">Month</label>

                                            <div class="col-md-8">
                                            <input id="title" type="text" class="form-control" name="d_month" value="{{old('d_month')}}"
                                                    
                                                    placeholder="Month">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="title" class="col-md-4 control-label">Year</label>

                                            <div class="col-md-8">
                                            <input id="title" type="text" class="form-control" name="d_year" value="{{old('d_year')}}"
                                                    
                                                    placeholder="Year">

                                            </div>
                                        </div>

                                    </div>


                                </div>


                                <hr />

                                <div style="background:black; border:1px solid black; color:white;">
                                    <p> Admission Information</p>
                                </div>

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Admission Required For</label>
                                        <div class="col-md-6">
                                            <select class='form-control class' name="class">
                                                <option value="">Select Class </option>
                                                @foreach($classes as $class)
                                                    <option value="{{$class->class_number}}">{{$class->class_number}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="playgroup" style="display:none;">

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group">
                                            <label for="title" class="col-md-4 control-label">Session For Play Group</label>

                                            <div class="col-md-6">
                                                <select class='form-control pgsession' name="session">

                                                    <option value="">Select Session </option>
                                                    <option value="march" @if(old('session') == 'march')selected @endif>March Session</option>
                                                    <option value="september" @if(old('session') == 'september') selected  @endif>September Session</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="playgroup_march" style="display:none;">
                                    <div class="row text-center">
                                        <label for="title" class="col-md-4 control-label"></label>
                                        <label for="title" class="col-md-4 control-label">When Is The Admission Required ?
                                        </label>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <label for="title" class="col-md-4 control-label">March Session </label>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title" class="col-md-6 control-label">This Year</label>

                                                <div class="col-md-6">
                                                    <input id="title" type="radio" class="form-control" name="year"
                                                        value="this_year">

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title" class="col-md-6 control-label">Next Year</label>

                                                <div class="col-md-6">
                                                    <input id="title" type="radio" class="form-control" name="year"
                                                        value="next_year">

                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <hr />
                                </div>



                                <div class="playgroup_september" style="display:none;">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <label for="title" class="col-md-4 control-label">September Session </label>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title" class="col-md-6 control-label">This Year</label>

                                                <div class="col-md-6">
                                                    <input id="title" type="radio" class="form-control" name="year"
                                                        value="next_year" placeholder="Year">

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title" class="col-md-6 control-label">Next Year</label>

                                                <div class="col-md-6">
                                                    <input id="title" type="radio" class="form-control" name="year"
                                                        value="this_year" placeholder="Month">

                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <hr />
                                </div>    

                                <div class="notplaygroup" style="display:none;">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <label for="title" class="col-md-4 control-label">When Is the admission Required ?
                                        </label>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title" class="col-md-6 control-label">This Year</label>

                                                <div class="col-md-6">
                                                    <input id="title" type="radio" class="form-control" name="year"
                                                        value="next_year" placeholder="Year">

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title" class="col-md-6 control-label">Next Year</label>

                                                <div class="col-md-6">
                                                    <input id="title" type="radio" class="form-control" name="year"
                                                        value="this_year" placeholder="Month">

                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <hr />
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Mailing Address</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="mailing_address"
                                                
                                                placeholder="Mailing Address">

                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Email</label>

                                        <div class="col-md-6">
                                        <input id="title" type="text" class="form-control" value="{{old('email')}}" name="email"
                                                 placeholder="Email">

                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Phone No.</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="phone"
                                               value="@if(!empty($students->number)){{$students->number}} @endif"  placeholder="Phone No.">

                                        </div>
                                    </div>
                                </div>


                                

                                <div style="background:black; border:1px solid black; color:white;">
                                    <p> Parent's / Guardian's Information</p>
                                </div>



                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Student Father Name</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="father_name"
                                                value="@if(!empty($students->father_name))  @endif"
                                                placeholder="Student Father Name">

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">CNIC No:</label>

                                        <div class="col-md-6">
                                        <input id="title" type="text" class="form-control" name="father_cnic_no" value="{{old('father_cnic_no')}}"
                                               
                                                placeholder="CNIC No">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Father's Occupation:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="occupation"
                                                value="{{old('occcupation')}}"
                                                placeholder="Father's Occupation">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Address:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="f_address"
                                                value="{{old('f_address')}}"
                                                placeholder="Father Address">

                                        </div>
                                    </div>

                                </div>


                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Student Mother Name</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="mother_name"
                                                value="{{old('mother_name')}}"
                                                placeholder="Student Mother Name">

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">CNIC No:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="mother_cnic_no"
                                                value="{{old('mother_cnic_no')}}"
                                                placeholder="CNIC No">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Mother's Occupation:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="mother_occupation"
                                                value="{{old('mother_occcupation')}}"
                                                placeholder="Mother's Occupation">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Address:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="m_address"
                                                value="{{old('m_address')}}"
                                                placeholder="Mother Address">

                                        </div>
                                    </div>

                                </div>


                               


                                <div class="row">
                                    <div style="background:black; border:1px solid black; color:white;">
                                        <p> Guardian's Information IF Applicable:</p>
                                    </div>
                                </div>


                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Guardian's Name</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="guardian_name"
                                                value="{{old('guardian_name')}}"
                                                placeholder="Student Guardain Name">

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">CNIC No:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="guardian_cnic_no"
                                                value="{{old('guardian_cnic_no')}}"
                                                placeholder="CNIC No">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Guardain's Occupation:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="guardian_occupation"
                                                value="{{old('guardian_occupation')}}"
                                                placeholder="Guardian's Occupation">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Address:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="g_address"
                                                value="{{old('g_address')}}"
                                                placeholder="Guardian Address">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4 control-label">Relations to Student:</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="relation"
                                                value="{{old('relation')}}"
                                                placeholder="Define Relation with student">

                                        </div>
                                    </div>

                                </div>



                                <div class="row">
                                    <div style="background:black; border:1px solid black; color:white;">
                                        <p> Sibling Informations.</p>
                                    </div>
                                </div>

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="table table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Brother</th>
                                                    <th>Sister</th>
                                                    <th>Student's ID </th>
                                                    <th>Campus Name/City</th>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="brother[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="sister[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="user_id[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="campus[]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="brother[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="sister[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="user_id[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="campus[]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="brother[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="sister[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="user_id[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="campus[]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="brother[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="sister[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="user_id[]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="campus[]">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>


                                <div class="row">
                                    <div style="background:black; border:1px solid black; color:white;">
                                        <p> Checklist.</p>
                                    </div>
                                </div>


                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="title" class="col-md-6 control-label">I have pasted photograph of
                                            the student with the Admission Form. </label>

                                        <div class="col-md-6">
                                            <input id="checklist_one" type="checkbox" class="form-control" name="checklist_one"
                                                value="1" >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-6 control-label">I have attached photocopies of
                                            CNC (Father and Mother/Buardians) </label>

                                        <div class="col-md-6">
                                            <input id="checklist_two" type="checkbox" class="form-control" name="checklist_two"
                                                value="1">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="col-md-6 control-label">I have pasted photograph of
                                            the student with the Admission Form. </label>

                                        <div class="col-md-6">
                                            <input id="checklist_three" type="checkbox" class="form-control" name="checklist_three"
                                                value="1" >
                                        </div>
                                    </div>
                                </div>




                            </div>

                            <div class="row">
                                <div style="background:black; border:1px solid black; color:white;">
                                    <p> For Office Use Only.</p>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="form-group">
                                    <label for="title" class="col-md-6 control-label">Is the student beign called for
                                        Admission Interview?</label>

                                    <div class="col-md-6">
                                        <input id="office_one" type="checkbox" class="form-control" name="office_one"
                                            value="1">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="col-md-6 control-label">Is their any information missing
                                        in the Admission Form ?</label>

                                    <div class="col-md-6">
                                        <input id="office_two" type="checkbox" class="form-control" name="office_two"
                                            value="1">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="col-md-6 control-label">Have thee parents/guardian been
                                        informed of Admission Test and interview date?</label>

                                    <div class="col-md-6">
                                        <input id="office_three" type="checkbox" class="form-control" name="office_three"
                                            value="1" >

                                    </div>
                                </div>
                            </div>





                            <div class="row" style="margin-bottom: 10px;">
                                <div class="form-group">
                                    <label for="admissiontestdate" class="col-md-4 control-label">Admission Test Date</label>

                                    <div class="col-md-6">
                                        <input id="admissiontestdate" type="date" class="form-control" name="admission_test_date"
                                            value="{{old('admission_test_date')}}"
                                            >

                                    </div>

                                    <div class="form-group">
                                        <label for="admissiontesttime" class="col-md-4 control-label">Admission Test Time</label>

                                        <div class="col-md-6">
                                            <input id="admissiontesttime" type="time" class="form-control" name="admission_test_time"
                                                value="{{old('admission_test_time')}}"
                                                 >

                                        </div>

                                        <div class="form-group">
                                            <label for="interviewtime" class="col-md-4 control-label">Interview Time</label>

                                            <div class="col-md-6">
                                                <input id="title" type="time" class="form-control" name="interview_time"
                                                    value="{{old('interview_time')}}"
                                                     >

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
@section('formscript')
<script>
   $('.class').on('change',function(){
        var value = $(this).val();
        if(value == 'PG'){
            $('.playgroup').css('display','block');
            $('.notplaygroup').css('display','none');
        }else{
            $('.notplaygroup').css('display','block');
            $('.playgroup').css('display','none');
        }
   });  

//    
    $('.pgsession').on('change',function(){
        var value = $(this).val();
       if(value == 'march')
       {
           $('.playgroup_march').css('display','block');
           $('.playgroup_september').css('display','none');
       }else{
           $('.playgroup_september').css('display','block');
           $('.playgroup_march').css('display','none');
       }
    });
</script>
@endsection



<script>
    $(document).ready(function () {
        $('#inquiry').DataTable();
    });

</script>

