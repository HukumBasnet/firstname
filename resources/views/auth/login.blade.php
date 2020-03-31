@extends('layouts.app')

@section('title', __('Login'))
<style>
    .style{
        height: 100%;
        background: #195182;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        justify-content: center;
    }
    .flexalign{
        align-self: center;
        padding-bottom:10px; 
    }
    .border{
        border: 1px solid gray;
        margin-bottom: 10px;
        border-radius: 5px;
    }
    .btn {
        width:100%
    }

    .linka{
            color: white;
            background:red;
    }

    .loginstyle{
        margin-bottom: 10px;
        color: white;
        background:green;
    }
</style>

@section('content')
<div class="container">
    <div class="row style" >
            <div class="flexalign" >
                <img  style="height: 75px; width:100px; " src="{{url('stream.jpg')}}"/>&nbsp;
              {{-- <h1> {{ config('app.name') }}</h1>   --}}
            </div>
            <br>
            
        <div class="col-md-4  flexalign" >
            <div >
                {{-- <div class="page-panel-title">@lang('Login')</div> --}}
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="border">
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                {{-- <label for="email" class="col-md-4 control-label">@lang('E-Mail Or Phone Number')</label> --}}
    
                                <div class="">
                                    <input id="email" type="text" class="form-control" placeholder="Username" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                {{-- <label for="password" class="col-md-4 control-label">@lang('Password')</label> --}}
    
                                <div class="">
                                    <input id="password" type="password" placeholder="password" class="form-control" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                       
                        {{--
                        <div class="">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('Remember Me')
                                    </label>
                                </div>
                            </div>
                        </div>
                        --}}
                        <div class="">
                            {{-- <div class="col-md-8 col-md-offset-4"> --}}
                                <button type="submit" class=" btn loginstyle" style="">
                                    @lang('Login')
                                </button>
                                <br>

                                
                                <a  href="{{ route('password.request') }}">
                                   
                                    <button  class=" btn linka">
                                        @lang('Forgot Your Password?')
                                    </button>
                                </a>
                                --}}
                            {{-- </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
