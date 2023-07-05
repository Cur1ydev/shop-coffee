<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use App\Interface\Client\HomeInterface;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    protected $home;

    public function __construct(HomeInterface $home)
    {
        $this->home = $home;
    }

    public function index()
    {
        $listProduct = $this->home->ListProduct();
        $category = $this->home->ListCategory();
        $banner = $this->home->ListBanner();
        return view('client.home.index', compact('listProduct', 'category','banner'));
    }
}
