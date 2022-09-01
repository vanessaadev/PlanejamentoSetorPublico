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

                        <p class="Titulo"> Metodologia de Diagnóstico de Situações</p>
                        <hr>

                        <p><strong>Objetivo:</strong> Compreender como se pode gerar coletivamente um mapa cognitivo relativo a uma situação-problema, e como construir o seu fluxograma explicativo.</p>

                        <p>Gerar um produto adequado num cenário postulado como desejável (farol), mas numa situação em que o contexto socioeconômico e político é cambiante, assim como são os interesses e projetos políticos dos atores que se quer favorecer, sobretudo quando é difícil visualizar sua provável evolução, não é o mais sensato, o que não quer dizer, é claro, que devamos deixar o barco à deriva.</p>

                        <div class="row">
                            <div class="col-4">
                                <br><br><div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img style="width: 35%;" class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Ilustração de uma bússula">
                                    </a>
                                    <p class="TituloFigura"><strong>Figura 04:</strong> Bússola</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura04.png" alt="Ilustração de uma bússula">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="FonteFigura">Fonte: Freepik</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <p>Nossa bússola é, justamente, a metodologia que aqui apresentamos. Ela é mais eficaz do que qualquer <strong>“farol”</strong> que a priori possamos divisar, pois trabalha com situações - problema que derivam do ambiente socioeconômico e político em que estamos <strong>“velejando”</strong> e que também são definidas no âmbito dos atores que nos interessam promover e, sendo assim, trazem embutidos seus valores e interesses.</p>
                            </div>
                        </div>
                        
                        <p>Ela começa com a construção de um mapa cognitivo de uma determinada situação-problema. Esse mapa pode ser considerado, para todos os efeitos, como um modelo descritivo de uma realidade complexa sobre a qual, num momento normativo posterior, com o emprego da Metodologia de Planejamento de Situações (MPS), elaborar-se-ão estratégias especificamente voltadas a alterar a configuração atual descrita.</p>
                        
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <p>A Metodologia de Diagnóstico de Situações (MDS) busca viabilizar uma primeira aproximação aos conceitos adotados para o PEG e ao conjunto de procedimentos necessários para iniciar um processo dessa natureza numa instituição pública, de governo. Do ponto de vista mais formal e enfatizando seu caráter pedagógico mais do que o de ferramenta de trabalho que ela possui, a MDS pode ser considerada como uma variação da metodologia do estudo de caso ou do <strong>“método do caso”</strong>, amplamente utilizada desde o início do século XX nas Escolas de Direito e de Administração (pública e de empresas) em todo o mundo.</p>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <br><br><div class="text-center">
                                    <a href="imagens/Figura05.jpg" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura05.jpg" alt="Três pessoas vestidas socialmente representando uma equipe de diagnóstico de situações">
                                    </a>
                                    <p class="TituloFigura"><strong>Figura 05:</strong> Equipe de Diagnóstico de Situações</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.jpg" alt="Três pessoas vestidas socialmente representando uma equipe de diagnóstico de situações">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="FonteFigura">Fonte: Freepik</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><div class="accordion accordion-flush" id="AccordionFase01">                       
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background: #44833d;">
                                        <h4><i class="fa fa-arrow-right"></i> <strong>Clique aqui para saber mais detalhes da metodologia!</strong></h4>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <ul class="none">                                            
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os conceitos de Ator Social e Jogo Social, assim como as diretrizes para a ação estratégica;</li class="wow fadeInLeft" data-wow-delay="0.3s">
                                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Uma visão sobre os condicionantes da ação de governo, com a abordagem de alguns conceitos como: projeto de governo, governabilidade, capacidade para governar, tempo e oportunidade. Enfocaremos, especialmente, o Triângulo de Governo como ferramenta para a análise de Governabilidade;</li class="wow fadeInLeft" data-wow-delay="0.3s">
                                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A maneira como se dá o tratamento de problemas no âmbito da metodologia. Apresentaremos o conceito de problema (em tudo análogo ao de situação-problema) e exemplificaremos os procedimentos adotados para sua identificação e formulação adequada;</li class="wow fadeInLeft" data-wow-delay="0.3s">
                                            <br><li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os procedimentos para a construção do fluxograma explicativo da situação, buscando evidenciar a relação que essa metodologia possui com a Metodologia de Mapas Cognitivos e com os trabalhos sobre Planejamento Estratégico Situacional, desenvolvidos pelo Professor Carlos Matus. O diagnóstico de uma situação é a base para a definição das ações em um plano estratégico, assunto que é desenvolvido através da Metodologia de Planejamento Situacional.</li class="wow fadeInLeft" data-wow-delay="0.3s">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>

                        <p class="wow fadeInDown" data-wow-delay="0.3s">Tais abordagens serão discutidas a partir dos pressupostos para uma ação estratégica em ambiente governamental.</p>

                        <p class="wow fadeInLeft" data-wow-delay="0.6s">Para uma mesma situação-problema, podemos construir diferentes explicações ou diagnósticos válidos. Cada ator social tem a sua visão da realidade, dos resultados que deve e pode alcançar e da ação que deve empreender. No entanto, é preciso avançar na percepção sobre o conceito de Diagnóstico, incorporando a ideia mais apurada de análise de situações e compreender que é necessário saber interagir com outros atores para ganhar sua colaboração ou vencer suas resistências.</p>

                        <p class="wow fadeInRight" data-wow-delay="0.9s">Partimos da hipótese realista e minimalista de que o ator que planeja está inserido no objeto planejado e não tem controle sobre o contexto socioeconômico e político onde vai agir. O PEG supõe que o ator que planeja, atua em um ambiente marcado por incertezas, em que surpresas podem ocorrer a todo o momento e que a possibilidade do insucesso está sempre presente e deve ser incorporada no cálculo político.</p>
                        
                        


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
                <a href="Topico02.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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