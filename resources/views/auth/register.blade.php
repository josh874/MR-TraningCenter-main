@extends('HomeM')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5" style="margin-bottom: 85px;">
            <div class="shadow-sm p-1 mb-2 bg-body rounded"><strong>User Registration !</strong></div>
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber">
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" required autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group input-group-xs row mb-2">
                            <label for="sex" class="col-sm-4 col-form-label text-md-end">{{ __('Sex') }}</label>
                            <div class="col-sm-3 mx-2 form-group">
                                 <select class="form-select" id="sex" name="sex">
                                    <option>Male</option>
                                    <option>Female</option>                                  
                                 </select>
                            </div>
                        </div>

                        <div class="input-group input-group-xs row mb-2">
                            <label for="role" class="col-sm-4 col-form-label text-md-end">{{ __('Role') }}</label>
                            <div class="col-sm-3 mx-2 form-group">
                                 <select class="form-select" id="role" name="role">
                                    <option>Manager</option>
                                    <option>Teacher</option> 
                                    <option>Coordinator</option>
                                    <option>Reception</option>                                  
                                 </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="profile_photo" class="col-md-4 col-form-label text-md-end">{{ __('Profile_Photo') }}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('profile_photo') is-invalid @enderror" name="profile_photo" id="profile_photo" type="file">
                                @error('profile_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                        <div class="row mb-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
