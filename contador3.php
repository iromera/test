<?php

    $contador=0;

    if($fd = fopen('counter.txt','r')){
        $contador=fgets($fd);
        fclose($fd);
    }
    $fd2=fopen('counter.txt','w');
    $countador=$countador+1;
    fwrite($fd2,$contador);
    fclose($fd2);
    echo $contador;

?>