@extends('layouts.app')
@section('content')

    <div class="container my-5">
        <form class="form-signin" method="POST" action="{{route('register')}}">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Üye ol</h1>
            <label for="inputEmail" class="sr-only">İsim</label>
            <input type="text" name="name" class="form-control my-2" placeholder="İsim" required autofocus>
            <label for="inputEmail" class="sr-only">Email Adresin</label>
            <input type="email" id="inputEmail" name="email" class="form-control my-2" placeholder="Email addresi" required autofocus>
            <label for="inputPassword" class="sr-only">Şifre</label>
            <input type="password" id="inputPassword" name="password" class="form-control my-2" placeholder="Şifre" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Üye ol</button>
        </form>
    </div>
@endsection
