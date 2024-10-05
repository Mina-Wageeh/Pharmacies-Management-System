<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    protected $guarded = [];

    protected $casts =
    [
        'id' => 'integer',
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
        'deleted_at' => 'date:Y-m-d'
    ];

    //Relations
    public function inventories() //Each Pharmacy Has One Inventory
    {
        return $this->hasOne(Inventory::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function orders() //One Pharmacy Has Many Orders
    {
        return $this->hasMany(Order::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
