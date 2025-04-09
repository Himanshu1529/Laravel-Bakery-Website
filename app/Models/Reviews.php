<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'message'];

    static public function getReview()
    {
        return self::select('reviews.*')
    				->where('reviews.status','=',0)
    				->where('reviews.is_delete','=',0)
    				->orderBy('reviews.id','desc')
    				->get();
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }
}
