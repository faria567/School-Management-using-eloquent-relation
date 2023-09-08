<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;


class Section extends Model
{
    use HasFactory;
    public function teacher()
    {
    return $this->belongsTo(Teacher::class);
    }
}
