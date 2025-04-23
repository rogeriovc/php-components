<?php
$playlists = [
    [
        "titulo" => "Electronic Party",
        "artistas" => "Avicii, Alok",
        "imagem" => "img/electronicParty.jpg"
    ],
    [
        "titulo" => "Trance",
        "artistas" => "Tiesto, Armin Van Buuren",
        "imagem" => "img/trance.jpg"
    ],
    [
        "titulo" => "Trap Vibes",
        "artistas" => "Post Malone, Travis Scott, 21 savage",
        "imagem" => "img/TrapVibes.jpg"
    ],
    [
        "titulo" => "Beatles Classics",
        "artistas" => "The Beatles",
        "imagem" => "img/Beatles.jpg"
    ],
    [
        "titulo" => "Electronic Dance",
        "artistas" => "Deadmau5",
        "imagem" => "img/EletronicDance.jpg"
    ],
    [
        "titulo" => "Cow songs",
        "artistas" => "Saint Hilda, Canada Buffalo",
        "imagem" => "img/Cow2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Playlists</title>
    <h1>Ex1</h1>
    <style>
        body {
            background-color: gray;
            color: white;
            font-family: Arial, sans-serif;
        }
        .playlist-container {
            display: flex;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            
        }
        .card {
            background-color:blue;
            border-radius: 10px;
            overflow: hidden;
            width: 180px;
        
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card .info {
            padding: 10px;
        }
        .card .info h4 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }
        .card .info p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #ccc;
        }
    </style>
</head>
<body>

<h2 style="padding: 20px;">Playlists</h2>
<div class="playlist-container">
    <?php foreach ($playlists as $playlist): ?>
        <div class="card">
            <img src="<?= $playlist['imagem'] ?>" alt="Capa da playlist">
            <div class="info">
                <h4><?= $playlist['titulo'] ?></h4>
                <p><?= $playlist['artistas'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
