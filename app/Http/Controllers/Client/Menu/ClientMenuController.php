<?php

namespace App\Http\Controllers\Client\Menu;

use App\Http\Controllers\Controller;
use App\Interface\Client\MenuInterface;
use Illuminate\Http\Request;

class ClientMenuController extends Controller
{
    protected $menu;

    public function __construct(MenuInterface $menu)
    {
        $this->menu = $menu;
    }

    public function Menu()
    {
        $category=$this->menu->GetAllCategory();
        $product=$this->menu->GetAllProduct();
        return view('client.menu.index',compact('product','category'));
    }
}
