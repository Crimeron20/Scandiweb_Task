<?php
class database{
    public $conn = '';
    public function __construct() {
        $this->conn = mysqli_connect('localhost', 'root', '' , 'scandiweb_products');
        if(mysqli_connect_errno()){
            die("Connection Error: ". mysqli_connect_error());
        }
    }
    public function selectall($table){
        $sql = "SELECT * from $table";
        $result = mysqli_query($this->conn,$sql);
        return $result;
    }
    public function insertall($sku,$name,$price,$text){
        $sql = "INSERT INTO products(p_sku,p_name,p_price,p_type) VALUES ('$sku','$name','$price','$text')";
        $result = mysqli_query($this->conn,$sql);
        return $result;
    }
    public function delete(){
        if(isset($_POST['delete']) && isset($_POST['deletesku'])){
            foreach($_POST['deletesku'] as $id){
                $sql="DELETE from products WHERE p_sku='$id'";
                $result = mysqli_query($this->conn,$sql);
                
            }
            return $result;
        }
        
    }
}

?>