<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioImage extends Model
{
    use HasFactory;
    protected $table = 'portofolio_images';
    protected $primaryKey = 'id';
    protected $guard = [];

    public function porto(){
        return $this->belongsTo(Portofolio::class, 'porto_id');
    }
}
