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
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <p class="SubTitulo"> Objetivos Estratégicos</p>
                        <hr>

                        <p><strong>Exemplos reais</strong></p>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> EXEMPLO 1 - MOVIMENTO TODOS PELA EDUCAÇÃO</p>
                            <div class="ExemploTexto">
                                <ol>
                                    <li>Toda criança e jovem de 4 a 17 anos na escola;</li>
                                    <li>Toda criança plenamente alfabetizada até os 8 anos;</li>
                                    <li>Todo aluno com aprendizado adequado à sua série;</li>
                                    <li>Todo jovem com o Ensino Médio concluído até os 19 anos;</li>
                                    <li>Investimento em Educação ampliado e bem gerido.</li>
                                </ol>
                            </div>
                        </div>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> EXEMPLO 2 - ONG MORADIA E CIDADANIA</p>
                            <div class="ExemploTexto">
                                <ol>
                                    <li>Tornar a ONG auto-sustentável;</li>
                                    <li>Firmar parcerias estratégicas para o alcance da Missão da ONG;</li>
                                    <li>Centrar a atuação da ONG nas ações de Educação e Geração de Trabalho e Renda;</li>
                                    <li>Fortalecer as iniciativas de voluntariado e de combate à fome e à miséria;</li>
                                </ol>
                            </div>
                        </div>


                        



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
                <a href="Topico03.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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