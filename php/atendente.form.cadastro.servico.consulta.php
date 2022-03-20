<?php session_start(); ?>
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
        <aside class="sidebar">
            <div class="sidebar-container">
                <div>
                    <img src="../assets/img/logo/petmania-black-153.png" alt="Logomarca PetMania" height="105">
                    <h1>Atendente<br><span>Nome Aqui</span></h1>
                </div>
                <div class="sidebar-content">
                    <a href="./redirect.cliente.listar.php">
                    <button class="sidebar__button btn-client" role="button" type="button"><i
                                class="fa-solid fa-user-pen"></i>
                             Clientes</button>
                    </a>
                    <a href="./atendente.listar.animal.php">
                        <button class="sidebar__button btn-client btn-animal" role="button" type="button"><i class="fa-solid fa-paw"></i>
                             Animais</button>
                    </a>
                    <a href="./atendente.listar.consulta.php">
                        <button class="sidebar__button btn-consult" role="button" type="button"><i
                                class="fa-solid fa-notes-medical"></i>
                             Consultas</button>
                    </a>
                </div>
            </div>
        </aside>
        <main class="main-container">
            <div class="main-content">
                <div class="container__title">
                    <h1 id="title">Serviços</h1>
                </div>
                <div class="main-table">
                    <div class="form-servico">
                        <form action="alterar" method="post">
                            <div class="form-container">
                            <div class="box">    
                            </div>                            
                            <div class="box">    

                            <div class="ipt">
                                        <label for="alterar" class="label">serviço:</label>
                                        <select name="alterar" id="select" autofocus>
                                            <option value="" selected disabled>Selecione o Serviço</option>
                                            <?php foreach ($_SESSION['alterar'] as $alterar) : ?>
                                            <option value="<?= $alterar->alterar ?>"><?= $alterar->alterar ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                    </div>                                  
                                </div>
                                <div class="box">    
                            </div>                                
                                <button type="submit" class="cad-servico btn" name="alterar" value="<?= $_SESSION['alterar'] ?>">Cadastrar Serviço</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>