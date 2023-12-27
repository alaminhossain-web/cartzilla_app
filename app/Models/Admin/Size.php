<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    private static $size;

    public static function newSize($request)
    {
        self::$size = new Size();
        self::saveBasicInfo(self::$size,$request);
    }
 
    public static function updateSize($request,$id)
    {
         $size = Size::find($id);
        self::saveBasicInfo($size,$request);
    }
 
    private static function saveBasicInfo($size,$request)
    {
        $size->name                    = $request->name;
        $size->code                    = $request->code;
        $size->description             = $request->description;
        $size->status                  = $request->status;
        $size->save();
    }
 
    public static function deleteSize($id)
    {
     $size = Size::find($id);
     $size->delete();
    }
}
