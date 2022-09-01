<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
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

                        <p class="SubTitulo"> Metodologia de Diagnóstico de Situações</p>
                        <hr>

                        <p>Apresentamos um resumo dos elementos fundamentais para formulação de um plano. São eles:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificação do ator que planeja;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Descrição da situação-problema, em que se quer atuar;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Problemas precisos a enfrentar;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Objetivos bem definidos;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificação de interessados e de beneficiários;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nome do plano (aspecto comunicacional);</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Principais ações a realizar, trajetória, encadeamento;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Definição de responsáveis, rede de ajuda e parceiros;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Previsão de recursos necessários, produtos e resultados esperados;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Indicação do prazo de maturação dos resultados;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Indicadores para verificação do andamento dos trabalhos, produtos, uso de recursos, contexto e resultados;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clareza ao atuar em relação a aliados e a oponentes;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Clareza ao atuar em relação a mudanças no contexto;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Previsão de procedimentos para acompanhamento das ações, cobrança e prestação de contas;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Previsão de procedimentos para avaliação e para revisão durante a execução do que foi planejado.</li>
                        </ul>

                        <p>Como complemento, a partir da análise do balanço entre apoios e oposições previsíveis a um plano de ação formulado, cabe identificarmos um tipo especial de operação a ser planejada.</p>

                        <p>Um tipo de operação que apresenta um caráter mais político do que operacional. Aquele que tem como objetivo construir viabilidade para a implementação de um projeto através do apoio ou da contraposição à resistência percebida. Essa modalidade de análise estratégica leva em conta o estudo de motivações e de interesses de atores envolvidos com os problemas que a equipe dirigente pretende enfrentar.</p>
                        
                        


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
                <a href="Topico04.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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