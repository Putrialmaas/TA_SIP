@extends('layouts.app')
@section('style')
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="login-head-logo py-3">
                            <img src="assets/img/logosmk.png" width="60" height="60" alt="logo" />
                        </div>
                        <div class="text-lg">
                            <p>Sistem Informasi Prakerin SMKN 1 Adiwerna</p>
                        </div>

                    </div>

                    <div class="card-body">
                        <form method="get" action="{{ route('siswa.dashboard') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="nis"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NIS') }}</label>

                                <div class="col-md-6">
                                    <input id="nis" type="nis"
                                        class="form-control @error('nis') is-invalid @enderror" name="nis"
                                        value="{{ old('nis') }}" required autocomplete="nis" autofocus>

                                    {{-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}


                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" href="/home">
                                        {{ __('Login') }}
                                    </button>

                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
