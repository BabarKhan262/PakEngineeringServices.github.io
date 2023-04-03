<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = "services";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['title', 'desc', 'icon_id'];

    public function icons()
    {
        return $this->hasOne(Icons::class, 'id', 'icon_id');
    }
}
