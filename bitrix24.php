<div class="row">

                        <!-- Chamados novos -->
                        <div class="col-xl-3 col-md-3 mb-3">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div class="card text-white bg-danger mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-danger">Chamados Novos</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                            
                                    $response = @file_get_contents(API_BITRIX24 . NOVOS_BITRIX24);

                                    $chamados_aux = json_decode($response, true); 

                                    foreach ($chamados_aux['result'] as $key => $value):

                                    $response = @file_get_contents(GET_API_BITRIX24 . $value['ID']);

                                    $chamado = json_decode($response, true);     

                                    $chamado = $chamado['result'];
                                    
                                    // echo '<pre>';

                                    // print_r($chamados);

                                    // exit();         
                                        
                                        switch ($chamado['UF_CRM_1640890701890']) {
                                            case '871':
                                                $categoria = "Duvida";
                                                break;
                                            case '873':
                                                $categoria = "Inscidente";
                                                break;
                                            case '875':
                                                $categoria = "Solicitação";
                                                break; 
                                            default:
                                                $categoria = "Categoria não informada";
                                                break;
                                        }
                                                                                        
                                ?>
                                <tr>
                                    <td>
                                        <div class="card text-white bg-danger mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-danger"><?php echo ((!empty($chamado['TITLE'])) ? $chamado['TITLE'] : 'Titulo não informada'); ?></div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $categoria; ?></h5>
                                                <p class="card-text"><?php echo ((!empty($chamado['UF_CRM_1640890952'])) ? $chamado['UF_CRM_1640890952'] : 'Descrição não informada'); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <?php

                                    endforeach;                                                                            

                                ?>


                            </table>
                        </div> 

                        <!-- Chamados atrasados -->
                        <div class="col-xl-3 col-md-3 mb-3">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div class="card text-white bg-dark mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-dark">Chamados Atrasados</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                            
                                    $response = @file_get_contents(API_BITRIX24 . NOVOS_ATRASADOS_BITRIX24);

                                    $chamados_aux = json_decode($response, true); 

                                    foreach ($chamados_aux['result'] as $key => $value):

                                    $response = @file_get_contents(GET_API_BITRIX24 . $value['ID']);

                                    $chamado = json_decode($response, true);     

                                    $chamado = $chamado['result'];
                                    
                                    // echo '<pre>';

                                    // print_r($chamados);

                                    // exit();         
                                        
                                        switch ($chamado['UF_CRM_1640890701890']) {
                                            case '871':
                                                $categoria = "Duvida";
                                                break;
                                            case '873':
                                                $categoria = "Inscidente";
                                                break;
                                            case '875':
                                                $categoria = "Solicitação";
                                                break; 
                                            default:
                                                $categoria = "Categoria não informada";
                                                break;
                                        }
                                                                                        
                                ?>
                                <tr>
                                    <td>
                                        <div class="card text-white bg-dark mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-dark"><?php echo ((!empty($chamado['TITLE'])) ? $chamado['TITLE'] : 'Titulo não informada'); ?></div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $categoria; ?></h5>
                                                <p class="card-text"><?php echo ((!empty($chamado['UF_CRM_1640890952'])) ? $chamado['UF_CRM_1640890952'] : 'Descrição não informada'); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <?php

                                    endforeach;                                                                         

                                            $response = @file_get_contents(API_BITRIX24 . ATRASADOS_BITRIX24);
        
                                            $chamados_aux = json_decode($response, true); 
        
                                            foreach ($chamados_aux['result'] as $key => $value):
        
                                            $response = @file_get_contents(GET_API_BITRIX24 . $value['ID']);
        
                                            $chamado = json_decode($response, true);     
        
                                            $chamado = $chamado['result'];
                                            
                                            // echo '<pre>';
        
                                            // print_r($chamados);
        
                                            // exit();         
                                                
                                                switch ($chamado['UF_CRM_1640890701890']) {
                                                    case '871':
                                                        $categoria = "Duvida";
                                                        break;
                                                    case '873':
                                                        $categoria = "Inscidente";
                                                        break;
                                                    case '875':
                                                        $categoria = "Solicitação";
                                                        break; 
                                                    default:
                                                        $categoria = "Categoria não informada";
                                                        break;
                                                }
                                                                                                
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="card text-white bg-dark mb-3" style="max-width: 100%;">
                                                    <div class="card-header bg-dark"><?php echo ((!empty($chamado['TITLE'])) ? $chamado['TITLE'] : 'Titulo não informada'); ?></div>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $categoria; ?></h5>
                                                        <p class="card-text"><?php echo ((!empty($chamado['UF_CRM_1640890952'])) ? $chamado['UF_CRM_1640890952'] : 'Descrição não informada'); ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
        
        
        
                                        <?php
        
                                            endforeach;                                                                            
        
                                        ?>


                            </table>
                        </div>                          
                        
                        <!-- Chamados atrribuidos -->
                        <div class="col-xl-3 col-md-3 mb-3">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div class="card text-white bg-warning mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-warning">Chamados Atribuidos</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                            
                                    $response = @file_get_contents(API_BITRIX24 . EM_ATENDIMENTO_BITRIX24);

                                    $chamados_aux = json_decode($response, true); 

                                    foreach ($chamados_aux['result'] as $key => $value):

                                    $response = @file_get_contents(GET_API_BITRIX24 . $value['ID']);

                                    $chamado = json_decode($response, true);     

                                    $chamado = $chamado['result'];
                                    
                                    // echo '<pre>';

                                    // print_r($chamados);

                                    // exit();         
                                        
                                        switch ($chamado['UF_CRM_1640890701890']) {
                                            case '871':
                                                $categoria = "Duvida";
                                                break;
                                            case '873':
                                                $categoria = "Inscidente";
                                                break;
                                            case '875':
                                                $categoria = "Solicitação";
                                                break; 
                                            default:
                                                $categoria = "Categoria não informada";
                                                break;
                                        }
                                                                                        
                                ?>
                                <tr>
                                    <td>
                                        <div class="card text-white bg-warning mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-warning"><?php echo ((!empty($chamado['TITLE'])) ? $chamado['TITLE'] : 'Titulo não informada'); ?></div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $categoria; ?></h5>
                                                <p class="card-text"><?php echo ((!empty($chamado['UF_CRM_1640890952'])) ? $chamado['UF_CRM_1640890952'] : 'Descrição não informada'); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <?php

                                    endforeach;                                                                            

                                ?>


                            </table>
                        </div>                     
                        
                        <!-- Chamados finalizados -->
                        <div class="col-xl-3 col-md-3 mb-3">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div class="card text-white bg-success mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-success">Chamados Finalizados</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                            
                                    $response = @file_get_contents(API_BITRIX24 . FINALIZADOS_BITRIX24);

                                    $chamados_aux = json_decode($response, true); 

                                    foreach ($chamados_aux['result'] as $key => $value):

                                    $response = @file_get_contents(GET_API_BITRIX24 . $value['ID']);

                                    $chamado = json_decode($response, true);     

                                    $chamado = $chamado['result'];
                                    
                                    // echo '<pre>';

                                    // print_r($chamados);

                                    // exit();         
                                        
                                        switch ($chamado['UF_CRM_1640890701890']) {
                                            case '871':
                                                $categoria = "Duvida";
                                                break;
                                            case '873':
                                                $categoria = "Inscidente";
                                                break;
                                            case '875':
                                                $categoria = "Solicitação";
                                                break; 
                                            default:
                                                $categoria = "Categoria não informada";
                                                break;
                                        }
                                                                                        
                                ?>
                                <tr>
                                    <td>
                                        <div class="card text-white bg-success mb-3" style="max-width: 100%;">
                                            <div class="card-header bg-success"><?php echo ((!empty($chamado['TITLE'])) ? $chamado['TITLE'] : 'Titulo não informada'); ?></div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $categoria; ?></h5>
                                                <p class="card-text"><?php echo ((!empty($chamado['UF_CRM_1640890952'])) ? $chamado['UF_CRM_1640890952'] : 'Descrição não informada'); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <?php

                                    endforeach;                                                                            

                                ?>


                            </table>
                        </div>                         

                    </div>