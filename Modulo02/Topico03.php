<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <p class="Titulo"> Plano Plurianual do Estado do Ceará</p>
                            <hr>

                            <p><strong>Objetivo:</strong> Apresentar as diretrizes dos 7 Cearás através de suas premissas, objetivos e regionalização.</p>

                            <p>O Plano Plurianual, além de declarar as escolhas do Governo e da sociedade, indica os meios para implementação das políticas públicas e orienta taticamente a ação do Estado para o alcance dos resultados pretendidos.</p>

                            <p>O Projeto de Lei do PPA 2016–2019, encaminhado à Assembleia Legislativa, em 30 de setembro de 2015, pelo Chefe do Poder Executivo, foi elaborado tendo como referência as diretrizes gerais emanadas do Programa de Governo para a gestão 2015-2018, denominado de 7 Cearás.</p>

                            

          
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });     

                                $(function() {
                                    $('[data-toggle="tooltip"]').tooltip()
                                })               
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->
                    
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

                                  <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>
</html>
