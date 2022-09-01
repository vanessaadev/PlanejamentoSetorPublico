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

                        <p class="SubTitulo"> Premissas do PPA</p>
                        <hr>

                        <p>O Plano Plurianual representa um dos elementos centrais do planejamento governamental do Estado do Ceará. Em seu processo de elaboração e posterior implementação, monitoramento e avaliação, o governo deve ser orientado pelas seguintes premissas:</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Gestão Pública por Resultados</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Executando políticas e programas, privilegiando o foco em resultados, em detrimento da ótica centrada exclusivamente no gasto, priorizando ações e contemplando o senso distributivo na alocação dos recursos.</p>
                                    </div>
                                </div>
                            </div><br>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Participação cidadã</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Promovendo a interação entre o Estado e o cidadão, com vistas à efetividade das políticas públicas, em um processo de planejamento participativo que extrapola as propostas de campanha.</p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Promoção do desenvolvimento territorial</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Equilibrando a dimensão territorial, superando os desafios e potencializando oportunidades regionais.</p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Intersetorialidade</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Implementando políticas setoriais articuladas, centradas em territórios, trazendo ganhos para a população, para a organização logística das ações definidas, superando a fragmentação das políticas públicas.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p class="SubSubTitulo"> Objetivos</p>
                        <hr>

                        <p>Este importante instrumento de planejamento deve demonstrar todas as ações programadas de forma coordenada e conter a delimitação e a enunciação das diretrizes genéricas e abrangentes, com o intuito de alcançar os seguintes objetivos:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> melhorar o desempenho gerencial da administração pública, tendo como elemento básico uma gestão pública baseada em resultados;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> organizar em programas todas as propostas do Governo que resultem em bens ou serviços para atendimento das demandas da sociedade;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> dar maior transparência à aplicação dos recursos públicos e aos resultados obtidos;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> explicitar a distribuição regional das entregas e gastos do Governo;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> assegurar que os programas estejam alinhados com a orientação estratégica do Governo e compatíveis com a previsão de disponibilidade de recursos;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> permitir, por meio dos orçamentos anuais, a alocação de recursos compatível com os objetivos e iniciativas estabelecidas no Plano e com o desempenho obtido na execução dos programas; e</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estimular as parcerias para diversificar as fontes e alavancar os recursos necessários aos programas, com vistas a ampliar seus resultados.</li>
                        </ul>

                        <p class="SubSubTitulo"> Dimensões</p>
                        <hr>

                        <p>O Plano Plurianual está estruturado em três dimensões interligadas, sendo elas:</p>

                        <div class="accordion accordion-flush" id="AccordionFase02">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Dimensão Estratégica</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p>Trata-se das orientações estratégicas de Governo para o período do Plano. Correspondem ao conjunto dos:</p>
                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> eixos de Governo, suas estratégias, resultados estratégicos e indicadores;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> temas estratégicos, seus resultados temáticos e indicadores;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> cenário econômico-fiscal que prospecta a execução dos recursos do PPA.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><br>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>Dimensão Tática</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p>Define caminhos, por meio dos programas e de suas iniciativas voltadas para o alcance dos resultados definidos na dimensão estratégica, considerando as variáveis inerentes à política pública tratada. Vincula os Programas para consecução dos resultados pretendidos, estes materializados pelas iniciativas expressas no Plano.</p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item07">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <strong>Dimensão Operacional</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p>Relaciona-se com o desempenho da ação governamental no nível da eficiência e é especialmente tratada no Orçamento, por meio das ações orçamentárias. Busca a otimização na aplicação dos recursos disponíveis e a qualidade dos produtos entregues.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p>O PPA 2016–2019 trata essas dimensões conforme ilustrado na imagem a seguir, com suas principais categorias descritas na sequência.</p>

                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Organograma da estrutura do PPA">
                            </a>
                            <p class="TituloFigura"><strong>Figura 02:</strong> Estrutura do PPA</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Organograma da estrutura do PPA">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Célula de Planejamento da Seplag</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="SubSubTitulo"> Regionalização</p>
                        <hr>

                        <p>Segue o mapa com as Regiões de Planejamento do Estado do Ceará em vigor a partir do ano de 2016. Esse resultado foi orientado pelo estudo realizado pela Secretaria de Planejamento e Gestão e o Instituto de Pesquisa e Estratégia Econômica do Ceará.</p>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Confira o estudo completo intitulado “<a href="http://cursos.egp.ce.gov.br/pluginfile.php/26577/mod_folder/content/0/regioesdeplanejamento.pdf?forcedownload=1" target="_blank">As Regiões de Planejamento do Estado do Ceará.</a>"</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="imagens/Figura03.jpg" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.jpg" alt="Ilustração do mapa das regiões do estado do ceará">
                            </a>
                            <p class="TituloFigura"><strong>Figura 03:</strong> Regiões de Planejamento do Estado do Ceará</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.jpg" alt="Ilustração do mapa das regiões do estado do ceará">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> IPECE</p>
                                    </div>
                                </div>
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
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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