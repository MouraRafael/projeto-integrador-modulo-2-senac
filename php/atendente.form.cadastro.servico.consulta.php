<?php session_start();
$_SESSION['servicos'];
$_SESSION['todosservicos'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle | Atendente</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/attendantpanel.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/33abab1032.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div class="container">
        <?php
            include('./menu.php');
        ?>
        <main class="main-container">
            <div class="main-content">
                <div class="container__title">
                    <h1 id="title">Serviços</h1>
                </div>
                <div class="main-table">
                    <!--Rafael: tentativa de fazer a listagem de serviços-->    
                    <div class="main-table" style="position:relative; top:500px; height: 20px; z-index: 5;">
                        <div class="table-pacient" >
                            
                            <div class="infinit__table" style="position:relative; top:10px;">
    
                                <table class="table">
                                    <thead id="thead">
                                        <tr>
                                            <th>ID Servico</th>
                                            <th>Servico</th>
                                            
    
                                            <th>Remover</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($_SESSION['servicos'] as $servico) : ?>
                                            <tr>
                                                <td><?= $servico->id_servico ?></td>
                                                <td><?= $servico->nome_servico ?></td>
                                                
                                                <td>
                                                    <a href="./redirect.deletar.servico.php?idservico=<?= $servico->id_servico ?>&idficha=<?= $_GET['idficha']?>" onclick="return confirm('Deseja realmente deletar o serviço?')"><i class="fa-solid fa-eraser"></i></a>
                                                    
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--FIM da tentativa do Rafael-->
                    <div class="form-servico" style="z-index: 4;">
                        <form action="action.adicionar.servico.php" method="post" id="cadservico">
                            <div class="form-container">
                            <div class="box">    
                            </div>                            
                            <div class="box">
                            <div class="ipt">
                                        <label for="servico" class="label">Serviço para atendimento de id-<?= $_GET['idficha']?> ao paciente <?= $_GET['nomeanimal']?>:</label>
                                        <select name="servico" id="select" autofocus>
                                            <option value="" selected disabled>Selecione o Serviço</option>
                                            <?php foreach ($_SESSION['todosservicos'] as $alterar) : ?>
                                            <option value="<?= $alterar->id ?>"><?= $alterar->servico ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                    </div>                                  
                                </div>
                                <div class="box">    
                                    </div>                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <button form="cadservico" style="z-index: 10;" type="submit" class="cad-servico btn" name="idficha" value="<?= $_GET['idficha'] ?>">Cadastrar Serviço</button>
    </div>
</body>

</html>