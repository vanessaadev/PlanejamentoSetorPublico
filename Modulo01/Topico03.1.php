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

                        <p class="SubTitulo"> O Conceito de Ator Social e as Características do Jogo Social</p>
                        <hr>

                        <p>Ator social é uma pessoa, grupo ou organização que participa de algum <strong>“jogo social”</strong>, que possui um projeto político, controla algum recurso relevante, tem, acumula (ou desacomoda) forças no seu decorrer e possui, portanto, capacidade de produzir fatos capazes de viabilizar seu projeto (MATUS, 1996).</p>

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="text-center" style="margin-top: 0.8em;">
                                    <a href="imagens/Figura06.jpg" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura06.jpg" alt="Uma máscara branca feliz e uma máscara branca triste">
                                    </a>
                                    <p class="TituloFigura"><strong>Figura 06:</strong> Ator social</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura06.jpg" alt="Uma máscara branca feliz e uma máscara branca triste">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="FonteFigura">Fonte: Freepik</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p class="wow fadeInLeft" data-wow-delay="0.3s">Todo ator social (com projeto e capacidade de produzir fatos no jogo) é capaz de fazer pressão para alcançar seus objetivos, podendo acumular força, gerar e mudar estratégias para converter-se num centro criativo de acumulação de poder. O diagnóstico inicial de problemas, que conformam uma situação-problema a ser enfrentada por um ator, pode ser visto como o resultado do jogo realizado por um conjunto de atores num momento pretérito.</p>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-sm-12">    
                                    <br><p  class="wow fadeInRight" data-wow-delay="0.3s">É possível caracterizar o agir social como um jogo que pode ser de natureza cooperativa ou conflitiva. Num jogo social, diferentes jogadores têm perspectivas que podem ser comuns ou divergentes e controlam recursos que estão distribuídos entre os jogadores segundo suas histórias de acumulação de forças em jogos anteriores. </p>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <br><div class="text-center">
                                        <a href="imagens/Figura07.jpg" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.3s" src="imagens/Figura07.jpg" alt="Uma pessoa em uma mesa de negócios segurando duas peças de um quebra-cabeça">
                                        </a>
                                        <p class="TituloFigura"><strong>Figura 07:</strong> Jogo social</p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura07.jpg" alt="Uma pessoa em uma mesa de negócios segurando duas peças de um quebra-cabeça">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="FonteFigura">Fonte: Freepik</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><p>Um conjunto de jogos sociais conforma um contexto que pode ser entendido como um sistema social. Mas, diferentemente de jogos esportivos, por exemplo, no jogo social, ou no jogo político que tipicamente ocorre nas atividades de PEG, as regras do jogo podem alterar-se em função de jogadas e de acumulações dos jogadores.</p>


                        
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
                <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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