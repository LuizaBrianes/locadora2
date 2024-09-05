<div class="container"> 
<h2>Atualizar Cliente</h2>
<?php
$idCliente = $_POST["idCliente"];
$nomeCliente = $_POST["nomeCliente"];


$sql = "update tbClientes set 
nomeCliente='{$nomeCliente}'

where idCliente = '{$idCliente}'
";

$rs = mysqli_query($conexao,$sql);

if ($rs) {
    ?>
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Atualizando registro</h4>
        <p>Registro atualizado com sucesso!</p>
        <p>Clique <a href="index.php?menu=clientes" class="alert-link">aqui</a> para a lista de clientes.</p>
    </div>
    <?php
} else {
    ?>
    <div class="alert alert-danger" role="alert">
        <p>Erro ao editar o registro da categoria.</p>
    </div>
    <?php
}

?>
</div>