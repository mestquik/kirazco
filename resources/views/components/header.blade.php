<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">

            <div class="row">
                <div class="col-sm-9 col-md-7 py-4">
                </div>
                <div class="col-sm-3 offset-md-1 py-4">
                    <h4 class="text-white">İşlemler</h4>
                    <ul class="list-unstyled">
                        @auth()
                            <li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Çıkış Yap</button>
                                </form></li>
                        @endauth

                            @guest()
                                <li><a href="{{route('login')}}" class="text-white">Giriş Yap</a></li>
                                <li><a href="{{route('register')}}" class="text-white">Üye Ol</a></li>
                            @endguest

                        <li><a href="{{route('homepage')}}" class="text-white">Ürünler</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-dark bg-dark box-shadow">

        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>TestCase-Kirazco</strong>
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        </div>
    </div>
    @auth()
    <div class="m-5 text-right">
        {{\Illuminate\Support\Facades\Auth::user()->name}}
    </div>
    @endauth
    <div class=" text-right mr-5 my-3 ">
        <i class="fa-solid fa-cart-shopping bg-transparent" style="font-size: 25px"></i>
        <div class="mb-0 ms-2 btn btn-primary"><span> @livewire('cart-counter') </span></div>
    </div>


</header>
