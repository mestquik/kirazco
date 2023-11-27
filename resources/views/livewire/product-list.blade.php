<div>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Kategoriler</h1>
            @foreach($categories as $category)
                <a wire:click.prevent="filterByCategories({{$category->id}})"  class="btn btn-primary text-white">
                    {{$category->name}}
                </a>

            @endforeach

        </div>
        <div class="dropdown my-5">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filtrelemeler
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a wire:click.prevent="filter('cheapest')" class="dropdown-item" href="#">En Ucuz</a>
                <a wire:click.prevent="filter('expensive')" class="dropdown-item" href="#">En Pahalı</a>
                <a wire:click.prevent="filter('newest')" class="dropdown-item" href="#">En Yeni</a>
                <a wire:click.prevent="filter('oldest')" class="dropdown-item" href="#">En Eski</a>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">


                @if($products)
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <p class="card-text">{{$product->name}}</p>
                                @if($product->category)
                                <p class="small">({{$product->category->name}})</p>
                                @endif
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" href="{{route('product.detail',$product->id)}}" class="btn btn-sm btn-outline-secondary">Görüntüle</a>
                                    </div>
                                    <small class="text-muted">{{$product->price}} TL</small>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                @endif

            </div>
            @if($products->count() == 0)
                <div class="alert alert-danger">
                    <p>Ürün Bulunmuyor</p>
                </div>
            @endif
        </div>
    </div>

</div>
