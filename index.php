<?php include_once('./File.php')?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/style/style.css">
    <link rel="shortcut icon" href="./src/img/upload-na-nuvem.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <div class="container">
        <form class="form" method="post" enctype="multipart/form-data">
            <label class="label-text" for="file">Selecione um arquivo</label>
            <input  class="input-file " name="file" type="file">
            <button class="button-to" type="submit">Enviar</button>
        </form>
    </div>
  
</body>
</html>