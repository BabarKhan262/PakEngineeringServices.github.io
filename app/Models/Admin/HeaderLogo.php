<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderLogo extends Model
{
    use HasFactory;
    protected $PrimaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['logo'];
}
