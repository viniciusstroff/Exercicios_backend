
<!-- d) Elabore um programa que leia os seguintes dados de 5 usuários: nome, sobrenome,
 idade e CPF. Por fim, mostre os dados (de cada usuário) ordenados pela idade;
 -->



<?php 

// --------------------------------- EXERCICIO D---------------------------------------
class Usuario{
    private $nome;
    private $sobrenome;
    private $idade;
    private $cpf;

    public function __construct($nome, $sobrenome, $idade, $cpf)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
        $this->cpf = $cpf;

    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function mostraDados(){
        echo "Nome $this->nome $this->sobrenome, tem $this->idade anos, cpf $this->cpf ";
    }

    
};

function comparausuarios(Usuario $usuario1, Usuario $usuario2) {
    if ($usuario1->getIdade() == $usuario2->getIdade()) return 0;
    return ($usuario1->getIdade() < $usuario2->getIdade()) ? -1 : 1;
}

$arrayUsuarios = [
    new Usuario($nome = 'Luiz',     $sobrenome = 'Rubemberta',      $idade= '54',   $cpf='142.525.230-64'),
    new Usuario($nome = 'Felipe',   $sobrenome = 'Radeon',          $idade= '37',   $cpf='142.525.230-64'),
    new Usuario($nome = 'Vania',    $sobrenome = 'Ryzen',           $idade= '42',   $cpf='142.525.230-64'),
    new Usuario($nome = 'Aline',    $sobrenome = 'Samsung',         $idade= '18',   $cpf='142.525.230-64'),
    new Usuario($nome = 'Pedro',    $sobrenome = 'Cade meu chip',     $idade= '26',   $cpf='142.525.230-64')
];

usort($arrayUsuarios, "comparausuarios");

foreach($arrayUsuarios as $key=> $usuario){
    echo "{$usuario->mostraDados()}<br>";
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Exercicio 4</title>

<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
 tr:nth-child(even) {
  background-color: #eee;
}
 tr:nth-child(odd) {
 background-color: #fff;
}
 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<h1>Exercício 4</h1>

<table>
    <thead></thead>
    <tbody>
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Idade</th>
        <th>CPF</th>
    </tr>
    <?php foreach($arrayUsuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario->getNome() ?></td>
        <td><?php echo $usuario->getSobrenome() ?></td>
        <td><?php echo $usuario->getIdade() ?></td>
        <td><?php echo $usuario->getCpf() ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>


</body>
</html>
