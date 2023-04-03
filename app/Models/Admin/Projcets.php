<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projcets extends Model
{
    use HasFactory;
    protected $table = "projcets";
    protected $primaryKey = 'p_id';
    public $timestamps = true;
    protected $fillable = ['title', 'cat_id', 'desc', 'architects', 'location', 'area', 'manufactures', 'image', 'side_image_1', 'side_image_2'];

    public function categories()
    {
        return $this->hasOne(Categories::class, 'cat_id', 'cat_id');
    }
}
