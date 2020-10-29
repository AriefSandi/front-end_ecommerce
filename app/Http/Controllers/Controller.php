<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /* view  */
    public function v_dashboard(){
        return view('menu.banyak');
    }
    public function v_beras(){
        return view('menu.beras');
    }
    public function v_detail1(){
        return view('detail.beras1');
    }
    public function v_detail2(){
        return view('detail.beras2');
    }
    public function v_cart(){
        return view('cart.shopping-cart');
    }
    public function v_cart1(Request $xx){
        $a =  $xx ->input('jumlah');
        $b = 25000;
        $c = $a*$b;
        echo $c;
    }

    public function v_checkout1(){
        return view('checkout.checkout1');
    }
    public function v_checkout2(){
        return view('checkout.checkout2');
    }
    public function v_checkout3(){
        return view('checkout.checkout3');
    }
    public function v_checkout4(){
        return view('checkout.checkout4');
    }
    public function v_co(){
        return view('customer.customer-order');
    }
    public function v_cw(){
        return view('customer.customer-wish');
    }
    public function v_ca(){
        return view('customer.customer-account');
    }
}
