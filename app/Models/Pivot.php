<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Pivot;
// use Illuminate\Database\Eloquent\Relations\MorphPivot;

class Pivot extends Model
{
    use HasFactory;

    public $incrementing = true;
    // protected $fillable = ['user_id','book_id'];
    protected $table = 'pivots';
}
