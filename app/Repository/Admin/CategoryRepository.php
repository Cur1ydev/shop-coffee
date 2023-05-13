<?php

namespace App\Repository\Admin;

use App\Interface\Admin\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{
    public function List()
    {
        return Category::all();
    }

    public function GetById($id)
    {
        return Category::find($id);
    }

    public function Create(array $data)
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->status = $data['status'];
        $category->description = $data['description'];
        return $category->save();
    }

    public function Update(array $data, $id)
    {
        return Category::find($id)->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'status' => $data['status'],
            'description' => $data['description']
        ]);
    }

    public function Delete($id)
    {
        return Category::find($id)->delete();
    }
}
