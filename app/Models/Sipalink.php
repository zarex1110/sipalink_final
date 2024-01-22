<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sipalink extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tags()
    {
        return $this->belongsTo(Tag::class, 'tags_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
