@extends('layouts.app')
@section('content')
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Update Profile Info</h3>
                </div>
                <div class="box-body">
                    <form method='post' action="{{url('profile_update')}}">
                        @csrf
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ $user->name }}" autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="email" type="text"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ $user->email }}" autocomplete="requirements">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="text"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" value="{{ $user->username }}" autocomplete="requirements">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success" style="margin-top:10px">Update</button>
                    </form>
                  </div>

                </div>
            </div>
        </div>
@endsection
