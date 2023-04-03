<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = "testimonials";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name', 'desc', 'image'];
}
