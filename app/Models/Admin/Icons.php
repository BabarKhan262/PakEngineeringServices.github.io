<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icons extends Model
{
    use HasFactory;
    protected $table = "icons";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['icon_name'];

    public function servicesIcon()
    {
        return $this->belongsTo(Services::class, 'icon_id', 'id');
    }
}
