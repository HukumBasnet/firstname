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
            
            
              <div class="page-panel-title">@lang('Add registration')</div>
              <div class="panel-body">
              @if(isset($registration))
              <form action="{{ @route('statement.save_registration', $registration->id) }}"  method="POST">
              @method('PUT')
@else
<form action="{{ @route('statement.save_registration')}}"  method="POST">
@endif

                            {{ csrf_field() }}

<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Name</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="name" value="{{old('name', $registration->name??null)}}" placeholder="Student Name" required="">

</div>
</div>





<div class="form-group">
<label for="title" class="col-md-4 control-label">registration Id</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="registration_id" value="{{old('registration_id', $registration->inquiry_id??null)}}" placeholder="registration Id" required="">

</div>
</div>



<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Mother Name</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="mother_name" value="{{old('mother_name', $registration->mother_name??null)}}" placeholder="Student Mother Name" required="">

</div>
</div>

<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Father Name</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="father_name" value="{{old('father_name', $registration->father_name??null)}}" placeholder="Student Father Name" required="">

</div>
</div>

<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Class</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="class" value="{{old('class', $registration->class??null)}}" placeholder="Student class" required="">

</div>
</div>



<div class="form-group">
<label for="title" class="col-md-4 control-label">Class</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="student_class" value="{{old('student_class', $registration->student_class??null)}}" placeholder="Class" required="">

</div>
</div>

<div class="form-group">
<label for="title" class="col-md-4 control-label">Number</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="number" value="{{old('number',  $registration->number??null)}}" placeholder="Number" required="">

</div>
</div>

<div class="form-group">
<label for="title" class="col-md-4 control-label">Registration Fee</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="fees" value="{{old('fees', $registration->fees??null)}}" placeholder="Registration Fee" required="">

</div>
</div>
<div class="form-group">
<label for="title" class="col-md-4 control-label">Registration Years</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="years" value="{{old('years', $registration->years??null)}}" placeholder="Registration Years" required="">

</div>
</div>
<div class="form-group">
<label for="title" class="col-md-4 control-label">Registraion Month</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="month" value="{{old('month', $registration->month??null)}}" placeholder="Registraion Month" required="">

</div>
</div>
<div class="form-group">
<label for="title" class="col-md-4 control-label">Registraion Class</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="r_class" value="{{old('r_class', $registration->r_class??null)}}" placeholder="Registration Class" required="">

</div>
</div>

<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Guardians Details</label>

<div class="col-md-6">
<textarea name="guardians_details" class="form-control">{{old('guardians_details', $registration->guardians_details??null)}}</textarea>


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



            
            <script>
            $(document).ready(function() {
                $('#registration').DataTable();
            } );
            </script>