<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';

    static public function getRecord()
    {
        return Gallery::select('galleries.*')
                ->where('status', '=', 0)
                ->where('is_delete', '=', 0)
                ->orderBy('id','desc')
                ->get();
    }

    static public function getSingle($id)
    {
        return Gallery::find($id);
    } 
}
