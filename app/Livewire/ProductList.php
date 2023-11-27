<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{

    public $products;
    public $sayi = 1;

    public function mount()
    {
        $this->products = Product::with('category')->get();

    }

    public function render()
    {

        return view('livewire.product-list',['products'=>$this->products]);
    }


    public function filterByCategories($id)
    {
        return $this->products = Product::where('category_id',$id)->with('category')->get();
    }

    public function filter($value = null)
    {



        if ($value == 'cheapest')
        {

            $this->products = $this->products->sortBy('price');
        }
        else if($value == 'expensive')
        {
            $this->products = $this->products->sortByDesc('price');
        }
        else if($value == 'newest')
        {
            $this->products = $this->products->sortBy('created_at');
        }
        else if($value == 'oldest')
        {
            $this->products = $this->products->sortByDesc('created_at');
        }


    }
}
