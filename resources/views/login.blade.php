@extends('layouts.app')

@section('content')
<div class="container">
    <div class="background"></div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="class" style="position:relative">
                <div class="kotak_login" style="color : white; display:flex;">
                
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <img src="{{url('css/user.png')}}" style ="">
                        <div class = "text_login">
                        {{ __('SELAMAT DATANG') }}
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="form_login">
                            <label for="email" class="col-md-4 col-form-label text-md-end ">{{ __('Username') }}</label>
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <div class="form_login">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="submit" class="tombol_login" value="LOGIN">
                                {{ __('Belum punya akun?') }}
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="">
                                    {{ __('Daftar') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
