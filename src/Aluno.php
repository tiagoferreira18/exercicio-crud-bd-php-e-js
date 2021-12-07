<?php

require_once "Banco.php";

/* Classe aluno  */
class Aluno
{
  /* Atributos da classe, mesmos campos do BD mais o PDO */
  private int $id;
  private string $nome;
  private float $primeira;
  private float $segunda;
  private float $media;
  private string $situacao;
  private PDO $conexao;

  /* Função para conectar o banco automaticamente */
  public function __construct()
  {
    $this->conexao = Banco::conecta();
  }

  /* Função para trazer os alunos caastrados no banco */
  public function lerAlunos(): array
  {
    $sql = "SELECT * FROM alunos ORDER BY nome";
    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->execute();
      $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
    return $resultado;
  } // fim lerAlunos 


  public function inserirAlunos()
  {

    $sql = "INSERT INTO alunos(nome, primeira, segunda, media, situacao) VALUES(:nome, :primeira, :segunda, :media, :situacao)";
    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
      $consulta->bindParam(":primeira", $this->primeira, PDO::PARAM_STR);
      $consulta->bindParam(":segunda", $this->segunda, PDO::PARAM_STR);
      $consulta->bindParam(":media", $this->media, PDO::PARAM_STR);
      $consulta->bindParam(":situacao", $this->situacao, PDO::PARAM_STR);
      $consulta->execute();
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  } //Fim do inserirAlunos


  public function atualizarAlunos()
  {

    // $sql = "UPDATE alunos SET nome = :nome, primeira = :primeira, segunda = :segunda, media = :media,  situacao = :situacao WHERE id = :id";
    $sql = "UPDATE alunos SET nome = :nome, primeira = :primeira, segunda = :segunda, media = :media, situacao = :situacao  WHERE id = :id";
    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
      $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
      $consulta->bindParam(":primeira", $this->primeira, PDO::PARAM_STR);
      $consulta->bindParam(":segunda", $this->segunda, PDO::PARAM_STR);
      $consulta->bindParam(":media", $this->media, PDO::PARAM_STR);
      $consulta->bindParam(":situacao", $this->situacao, PDO::PARAM_STR);
      $consulta->execute();
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  } //Fim do inserirAlunos


  public function excluirAlunos()
  {
    $sql = "DELETE FROM alunos WHERE id = :id";
    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
      $consulta->execute();
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  }


  /* Ler um aluno */
  public function lerUmAluno()
  {
    $sql = "SELECT * FROM alunos WHERE id = :id";
    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
      $consulta->execute();
      $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
    return $resultado;
  }



  /* GETTERS */
  public function getId(): int
  {
    return $this->id;
  }
  public function getNome(): string
  {
    return $this->nome;
  }
  public function getPrimeira(): float
  {
    return $this->primeira;
  }
  public function getSegunda(): float
  {
    return $this->segunda;
  }


  public function getMedia(): float
  {
    return $this->media;
  }


  public function getSituacao(): string
  {
    return $this->situacao;
  }

  /* SETTERS */
  public function setId(int $id)
  {
    $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
  }

  public function setNome(string $nome)
  {
    $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
  }

  public function setPrimeira(float $primeira)
  {
    $this->primeira = filter_var($primeira, FILTER_SANITIZE_STRING);
  }
  public function setSegunda(float $segunda)
  {
    $this->segunda = filter_var($segunda, FILTER_SANITIZE_STRING);
  }

  public function setMedia(float $media)
  {
    $this->media = filter_var($media, FILTER_SANITIZE_STRING);
  }


  public function setSituacao(string $situacao)
  {
    $this->situacao = filter_var($situacao, FILTER_SANITIZE_STRING);
  }
}
