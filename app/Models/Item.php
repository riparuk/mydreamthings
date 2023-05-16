<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc', 'price', 'currentBudget', 'monthlyIncome', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
