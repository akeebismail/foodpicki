<?php

namespace App\Http\Controllers;

use App\Food\Order\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct(

    )
    {
        $this->middleware(['auth']);
    }


}
