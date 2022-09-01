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

                        <p class="Titulo"> Componentes do PPA: Dimensão Estratégica</p>
                        <hr>

                        <p><strong>Objetivo:</strong> Apresentar os eixos governamentais de atuação intersetorial, com enfoque na dimensão estratégica: atributos, indicadores e temas estratégicos.</p>

                        <p class="SubTitulo"> Os Componentes do PPA</p>
                        <hr>

                        <p>Na dimensão estratégica, o PPA apresenta os seguintes componentes:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Eixos Governamentais;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Temas Estratégicos.</li>
                        </ul>

                        <p class="SubSubTitulo"> Eixos Governamentais de Atuação Intersetorial</p>
                        <hr>

                        <p>Conceitua-se eixo como o elemento de planejamento que organiza a atuação governamental, de forma integrada, articulada e sistêmica, com o propósito de atender à complexidade da missão de tornar o Ceará um estado com desenvolvimento sustentável e qualidade de vida.</p>

                        <p>O Plano de Governo da gestão 2015-2018 organiza o governo do Estado do Ceará em sete eixos, que representam sete perspectivas, os 7 Cearás. Tais eixos foram construídos de modo a priorizar temas estratégicos que contribuirão para o alcance de nossa visão de futuro, que é tornar, até 2027, o “<strong>Ceará, um Estado com Desenvolvimento Sustentável</strong>”.</p>
                        
                        <p>É perfeitamente perceptível que temas como saúde, educação, segurança, água, energia, infraestrutura para o desenvolvimento econômico, trabalho e renda, e agricultura foram priorizados e organizados, de forma integrada e intersetorial, para aumentar a qualidade e eficiência da gestão pública.</p>

                        <p>Esses eixos correspondem às perspectivas em função das quais será definida toda a atuação governamental, conforme segue abaixo:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ceará da Gestão Democrática por Resultados;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ceará Acolhedor;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ceará de Oportunidades;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ceará Sustentável;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ceará do Conhecimento;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ceará Saudável;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ceará Pacífico.</li>
                        </ul>

                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Para cada um dos eixos governamentais de atuação intersetorial deverá ser instituído um comitê permanente de planejamento, acompanhamento, monitoramento e orientação de políticas públicas.</p>
                            </div>
                        </div>

                        <p><u><strong>Atributos dos Eixos</strong></u></p>

                        <p>Cada eixo contará com os seguintes atributos:</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Resultado estratégico</strong></p>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Serviços públicos estaduais planejados e geridos de forma eficiente e efetiva, atendendo às necessidades dos cidadãos, com transparência e equilíbrio fiscal (Ceará da Gestão Democrática por Resultados).</p>
                            </div>
                        </div>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Indicador estratégico</strong></p>

                        <p>Instrumento que permite aferir o desempenho do PPA no âmbito de cada eixo, tendo como referência uma medida inicial, se possível, e a meta que se quer alcançar, o que gera subsídios para seu monitoramento e avaliação, a partir da observação do comportamento de uma determinada realidade ao longo do período do Plano;</p>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Percentual de pobres (1/2 sal. min. per capita) (Ceará Acolhedor)</p>
                            </div>
                        </div>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>A meta do indicador estratégico não fará parte da composição da Lei do PPA 2016-2019, devendo, entretanto, ser definida para fins de monitoramento e avaliação gerenciais do comportamento do indicador ao longo da vigência do Plano.</p>
                            </div>
                        </div>

                        <p>Cada indicador é apresentado por meio de uma Nota Metodológica que contém os seguintes elementos:</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Nota Metodológica do Indicador</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Descrição</strong><br> Informa o que expressa o indicador, seu significado.</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Unidade de Medida</strong><br> Quantidade específica de determinada grandeza física, que serve como padrão para outras medidas.</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Fonte de dados e periodicidade</strong><br> Origem dos dados utilizados no cálculo do indicador e o intervalo de tempo com que são coletados.</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Fórmula de cálculo</strong><br> Expressão matemática utilizada no cálculo do indicador, destacando o significado de cada uma de suas variáveis.</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Dados de Referência</strong><br> Situação mais recente de apuração do indicador e sua respectiva data. Consiste na aferição em um dado momento, mensurado com a unidade de medida determinada.</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Abrangência Geográfica</strong><br> Área a que correspondem os dados obtidos: país, estado, município, região, localidade.</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Limitações</strong><br> Informam se o indicador é efetivo na explicação de determinado fenômeno.</li>
                                            <li class="wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Polaridade</strong><br> Sentido desejado para o indicador. Quando o indicador é do tipo que se deseja aumentar, “quanto maior melhor”, a polaridade é positiva; quando o indicador é do tipo que se deseja diminuir, “quanto menor melhor”, a polaridade é negativa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p class="SubSubTitulo"> Temas Estratégicos</p>
                        <hr>

                        <p>Os temas estratégicos consistem em desdobramentos dos eixos, sendo representados pelas diversas áreas de atuação do governo, na implementação das políticas públicas. Em decorrência dessa característica, podemos classificar os temas estratégicos da seguinte forma:</p>

                        <div class="accordion accordion-flush" id="AccordionFase02">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>SETORIAIS</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p>São os temas estratégicos relacionados à área de atuação de um único órgão/entidade, ligados a um eixo.</p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>Assistência Social, executado pela Secretaria do Trabalho e Desenvolvimento Social – STDS, no âmbito do Ceará Acolhedor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>INTERSETORIAIS</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p>São os temas estratégicos que necessitam da atuação de vários órgãos/entidades, buscando o alcance de um resultado estratégico em comum de um eixo, ou seja, no âmbito de apenas um Ceará.</p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>Infraestrutura e Mobilidade, executados de forma conjunta e integrada pela Secretaria da Infraestrutura – Seinfra e pela Secretaria das Cidades – Cidades.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p>Além desses dois tipos de temas, no âmbito de um único eixo ou Ceará, podemos visualizar a existência de um tipo específico de temas, que, conforme suas características, são classificados de:</p>

                        <div class="accordion accordion-flush" id="AccordionFase03">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>TRANSVERSAIS</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase03">
                                    <div class="accordion-body">
                                        <p>São também considerados intersetoriais, visto que exigem a atuação integrada e conjunta de diversos setores, porém, nesse caso, observa-se que, para se alcançar seu resultado estratégico, a atuação governamental deverá extrapolar o âmbito de um eixo ou Ceará, sendo necessário um esforço coordenado de órgãos que trabalham em Cearás diferentes e apresentam interfaces com o tema transversal em questão. Assim, esses temas contemplam ações estratégicas no âmbito de mais de um eixo.</p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>Convivência com a Seca, executado por setores em temas como Recursos Hídricos e Meio Ambiente (Ceará Sustentável), Agricultura Familiar e Agronegócio e Pesca e Aquicultura (Ceará de Oportunidades), Assistência Social e Políticas de Inclusão Social e Direitos Humanos (Ceará Acolhedor), dentre outros.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>A criação de tais temas transversais será realizada pela equipe da Seplag, após a realização de oficinas de discussão para identificação dos referidos temas e dos órgãos que executam políticas públicas setoriais relacionadas.</p>
                            </div>
                        </div>

                        <p><u><strong>Atributos dos temas estratégicos</strong></u></p>

                        <p>Cada tema contará com os seguintes atributos:</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Resultado temático</strong></p>

                        <P>Também visa declarar os efeitos de curto e de médio prazo dos programas sobre a melhoria dos indicadores econômicos e sociais. Esses resultados representam o impacto que se pretende realizar no âmbito de determinado tema.</P>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Infraestrutura e mobilidade assegurada para o desenvolvimento sustentável (Tema Infraestrutura e Mobilidade, Ceará de Oportunidades).</p>
                            </div>
                        </div>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Indicador temático</strong></p>

                        <p>Instrumento que permite aferir o desempenho da política pública no âmbito do tema, tendo como referência uma medida inicial, se possível, e a meta que se quer alcançar, o que gera subsídios para seu monitoramento e avaliação a partir da observação do comportamento de uma determinada realidade ao longo do período do Plano.</p>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Taxa de atendimento da educação infantil.</p>
                            </div>
                        </div>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Assim como a meta do indicador estratégico, a meta do indicador temático não fará parte da composição da Lei do PPA 2016-2019, devendo, entretanto, ser definida para fins de monitoramento e avaliação gerenciais do comportamento do indicador ao longo da vigência do Plano.</p>
                            </div>
                        </div>

                        <p>Cada indicador temático também terá uma Nota Metodológica, contendo os mesmos elementos informados para os indicadores estratégicos.</p>
                        
                        <div class="bd-callout bd-callout-warning">
                            <p class="Texto"> Os indicadores dos resultados temáticos serão acompanhados por um setor/órgão responsável. Tais indicadores podem contribuir para a medição de mais de um resultado, desde que seja um resultado de um tema transversal.</p>
                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <div class="ExemploTexto">
                                    <p>o indicador “<strong>Índice de desertificação</strong>” pode estar relacionado ao tema Meio Ambiente e ao tema transversal da Convivência com a Seca, se for o caso.</p>
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
                <a href="Topico03.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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