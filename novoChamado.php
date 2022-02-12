<?php

include('config.php');

$response = @file_get_contents(GET_API_BITRIX24 . $_REQUEST['data']['FIELDS']['ID']);

$chamado = json_decode($response, true);

switch ($chamado['result']['STAGE_ID']) {
    case 'C39:NEW':

        file_put_contents(getcwd() . '/novos.txt', "Novo chamado registrado 1" .  $chamado['result']['TITLE'] . ";\n", FILE_APPEND);

        break;
    case 'C39:UC_LA4T73':

        file_put_contents(getcwd() . '/novos.txt', "Novo chamado atrasado para primeiro atendimento 2" .  $chamado['result']['TITLE'] . ";\n", FILE_APPEND);

        break;
    case 'C39:PREPARATION':
        # code...
        break;
    case 'C39:PREPAYMENT_INVOIC':

        file_put_contents(getcwd() . '/novos.txt', "Novo chamado atrasado 3" .  $chamado['result']['TITLE'] . ";\n", FILE_APPEND);

        break;
    case 'C39:WON':
        # code...
        break;

    default:
        # code...
        break;
}

