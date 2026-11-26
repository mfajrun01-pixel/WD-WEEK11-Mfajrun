<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

protected $fillable = [
    'user_id',
    'number',
    'category',
    'title',
    'description',
    'tools',
    'symbol'
];

 public function Users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
