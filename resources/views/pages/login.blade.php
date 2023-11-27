@extends('layouts.app')
@section('content')
    <div class="container my-5">
<form class="form-signin" method="POST" action="{{route('store')}}">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Giriş Yap</h1>
    <label for="inputEmail" class="sr-only">Email Adresin</label>
    <input type="email" id="inputEmail" name="email" class="form-control my-2" placeholder="Email addresi" required autofocus value="{{old('email')}}">
    <label for="inputPassword" class="sr-only">Şifre</label>
    <input type="password" id="inputPassword" name="password" class="form-control my-2" placeholder="Şifre" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
    @if($errors->any())
        <code>Giriş Bilgilerinizi tekrar kontrol ediniz</code>
    @endif
</form>
    </div>
@endsection
