<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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
                                            
                            <p class="Titulo"> Diagnóstico Estratégico</p>
                            <hr>

                            <p><strong>Objetivo:</strong> Apresentar conceitos e tipos de diagnóstico, considerando ambientes externos e internos, a fim de identificar oportunidades e ameaças da organização.</p>

                            <div class="bd-callout bd-callout-success">
                                <p class="Texto">
                                <strong>“A realidade é como ela é e não como gostaríamos que ela fosse.”</strong>
                                <p class="text-end">Maquiavel</p>
                                </p>
                            </div>

                            <p>O Diagnóstico Estratégico de uma organização, também chamado por muitos autores de Análise do Ambiente, tem por objetivo mapear o maior número de variáveis que de alguma forma afetam direta ou indiretamente uma organização.</p>

                            <p><strong>Para Ansoff e McDonnell (1993), o Diagnóstico Estratégico é o procedimento necessário para responder a duas perguntas:</strong></p>

                            <div class="SaibaMaisTexto" style="border-radius: 7px 7px 7px 7px;background-color: #539df121;">
                                <p><strong>Como diagnosticar os desafios ambientais futuros com os quais se defrontará a instituição?</strong></p>
                                <p><strong>Como determinar a reação estratégica da instituição que garantirá o sucesso?</strong></p>
                            </div>

                            <br><p>Mudanças são inevitáveis e algumas vezes inesperadas. O Diagnóstico Estratégico é uma ferramenta valiosíssima para prever ou adaptar-se às mudanças ou, no mínimo, não ser surpreendido por elas. É um instrumento que permite ao gestor verificar a situação real de uma organização bem como:</p>

                            <ul class="none">
                                <li class="wow fadeInLeft" data-wow-dealy="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Descobrir a sua essência;</li>
                                <li class="wow fadeInLeft" data-wow-dealy="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Criar um contexto para a formulação das estratégias;</li>
                                <li class="wow fadeInLeft" data-wow-dealy="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conhecer aspectos importantes (natureza do setor, tendências do mercado, intensidade da concorrência etc.) que não estão sob seu controle;</li>
                                <li class="wow fadeInLeft" data-wow-dealy="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Revelar forças e fraquezas em um dado momento.</li>
                            </ul>

                                                      


                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            }); 

                            $(function () {
                              $('[data-toggle="tooltip"]').tooltip()
                            })                   
                        </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->                        
                    </div> <!-- End col-md-10 -->
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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
