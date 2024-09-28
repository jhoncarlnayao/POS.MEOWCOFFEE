<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'username', 'item_name', 'description', 'price'];

    protected $table = 'cart';
    public function user(){
        return $this->belongsTo(UserAccount::class, 'user_id', 'id',);
    }

    public function getUsernameAttribute(){
        return $this->username;
    }
}

