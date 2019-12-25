@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                              <div class="card-body">
                                  <form method="POST" action="{{ route('register_create') }}">
                                      @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"  placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                                @if(Auth::user() && Auth::user()->role_id == 1)
                    									<div class="form-group col-md-6">
                    											<label>Role</label>
                    											<select name="role_id" class="form-control">
                    													@foreach($roles as $role)
                    															<option value="{{ $role->id }}">{{ $role->role_name}}</option>
                    													@endforeach


                    											</select>
                    									</div>
@endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>





                  </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
