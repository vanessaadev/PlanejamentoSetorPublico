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

                        <h2 class="Titulo">Um Breve Histórico do Planejamento</h2>
                        <hr>


                        <p><strong>Objetivo:</strong> Realizar uma retrospectiva da evolução do planejamento desde o século XIX até os dias atuais com vista à reflexão para a transformação do “Estado Herdado” no “Estado Necessário”.</p>

                        <p>Antes de tratarmos do Planejamento Estratégico Governamental (PEG), traçamos um breve percurso histórico, a fim de que você compreenda o contexto de inserção das atividades de PEG. Além disso, apontamos para a dimensão do desafio cognitivo que a construção do “Estado Necessário” impõe para a realização dessas atividades.</p>

                        <p>Embora o planejamento possa ser considerado como uma extensão do pensamento marxista  na medida em que estava nele implícita a possibilidade de conferir ao Estado herdado do capitalismo um papel destacado na organização das tarefas associadas à transição ao socialismo, foi somente no período da Nova Política Econômica, início dos anos de 1920, que o planejamento se integrou ao arsenal do Estado soviético.</p>

                        <p>Na União das Repúblicas Socialistas Soviéticas (URSS), inspirado na experiência do exército revolucionário advinda da luta contra a burguesia e contra os inimigos externos, e apoiado pelos estudos que vieram a constituir a metodologia de balanço intersetorial (matriz de insumo produto), o planejamento logo se afirmou como instrumento de organização da economia socialista.</p>

                        <p>A potencialidade que ele apresentava em termos de prospectiva, simulação e organização para a consecução das metas econômico-produtivas permitiu que em menos de um quinquênio fosse possível atingir os níveis de produção agrícola e industrial vigentes antes da destruição causada pela guerra, pela revolução e pela sabotagem contrarrevolucionária.</p>

                        <p>A rápida industrialização e o crescimento da produção agrícola da URSS permitiram que ela despontasse como uma aliada essencial para a vitória sobre o nazismo e, já num contexto de Guerra Fria, o planejamento passou a gerar efeitos socioeconômicos positivos nos demais países do bloco socialista.</p>

                        <div class="row">
                            <div class="col-6"><br><br>
                                <div class="text-center">
                                    <a href="imagens/Figura01.jpg" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.jpg" alt="Dois homens representando a guerra fria">
                                    </a>
                                    <p class="TituloFigura"><strong>Figura 01:</strong> Guerra Fria</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.jpg" alt="Dois homens representando a guerra fria">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="FonteFigura">Fonte: Wikimedia Commons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <p>No âmbito dos países capitalistas, o planejamento – com a conotação aqui adotada e fazendo referência ao âmbito global e público, referido a um território delimitado por alguma instituição estatal – passou a ser visto, pela esquerda, como uma possibilidade de superar as relações sociais e técnicas de produção capitalistas na direção de algum tipo de socialismo. E, pela direita, como uma maneira de evitar as “<strong>falhas de mercado</strong>” e, assim, substituir, racionalmente ainda que de modo parcial, o seu papel como ente regulador e alocador de recursos.</p>
                            </div>
                        </div>

                        <p>Em alguns desses países, governos populares adotaram planejamentos com características socialistas, imitando a experiência soviética. A experiência da Frente Popular, na França e em meados da década de 1930, foi a mais significativa. No extremo ideológico oposto, na Alemanha, os dirigentes nazistas preferiram a racionalidade do planejamento à capacidade do mercado de otimizar a alocação de recursos. Isso aconteceu, primeiro, no que se relacionava à preparação para a guerra; depois, se estendeu para toda a economia, pois o Estado alemão passou a adotar métodos desenvolvidos no âmbito militar.</p>

                        <div class="bd-callout bd-callout-primary">
                            <p class="wow fadeInDown">Ainda que não as possamos caracterizar propriamente como planejamento na acepção que o termo viria a ter posteriormente, as iniciativas implementadas durante o esforço de guerra e nos processos de reconstrução europeia no imediato pós-guerra se utilizaram de métodos (de planejamento) que se aproximavam daqueles usados no campo socialista.</p>
                        </div>

                        <p>O sucesso dessas iniciativas foi um elemento importante para que a ideia do planejamento ganhasse força na América Latina. Experiências anteriores, como as que ocorreram no início da década de 1940 no Brasil, receberam impulso, estimuladas no pós-guerra pela Organização das Nações Unidas (em especial da Comissão Econômica para a América Latina e o Programa das Nações Unidas para o Desenvolvimento).</p>

                        <div class="row">
                            <div class="col-8">
                                
                                <p class="wow fadeInLeft">No plano teórico, esse processo levou a importantes contribuições amparadas num amplo espectro ideológico que foi desde o materialismo histórico até o pensamento conservador, passando pela visão keynesiana. No plano das ações de governo, surgiram no Brasil, a partir dos anos cinquenta, sucessivas experiências de planejamento no âmbito federal. Como, por exemplo, a do Plano de Metas (1956-1961) do governo de Juscelino Kubitschek, bastante bem-sucedida a julgar pelos resultados que obteve.</p>
                            </div>
                            <div class="col-4">
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura02.png" alt="Mapa do Brasil">
                                    </a>
                                    <p class="TituloFigura"><strong>Figura 02:</strong> Mapa do Brasil</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura02.png" alt="Mapa do Brasil">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="FonteFigura">Fonte: Pixabay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>A experiência brasileira de planejamento se aprofunda durante o período militar. Sucessivos planos são formulados e implementados, a partir de 1964, seguindo o estilo autoritário, centralizador e economicamente concentrador que caracterizou os governos militares. Seu projeto de Brasil-grandepotência demandava uma mobilização que, mesmo em menor grau do que havia ocorrido no âmbito dos países avançados, demandava um significativo esforço de planejamento.</p>

                        <div class="bd-callout bd-callout-warning">
                            <p>No início dos anos setenta, a implantação de um Sistema de Planejamento Federal deu origem a três edições do Plano Nacional de Desenvolvimento. O último deles, com um período de execução que coincidiu com a perda de legitimidade da ditadura militar que antecedeu a abertura e a redemocratização do País, terminando por explicitar o caráter demagógico e manipulador que envolveu a experiência de planejamento dos militares.</p>

                            <p>Com o governo civil da Nova República, iniciado em 1985, tentou-se sem muito sucesso retomar iniciativas de planejamento que fossem além do plano setorial. A partir do governo Collor, com a adoção da orientação neoliberal, iniciativas de planejamento no sentido estrito do termo, sobretudo as que visavam preparar o País e a sociedade para enfrentar um futuro que já se prefigurava como difícil, passam a ser cada vez mais escassas.</p>
                        </div>

                        <!-- no link (a), o drive não me permite acessar -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto"><a href="http://cursos.egp.ce.gov.br/pluginfile.php/25524/mod_folder/content/0/O%20Conceito%20e%20a%20Pr%C3%A1tica%20de%20Gest%C3%A3o%20de%20Documentos.pdf?forcedownload=1">CLIQUE AQUI</a> Para ler o texto "<strong>O Conceito e a Prática de Gestão de Documentos</strong>" para complementar o seu conhecimento! Confira!</p>
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



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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