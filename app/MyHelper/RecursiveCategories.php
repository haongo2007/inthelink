<?php
namespace App\Myhelper;

class RecursiveCategories{

    public static function RecursiveDataTree($data,$parent=0,$level=0){
        $result = [];
        foreach ($data as $key => $value) {
            if ($value['parent'] == $parent ) {
                $value['level'] = $level;
                $result[] = $value;
                $child = self::RecursiveDataTree($data,$value['id'],$level + 1);
                $result = array_merge($result,$child);
            }
        }
        return $result;
    }
}
