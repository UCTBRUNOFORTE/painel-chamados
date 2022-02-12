<?php

$arquivo = "novos.txt";
$resultado = unlink($arquivo);

file_put_contents(getcwd() . '/novos.txt', "" , FILE_APPEND);