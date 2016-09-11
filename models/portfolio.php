<?php
class Portfolio extends model {
    
    public function getTrabalhos($n='') {
        //array de resultados
        $array = array();
        
        $sql = "SELECT * FROM portfolio ";
        //so pode 8
        if(!empty($n)) {
            $sql .= "LIMIT ".$n;
        }
        
        $sql = $this->db->query($sql);
        //pegar o resultado 
        if($sql->rowCount() > 0) {
            
            $array = $sql->fetchAll();
            
        }
        
        return $array;
    }
    
}