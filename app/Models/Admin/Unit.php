<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    private static $unit;

   public static function newUnit($request)
   {
       
       self::$unit = new Unit();
       self::saveBasicInfo(self::$unit,$request);
   }

   public static function updateUnit($request,$id)
   {
        $unit = Unit::find($id);
       self::saveBasicInfo($unit,$request);
   }

   private static function saveBasicInfo($unit,$request)
   {
       $unit->name                    = $request->name;
       $unit->code                    = $request->code;
       $unit->description             = $request->description;
       $unit->status                  = $request->status;
       $unit->save();
   }

   public static function deleteUnit($id)
   {
    $unit = Unit::find($id);
    $unit->delete();
   }
}
