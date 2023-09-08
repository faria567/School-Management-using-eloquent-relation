<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class Teacher extends Model
{
    use HasFactory;

public function section()
{
    return $this->hasOne(Section::class);
}
}




