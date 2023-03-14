@extends('layouts.app')

@section('content')


<h1 class="text-center">Users - Dev-Team-MM-Mailer</h1>
<hr>


<div class="container mt-2 mb-2 pd-2">

    <a href="{{ route('send.email.view.all') }}" class="btn btn-primary">Send Email To All Users</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">User</th>
            <th scope="col">Email</th>
            <th scope="col">Send Email</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('send.email.view', $user->id) }}" class="btn btn-success">Send  Email</a>
                </td>
              </tr>
            @endforeach


        </tbody>
      </table>
</div>

@endsection
