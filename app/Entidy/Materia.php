<?php 

namespace App\Entidy;

use \App\Db\Database;

use \PDO;


class Materia{
    

    public $id;

    public $nome;

    public $vagas_id;


    
    public function cadastar(){


        $obdataBase = new Database('materia');  
        
        $this->id = $obdataBase->insert([
          
            'nome'         => $this->nome, 
            'vagas_id'     => $this->vagas_id 

        ]);

        return true;

    }

public static function getMaterias($where = null, $order = null, $limit = null){

    return (new Database ('materia'))->select($where,$order,$limit)
                                   ->fetchAll(PDO::FETCH_CLASS, self::class);

}

public static function getQuantidadeMaterias($where = null){

    return (new Database ('materia'))->select($where,null,null,'COUNT(*) as qtd')
                                   ->fetchObject()
                                   ->qtd;

}


public static function getVagasID($id){
    return (new Database ('materia'))->select('id = ' .$id)
                                   ->fetchObject(self::class);
 
}

public function atualizar(){
    return (new Database ('materia'))->update('id = ' .$this-> id, [

                                               
                                            'nome'         => $this->nome, 
                                            'vagas_id'     => $this->vagas_id 

    ]);
  
}

public function excluir(){
    return (new Database ('materia'))->delete('id = ' .$this->id);
  
}


public static function getUsuarioPorEmail($email){

    return (new Database ('materia'))->select('email = "'.$email.'"')-> fetchObject(self::class);

}

}