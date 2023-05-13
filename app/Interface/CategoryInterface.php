<?php

namespace App\Interface;

interface CategoryInterface
{
    public function List();

    public function GetById($id);

    public function Create(array $data);

    public function Update(array $data, $id);
    public function Delete($id);
}
