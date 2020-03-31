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
            
            
              <div class="page-panel-title">@lang('Add Inquiry')</div>
              <div class="panel-body">
              @if(isset($inquiry))
              <form action="{{ @route('statement.save_inquiry', $inquiry->id) }}"  method="POST">
              @method('PUT')
@else
<form action="{{ @route('statement.save_inquiry')}}"  method="POST">
@endif

                            {{ csrf_field() }}

<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Name</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="name" value="{{old('name', $inquiry->name??null)}}" placeholder="Student Name" required="">

</div>
</div>





<div class="form-group">
<label for="title" class="col-md-4 control-label">Inquiry Id</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="inquiry_id" value="{{old('inquiry_id', $inquiry->inquiry_id??null)}}" placeholder="Inquiry Id" required="">

</div>
</div>
<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Class</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="class" value="{{old('class', $inquiry->class??null)}}" placeholder="Student class" required="">

</div>
</div>


<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Mother Name</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="mother_name" value="{{old('mother_name', $inquiry->mother_name??null)}}" placeholder="Student Mother Name" required="">

</div>
</div>

<div class="form-group">
<label for="title" class="col-md-4 control-label">Student Father Name</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="father_name" value="{{old('father_name', $inquiry->father_name??null)}}" placeholder="Student Father Name" required="">

</div>
</div>

<div class="form-group">
<label for="title" class="col-md-4 control-label">Number</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="number" value="{{old('number', $inquiry->number??null)}}" placeholder="Number" required="">

</div>
</div>



<div class="form-group">
<label for="title" class="col-md-4 control-label">Class</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="student_class" value="{{old('student_class', $inquiry->student_class??null)}}" placeholder="Class" required="">

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
                $('#inquiry').DataTable();
            } );
            </script>