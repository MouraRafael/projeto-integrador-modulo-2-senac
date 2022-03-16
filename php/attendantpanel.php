<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle | Atendente</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/attendantpanel.css">
    <script src="https://kit.fontawesome.com/33abab1032.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-container">
                <div>
                    <img src="../../assets/img/logo/petmania-black-153.png" alt="Logomarca PetMania" height="105">
                    <h1>Atendente<br><span>Fernando Unger</span></h1>
                </div>
                <div class="sidebar-content">
                    <button class="sidebar__button btn-client" role="button"><i class="fa-solid fa-user-pen"></i>
                        Cadastrar Cliente</button>
                    <button class="sidebar__button btn-consult" role="button"><i class="fa-solid fa-notes-medical"></i>
                        Cadastrar Consulta</button>
                    <button class="sidebar__button  btn-pacient" role="button"><i class="fa-solid fa-users"></i>
                        Pacientes</button>
                    <div></div>
                </div>
            </div>
        </aside>
        <main class="main-container">
            <div class="main-content">
                <div class="container__title">
                    <h1 id="title">Pacientes Agendados</h1>
                </div>
                <div class="main-table">
                    <div class="form-cliente" id="form-client" style="visibility: hidden;">

                    </div>
                    <div class="form-consulta" style="visibility: hidden;">

                    </div>
                    <div class="table-pacient">
                        <table class="table">
                                <thead id="thead">
                                  <tr>
                                    <th>Cliente</th>
                                    <th>Paciente</th>
                                    <th>Raça</th>
                                    <th>Informações</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>Arthur</th>
                                    <td>Cachorro</td>
                                    <td>Golden</td>
                                    <td>mais informações</td>
                                  </tr>
                                  <tr>
                                    <th>Paulo</th>
                                    <td>Cachorro</td>
                                    <td>Uauau</td>
                                    <td>mais informações</td>
                                  </tr>
                                  <tr>
                                    <th>Fernando</th>
                                    <td>Cachorro</td>
                                    <td>Scooby Doo</td>
                                    <td>mais informações</td>
                                  </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../assets/js/panel.js"></script>
</body>
</html>