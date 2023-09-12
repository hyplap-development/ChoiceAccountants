<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function seo()
    {
        return $this->hasOne(Seo::class, 'fieldId', 'id')->where('type', 'BLOG')->where('deleteId', 0);
    }

    public function service()
    {
        return $this->hasOne(Service::class, 'id', 'serviceId')->where('deleteId', 0);
    }
}
