<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    protected $table='show';
    public $timestamps=true;

    protected $fillable=['title','description','directed_by', 'collaboration', 'img_url'];

    public function events(){
        return $this->hasMany(Event::class,'show_id','id');
    }
}
