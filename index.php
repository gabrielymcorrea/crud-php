<?php
session_start();
if(isset($_SESSION['mensagem'])):
    echo $_SESSION['mensagem'];
endif;
session_unset();

include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
?>


<div class="container">
    <h3 class="light">Clientes</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Email</th>
                <th scope="col">Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM clientes';
            $resultado = mysqli_query($connect, $sql);
            while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
                <th><?php echo $dados['nome']; ?></th>
                <th><?php echo $dados['sobrenome']; ?></th>
                <th><?php echo $dados['email']; ?></th>
                <th><?php echo $dados['idade']; ?></th>
                <td>
                    <a href="#<?php echo $dados['id']; ?>" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#deletar">Excluir</a>
                    <a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-dark ">Editar</a>
                </td>

                <!-- Modal -->
                <div class="modal fade" id="deletar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Deseja excluir?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn btn-primary">Sim</button>
                        </form>
                        
                    </div>
                    </div>
                </div>
                </div>
            </tr>
            <?php endwhile; ?>
            
        </tbody>
    </table>
    <br>
    <a href="adicionar.php" class="btn btn-dark">Adicionar Cliente</a>
</div>



<?php
include_once 'includes/footer.php';
?>