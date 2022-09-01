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

                        <p class="SubTitulo"> Componentes de um Sistema de Planejamento Estratégico Governamental</p>
                        <hr>

                        <p>Para o ator que planeja, a informação é o meio que lhe permite conhecer a realidade na qual atua e verificar o resultado causado por sua ação. Disso depende sua capacidade para alterar oportunamente suas decisões, quando as metas alcançadas se distanciam das propostas. Sem informação oportuna, confiável e relevante, não se identificam bem os problemas, não se pode atacá-los a tempo e se posterga a ação corretiva.</p>

                        <p>O monitoramento, no PEG, responde ao princípio elementar de que não se pode atuar com eficácia se os dirigentes não conhecem de maneira contínua, e o mais objetiva possível, os sinais vitais do governo que lideram e das situações sobre as quais intervêm. Um sistema de informação casuístico, parcial, assistemático, atrasado, inseguro e sobrecarregado de dados primários irrelevantes é um aparato sensorial defeituoso que limita severamente a capacidade de uma equipe dirigente de se sintonizar com as situações que busca enfrentar, de identificar os problemas atuais e potenciais, de avaliar os resultados de sua ação e de corrigir oportunamente os desvios com relação aos objetivos traçados.</p>

                        <p>O sistema de PEG é constituído por três componentes que garantem um acompanhamento e um processamento adequado dos fluxos de informação, que alimentam as decisões de uma equipe dirigente.</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sistema de Constituição da Agenda:</strong> no qual se decide o uso do tempo e o foco de atenção dos dirigentes, o que, em síntese, constitui o menu de decisões. Nesse sistema, o fluxo contínuo de informações estabelece a luta entre a improvisação e o planejamento.</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sistema de Cobrança e Prestação de Contas:</strong> em que se torna efetiva a responsabilidade de cada membro da unidade organizacional sobre as missões assumidas como compromissos. Com este sistema, conforma-se um processo de trabalho com base na responsabilidade. Ele não pode ser estruturado sem que informações confiáveis e oportunas estejam disponíveis.</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sistema de Gestão Operacional:</strong> no qual é viabilizada a ação diária num processo em que se enfrentam a rotina e a criatividade. Na gestão, predomina a ação sujeita a diretrizes, mas elas devem deixar um amplo campo à criatividade, à iniciativa e à inovação.</li>
                        </ul>

                        <p>Esses três sistemas e alguns de seus subsistemas necessários para a criação de uma estrutura garantem a efetividade do PEG, como os de Gestão de Crises e de Comunicação Governamental.</p>
                        
                        


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
                <a href="Topico04.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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