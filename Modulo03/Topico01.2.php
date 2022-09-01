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

                        <p class="SubTitulo"> A Gestão Estratégica</p>
                        <hr>

                        <p>A gestão estratégica é uma “<strong>metodologia</strong>” importante que visa assegurar o sucesso da empresa no momento atual, bem como principalmente o seu sucesso no futuro. Nesse sentido, a gestão estratégica inclui no mínimo três etapas distintas:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O planejamento estratégico,</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A execução,</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O controle.</li>
                        </ul>

                        <p><strong>O planejamento estratégico, a primeira etapa da gestão estratégica, visa:</strong></p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificar os riscos e propor planos para minimizá-los e, até mesmo, evitá-los;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificar os pontos fortes e fracos de uma organização em relação à sua concorrência e ao ambiente de negócio em que atua;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conhecer o mercado e definir estratégias para os produtos e serviços.</li>
                        </ul>

                        <p>O planejamento estratégico está relacionado aos objetivos de longo prazo e às ações que serão realizadas para alcançá-los, os quais afetam a organização como um todo. Ele é conceituado como um processo gerencial que possibilita ao executivo estabelecer o rumo a ser seguido. É geralmente de responsabilidade dos níveis mais altos da empresa. Na realidade, sem o envolvimento direto do principal executivo da empresa, como o líder da condução do processo estratégico em uma empresa, este dificilmente ocorrerá a contento.</p>

                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" width="500" alt="Os três tipos de planejamento dentro da “pirâmide organizacional”">
                            </a>
                            <p class="TituloFigura"><strong>Figura 01:</strong> Os três tipos de planejamento dentro da “pirâmide organizacional”</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Os três tipos de planejamento dentro da “pirâmide organizacional”">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Os três tipos de planejamento dentro da “pirâmide organizacional”</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Num segundo nível, o planejamento tático está relacionado aos objetivos de curto prazo e às ações que afetam somente uma parte da empresa. Ele tem como objetivo otimizar determinada área e não a empresa como um todo, sendo desempenhado por níveis organizacionais inferiores.</p>

                        <p>E em um terceiro nível, o planejamento operacional, por sua vez, pode ser considerado como a formalização das metodologias de desenvolvimento e de implantação estabelecidas. Nesse nível se encontram, basicamente, os planos de ação ou planos operacionais.</p>

                        <p>Como o planejamento estratégico trata a empresa como um todo e, perante seu ambiente, ele deve ser analisado quando se pretende estudar as estratégias traçadas, pois tem como objetivo a geração de vantagens competitivas para a empresa.</p>

                        <p>Por fim, o planejamento estratégico – o primeiro passo da gestão estratégia de uma organização - é parte essencial do pensamento empresarial. No entanto, essa cultura estratégica ainda está pouco difundida no Brasil, exceto nas grandes organizações privadas, que já estão bem inseridas no contexto de globalização da economia e de competição global. Por outro lado, por exemplo, nos Estados Unidos, essa questão estratégica é o pré-requisito básico para a grande maioria das organizações, independente de seu tipo ou porte.</p>

                        <p class="SubSubTitulo"> Os Elementos Principais da Gestão Estratégica</p>
                        <hr>

                        <div class="ExemploCaixa">
                            <div class="row">
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Declaração de missão</p>
                                    <p>A missão é o elemento que traduz as responsabilidades e pretensões da organização junto ao ambiente e define o negócio, delimitando o seu ambiente de atuação. A missão da organização representa sua razão de ser, o seu papel na sociedade.</p>
                                </div>
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Definição dos objetivos</p>
                                    <p>A organização persegue simultaneamente diferentes objetivos em uma hierarquia de importância, de prioridades ou de urgência.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ExemploCaixa">
                            <div class="row">
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Visão de negócios</p>
                                    <p>Mostra uma imagem da organização no momento da realização de seus propósitos no futuro. Trata-se não de predizer o futuro, mas de assegurá-lo no presente. A visão de negócios cria um “estado de tensão” positivo entre o mundo como ele é e como gostaríamos que fosse (sonho). A visão de negócios associada a uma declaração de missão compõe a intenção estratégica da organização.</p>
                                </div>
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Fatores críticos de sucesso</p>
                                    <p>A organização persegue simultaneamente diferentes objetivos em uma hierarquia de importância, de prioridades ou de urgência.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ExemploCaixa">
                            <div class="row">
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Diagnóstico estratégico externo</p>
                                    <p>Procura antecipar oportunidades e ameaças para a concretização da visão, da missão e dos objetivos empresariais. Corresponde à análise de diferentes dimensões do ambiente que influenciam as organizações. Estuda também as dimensões setoriais e competitivas.</p>
                                </div>
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Diagnóstico estratégico interno</p>
                                    <p>Corresponde ao diagnóstico da situação da organização diante das dinâmicas ambientais, relacionando-a às suas forças e às fraquezas e criando as condições para a formulação de estratégias que representam o melhor ajustamento da organização no ambiente em que atua. O alinhamento dos diagnósticos externos e internos produz as premissas que alicerçam a construção de cenários.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ExemploCaixa">
                            <div class="row">
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Análise dos públicos de interesse (stakeholderes)</p>
                                    <p>Quando foi definida a estratégia, já se observou que só se tem sucesso na estratégia elaborada ao atender às necessidades dos públicos de interesse. Um stakeholder consiste em uma pessoa, um grupo de pessoas ou uma organização que pode influenciar ou ser influenciado pela organização, como consumidores, usuários, empregados, proprietários, dirigentes, governo, instituições financeiras, opinião pública ou acionistas. A análise consiste na identificação dos grupos e de seus interesses e poderes de influência no que diz respeito à missão da organização.</p>
                                </div>
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Formalização do plano</p>
                                    <p>Um plano estratégico é um plano para a ação, mas não basta somente a formulação das estratégias dessa ação. É necessário implementálas por meio de programas e projetos específicos. Requer um grande esforço de pessoal e emprego de modelos analíticos para a avaliação, a alocação e o controle de recursos. Esse elemento metodológico exige uma abrangência completa de todas as áreas de tomada de decisão da organização; uma racionalidade formal no processo de tomada de decisão e um firme controle sobre o trabalho.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ExemploCaixa">
                            <div class="row">
                                <div class="col-sm">
                                    <p style="color: #fff;font-size: 1.4em;margin-bottom: 0 !important;padding-left: 1rem;background-color: #2ab179;border-radius: 7px 7px 0px 0px;"> Auditoria de desempenho e resultados (reavaliação estratégica)</p>
                                    <p>Trata-se de rever o que foi implementado para decidir os novos rumos do processo, mantendo as estratégias implantadas com sucesso e revendo as más estratégias. A reavaliação das estratégias aparece como resultado de um processo de medição de diversos grupos de influências associados a cada estratégia.</p>
                                </div>
                            </div>
                        </div>

                        <p class="SubSubTitulo">Por que Gestão (Planejamento) Estratégica(o)?</p>
                        <hr>

                        <p>As múltiplas ferramentas de gestão disponíveis nos dias atuais, seja na área de qualidade (TQM, ISO 9001 ou 6-sigma), seja na área de marketing (CRM), ou seja, por exemplo, na área de produção (produção enxuta – lean manufacturing) se forem aplicados sem visão estratégica na maioria das vezes, focam-se em problemas que não necessariamente têm influência externa, ou seja, esses programas, às vezes, falham por uma visão excessiva e exclusivamente interna, fazendo com que as prioridades possam estar mal definidas em termos de resultados efetivamente importantes para a posição competitiva da empresa.</p>

                        <p>Para Drucker (1994), a cada três anos, uma organização precisa desafiar o status quo através do questionamento:</p>

                        <div class="SaibaMaisTexto" style="border-radius: 7px 7px 7px 7px;background-color: #539df121;">
                            <p><strong>“Se eu estivesse nesse negócio, serviço, canal de distribuição etc. entraria nele agora?”</strong></p>
                        </div><br>
                        
                        <p>A resposta a essa simples pergunta de Drucker <strong>exige uma visão sistêmica de toda a organização e de seus múltiplos negócios, quando for o caso</strong>. Esse é o objetivo da Gestão Estratégica. Para isso, é necessário uma <strong>Estratégia Organizacional</strong>, pois sem ela é como voar num boeing sem piloto e sem instrumentos automáticos.</p>

                        <p><strong>As principais vantagens da Gestão Estratégica (Planejamento Estratégico) são:</strong></p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> fornece uma visão sistêmica, pois aprofunda o conhecimento sobre a organização, mercado/clientes, concorrentes, parceiros e fornecedores;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> egiliza e fundamenta decisões, uma vez que entre os líderes da organização sobre o que realmente é importante;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estabelece uma direção única, porque alinha os esforços de todos na organização para o atendimento de objetivos comuns;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> melhora a capacidade de adaptação, por facilitar a reestruturação organizacional frente às mudanças de cenários externo e de competição;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> melhora a alocação de recursos;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> reforça a motivação;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> melhora o controle;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> sistematiza ciclos de melhoria contínua da organização.</li>
                        </ul>

                        <p><strong>Para Oliveira (1999), a Gestão Estratégica compreende:</strong></p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> planejamento Estratégico;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> organização Estratégica;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> direção Estratégica;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> controle Estratégico; e</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> desenvolvimento Estratégico.</li>
                        </ul>

                        <p><strong>Oliveira (1999) desdobra o Planejamento Estratégico nas fases e etapas apresentadas, resumidamente, na imagem a seguir.</strong></p>

                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" width="600" alt="As fases e etapas do Planejamento Estratégico">
                            </a>
                            <p class="TituloFigura"><strong>Figura 02:</strong> As fases e etapas do Planejamento Estratégico</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="As fases e etapas do Planejamento Estratégico">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong>(Oliveira, 1999)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Por outro lado, Chiavenato (2004) desdobra o Planejamento Estratégico numa sequência distinta, conforme se verifica na imagem 3.</p>

                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" width="600" alt="As fases e etapas do Planejamento Estratégico">
                            </a>
                            <p class="TituloFigura"><strong>Figura 03:</strong> As fases e etapas do Planejamento Estratégico</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="As fases e etapas do Planejamento Estratégico">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> (Oliveira, 1999)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Em resumo, os elementos que compõem a gestão estratégica estão elencados em ambas as propostas aqui apresentadas.</p>

                        <p>Uma atividade essencial no processo de gestão estratégica de uma organização é a reflexão sobre a sua intenção estratégica.</p>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto">
                            <strong>“A intenção estratégica representa a alavancagem de todos os recursos internos, capacidades e competências essenciais de uma organização com a finalidade de cumprir suas metas no ambiente competitivo. Ela somente pode existir quando todas as pessoas da organização em todos os níveis e áreas estão empenhadas na busca de um desempenho que seja único e significativo. É essa intenção estratégica que proporciona aos membros da organização a meta que merece seu esforço, dedicação e compromisso pessoal de permanecer como o melhor no mercado ou derrubar a empresa que está no pódio.”</strong>
                            <p class="text-end">(GARY HAMEL; C. K. PRAHALAD, 1989)</p>
                            </p>
                        </div>

                        <p>Esse processo consiste no estabelecimento das “pedras fundamentais” sobre as quais uma empresa se encontra organizada, tais como:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qual é o negócio da organização?</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qual a razão de existir da organização?</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quais os caminhos que a organização espera trilhar no futuro para sobreviver num mundo altamente globalizado e competitivo?</li>
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



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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