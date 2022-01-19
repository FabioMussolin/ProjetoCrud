<?php 

class Fatura 
{
	private $pdo;
	
	public function __construct()
	{
		$this->pdo = new PDO("mysql:dbname=projetocrud;host=localhost", "root", "");
	}

	public function adicionar($id_cliente, $data = '', $data_vencimento = '') {
            $sql = "SELECT SUM(valor) FROM produto WHERE id_cliente = :id_cliente";
		    $sql = $this->pdo->prepare($sql);
		    $sql->bindValue(':id_cliente', $id_cliente);
            $sql->execute();

            $valor = $sql->fetch();
            $total =  $valor[0];

            $sql = "INSERT INTO fatura (id_cliente, valor, data, data_vencimento) VALUES (:id_cliente, :valor, :data, :data_vencimento)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_cliente', $id_cliente);
            $sql->bindValue(':data', $data);
            $sql->bindValue(':data_vencimento', $data_vencimento);
            $sql->bindValue(':valor', $total);
            $sql->execute();

	}

	public function getNome($id_cliente) {
		$sql = "SELECT id_cliente, valor, data, data_vencimento FROM fatura WHERE id_cliente = :id_cliente";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id_cliente', $id_cliente);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$data = $sql->fetch();

			return $data['valor'];
		} else {
			return '';
		}
	}


	public function getInfo($id) {
		$sql = "SELECT * FROM fatura WHERE id = :id";
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
        $sql = "SELECT * FROM fatura";
		$sql = $this->pdo->query($sql);

		If($sql->rowCount() > 0){
			return $sql->fetchAll();
		} else {
			return array();
		}
		
	}

	public function editar($valor, $data, $data_vencimento, $id_cliente, $id) {
			$sql = "UPDATE fatura set valor = :valor, data = :data, data_vencimento = :data_vencimento, id_cliente = :id_cliente  WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':valor', $valor);
			$sql->bindValue(':data', $data);
			$sql->bindValue(':data_vencimento', $data_vencimento);
			$sql->bindValue(':id_cliente', $id_cliente);
			$sql->bindValue(':id', $id);
            $sql->execute();
	}


	public function excluir($id) {
		$sql = "DELETE FROM fatura WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
        $sql->execute();
	}

}


 ?>