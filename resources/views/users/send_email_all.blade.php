@extends('layouts.app')

@section('content')


<h1 class="text-center">Send Email To All - Dev-Team-MM-Mailer</h1>
<hr>


<div class="container mt-2 mb-2 pd-2">
    <form action="{{ route('store.alluser.email') }}" method="POST">
        @csrf
        <div class="form-group mt-2 mb-2 pd-2">
            <label for="Greeting">Greeting</label>
            <input type="text" class="form-control" name="greeting" required placeholder="Greeting">
        </div>

        <div class="form-group mt-2 mb-2 pd-2">
            <label for="Body">Body</label>
            <input type="text" class="form-control" name="body" required placeholder="Body">
        </div>

        <div class="form-group mt-2 mb-2 pd-2">
            <label for="actiontext">Action text</label>
            <input type="text" class="form-control" name="actiontext" required placeholder="Action text">
        </div>

        <div class="form-group mt-2 mb-2 pd-2">
            <label for="actionurl">Action url</label>
            <input type="text" class="form-control" name="actionurl" required placeholder="Action url">
        </div>

        <div class="form-group mt-2 mb-2 pd-2">
            <label for="endText">End text</label>
            <input type="text" class="form-control" name="endtext" required placeholder="End text">
        </div>


        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>

@endsection
