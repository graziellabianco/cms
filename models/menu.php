<?php 

class Menu extends model{
    public function getMenu(){
        $array = array();
        
        $sql="SELECT * FROM tb_menu";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}

?>