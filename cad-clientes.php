<div class="container">
<h2 class="bi bi-people"><i class="bi bi-plus"> Cadastro de novo cliente</h2>

<form action="index.php?menu=inserir-clientes" method="post">
    <div class="mb-3 col-6">
        <label class="form-label" for="nomeCliente">Nome da Cliente</label>
        <div class="input-group">
        <input type="text" name="nomeCliente" id="nomeCliente">
        </div>
    </div>
    <div>
        <label for="telefoneCliente">Telefone</label>
        <input type="text" name="telefoneCliente" id="telefoneCliente">
    </div>
    <div>
        <label for="emailCliente">E-Mail</label>
        <input type="email" name="emailCliente" id="emailCliente">
    </div>
  
    <div>
         <input type="submit" value="Salvar">   
    </div>
</form>
</div>