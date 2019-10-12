<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class ="col -8">
        <table class="table ">
            <thead>
            <tr>
                <th scope="col">item</th>
                <th scope="col">valor</th>
                <th scope="col">quantidade</th>
            </tr>
            </thead>
    </div>

            <?php
                list (
                    "item"=>$item,
                    "valor"=>$valor,
                    "quantidade"=> $quant

                    )= $_POST;

                echo <<<tabela
                     <tr>
                        <th scope="col">$item</th>
                        <th scope="col">$valor</th>
                        <th scope="col">$quant</th>
                    </tr>
                tabela;

                $teste = $_POST;

                echo "<th>".$teste["item"]."</th>";
                echo "<th>".$teste["valor"]."</th>";
                echo "<th>".$teste["quantidade"]."</th>";
            ?>;
</body>
</html>