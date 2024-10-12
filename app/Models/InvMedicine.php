<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvMedicine extends Model
{
    use HasFactory;

    protected $table = 'inv_medicines';

    protected $guarded = [];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public static function getInvMedicines()
    {
        return InvMedicine::select('code' , 'quantity')->where('branch_id' , auth()->user()->branch_id)->get();
    }

}
