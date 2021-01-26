<?php

namespace App\Http\Controllers\Site;

use App\Companies;
use App\Footer;
use App\Http\Controllers\Controller;
use App\Pricing;
use App\Title;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {

        $allPricing =Pricing::all();
        $footer= Footer::all();
        $titles=Title::all();

        return view('Site.pages.Pricing.index',compact(
            'allPricing',
            'footer',
            'titles'
        ));

    }
}
