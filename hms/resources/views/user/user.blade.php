@extends('layouts.app')
@section('content')




<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
          <th scope="col">Updated </th>

        </tr>
      </thead>
      <tbody>

        @foreach($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>
        </tr>
        @endforeach


      </tbody>
      </table>

    </div>

  </div>

</div>
@endsection
