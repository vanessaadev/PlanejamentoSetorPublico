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

                        <p class="SubTitulo"> Tipos de Estratégias</p>
                        <hr>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Estratégia corporativa</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Estabelece posições comerciais, em diferentes indústrias, que possibilitam melhorar o desempenho do grupo de negócios em que a organização se diversificou. A formulação desse tipo de estratégia é realizada no mais alto nível da organização.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Estratégia organizacional</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>É projetada para alcançar os objetivos globais da organização. Esse processo inclui atividades de seleção e desenvolvimento de estratégias gerais e, posteriormente, tomadas de decisões específicas a respeito do papel das diversas linhas de negócios da organização e da quantidade de recursos a serem alocados.</p>
                                        <p>Existem algumas estratégias gerais que a organização pode adotar:</p>
                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estratégia de concentração em uma única linha de negócios;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estratégia de crescimento;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estratégia de estabilidade;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estratégia de redução de despesas;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estratégias combinadas.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Estratégia de negócios</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Envolve as tomadas de decisões em nível de divisão ou unidade de negócios, ou seja, para cada negócio em que a organização atua, devendo ser consistente com a sua estratégia corporativa. A estratégia de negócio tem como objetivo um desempenho bem-sucedido em uma linha de negócio específica, bem como formar e/ou reforçar uma posição competitiva de longo prazo, que produza uma vantagem competitiva para a instituição.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Estratégia funcionais</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>São formuladas por especialistas de cada área funcional da organização (marketing, recursos humanos, financeira e demais), descrevendo as tarefas específicas que cada área terá que desenvolver para se implementar a estratégia da instituição. Dessa forma, os responsáveis pela estratégia funcional devem entrar em harmonia com as estratégias de negócios para garantir que todas as estratégias sejam consistentes.</p>
                                        <p>A estratégia funcional possui uma abrangência mais restrita e adiciona detalhes mais relevantes ao plano de negócios estabelecendo as ações, abordagens e práticas para a operação de uma área ou função do negócio. Os objetivos da estratégia funcional são: fornecer apoio para a estratégia geral de negócios e para a abordagem competitiva da instituição; e descrever como a área funcional vai atingir seus objetivos e função.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Estratégia operacional</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>É direcionada às unidades operacionais básicas, tais como fábricas, distritos e regiões de vendas e departamentos dentro de áreas funcionais. As estratégias operacionais estão relacionadas com iniciativas estratégicas e abordagens mais restritas ao gerenciamento de unidades operacionais-chaves e para o tratamento de tarefas operacionais diárias, que tenham significado estratégico, acrescentando detalhes e complementos às estratégias funcionais e ao plano geral do negócio.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>Estratégias de Recursos Humanos</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        
                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Gestão Participativa</strong></p>
                                        
                                        <p>Associada ao estilo organizacional que permite participação significativa dos funcionáriosb trabalhadores no planejamento, execução e controle de suas tarefas.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Formação de grupos nos quais os trabalhadores receberam autonomia para decidir;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Criação do Clube dos 20, com a finalidade de estimular o espírito participativo dos funcionários nas decisões gerenciais;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Manutenção de pessoal de alto nível, mostrando aos funcionários que precisam participar mais nas decisões e ajudar a acabar com a burocracia interna.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Administração da Compensação</strong></p>
                                        
                                        <p>Atividade da organização que lida com a recompensa recebida pelos funcionários como retorno pela execução de tarefas organizacionais, podendo ser diretas (salários, bônus, comissões etc) e indiretas (planos de saúde, férias etc.)</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Adotou um programa de participação nos lucros como forma de estimular os empregados;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reestruturação do plano de cargos e salários;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Premiação em dinheiro aos que tiveram sugestões aceitas e carta de agradecimento aos outros que também participaram.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Treinamento e Desenvolvimento</strong></p>
                                        
                                        <p>Iniciativas para a capacitação e aperfeiçoamento dos funcionários, visando a agregar-lhes valor e a torná-los cada vez mais habilitados para a execução das atividades da instituição.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Entre outras ações, a instituição subsidia 100% da educação de seus funcionários, do ensino fundamental ao doutorado;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Para implantar a nova cultura, a organização desenvolve cursos, seminários e palestras;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Investir permanentemente em mão de obra, com programas de desenvolvimento de frentes e de capacitação para tomada de decisões.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Motivação</strong></p>
                                        
                                        <p>Ações que visam estimular, incentivar e levar funcionários a agir de determinada forma ou a levar a um comportamento específico de comprometimento com a instituição.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ações como a motivação dos funcionários para que pensem, proponham e ajudem a colocar em execução, alternativas para conter custos;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os funcionários receberam, folhetos recomendando um esforço permanente para reduzir custos, melhorar o atendimento e criar dispositivos para aumentar a lucratividade dos associados.</li>          
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Avaliação de Desempenho</strong></p>
                                        
                                        <p>Procedimentos de apreciação sistemática do desempenho de cada funcionário no cargo e o seu potencial de desenvolvimento na organização.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mensalmente, gerentes e líderes preenchem formulários de avaliação de seus subordinados para garantir a qualidade no trabalho;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os funcionários são avaliados periodicamente, baseados na comparação com outros colegas do mesmo cargo.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Células de Negócios</strong></p>
                                        
                                        <p>Formação de equipes autogeridas com maiores responsabilidades e poder de decisão.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Adotou o sistema “células de negócios” tornando as equipes de vendas especializadas</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Contratação</strong></p>
                                        
                                        <p>Admissão de novos funcionários para compor seu quadro.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Contratação para aumento do quadro de funcionários;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Abertura de 1500 novas vagas no quadro de pessoal;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Admitiu mais de 1900 empregados;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Devido ao crescimento, o quadro de pessoal aumentou.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Incentivo à Aposentadoria</strong></p>
                                        
                                        <p>Iniciativas objetivando a aposentadoria de funcionários com benefícios extras, como forma de reduzir o quadro sem o impacto da demissão direta.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Adotou programa de incentivos à aposentadoria.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Recrutamento Interno</strong></p>
                                        
                                        <p>Preferência a funcionários internos para preenchimento de cargos, normalmente com promoção.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Executivos criados na instituição assumiram o comando das seis novas diretorias, os antigos diretores viraram consultores dos novatos.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Redução do quadro de Funcionários</strong></p>
                                        
                                        <p>Demissão direta e/ou incentivos à demissão voluntária.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O enxugamento atingiu os cargos de alto e médio escalão;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reduziu em 25% o número de funcionários;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reduziu o quadro de pessoal de cerca de 1400 para 800 funcionários;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> De cinco membros do escalão executivo superior passaram a ser apenas três.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Responsabilidade Social</strong></p>
                                        
                                        <p>Ações visando à atuação socialmente responsável dos funcionários.</p>

                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Atenção a áreas sociais com parcerias com a Fundação Abrinq e o Instituto Ethos de Responsabilidade Social com participação dos funcionários nas atividades.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p class="SubSubTitulo">Mapas Estratégicos como Suporte ao Planejamento</p>
                        <hr>

                        <p>Para Mintzberg, Ahlstrand e Lampel (2000), a formulação da estratégia consiste em um processo emergente e, enquanto a estratégia deliberada focaliza o controle, a estratégia emergente focaliza o aprendizado. Para os mesmos autores, a administração estratégica pode ser considerada um processo de aprendizado coletivo. Logo, o que realmente importa não é apenas a aprendizagem em si, mas a aprendizagem coletiva. Essa noção é plenamente compatível com organizações que operam em ambientes complexos, nos quais o conhecimento requerido para criar estratégias se encontra bastante difuso.</p>

                        <p>Acerca, ainda, de conhecimento, Nonaka e Takeuchi (1991) tratam o processo de criação do conhecimento como resultado de um ciclo contínuo de quatro processos integrados: externalização, internalização, combinação e socialização.</p>

                        <p>Conforme recordam Costa e Krucken (2010), mapear conhecimentos é parte fundamental dos processos de gestão do conhecimento organizacional. Os mapas servem tanto para localizar especializações quanto para mapear os ativos de conhecimento, possibilitando que quaisquer tipos de conhecimento se tornem, formalmente, acessíveis. Destarte, o processo de construção de um mapa trata da explicitação: compreende externalização e socialização do conhecimento; desenvolve visões, linguagens e vocabulário comuns; estimula a interação e a evolução do conhecimento construído coletivamente. O mapa como produto, por sua vez, retrata o conhecimento codificado, produzindo internalização e combinação, ou, em outras palavras, serve como um guia para a análise crítica, o diagnóstico e a contextualização, oferecendo subsídios para a elaboração de cenários e para a tomada de decisões. Além disso, consolida uma memória evolutiva e material de base para a gestão do conhecimento.</p>

                        <p>Ademais, segundo as mesmas autoras, experiências envolvendo mapas estratégicos trazem como resultados principais o desenvolvimento da visão estratégica do negócio e do seu ambiente, a análise crítica do posicionamento do negócio e o desenvolvimento da visão sistêmica de competitividade. Adicionalmente, estimulam o desenvolvimento de competências individuais entre os sujeitos, tais como: análise crítica; comunicação verbal e visual; compartilhamento de conhecimentos; e trabalho em equipe. Dessa forma, é imprescindível que os mapas sejam desenvolvidos dinamicamente, como registros em atualização constante.</p>



                        



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
                <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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