<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle | Atendente</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/attendantpanel.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/33abab1032.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div class="container">
        <?php
        include('./menu.veterinario.php')
        ?>
        <main class="main-container">
            <div class="main-content">
                <div class="container__title btn__main">
                    <button type="submit" name="idAnimal" value="<?= $_GET['idAnimal'] ?>" class=" btn-ficha">Atualizar
                        Ficha</button>
                </div>
                <div class="main-table">
                    <div class="form-ficha">
                        <form action="./action.cadastrar.consulta.php" method="post">
                            <div class="form-content">

                                <div class="ficha-container">
                                    <div class="box box-p">
                                        <div class="input__ficha">
                                            <label for="idFicha" class="label">Ficha: </label>
                                            <input type="text" class="input" id="idFicha" value="<?= $_GET['nomeAnimal'] ?>" disabled>
                                        </div>
                                        <div class="input__data">
                                            <label for="dataAgendada" class="label">Data:</label>
                                            <input type="date" class="input" id="dataAgendada" value="<?= $_GET['nomeAnimal'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="box box-p">
                                        <div class="input__animal">
                                            <label for="idAnimal" class="label">Animal:</label>
                                            <input type="text" class="input" id="idAnimal" value="<?= $_GET['nomeAnimal'] ?>" disabled>
                                        </div>
                                        <div class="">
                                            <label for="select" class="label">Veterinario:</label>
                                            <input type="text" class="input" id="animal" value="<?= $_GET['nomeAnimal'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="container__area">
                                    <label for="" class="label">Motivo:</label>
                                    <textarea name="motivo" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""></textarea>
                                    <label for="" class="label">Diagnostico:</label>
                                    <textarea name="diagnostico" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""></textarea>
                                    <label for="" class="label">Tratamento:</label>
                                    <textarea name="tratamento" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""></textarea>
                                    <label for="" class="label">Prescrição:</label>
                                    <textarea name="prescricao" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""></textarea>
                                    <label for="" class="label">Observações:</label>
                                    <textarea name="observacao" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""></textarea>
                                </div>



                        </form>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
</body>

</html>