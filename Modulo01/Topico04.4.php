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

                        <p class="SubTitulo"> Gestão do Plano</p>
                        <hr>

                        <p>O plano só se completa na ação, nunca antes. E a ação de governo frequentemente exige adaptações de último momento que completam e viabilizam o plano. Essas adaptações são uma forma de improvisação necessária e quase inexorável.</p>

                        <p>Contudo, a questão consiste, no momento da ação, se o domínio será da improvisação sobre o plano ou do plano sobre a improvisação. Não obstante, temos de reconhecer que as equipes dirigentes podem escolher os problemas, formular seus planos para solucioná-los e o momento de fazê-lo, mas não podem escolher as circunstâncias do contexto em que deverão agir.</p>

                        <p>O plano formulado mediante simples cálculo determinista inviabiliza, no limite, a avaliação do seu cumprimento e do compromisso com as responsabilidades assumidas. Isso porque é impossível valorarmos o significado dos resultados frente a metas previstas, se são verificadas mudanças significativas no contexto em que o plano deve ser implementado.</p>

                        <p>Considerando que surpresas sempre ocorrem e podem gerar alto impacto sobre o plano e os resultados esperados, podemos afirmar que este é um conjunto de condições fora do controle do ator que planeja. Ele influencia o desenvolvimento e os resultados finais do plano.</p>

                        <p>De acordo com essa concepção, resumimos que planejar sob incerteza significa:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Não congelar o cálculo sobre o futuro, ou seja, refazê-lo constantemente;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Utilizar recursos de cálculo como previsão, reação rápida diante da mudança imprevista, aprendizado com o passado recente;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Trabalhar com diferentes cenários, com visões alternativas sobre o futuro;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Estar preparado para enfrentar surpresas;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Dispor de sistema de manejo de crises;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Afastar a incerteza evitável mediante ações preventivas.</li>
                        </ul>

                        <p>Assim, planejar significa enfrentar as incertezas e as dificuldades impostas pela realidade, alcançando os objetivos a que o plano se propõe.</p>

                        <p>Outro aspecto que precisamos destacar faz referência aos cálculos realizados quando da elaboração do plano, que precisam ser refeitos permanentemente a partir da análise sobre:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Desenvolvimento dos fatos concretos;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Evolução do plano;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Avanço da elaboração individual e coletiva na instituição.</li>
                        </ul>

                        <p><strong>Focos de debilidade de um Plano</strong></p>

                        <p>Concluindo a apresentação da MPS  , preparamos um conjunto de pontos (<em>check list</em>) para a verificação da qualidade de um plano de ação. São preocupações enunciadas de forma negativa, mas consideradas importantes para o planejamento e acompanhamento das operações, avaliação e replanejamento de um plano de ação. São elas:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Eleição de problemas inadequada ou desfocada;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Compreensão precária sobre a situação problemática a ser enfrentada, isto é, diagnóstico de situações mal formulado;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Má qualidade do projeto de ação elaborado;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Projeção mal formulada para resultados esperados;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Despreparo ou não previsão para ocorrência de surpresas ou mudanças no contexto;</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Deficiente análise estratégica;</li>
                            <li class="wow fadeInLeft" data-wow-delay="4.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Suposições gerenciais otimistas.</li>
                        </ul>
                        
                        


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
                <a href="Topico04.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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