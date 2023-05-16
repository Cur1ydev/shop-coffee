<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinceOrder extends Model
{
    use HasFactory;

    protected $table = 'province_order';
    protected $fillable = [
        'name'
    ];

    public function addressOrder()
    {
        return $this->hasMany(AddressOrder::class, 'id_province_order');
    }
}
