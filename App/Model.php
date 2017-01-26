<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM '. static::TABLE ,
            static::class
        );
    }
/*
    public static function findAlll()
    {
        $db = new \App\Db();
        return $db->querry('SELECT * FROM '. static::TABLE);
    }

    public static function findById($id)
    {
        $db = new \App\Db();
         $res = $db->query(
            'SELECT * FROM '. static::TABLE . ' WHERE `id`= '. $id ,
            static::class
        );
        if($res){
            return $res;
        }else {
            return false;
        }
    }
*/
    //abstract public function getName();
}