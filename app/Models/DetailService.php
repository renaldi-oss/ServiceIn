<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailService extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function service() {
        return $this->belongsTo(User::class);
    }
}
