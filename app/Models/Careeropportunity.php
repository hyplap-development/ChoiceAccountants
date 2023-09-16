<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careeropportunity extends Model
{
    use HasFactory;

    public function seo()
    {
        return $this->hasOne(Seo::class,'fieldId','id')->where('type','CAREER OPPORTUNITY')->where('deleteId',0);
    }
}
