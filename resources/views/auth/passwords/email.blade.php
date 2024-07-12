@extends('layouts.app')
@section('title', __('Reset Password'))
@section('content')
    <div class="container auth ">
        <div class="row py-5 justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header px-4">{{ __('Reset Password') }}</div>

                    <div class="card-body p-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class=" mb-3">
                                <label for="email" class=" col-form-label ">{{ __('Email Address') }}</label>

                                <div class="">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class=" mb-0">
                                <div class="">
                                    <button type="submit" class="btn btn-green">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
