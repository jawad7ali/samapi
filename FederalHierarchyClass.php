<?php
session_start();
include_once 'database.php';
class FederalHierarchyClass  extends Database
{

    private $conn;
    private $table_name = "federalHierarchy";
    public function __construct(){

        $db=new Database;
        $this->conn = $db->con;

        if(!isset($_SESSION['username'])){
            header("location:login.php");

        }
    }

    public function get_data(){
        $sql = "SELECT * FROM ".$this->table_name;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {


            // output data of each row
            while($row = $result->fetch_object()) {
                $data[]=$row;

            }

            return $data;
        } else {
            return  "0 results";
        }
    }
}
