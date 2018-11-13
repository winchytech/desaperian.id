@extends('layouts.app')

@section('content')
<div class="container-fluid loginregform">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome</div>
                       
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="input-group-prepend">
                                 <span class="input-group-text col-xs-4 col-4 col-sm-4 col-form-label text-md-right"><i class="fas fa-user"></i></span>
                            </div>


                            <div class="col-xs-8 col-6 col-sm-6 col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group-prepend">
                                <span class="input-group-text col-xs-4 col-4 col-sm-4 col-form-label text-md-right"><i class="fas fa-key"></i></span>
                            </div>

                            <div class="col-xs-8 col-6 col-sm-6 col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-6 col-6 col-sm-9 col-md-6 offset-md-4 offset-xs-4 offset-4 offset-sm-4 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-xs-4 col-8 col-sm-2 col-md-8 offset-xs-8 offset-4 offset-sm-10 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                {{session('pesan')}}
            </div>
        </div>
    </div>
</div>
@endsection
