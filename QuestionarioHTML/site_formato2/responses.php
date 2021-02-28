<pre>
<?php

$feedback = array(
    'questao1'=> 'a',
    'questao2'=> 'c',
    'questao3'=> 'a',
    'questao4'=> 'b',
    'questao5'=> 'a',
    'questao6'=> 'a',
    'questao7'=> 'b',
    'questao8'=> 'c',
    'questao9'=> 'a',
    'questao10' => 'b',
    'questao11' => 'a',
    'questao12' => 'a',
    'questao13' => 'b',
    'questao14' => 'a',
    'questao15' => 'c',
    'questao16' => 'a',
    'questao17' => 'e',
    'questao18' => 'b',
    'questao19' => 'a'

);
$cont = 1;

if(isset($_POST['questao1'])){
    foreach ($_POST as $key => $value) {
        $conv = strval($cont);
        if($value == $feedback[$key]){
            echo "<p>{$cont}) Certo</p>
            <br>";
        }
        else{
            echo "<p>{$cont}) Errado</p>
            <br>";
        }
       $cont++;
    }
} else {
    echo "erro, envie o formulario novamente";
}

