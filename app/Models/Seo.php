<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    public function blog()
    {
        return $this->hasOne(Blog::class,'id','fieldId'); 
    }

    public function department()
    {
        return $this->hasOne(Department::class,'id','fieldId'); 
    }

    public function service()
    {
        return $this->hasOne(Service::class,'id','fieldId'); 
    }

    public function career()
    {
        return $this->hasOne(Careeropportunity::class,'id','fieldId'); 
    }
}
