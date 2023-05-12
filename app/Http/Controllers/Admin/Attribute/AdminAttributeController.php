<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use App\Interface\AttributeInterface;
use Illuminate\Http\Request;

class AdminAttributeController extends Controller
{
    protected $attribute;

    public function __construct(AttributeInterface $attribute)
    {
        $this->attribute = $attribute;
    }

    public function List()
    {
        $List = $this->attribute->List();
        return view('admin.attribute.list', compact('List'));
    }
}
