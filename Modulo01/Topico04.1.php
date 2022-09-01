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

                        <p class="SubTitulo"> Metodologia de Diagnóstico de Situações</p>
                        <hr>

                        <p>No que diz respeito a planejar por situações-problema, vale ressaltar que, da mesma forma que a MDS (metodologia de diagnóstico) se dedica a elucidar os momentos descritivo e explicativo do tratamento de uma situação problema, a MPS (metodologia de planejamento) o faz em relação ao momento normativo. Portanto, uma boa gestão depende de quatro capacidades (habilidades e conhecimentos) para o tratamento de problemas em âmbito público:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Explicar a situação-problema que afeta uma instituição;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Formular propostas de ação para resolver problemas sob incerteza;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conceber estratégias que levem em conta outros atores e eventuais mudanças de contexto;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Atuar no momento oportuno e com eficácia, recalculando e completando um Plano de Ação.</li>
                        </ul>

                        <p>Explicar a situação em que uma instituição ou um ator está ou pretende estar envolvido foi o assunto tratado pela Metodologia de Diagnóstico de Situações. A Metodologia de Planejamento de Situações proporciona conceitos para os outros três pontos acima indicados, a partir de uma estrutura lógica que centra a ação de governo na resolução de problemas. A decisão de buscar soluções para um problema identificado permite:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Administrar o problema em um espaço menor;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Enfrentá-lo no espaço originalmente declarado;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Dissolvê-lo em um espaço maior.</li>
                        </ul>

                        <p>Para você entender melhor, preparamos um exemplo relacionado ao aumento do número de crimes cometidos por adolescentes. Vejaa imagem a seguir.</p>

                        <div class="text-center">
                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura15.png" alt="Quadro com problemas por conta do aumento de crimes cometidos por adolescentes">
                            </a>
                            <p class="TituloFigura"><strong>Figura 15:</strong> Aumento do número de crimes cometidos por adolescentes</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Quadro com problemas por conta do aumento de crimes cometidos por adolescentes">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura">Fonte: Daguino (2009)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>A escolha entre esses três tipos de ação vai definir a estratégia geral, os contornos e a abrangência dos resultados que serão obtidos mediante a implementação de um conjunto de operações consignado num Plano de Ação.</p>

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>As principais categorias analíticas, tais como ator social, ação ou momento no processo de planejamento devem ser definidas em função do conceito de situação-problema.</p>
                            </div>
                        </div>
                        
                        <p>O dirigente público, ao atuar em contextos sujeitos a constante mudança, pode ser representado como um ator que se movimenta num jogo social. Todo ator social pode desempenhar um papel de protagonista e não de simples observador, mas para isso precisa compreender a realidade em transformação.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">Como já destacado, cada <strong>“realidade”</strong> é percebida de modo distinto dependendo do ponto de observação (valores, interesses, experiências prévias etc.) do ator que planeja (ou, simplesmente, observa). Uma mesma realidade pode ser percebida de modo diferente dependendo de como está situado um observador específico; quais são seus interesses e seus objetivos. Dessa forma, a análise de uma determinada situação é uma apreciação da realidade que enfrenta um determinado ator a partir da sua visão.</p>

                        <p class="wow fadeInDown" data-wow-delay="0.3s">A explicação situacional resultante é autorreferenciada, ou seja, ela é condicionada pelo ponto de vista do ator. E, por isto, influenciada pelo tipo de inserção na realidade que possui o ator que planeja.</p>

                        <p>Uma explicação formulada por um ator social sobre um aspecto da realidade pode ser verificada ou refutada apenas em função da maior ou menor capacidade de sua cadeia de argumentos em sustentar seus questionamentos. Portanto, sempre haverá mais de uma visão acerca da realidade, sendo que os ideais de objetividade e as distinções entre verdadeiro e falso perdem força no trabalho do analista e na reflexão voltada para a ação que caracteriza o PEG.</p>

                        <p>Apresentamos, a seguir, um esquema que sintetiza a metodologia de planejamento baseada na análise de situações-problema, que é a que adotamos como eixo da proposta de PEG.</p>
                        
                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Quadros com plenejamentos estratégicos governamentais">
                            </a>
                            <p class="TituloFigura"><strong>Figura 16:</strong> Esquema geral para planejamento estratégico governamental</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura16.png" alt="Quadros com plenejamentos estratégicos governamentais">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura">Fonte: Matus (1994)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Na situação inicial, o ator declara sua insatisfação sobre uma dada realidade em um determinado momento e, por isso, tem demandas a viabilizar, necessidades a satisfazer e problemas a resolver. Esse ator constrói uma explicação que serve de base para a definição fundamentada de uma situação-objetivo. Ela envolve a explicitação de um conjunto de resultados que se espera atingir ao final de um determinado tempo e que resolverão os problemas iniciais formulados ou atenderão às demandas e às necessidades identificadas.</p>

                        <p class="wow fadeInDown" data-wow-delay="0.3s">O esquema destaca a confiabilidade do plano elaborado e o contexto em que ele será desenvolvido como elementos essenciais para a obtenção dos resultados desejados. Nesse sentido, um plano só se completa na ação, e esse agir implica permanente avaliação e revisão do que foi planejado. Para obter confiabilidade, é necessário verificarmos a todo momento a qualidade da proposta, a sua consistência e fundamentação, como também garantir a boa coordenação da formulação e da implementação.</p>

                        <p>O monitoramento das alterações verificadas na situação-problema e o acompanhamento do contexto em que elas se inserem são fundamentais, já que atingir uma determinada situação-objetivo não depende apenas da vontade do ator que planeja. Mas também das ações e dos resultados que são obtidos, pois influenciam mudanças no contexto, a ocorrência de surpresas e, principalmente, os planos e as ações de outros atores sociais.</p>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Planejar implica identificar e disponibilizar os meios necessários para a ação, os diversos recursos necessários, poder político, conhecimento, capacidades organizativas, equipamentos e tecnologia e também, mas nem sempre, recursos econômico financeiros.</p>
                            </div>
                        </div>

                        <br><p><strong>Operações</strong></p>
                        <hr>

                        <p>As operações podem ser entendidas como os grandes passos (conjunto de ações), ou como o conjunto de condições que deve ser criado para a viabilização do plano, que são elaboradas como a solução de cada "nó crítico" identificado num fluxograma explicativo. Solução essa a ser alcançada no âmbito desse problema no prazo do plano. O conjunto deve ser suficiente para assegurar o cumprimento do plano.</p>

                        <p>As operações podem também ser entendidas como atos linguísticos enunciados no espaço das declarações de compromissos, visando à mudança da realidade. Sua formulação deve iniciar por <strong>“Comprometo-me a ... (fazer algo)”</strong>. Para tanto, as operações precisam ser:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Bem estruturadas (operações de resolução normalizada, sem deliberação);</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> De risco calculado (operações com uma probabilidade precisa de êxito);</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Apostas operacionais (operações quase estruturadas sob incerteza).</li>
                        </ul>

                        <p>Além disso, o compromisso visado à ação deve ser diferenciado de:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Uma recomendação (seria bom que...);</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Um critério (deve-se...);</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Um enunciado de um objetivo (devemos alcançar...);</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Uma proposta de política (enunciado geral);</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Uma declaração de prioridade.</li>
                        </ul>

                        <p>Cada uma das operações formuladas para enfrentar uma situação-problema determinada deve ser detalhada para viabilizar sua implementação. A seguir, você vai conhecer os principais componentes desse detalhamento.</p>                        
                        
                        


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
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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