<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">

    <title>Locação veiculos-Login</title>

<body class="container py-4">
    <div class="container py-4">
        <!-- barra de informações de usuário -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de locadora de veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem vindo, [usuário] -->
                         <span class="welcome-text">
                            Bem-vindo, <strong>Adm</strong>
                         </span>
                        <!-- Botão de logout -->
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1"><i class="bi bi-box-arrow-right"></i> Sair</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Formulário para adicionar novos veiculos -->
     <div class="row same-height-row">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0">Adicionar novos veículos 🚗</h4>
                </div>
                <div class="card-body">
                    <form action="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" name="modelo" required>
                            <div class="invalid-feedback">Informe uma modelo válido!</div>
                        </div>
                        <div class="mb-3">
                            <label for="placa" class="form-label">Placa:</label>
                            <input type="text" class="form-control" name="placa" required>
                            <div class="invalid-feedback">Informe uma placa válida</div>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select name="Tipo" id="" class="form-select">
                                <option value="-" disabled selected>-</option>
                                <option value="carro">
                                    Carro
                                </option>
                                <option value="moto">
                                    Moto
                                </option>
                                <option value="caminhão">
                                    Caminhão
                                </option>
                            </select>
                            <div class="invalid-feedback">Escolha uma opção válida</div>
                        </div>
                        <button type="submit" name="adicionar" class="btn btn-secondary w-100">Adicionar veiculo</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calcular a previsão de aluguel 💰
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select name="Tipo" id="" class="form-select">
                                <option value="-" disabled selected>-</option>
                                <option value="carro">
                                    Carro
                                </option>
                                <option value="moto">
                                    Moto
                                </option>
                                <option value="caminhão">
                                    Caminhão
                                </option>
                            </select>
                            <div class="invalid-feedback">Escolha uma opção válida</div>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">
                                Quantidade de dias 📅
                            </label>
                            <input type="number" class="form-control">
                        </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
     </div>

    </div>



</body>
</html>