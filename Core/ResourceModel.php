<?php
namespace Mvc\Core;

use Mvc\Core\ResourceModelInterFace;

use Mvc\Config\Database;

class ResourceModel implements ResourceModelInterFace
{
    private $table;
    private $id;
    private $model;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    public function save($model)
    {
        $id = $model->getId();

        $table = $this->table;
        $arr = $model->getProperties();

        echo $table . '</br>';
        $newArr = [];
        
        if ($id) {
            $values = "";

            $valuex = "";
            $keyx = "";

            foreach ($arr as $key => $value) {
                if($key != "id" && $key != "create_at") {
                    $values .= "$key = :$key ,";

                    $keyx .= "$key ,";
                    $valuex .= "'$value' ,";

                    $newArr[$key] = $value;
                }
            }

            $trimValues = trim($values, ",");

            $trimKey = trim($keyx, ",");
            $trimValue = trim($valuex, ",");


            if($table == 'image') {
                $sql = "INSERT INTO $this->table ($trimKey) VALUES ($trimValue)";

            } else {
                $sql = "UPDATE $this->table SET $trimValues WHERE id = $id";            
            }

            echo $sql;
            echo '<pre>';
            var_export($arr);

            $req = Database::getBdd()->prepare($sql);

            return $req->execute($newArr);

        } else {
            $values = "";
            $keys = "";

            foreach ($arr as $key => $value) {
                if($key != "id" && $key != "update_at") {
                    $keys .= "$key ,";
                    $values .= "'$value' ,";
                    $newArr[$key] = $value;
                }
            }

            $trimKeys = trim($keys, ",");
            $trimValues = trim($values, ",");

            $sql = "INSERT INTO $this->table ($trimKeys) VALUES ($trimValues)";
            
            echo $sql;
            
            $req = Database::getBdd()->prepare($sql);

            return $req->execute($newArr);
        }
    }

    public function delete($model)
    {
        $id = $model->getId();

        if($id){
            $sql = "DELETE FROM $this->table WHERE id = $id";
            $req = Database::getBdd()->prepare($sql);
            
            return $req->execute();
        }
    }

    public function deleteImg($model)
    {
        $id = $model->getId();

        if($id){
            $sql = "DELETE FROM $this->table WHERE led_id = $id";
            $req = Database::getBdd()->prepare($sql);
            
            return $req->execute();
        }
    }

    public function deletex($led_id)
    {
        if($led_id){
            $sql = "DELETE FROM $this->table WHERE led_id = $led_id";
            $req = Database::getBdd()->prepare($sql);
            
            return $req->execute();
        }
    }

    public function showAll() {
        $sql =  "SELECT * FROM $this->table";

        $req = Database::getBdd()->prepare($sql);

        if($req->execute()) {
            return $req->fetchAll();
        }
    }

    public function getId($id) {
        $sql =  "SELECT * FROM $this->table WHERE id = $id";

        $req = Database::getBdd()->prepare($sql);

        if($req->execute()){
            return  $req->fetch();
        }
    }

    // public function getCateId() {

    //     $categori_id = $this->getCateId();

    //     $sql =  "SELECT * FROM $this->table WHERE categori_id = $categori_id";

    //     $req = Database::getBdd()->prepare($sql);

    //     echo $sql;
    //     if($req->execute()) {
    //         return  $req->fetch();
    //     }
    // }

    public function checkLogin($username, $password) {
        
        $sql =  "SELECT * FROM $this->table WHERE username = '$username' and password = '$password'";

        $req = Database::getBdd()->prepare($sql);

        if($req->execute()) {
            return  $req->fetch();
        }
    }
}
