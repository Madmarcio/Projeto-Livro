<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Livro</title>
</head>

<body>
    <pre>
        <?php 
    require_once 'Pessoa.php';
    require_once 'Livro.php';
    
    $p[0] = new Pessoa("João", 22, "M");
    $p[1] = new Pessoa("Maria", 25, "F");

    $l[0] = new Livro("Aprendendo PHP", "José da Silva", 300, $p[0]);
    $l[1] = new Livro("PHP Avançado", "Maria Oliveira", 500, $p[1]);
    $l[2] = new Livro("Aprendendo JavaScript", "Carlos Souza", 200, $p[0]);

    $l[0]->abrir();
    $l[0]->folhear(50);
    $l[0]->avancarPag();
    $l[0]->detalhes();

    $l[1]->abrir();
    $l[1]->folhear(100);
    $l[1]->avancarPag();
    $l[1]->detalhes();
    ?>
    </pre>


</body>

</html>