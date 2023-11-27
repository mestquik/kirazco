<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners  = ['cartUpdatedd'=>'render'];

    public function render()
    {

        $cart_count = Cart::content()->count();
        $cart_total = Cart::total();
        return view('livewire.cart-counter',compact('cart_count','cart_total'));
    }
}
