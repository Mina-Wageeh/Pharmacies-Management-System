<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchMedicine extends Model
{
    use HasFactory;

    protected $table = 'branch_medicines';

    protected $guarded = [];
}
