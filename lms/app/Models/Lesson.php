<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'title',
        'type',
        'content',
        'attachment_path',
        'external_url',
        'order',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}

