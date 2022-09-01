<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Apresentacao';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">


                        <h2 class="Titulo">Apresentação</h2>
                        <hr>

                        <div class="text-center">
                            <img src="imagens/banner.png" class="img-fluid text-center" alt="Planejamento no Setor Público">
                        </div>

                        <br><Br>
                        <p>Nesta aula inicial, apresentaremos o conceito de planejamento e o seu breve histórico através de seus fundamentos teórico-políticos. Em seguida, na perspectiva do planejamento estratégico governamental, abordaremos o uso da metodologia de diagnóstico de situações para análise proativa do contexto. Por fim, apresentaremos a elaboração da metodologia de planejamento de situações com o objetivo de auxiliar na formulação de ações, fixação de recursos e resultados a atingir.</p>

                        <p>A elaboração do conteúdo é fundamentada em trabalhos produzidos por: Renato Peixoto Dagino e a Célula de Planejamento da Seplag.</p>

                        <br>
                        <h2 class="Titulo">Objetivos</h2>
                        <hr>

                        <ul class="none">
                            <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Elaborar uma metodologia de planejamento de situações para auxiliar a formulação de ações, a fixação de recursos e de resultados a atingir.</li>
                        </ul>






                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            });

                            $(function() {
                                $('.example-popover').popover({
                                    container: 'body'
                                })
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <br>
            <br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>