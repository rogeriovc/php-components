<?php
// Superglobals
// $_GET, $_POST, $_FILES
 
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    return header('Location: index.php?case=err1');
}
 
if (!isset($_FILES['imagem'])){
    return header('Location: index.php?case=err2');
}
 
$imagem = $_FILES["imagem"];
$diretorioDestino = "upload/";
if (!is_dir($diretorioDestino)){
    if(!mkdir($diretorioDestino)) {
        // die("Erro ao criar o diretório!");
        return header('Location: index.php?case=err3');
    }
}
 
var_dump($imagem);
echo '</pre><br>';
 
$tiposPermitidos = ['image/jpeg' , 'image/png' , 'image/webp'];
$extensoesPermitidas = ['jpeg', 'jpg', 'png', 'webp'];
 
if (!in_array($imagem['type'], $tiposPermitidos)){
    // die('tipo de arquivo inválido!');
    return header('Location: index.php?case=err4');
}
 
$arquivoExtensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
if (!in_array($arquivoExtensao, $extensoesPermitidas)){
    // die('Extensão do arquivo inválida!');
    return header('Location: index.php?case=err5');
}
 
if ($imagem['size'] >= 16 * 1024 * 1024) {
    // die('A imagem excede o limite de 16MB.');
    return header('Location: index.php?case=err6');
 
}
 
$caminhoTemporario = $imagem["tmp_name"];
$nomeUnico = uniqid() . '_' . $imagem["name"];
$caminhoDestino = $diretorioDestino . $nomeUnico;
 
$salvou = move_uploaded_file($caminhoTemporario, $caminhoDestino);
 
if ($salvou) {
    // echo "Arquivo salvo em $caminhoDestino";
    header('Location: index.php?case=0');
} else {
    // echo "Erro ao salvar arquivo";
    header('Location: index.php?case=err0');
}
 