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

                        <div>
                            <img src="imagens/banner.png" class="img-fluid" alt="Planejamento no Setor Público">
                        </div>

                        <br><p>Nesta aula, será discutido o Plano Plurianual. Serão apresentados também os eixos governamentais de atuação intersetorial com foco nos temas estratégicos, programas governamentais e iniciativas com seus respectivos atributos.</p>

                        <p>A elaboração do conteúdo é fundamentada em trabalhos produzidos por: Rita de Cássia Leal Fonseca dos Santos e a Célula de Planejamento da Seplag.</p>

                        <p>Bons estudos!</p>

                        <br><h2 class="Titulo">Objetivo</h2>
                        <hr>

                        <ul class="none">
                            <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Apresentar os eixos governamentais de atuação intersetorial com foco nos temas estratégicos, programas governamentais e iniciativas.</li>
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

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>