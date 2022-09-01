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

                        <p class="Titulo"> Metodologia de Planejamento de Situações - MPS</p>
                        <hr>

                        <p><strong>Objetivo:</strong> Orientar o planejamento no que tange à eficácia, à alocação de recursos, à determinação dos prazos das operações e das ações, ao delineamento da trajetória do plano, à avaliação dos pré-requisitos, concomitâncias, intervalos, pontos de confluência, a especificar os recursos necessários para cada ação, buscando manter a ideia de que essa metodologia privilegia aspectos situacionais e estratégicos, em que o plano só se completa na ação, nunca antes. E que ele deve ser refeito, permanentemente, a partir da análise do desenvolvimento dos fatos concretos, da evolução do plano, do avanço da capacidade de elaboração individual, coletiva e da instituição.</p>

                        <p>Este tópico sintetiza os elementos e conceitos da Metodologia de Planejamento de Situações <strong>(MPS)</strong> necessários para apoiar o trabalho a ser desenvolvido. Retomando a analogia náutica que traçamos anteriormente (Tópico 2 – Item 2), ela corresponderia às ações que o gestor <strong>(velejador)</strong> teria de tomar para, utilizando a informação proporcionada pela Metodologia de Diagnóstico de Situações MDS <strong>(bússola)</strong> e aproveitando a governabilidade propiciada pelas condições do contexto político e socioeconômico <strong>(vento, maré etc.)</strong>, engendrar situações que permitam atingir seu objetivo (alcançar um ponto da costa o mais próximo possível daquele que havia inicialmente programado).</p>

                        <p>A MPS  se baseia nos resultados alcançados com a aplicação da MDS  apresentada anteriormente, em especial, no fluxograma explicativo da situação. É sobre essa base que o trabalho de análise e de planejamento de situações tem início.</p>
              
                        
                        


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
                <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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