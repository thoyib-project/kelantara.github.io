<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialServiceImage extends Model
{
    use HasFactory;
    protected $table = 'special_service_images';
    protected $primaryKey = 'id';
    protected $guard = [];

    public function s_service(){
        return $this->belongsTo(SpecialService::class, 'ss_id');
    }
}
