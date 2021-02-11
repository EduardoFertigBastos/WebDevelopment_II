<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02_10</title>
</head>

<body>
    <?php
    require_once './lib/autoload.php';

    $link = new Link(
        'http://unidavi.edu.br',
        'unidavi',
        '_blank',
        'btn',
    );

    echo $link->getLink();

    $ul  = new Ul('nada');
    $li1 = new Li('aaa', 'nada');
    $li2 = new Li('abb', 'nada');

    $ul->addLi($li1);
    $ul->addLi($li2);

    echo $ul
    ?>
</body>

</html>