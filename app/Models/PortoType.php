<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortoType extends Model
{
    use HasFactory;
    protected $table = 'porto_types';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function porto(){
        return $this->hasMany(Portofolio::class, 'type_id');
    }
}
