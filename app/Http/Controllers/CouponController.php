<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function show($couponId)
{
    $coupon = Coupon::find($couponId);

    return view('coupon.show', ['coupon' => $coupon]);
}

}
