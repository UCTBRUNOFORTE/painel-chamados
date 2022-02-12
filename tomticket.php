<div class="row">

                        <!-- Chamados novos -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div class="card text-white bg-danger mb-3" style="mmax-width: 100%;">
                                            <div class="card-header bg-danger">Chamados Novos</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php

                                        $api = TRUE;

                                        $contador = 1;

                                        while($contador <= 2 ):

                                    ?>

                                <?php

                                            
                                            $response = @file_get_contents(API_TOMTICKET . $contador);

                                            $chamados = json_decode($response, true); 

                                            foreach ($chamados['data'] as $key => $chamado):  

                                                if($chamado['ultimasituacao'] == 0):
                                                                                        
                                        ?>
                                <tr>
                                    <td>
                                        <div class="card text-white bg-danger mb-3" style="mmax-width: 100%;">
                                            <div class="card-header bg-danger"><?php echo $chamado['titulo']; ?></div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $chamado['categoria']; ?></h5>
                                                <p class="card-text"><?php echo $chamado['mensagem']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <?php
                                            endif;

                                            endforeach;

                                            $contador++;

                                            endwhile;

                                        ?>


                            </table>
                        </div>

                        <!-- Chamados atribuidos -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <table class="table table-borderless" >
                                <tr>
                                    <td>
                                        <div class="card text-white bg-warning mb-3" style="mmax-width: 100%;">
                                            <div class="card-header bg-warning">Chamados Atribuidos</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php

                                        $api = TRUE;

                                        $contador = 1;

                                        while($contador <= 2 ):

                                    ?>

                                <?php

                                            
                                            $response = @file_get_contents(API_TOMTICKET . $contador);

                                            $chamados = json_decode($response, true); 

                                            foreach ($chamados['data'] as $key => $chamado):  

                                                if($chamado['ultimasituacao'] == 2 || $chamado['ultimasituacao'] == 3 || $chamado['ultimasituacao'] == 6):
                                                                                        
                                        ?>
                                <tr>
                                    <td>
                                        <div class="card text-white bg-warning mb-3" style="mmax-width: 100%;">
                                            <div class="card-header bg-warning"><?php echo $chamado['titulo']; ?></div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $chamado['categoria']; ?></h5>
                                                <p class="card-text"><?php echo $chamado['mensagem']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <?php
                                            endif;

                                            endforeach;

                                            $contador++;

                                            endwhile;

                                        ?>


                            </table>
                        </div>

                        <!-- Chamados Finalizados -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div class="card text-white bg-success mb-3" style="mmax-width: 100%;">
                                            <div class="card-header bg-success ">Chamados Finalizados</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php

                                        $api = TRUE;

                                        $contador = 1;

                                        while($contador <= 2 ):

                                    ?>

                                <?php

                                            
                                            $response = @file_get_contents(API_TOMTICKET . $contador);

                                            $chamados = json_decode($response, true); 

                                            foreach ($chamados['data'] as $key => $chamado):  

                                                if($chamado['ultimasituacao'] == 5):
                                                                                        
                                        ?>
                                <tr>
                                    <td>
                                        <div class="card text-white bg-success mb-3" style="mmax-width: 100%;">
                                            <div class="card-header bg-success"><?php echo $chamado['titulo']; ?></div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $chamado['categoria']; ?></h5>
                                                <p class="card-text">
                                                    <?php                                                    
                                                                                                                    
                                                        echo $chamado['mensagem'];

                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <?php
                                            endif;

                                            endforeach;

                                            $contador++;

                                            endwhile;

                                        ?>


                            </table>
                        </div>

                    </div>