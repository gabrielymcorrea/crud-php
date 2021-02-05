<?php
include_once 'includes/header.php';
?>

<div class="container">
    <h3 class="light">Clientes</h3>
    <form action="php_action/create.php" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" >
        </div>

        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" id="sobrenome" >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" >
        </div>

        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="text" class="form-control" name="idade" id="idade" >
        </div>

        <button type="submit" name="btn-cadastrar" class="btn btn-dark"> Cadastrar</button>
        <a href="index.php" type="submit" class="btn btn-dark"> Lista de clientes</a>
    </form>
</div>



<?php
include_once 'includes/footer.php';
?>