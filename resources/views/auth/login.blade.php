@extends('layout')

@section('content')
    <div>
        <h2 class="text-center pt-5 pb-2">Login Page</h2>
    </div>
    <div class="px-5 d-flex align-items-center justify-content-center">
        <form class="w-50 px-5 border border-1 py-3 rounded" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div>
                <p>do not have account! <a href="sign-up">sign up</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection