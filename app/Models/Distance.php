<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Distance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'distance', 'date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
