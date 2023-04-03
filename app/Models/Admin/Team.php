<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = "teams";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name', 'designation', 'image'];
}
