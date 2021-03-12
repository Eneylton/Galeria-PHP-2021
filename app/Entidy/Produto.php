<?php 

namespace App\Entidy;

use \App\Db\Database;

use \PDO;


class Produto{
    

    public $id;

    public $nome;

    public $valor;

    public $qtd;

    public $foto;

    public $usuario_id;

    
    public function cadastar(){


        $obdataBase = new Database('produto');  
        
        $this->id = $obdataBase->insert([
          
            'nome'           => $this->nome, 
            'valor'          => $this->valor, 
            'qtd'            => $this->qtd, 
            'foto'           => $this->foto, 
            'usuario_id'     => $this->usuario_id

        ]);

        return true;

    }

public static function getProdutos($where = null, $order = null, $limit = null){

    return (new Database ('produto'))->select($where,$order,$limit)
                                   ->fetchAll(PDO::FETCH_CLASS, self::class);

}

public static function getQtdProdutos($where = null){

    return (new Database ('produto'))->select($where,null,null,'COUNT(*) as qtd')
                                   ->fetchObject()
                                   ->qtd;

}


public static function getProdutoID($id){
    return (new Database ('produto'))->select('id = ' .$id)
                                   ->fetchObject(self::class);
 
}

public function atualizar(){
    return (new Database ('produto'))->update('id = ' .$this-> id, [

                                               
        'nome'           => $this->nome, 
        'valor'          => $this->valor, 
        'qtd'            => $this->qtd, 
        'foto'           => $this->foto
    ]);
  
}

public function excluir(){
    return (new Database ('produto'))->delete('id = ' .$this->id);
  
}


}