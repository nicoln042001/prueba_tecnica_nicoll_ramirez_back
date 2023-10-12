<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $fillable = [
        'user_id',
        'status'
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }
}
