<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = "abouts";
    protected $primaryKey = 'about_id';
    public $timestamps = false;
    protected $fillable = ['about_title', 'about_desc', 'about_image'];
}
