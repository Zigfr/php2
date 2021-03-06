<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM '. static::TABLE ,
            static::class
        );
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }
        $columns = [];

        foreach ($this as $index => $k) {

            if ('id' == $index) {
                continue;
            }

            $columns[] = $index;
            $values[':' . $index] = $k;
        }
        
        $sql = 'INSERT INTO ' . static::TABLE . '
        (' . implode(',', $columns) . ')
        VALUES
        (' . implode(',', array_keys($values)) . ')
        ';

        $db = Db::instance();
        $db->execute($sql, $values);
        $sql1 = "SELECT `id` FROM `users` WHERE {$columns[0]} = :{$columns[0]}";
        
        $mass[] = array($columns[0] => $values[":{$columns[0]}"]);
        $dat = $mass[0];
        $val = $db->querry($sql1, $dat);
        foreach($val as $index => $key)
        {
            $ind = $key['id'];
        }
        var_dump($ind);
    }

/*
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
*/

    


    //abstract public function getName();
}
