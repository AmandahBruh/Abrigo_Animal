<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bixo.css">
</head>
<body>
    <?php
    require('./templates/header.php');
    require('./css/bixoCss.php');
    ?>

    <div class="flex-container">

    <table style='margin: 0 auto; padding-top: 6%;'>
      <tr>
        <th><a href='paginas/bixo.php'><img src="./imagens/pato.jpg" alt="" class="img_index"></a></th>
        <th><a  href='paginas/bixo.php'><img src="./imagens/boxer.jpg" alt="" class="img_index"></a></th>
        <th><a  href='paginas/bixo.php'><img src="./imagens/gatinho.jpg" alt="" class="img_index"></a></th>
      </tr>
      <tr>
        <th><a  href='paginas/bixo.php'><img src="./imagens/pitbull.png" alt="" class="img_index"></a></th>
        <th><a  href='paginas/bixo.php'><img src="./imagens/gato03.png" alt="" class="img_index"></a></th>
        <th><a  href='paginas/bixo.php'><img src="./imagens/dog.png" alt="" class="img_index"></a></th>
      </tr>
      <tr>
        <th><a  href='paginas/bixo.php'><img src="./imagens/pig1.jpg" alt="" class="img_index"></a></th>
        <th><a  href='paginas/bixo.php'><img src="./imagens/cat.webp" alt="" class="img_index"></a></th>
        <th><a  href='paginas/bixo.php'><img src="./imagens/yordle.jpg" alt="" class="img_index"></a></th>
      </tr>
    </table>

    </div>

    <?php
        require('./templates/footer.php');
    ?>
</body>
</html>