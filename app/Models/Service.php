<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasOne(Department::class,'id','departmentId')->where('deleteId',0);
    }
}
