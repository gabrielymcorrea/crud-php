<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql ="SELECT * FROM clientes WHERE id='$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="container">
    <h3 class="light">Editar cliente</h3>
    <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" >
        </div>

        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" id="sobrenome" valeu="<?php echo $dados['sobrenome']; ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $dados['email']; ?>" >
        </div>

        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="text" class="form-control" name="idade" id="idade" value="<?php echo $dados['idade']; ?>" >
        </div>

        <button type="submit" name="btn-editar" class="btn btn-dark"> Atualizar</button>
        <a href="index.php" type="submit" class="btn btn-dark"> Lista de clientes</a>
    </form>
</div>



<?php
include_once 'includes/footer.php';
?>