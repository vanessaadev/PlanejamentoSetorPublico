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

                        <p class="SubTitulo"> Matriz Operacional</p>
                        <hr>

                        <p>A Matriz Operacional detalha o conjunto de procedimentos através do qual devem ser atingidos os resultados esperados nas operações. Cada ação poderá ser dividida em atividades que, por sua vez, podem ser detalhadas em tarefas, dependendo da complexidade da operação ou da ação e das características do cenário que pretende construir o ator que planeja. De qualquer forma, o enunciado das ações, das atividades e/ou das tarefas na Matriz Operacional deve vir acompanhado pelos respectivos produtos, resultados esperados, datas (início/fim), responsáveis, apoios e recursos necessários.</p>

                        <p class="SubSubTitulo"> Ações, Atividades, Tarefas</p>
                        <hr>

                        <p>São as unidades de implementação de um plano. Seu detalhamento deve ser feito até o nível necessário para uma compreensão clara da operacionalização de um plano ou projeto. Se necessário, até mesmo as tarefas podem ser subdivididas de acordo com o interesse ou a necessidade do ator que planeja.</p>

                        <p>O detalhamento das tarefas deve ser refeito periodicamente, em função das necessidades. A somatória das ações e tarefas, verificáveis em forma de produtos, deve garantir que se alcancem os resultados.</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Resultados</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>São os impactos sobre as manifestações concretas do problema que está sendo atacado (avaliado pelos seus descritores); a mudança na realidade observada. A definição dos resultados possibilita uma avaliação do plano, assim como a condução precisa das ações no sentido da estratégia geral.</p>
                                    </div>
                                </div>
                            </div>
                                                        
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Produtos</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>São parâmetros concretos – quantidade, qualidade, tempo e lugar – que auxiliam na execução das atividades planejadas. Se os produtos estão sendo obtidos e os problemas identificados persistem é porque os resultados esperados não estão ocorrendo. Há, então, necessidade de rever as operações e as ações projetadas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Recursos</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>Recurso é tudo aquilo que um ator pode mobilizar para viabilizar a consecução dos seus objetivos. A execução de um plano implica o gerenciamento de múltiplos recursos escassos.
                                    Para o processo de planejamento que aqui propomos, é necessário trabalhar com um conceito bastante amplo de recurso.
                                    A imagem a seguir indica os recursos que podem ser utilizados para a viabilização de ações planejadas.</p>

                                    <div class="text-center">
                                        <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" alt="Quadros com justificativas para viabilizar ações planejadas">
                                        </a>
                                        <p class="TituloFigura"><strong>Figura 17:</strong> Recursos para viabilização de ações planejadas</p>
                                    </div>
                                    
                                    <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura17.png" alt="Quadros com justificativas para viabilizar ações planejadas">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="FonteFigura">Fonte: Daguino (2009)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Para cada ação prevista, devemos detalhar quais recursos de diferentes tipos serão necessários, ajustar a utilização dos recursos à sua disponibilidade e especificar os custos para cada ação/tarefa.</p>

                                    <p>A partir dessa informação, será possível uma alocação realista dos recursos. Para tanto, é fundamental avaliarmos em que medida as atividades previstas em um plano necessitam consumir os diferentes tipos de recursos para avaliar sua eficiência.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Prazos</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>O tempo talvez seja o recurso mais escasso com os quais lidam os dirigentes públicos e os seus planos de governo. A determinação dos prazos das operações e das ações marca a trajetória do plano, com os pré-requisitos, as concomitâncias, os intervalos ou os pontos predeterminados de confluência (datas simbólicas etc.).</p>

                                    <p>A indicação de prazos é indispensável para o acompanhamento e a avaliação do plano, e indica o compromisso do responsável com a execução das ações. Os prazos estão relacionados à data limite para a finalização da ação (para ser mais preciso, ao intervalo entre o início e o fim da ação).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Responsáveis</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>Envolve todos os coordenadores e os articuladores de tarefas a serem desenvolvidas no plano. As responsabilidades devem ser nominais ou no mínimo por função, evitando a diluição de responsabilidades. Quando todos são responsáveis por tudo, ninguém é responsável por nada.</p>

                                    <p>É também importante distinguirmos entre o responsável (aquelas pessoas que estão comprometidas diretamente com a realização da ação) e eventuais apoios (pessoas que contribuem para a realização da ação).</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        
                        


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
                <a href="Topico04.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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