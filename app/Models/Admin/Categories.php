<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = "categories";
    protected $primaryKey = 'cat_id';
    public $timestamps = false;
    protected $fillable = ['name', 'status'];

    public function icons()
    {
        return $this->belongsTo(Projcets::class, 'cat_id', 'cat_id');
    }
}
