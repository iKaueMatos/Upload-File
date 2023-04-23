<?php 

include_once('./connect.php');

if (isset($_FILES['file'])) {

    $file = $_FILES['file'];

    if ($file['error']) 
        die("Falha ao enviar arquivo!");
    
    if ($file['size'] > 2097152) 
        die('Arquivo muito grande!! Max: 2MB');
    
    $folder = "midia/";
    $nameFile = $file['name'];
    $newFile = uniqid(); //responsavel por gerar um nome aléatorio
    $extension = strtolower(pathinfo($nameFile,PATHINFO_EXTENSION)); //PATH caminho

    if ($extension != "jpg" && $extension != "png")
        die("Tipo do arquivo não aceito");

    $path = $folder . $newFile . "." . $extension;
    $due = move_uploaded_file($file["tmp_name"],$path);
    if ($due){ 
        $mysqli->query("INSERT INTO midia (path_upload,data_upload) VALUES ('$path','')");
        echo "<p>Arquivo enviado com sucesso</p>";
    } else {
        echo "<p> falha ao enviar o arquivo</p>";
        return false;
    }
}


?>