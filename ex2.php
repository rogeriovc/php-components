<?php
$artigos = [
    [
        "autor" => "Dicas Laravel",
        "titulo" => "Trabalhando com Múltiplas Moedas no Laravel/PHP: Três Estratégias Eficazes",
        "descricao" => "Lidar com múltiplas moedas pode ser um desafio. Neste guia, vamos explorar três estratégias diferentes que você pode usar com multi-moeda...",
        "imagem" => "img/Larave.jpg"
    ],
    [
        "autor" => "Mindfire Solutions",
        "titulo" => "PMEs alcançam TTM notável utilizando o framework Laravel-PHP",
        "descricao" => "O Laravel, framework favorito dos desenvolvedores PHP, recebeu algumas atualizações em 2021. O feedback unânime é que agora ele é um dos melhores...",
        "imagem" => "img/Mindfire.jpg"
    ],
    [
        "autor" => "Ítalo Baeza Cabrera",
        "titulo" => "Configurando Laravel, PHPStorm e Xdebug… em um servidor local",
        "descricao" => "Não há necessidade de sofrer ao desenvolver localmente...",
        "imagem" => "img/maxresdefault.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Artigos</title>
    <h1>ex2</h1>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fafafa;
        padding: 30px;
    }

    .artigo {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff;
        border-bottom: 1px solid #ddd;
        padding: 20px 0;
        transition: transform 0.3s ease, background-color 0.3s ease;
        cursor: pointer;
    }

    .artigo:hover {
        transform: translateY(-5px);
        background-color: #f0f0f0;
    }

    .artigo-info {
        max-width: 75%;
    }

    .artigo-info span {
        font-size: 14px;
        color: #666;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }

    .artigo-info h2 {
        font-size: 18px;
        margin: 0 0 10px;
        color: #222;
    }

    .artigo-info p {
        font-size: 14px;
        color: #444;
        margin: 0;
    }

    .artigo img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .artigo:hover img {
        transform: scale(1.05);
    }

    .container {
        max-width: 800px;
        margin: auto;
    }

    h1 {
        text-align: center;
        margin-bottom: 40px;
    }
</style>

</head>
<body>
    <div class="container">
        <h1>Artigos Recentes</h1>
        <?php foreach ($artigos as $artigo): ?>
            <div class="artigo">
                <div class="artigo-info">
                    <span><?= htmlspecialchars($artigo["autor"]) ?></span>
                    <h2><?= htmlspecialchars($artigo["titulo"]) ?></h2>
                    <p><?= htmlspecialchars($artigo["descricao"]) ?></p>
                </div>
                <img src="<?= $artigo["imagem"] ?>" alt="Imagem do artigo">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
