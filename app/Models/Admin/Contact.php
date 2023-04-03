<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contacts";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['addres', 'email', 'cell_num', 'map'];
}
