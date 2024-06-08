@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 160px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class=" text-center">
                        <img src="https://account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" alt=""
                            width="150px">
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        placeholder="Enter your name" value="{{ old('name') }}" required
                                        autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="Enter your email address" value="{{ old('email') }}" required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Enter your password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        placeholder="Enter your Confirm Password" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0 d-flex justify-content-center">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Đăng Ký') }}
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
