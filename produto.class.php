<?php 

class Produto 
{
	private $pdo;
	
	public function __construct()
	{
		$this->pdo = new PDO("mysql:dbname=projetocrud;host=localhost", "root", "");
	}

	public function adicionar($produto, $valor = '', $id_cliente) {
        if($this->existeProduto($produto) == false) {
            $sql = "INSERT INTO produto (produto, valor, id_cliente) VALUES (:produto, :valor, :id_cliente)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':produto', $produto);
            $sql->bindValue(':valor', $valor);
            $sql->bindValue(':id_cliente', $id_cliente);
            $sql->execute();

            return true;
        } else {
        	return false;
        }

	}

	public function getNome($produto) {
		$sql = "SELECT produto, valor FROM produto WHERE produto = :produto";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':produto', $produto);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$data = $sql->fetch();

			return $data['produto'];
		} else {
			return '';
		}
	}

	public function getInfo($id) {
		$sql = "SELECT * FROM produto WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			

			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getAll() {
        $sql = "SELECT * FROM produto";
		$sql = $this->pdo->query($sql);

		If($sql->rowCount() > 0){
			return $sql->fetchAll();
		} else {
			return array();
		}
		
	}

	public function editar($produto, $valor, $id) {
			$sql = "UPDATE produto set produto = :produto, valor = :valor WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':produto', $produto);
			$sql->bindValue(':valor', $valor);
			$sql->bindValue(':id', $id);
            $sql->execute();
	}

	public function excluir($id) {
		$sql = "DELETE FROM produto WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
        $sql->execute();
	}

	private function existeProduto($produto) {
        $sql = "SELECT * FROM produto WHERE produto = :produto";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':produto', $produto);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
        	return false;
        }
	}


}


 ?>