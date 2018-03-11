<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/03/18
 * Time: 16:01
 */
require_once 'DBConnection.php';
require_once 'Categoria.php';
class CategoriaCrud
{
    private $conexao;
    public function __construct()
    {
        //SEMPRE QUE A CLASSE FOR INSTANCIADA,JÁ FAZ A CONEXAO E GUARDA
        $this->conexao = DBConnection::getConexao();
    }
    public function getCategoria(int $id)
    {
        $sql = 'SELECT * FROM categoria WHERE id_categoria ='.$id;
        $resultado = $this->conexao->query($sql);
        //FETCH transforma o resultado em um array associativo
        $categoria = $resultado->fetch(PDO::FETCH_ASSOC);
        //
        $objcat = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao']);
        var_dump($objcat);
        return $objcat;
    }
    public function getCategorias()
    {
        $sql = 'SELECT * FROM categoria';
        $resultado = $this->conexao->query($sql);
        $categorias = $resultado->fetchall($resultado);
        foreach ($categorias as $categoria) {
            $id = $categoria['id_categoria'];
            $nome = $categoria['nome_categoria'];
            $descricao = $categoria['descricao'];
            $obj = new Categoria($id, $nome, $descricao);
            $listaCategorias[] = $obj;
        }
        return $listaCategorias;
    }
}