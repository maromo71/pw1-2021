<?php
//exemplo com if elseif e else
$nota = 6.1;
if($nota <= 3.5){
    echo "Aluno reprovado com nota $nota \n";
}elseif($nota <6){
    echo "Aluno em recuperação, sua nota $nota \n";
}else{
    echo "Aluno aprovado, sua nota $nota \n";
}
echo "Continua o programa \n";