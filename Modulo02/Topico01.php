<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

                        <h2 class="Titulo"> Sistema Brasileiro de Planejamento e Orçamento</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Apresentar a legislação e conceitos dos instrumentos de planejamento governamental: PPA, LDO e LOA</p>

                        <p class="SubTitulo"> Os Instrumentos de Planejamento Governamental</p>
                        <hr>

                        <p>Depois de muitas décadas de uma gestão de Administração Pública conturbada por desequilíbrios econômicos e instabilidade política e social, a Constituição Federal de 1988 estabeleceu as bases para a retomada de um processo amplo de planejamento. Longe de restringir ao modelo dos grandes planos nacionais adotados ao longo do século XX, a Constituição preconizou:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> a adoção de sistema de planejamento constituído por planos e programas nacionais, regionais e setoriais.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> a consolidação de um Plano Plurianual de médio prazo; e</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> que o detalhamento deve ser feito anualmente por meio de uma Lei Orçamentária Anual, elaborada e executada de acordo com o disposto na Lei de Diretrizes Orçamentárias, igualmente de periodicidade anual.</li>
                        </ul>

                        <div class="bd-callout bd-callout-warning">
                            <p class="Texto">
                            <strong>Estamos falando de planejamentos de médio e longo prazo</strong>
                            </p>
                        </div>

                        <p>A relação entre planejamento e orçamento se dá na interação dessesinstrumentos, cuja dinâmica é importante ao gestor público conhecer.</p>

                        <p>Como médio e longo prazo podemos considerar os planos, os programas e as políticas elaboradas para as diversas áreas de governo. Alguns desses instrumentos decorrem de leis federais, outros de normas locais.</p>

                        <!-- aqui tem um link para cada lei, mas é no drive e estou sem acesso -->
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O plano municipal de saúde, exigido pela <a href="http://cursos.egp.ce.gov.br/pluginfile.php/25524/mod_folder/content/0/lei8142.pdf?forcedownload=1" target="_blank">Lei n°8.142, de 28 de dezembro de 1990</a>, para que o município receba recursos do Sistema Único de Saúde;</li>
                                    <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O plano municipal de assistência social, exigido pela <a href="http://cursos.egp.ce.gov.br/pluginfile.php/25524/mod_folder/content/0/lei8742.pdf?forcedownload=1" target="_blank">Lei n°8.742, de 7 de dezembro de 1993</a>, para que o município receba repasses federais para a assistência social;</li>
                                    <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O plano diretor local, exigido pelo Estatuto da Cidade (<a href="http://cursos.egp.ce.gov.br/pluginfile.php/25524/mod_folder/content/0/lei10257.pdf?forcedownload=1" target="_blank">Lei N° 10.257, de 10 de julho de 2001</a>);</li>
                                    <br><li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O plano municipal de educação, consoante o Plano Nacional de Educação e seus planos decenais (<a href="http://cursos.egp.ce.gov.br/pluginfile.php/25524/mod_folder/content/0/lei10172.pdf?forcedownload=1" target="_blank">Lei n°10.172, de 9 de janeiro de 2001</a>).</li>
                                </ul>
                            </div>
                        </div>

                        <p>O orçamento público organiza a programação de gastos por área de atuação governamental, compatibilizando o conteúdo dos planos setoriais com as orientações estratégicas do governo. Assim, a programação de gastos do orçamento será tão boa quanto boa for a qualidade desses planos de médio e longo prazo.</p>

                        <p>Nos termos da Constituição Federal de 1988, o sistema orçamentário é composto de leis orçamentárias, dos órgãos envolvidos no processo orçamentário e das normas que regem a elaboração e a execução dessas leis, quais sejam:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Plano Plurianual (PPA);</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Lei de Diretrizes Orçamentárias(LDO);</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Lei Orçamentária Anual(LOA).</li>
                        </ul>

                        <p>A seguir, veremos o papel e o conteúdo do Plano Plurianual, bem como a relação que se estabelece com as demais leis, conforme definido pela Constituição de 1988.</p>





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



                </div> <!-- End page-title -->
            </div> <!-- End page-title -->

            <div class="col-md-1"></div>
        </div> <!-- End row -->

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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