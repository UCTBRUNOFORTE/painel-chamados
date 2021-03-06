<?php

include('config.php');

if (isset($_GET['plataforma'])) {

    $plataforma = $_GET['plataforma'];
} else {

    $plataforma = '1';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Painel de chamados</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">            
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-0 text-gray-800 text-center display-1">Chamados <sup class="h5">
                            <?php

                            switch ($plataforma) {
                                case '1':
                                    echo 'Tomticket';
                                    break;
                                case '2':
                                    echo 'Bitrix24';
                                    break;

                                default:
                                    # code...
                                    break;
                            }

                            ?>
                        </sup>
                    </h1>
                    <div class="text-right" style=" margin-top: -0.25em"><p><span id="segundos">20</span> Segundos para atualizar</p></div>
                    


                    <?php

                    switch ($plataforma) {
                        case '1':
                            include('tomticket.php');
                            break;
                        case '2':
                            include('bitrix24.php');
                            break;

                        default:

                            break;
                    }

                    ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; UC TECHNOLOGY <?php echo date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script>

        let plataforma = <?php echo $plataforma; ?>

        if(plataforma == 1){

            plataforma = 2;

        }else{

            plataforma = 1;

        }
        function ler_chamado() {

            fetch('novos.txt')
                .then(response => response.text())
                .then(text => {
                    const array = text.split("\n");
                    speechSynthesis.speak(new SpeechSynthesisUtterance(array));
                })    

            setTimeout(function() {                
                salvar('http://187.60.56.85/painel-chamados/arquivo.php');
            }, 1000)      

                

            setTimeout(function() {                
                ler_chamado();
            }, 4000)
        }


        function salvar(yourUrl) {
            var Httpreq = new XMLHttpRequest(); // a new request
            Httpreq.open("GET", yourUrl, false);
            Httpreq.send(null);
            return Httpreq.responseText;
        }
        var json_obj = JSON.parse(Get("http://187.60.56.85/painel-chamados/arquivo.php"));        

        function atualizar_pagina() {

            let segundos = document.getElementById('segundos');

            if(parseInt(segundos.textContent) > 0){

                segundos.innerHTML  = parseInt(segundos.textContent) - 1;

                setTimeout(function() {
                atualizar_pagina();
            }, 1000)

            }else{

                window.location.href = "http://187.60.56.85/painel-chamados?plataforma=" + plataforma;

            }

            

            

        }


    </script>

</body>

<script>

atualizar_pagina();

ler_chamado()


</script>




</html>