<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <a href="{{route('homepage')}}">Anasayfa</a>

                                    <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">@if($product->category) {{$product->category->name}}@endif</span>
                                        <h5 class="text-uppercase">{{$product->name}}</h5>
                                        <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$product->price}}</span>
                                        </div>
                                    </div>
                                    <div wire:click.prevent="addCard" class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">
                                            Sepete Ekle</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
