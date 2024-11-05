<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = ['username', 'password', 'role'];
    protected $increment = true;
    public $timestamps = true;
}
