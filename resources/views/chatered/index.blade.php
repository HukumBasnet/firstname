@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('chatered.create') }}"> Create New Chatered Account</a>
                </div>
            </div>
        </div>
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
       <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Type</th>
                <th>Is_Parent</th>
                <th>Is_Student</th>
                <th>Is_Teacher</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($chatered as $chatered)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $chatered->name }}</td>
                <td>{{ $chatered->description }}</td>
                <td>{{ $chatered->type }}</td>
                <td>{{ $chatered->is_parent }}</td>
                <td>{{ $chatered->is_student }}</td>
                <td>{{ $chatered->is_teacher }}</td>
                


                <td>
                    <form action="{{ route('chatered.destroy',$chatered->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('chatered.show',$chatered->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('chatered.edit',$chatered->id) }}">Edit</a>
       
                        {{-- @csrf
                        @method('DELETE') --}}
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
      
    </div>
    
      
@endsection