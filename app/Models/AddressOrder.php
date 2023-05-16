<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressOrder extends Model
{
    use HasFactory;

    protected $table = 'address_order';
    protected $fillable = [
        'id_province_order',
        'address'
    ];

    public function provinceOrder()
    {
        return $this->belongsTo(ProvinceOrder::class, 'id_province_order');
    }
}
