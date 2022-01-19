<?php 

class Cliente 
{
	private $pdo;
	
	public function __construct()
	{
		$this->pdo = new PDO("mysql:dbname=projetocrud;host=localhost", "root", "");
	}

	public function adicionar($email, $nome = '') {
        if($this->existeEmail($email) == false) {
            $sql = "INSERT INTO cliente (nome, email) VALUES (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
        	return false;
        }

	}

	public function getNome($nome) {
		$sql = "SELECT nome, email FROM cliente WHERE nome = :nome";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$data = $sql->fetch();

			return $data['email'];
		} else {
			return '';
		}
	}

	public function getInfo($id) {
		$sql = "SELECT * FROM cliente WHERE id = :id";
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
        $sql = "SELECT * FROM cliente";
		$sql = $this->pdo->query($sql);

		If($sql->rowCount() > 0){
			return $sql->fetchAll();
		} else {
			return array();
		}
		
	}

	public function editar($nome, $email, $id) {
			$sql = "UPDATE cliente set nome = :nome, email = :email WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':id', $id);
            $sql->execute();
	}

	public function excluir($id) {
		$sql = "DELETE FROM cliente WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
        $sql->execute();

        
	}

	private function existeEmail($email) {
        $sql = "SELECT * FROM cliente WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
        	return false;
        }
	}


}


 ?>