@extends('dashboard.layouts.app', ['class' => 'bg-secondary'])

@section('title','- Lock Screen')

@section('content')
  <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
    <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <h1 class="text-white">{{ __('Lockscreen') }}</h1>
            <p class="text-lead text-white">{{ __('Better to be safe than sorry.') }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>

  <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card card-profile bg-secondary mt-5">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <img src="{{ asset('dashboard') }}/img/theme/team-4.jpg" class="rounded-circle border-secondary">
              </div>
            </div>
          </div>
          <div class="card-body pt-7 px-5">
            <div class="text-center mb-4">
                <h3>{{ auth()->user()->name ?? 'Jessica Jones' }}</h3>
            </div>
            <form role="form" method="POST" action="{{ route('unlock') }}">
              @csrf
              <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                </div>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-2">{{ __('Unlock') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
