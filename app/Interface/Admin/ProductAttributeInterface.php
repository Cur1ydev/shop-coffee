<?php

namespace App\Interface\Admin;

interface ProductAttributeInterface
{
    public function List();

    public function GetById(array $id);

    public function Create(array $data);

    public function Update(array $data,$id);
    public function Delete($id);
}
