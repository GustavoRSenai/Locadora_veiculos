
<?php
// Back-end
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário - Locadora de Veículos</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link ícones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Mensagem de "Bem-Vindo" -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de Locadora de Veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem vindo, [usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Usuário</strong>!
                        </span>
                        <!-- Botão de LogOut -->
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

    

        <div class="col md-6">
            <div class="card h-80">
                <div class="card-header">
                    <h4 class="mb-0">Calcular a previsão de aluguel 💵</h4>
                </div>
                <div class="card-body">
                    <form action="" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="tipo" class="input-label">
                                Tipo de veículo:
                            </label>
                            <select class="form-select" name="tipo" id="tipo" required>
                                <option value="empty" disabled selected> - </option>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                                <option value="caminhão">Caminhão</option>
                                <option value="van">Van</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">
                                Quantidade de dias:
                            </label>
                            <input type="number" name="dias_calculo" class="form-control" value="1" required>
                        </div>
                        <button class="btn btn-success w-100" type="submit" name="calcular">Calcular</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabela de veiculos cadastrados -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Veículos Cadastrados 🚐
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    <tr data-bs-toggle="modal"
                                    data-bs-target="#Uno">
                                        <td>Carro</td>
                                        <td>Uno</td>
                                        <td>ABC1234</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                Alugado
                                            </span>
                                        </td>
                                    </tr>
                                    <tr data-bs-toggle="modal"
                                    data-bs-target="#harley">
                                        <td>Carro</td>
                                        <td>Harley Davidson</td>
                                        <td>DEF1234</td>
                                        <td>
                                            <span class="badge bg-success" data-bs-toggle="modal"
                                            data-bs-target="#alugar">
                                                Disponível
                                            </span>
                                        </td>
                                    </tr>
                                    <tr data-bs-toggle="modal"
                                    data-bs-target="#ferrari">
                                        <td>Carro</td>
                                        <td>Ferrari</td>
                                        <td>AFG1D34</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                Alugado
                                            </span>
                                        </td>
                                    </tr>
                                    <tr data-bs-toggle="modal"
                                    data-bs-target="#lancer">
                                        <td>Carro</td>
                                        <td>Lancer</td>
                                        <td>ASG1H24</td>
                                        <td>
                                            <span class="badge bg-success" data-bs-toggle="modal"
                                            data-bs-target="#modal1">
                                                Disponível
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modais veiculos -->

        <div class="modal fade" id="Uno">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>🚗 Uno</h2>
                    </div>
                    <div class="modal-body">
                        <h5>Informações</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus quo quisquam qui saepe quas dolor quidem ipsum delectus labore voluptas esse, excepturi aut sequi libero! Illo sint quo maiores.</p>
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <td>Carro</td>
                                <td>Uno</td>
                                <td>ABC1234</td>
                                <td>
                                    <span class="badge bg-warning">
                                        Alugado
                                    </span>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="harley">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>🏍️ Harley Davidson</h2>
                    </div>
                    <div class="modal-body">
                        <h5>Informações</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus quo quisquam qui saepe quas dolor quidem ipsum delectus labore voluptas esse, excepturi aut sequi libero! Illo sint quo maiores.</p>
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <td>Moto</td>
                                <td>Harley Davidson</td>
                                <td>DEF1234</td>
                                <td>
                                    <span class="badge bg-success" data-bs-toggle="modal"
                                    data-bs-target="#alugar">
                                        Disponível
                                    </span>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ferrari">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>🚗 Ferrari</h2>  
                    </div>
                    <div class="modal-body">
                        <h5>Informações</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus quo quisquam qui saepe quas dolor quidem ipsum delectus labore voluptas esse, excepturi aut sequi libero! Illo sint quo maiores.</p>
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <td>Carro</td>
                                <td>Ferrari</td>
                                <td>AFG1D34</td>
                                <td>
                                    <span class="badge bg-warning">
                                        Alugado
                                    </span>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="lancer">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>🚗 Lancer</h2>
                    </div>
                    <div class="modal-body">
                        <h5>Informações</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus quo quisquam qui saepe quas dolor quidem ipsum delectus labore voluptas esse, excepturi aut sequi libero! Illo sint quo maiores.</p>
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <td>Carro</td>
                                <td>Lancer</td>
                                <td>ASG1H24</td>
                                <td>
                                    <span class="badge bg-success"  data-bs-toggle="modal"
                                    data-bs-target="#alugar">
                                        Disponível
                                    </span>
                                </td>
                            </tbody>
                        </table>
                        
                </div>
            </div>
        </div>

        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>