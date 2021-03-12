<?php 

namespace App\Entidy;

use \App\Db\Database;

use \PDO;


class Galeria{
    

    public $id;

    public $foto;

    public $produto_id;


    
    public function cadastar(){


        $obdataBase = new Database('galeria');  
        
        $this->id = $obdataBase->insert([
          
            'foto'         => $this->foto, 
            'produto_id'   => $this->produto_id
        ]);

        return true;

    }

public static function getGalerias($where = null, $order = null, $limit = null){

    return (new Database ('galeria'))->select($where,$order,$limit)
                                   ->fetchAll(PDO::FETCH_CLASS, self::class);

}

public static function getQtdGalerias($where = null){

    return (new Database ('galeria'))->select($where,null,null,'COUNT(*) as qtd')
                                   ->fetchObject()
                                   ->qtd;

}


public static function getGaleriaID($id){
    return (new Database ('galeria'))->select('id = ' .$id)
                                   ->fetchObject(self::class);
 
}

public static function getBuscarID($id){
    return (new Database ('galeria'))->consultar('produto_id = ' .$id)
                                     ->fetchAll(PDO::FETCH_CLASS, self::class);
 
}

public function atualizar(){
    return (new Database ('galeria'))->update('id = ' .$this-> id, [

                                               
                                            'foto'         => $this->foto, 
                                            'produto_id'   => $this->produto_id
    ]);
  
}

public function excluir(){
    return (new Database ('galeria'))->delete('id = ' .$this->id);
  
}

}