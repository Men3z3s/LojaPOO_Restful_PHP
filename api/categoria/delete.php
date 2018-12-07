<?php
if($_SERVER['REQUEST_METHOD'] == 'DEL') {
//vai usar o CategoriaDAO.php
    require_once "../../model/CategoriaDAO.php";
    require_once "../../model/Categoria.php";

    $dadosrecebidos = file_get_contents('php://input');
    $dados = json_decode($dadosrecebidos, true);
    $id = $dados['id'];

    $dao = new CategoriaDAO();
    $dao->delete($id);
}else{
    echo json_encode(['msg'=>'Método nao suportado']);
}