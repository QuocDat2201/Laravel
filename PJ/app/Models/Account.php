<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Account extends Authenticatable{
        protected $table = 'account';
        protected $primarykey = 'id';
        public $timestamps = false;
        protected $fillable = [
            'name','password','role_id','created', 'update','email',
        ];
    }