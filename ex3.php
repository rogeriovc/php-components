<?php
include 'components/input.php';
include 'components/select.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário de Reserva</title>
</head>
<body style="font-family: Arial; padding: 20px;">
    <form method="POST" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
        <h3>Dados Pessoais</h3>
        <?php
            input("Nome Completo:", "nome");
            input("E-mail:", "email", "email");
            input("CPF:", "cpf");
            input("Telefone:", "telefone");
        ?>

        <h4>Informações da Reserva</h4>
        <?php
            select("Tipo de Quarto:", "tipo_quarto", ["Standard", "Luxo", "Executivo"]);
            input("Data de Check-in:", "checkin", "date");
            input("Data de Check-out:", "checkout", "date");
            input("Número de Hóspedes:", "hospedes", "number");
        ?>

        <label>Observações:</label><br>
        <textarea name="observacoes" style="width: 100%; padding: 8px; margin-bottom: 10px;"></textarea><br>

        <button type="submit" style="width: 100%; padding: 10px; background: green; color: white; border: none; border-radius: 5px;">
            Confirmar Reserva
        </button>
    </form>
</body>
</html>
