<?php

namespace App\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductDetails extends Component
{
public $product;
    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function render()
    {


        return view('livewire.product-details',['product'])
            ->extends('layouts.app')
            ->section('content');
    }

    public function addCard()
    {
        $cart = Cart::content();
        foreach ($cart as $item) {
            if ($item->id == $this->product->id)
            {
                return session()->flash('error', $this->product->name.' ürünü sepette zaten var');
            }
        }
        Cart::add(
            ['id'=>$this->product->id,'name'=>$this->product->name,'price'=>$this->product->price,'qty'=>1]
        );




        $this->dispatch('cartUpdatedd');


        return session()->flash('message', $this->product->name.' ürünü sepete eklendi');
    }
}
