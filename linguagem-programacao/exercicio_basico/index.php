<html>
<head>
    <title>Exercício básico</title>
</head>
<body>
    <h2> Exercício 1:</h2>
    <p>Escreva 20 vezes o seu nome na tela (use a estrutura de repetição FOR)</p>
    <?php

    for ($i = 1; $i <= 20; $i++) {
        echo ("$i - Bruno Brasolin<br>");
    }
    ?>
    <hr>
    <h2> Exercício 2:</h2>
    <p>Crie a variável numero1 e atribua o valor 10, crie a variável numero2 e atribua o valor 20. Usando a estrutura condicional (IF), verifique e exiba a variável com o maior e a variável com o menor valor entre elas.</p>
    <?php

    $numero1 = 10;
    $numero2 = 20;

    $variavelMaior = $numero2 > $numero1 ? 'numero2' : 'numero1';
    $variavelMenor = $numero2 > $numero1 ? 'numero1' : 'numero2';
    $valorMaior = $numero2 > $numero1 ? $numero2 : $numero1;
    $valorMenor = $numero2 > $numero1 ? $numero1 : $numero2;

    echo "Variavel $variavelMaior ($valorMaior) é maior que a $variavelMenor ($valorMenor)";

    ?>
    <hr>
    <h2> Exercício 3:</h2>
    <p>Crie as variáveis abaixo , atribuindo os valores :
        <pre>
            $c = 1234
            $d = “1234”
        </pre>
        Faça a comparação (se são iguais) , envie a mensagem
        <pre>
        echo “$c e $d são iguais e do mesmo tipo”
        </pre>
        ou
        <pre>
        echo “$c e $d não são do mesmo tipo”
        </pre>
    </p>
    <?php

    $c = 1234;
    $d = "1234";

    echo $c === $d ? '$c e $d são iguais e do mesmo tipo' : '$c e $d não são do mesmo tipo';

    ?>
    <hr>
    <h2> Exercício 4:</h2>
    <p>
        Crie as variáveis abaixo, atribuindo os valores :
        <pre>
            $vai_chover = TRUE
            $esta_frio = TRUE
        </pre>
        Faça a estrutura de testes para as situações abaixo: <br>
        Se $vai_chover E $esta_frio -> envie a mensagem “Não vai dar praia”<br>
        Se $vai_chover E NÃO $esta_frio -> envie a mensagem “ Vai dar praia”<br>
        Se NÃO $vai_chover E $esta_frio -> envie a mensagem “ Não vai dar praia”<br>
        Se NÃO $vai_chover E NÃO $esta_frio -> envie a mensagem “ Vai dar praia”<br>
    </p>
    <?php

    $vai_chover = true;
    $esta_frio = true;

    if ($vai_chover & $esta_frio)
        echo "Não vai dar praia";
    else if ($vai_chover & !$esta_frio)
        echo "Vai dar praia";
    else if (!$vai_chover & $esta_frio)
        echo "Não vai dar praia";
    else if (!$vai_chover & !$esta_frio)
        echo "Vai dar praia";
    ?>
    <hr>
    <h2> Exercício 5:</h2>
    <p>
        Crie um Array $nomes e atribua 10 nomes de conhecidos. <br>
        Use a estrutura FOREACH para mostrar cada nome do Array.
    </p>
    <?php

    $nomes = array("Bruno", "Gabriel", "Marcella", "Giovanni", "Giovana", "Ana", "Lucas", "Lorenzo", "Enzo", "Guilherme");

    foreach ($nomes as $index => $nome) {
        echo "O elementos $index no array é: $nome <br>";
    }
    ?>
</body>

</html>