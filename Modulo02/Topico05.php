<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05';
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

                        <p class="Titulo"> Componentes do PPA: Dimensão Tática</p>
                        <hr>

                        <p><strong>Objetivo:</strong> Apresentar o conceito de programa governamental, com enfoque na dimensão tática: iniciativa, produtos e metas.</p>

                        <p class="SubTitulo"> A Dimensão Tática</p>
                        <hr>

                        <p>Na dimensão tática, o PPA é composto pelos programas e suas iniciativas, sendo que cada iniciativa apresenta seu produto principal e suas metas.</p>

                        <p class="SubSubTitulo"> Programas Governamentais</p>
                        <hr>

                        <p>Os programas são instrumentos de organização da ação governamental visando ao alcance dos resultados desejados, ou seja, buscam solucionar ou amenizar problemas, atender demandas ou criar/aproveitar oportunidades de desenvolvimento para a população cearense.</p>

                        <p>Os programas devem ter a abrangência necessária para representar os desafios, a territorialidade e permitir o monitoramento e a avaliação. Em alguns casos, devem expressar, ou deixar claras, as intersetorialidades ou transversalidades pertinentes.</p>

                        <p>Os títulos dos programas devem expressar o tema de política pública tratado, de modo que o governo, a sociedade e todos os demais interessados, atores relevantes na construção e gestão dos programas, conheçam, de forma clara e objetiva, sua linha de atuação.</p>

                        <p>Quanto à sua classificação, os programas podem ser:</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Finalísticos</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>São aqueles programas que, para o alcance do resultado pretendido, geram bens ou serviços para a sociedade.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Administrativos</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>São aqueles programas voltados para o funcionamento da máquina administrativa do Estado.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Especiais</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>São os programas que não contribuem, de forma direta, para a manutenção, expansão ou aperfeiçoamento das ações de governo. Ou seja, não geram produtos à sociedade, nem ao governo.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p><u><strong>Atributos dos programas</strong></u></p>

                        <p>Cada programa conterá atributos que respondam às seguintes perguntas:</p>

                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid" src="imagens/Figura04.png" alt="Oito balões com oito perguntas">
                            </a>
                            <p class="TituloFigura"><strong>Figura 04:</strong> Atributos do programa (as oito perguntas)</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Oito balões com oito perguntas">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Célula de Planejamento da Seplag</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Órgão gestor (Quem gerencia?)</strong></p>

                        <p>É o responsável pela coordenação e gestão do programa. Em regra, corresponde à Secretaria de Governo que coordena políticas no âmbito do tema estratégico ao qual o programa está única ou preponderantemente relacionado.</p>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Não haverá a figura de órgão executor de objetivo, pois se entende que o objetivo é do programa, o que torna desnecessária a definição de objetivos do órgão executor. Desse modo, pressupõe que o programa seja pensado em conjunto pelos diversos atores que contribuem para este objetivo.</p>
                            </div>
                        </div>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Justificativa (Por quê?)</strong></p>

                        <p>Apresenta, de forma clara e objetiva, o que motivou a elaboração do programa, isto é, o problema, a demanda ou oportunidade que justifica sua execução. A justificativa destaca o contexto que ensejou a criação do programa.</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Público alvo (Para quem?)</strong></p>

                        <p>Representa o(s) segmento(s) da sociedade para o(s) qual(is) o programa está sendo construído, ou seja, aquele(s) que se beneficia(m) de forma direta pelas entregas do programa. Em outras palavras, o público-alvo se traduz pelos grupos de pessoas, comunidades, instituições ou setores que serão o foco principal do objetivo do programa.</p>
                        
                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Objetivo (Para quê?)</strong></p>

                        <p>Expressa para que será realizado o programa, com foco no tratamento de um problema específico, atendimento de determinada demanda social ou potencialização de oportunidades, declarando o resultado que o Governo deseja alcançar em certa área das políticas públicas.</p>

                        <p>O título do objetivo comunica à sociedade as escolhas do Poder Público, orientando taticamente a ação governamental e refletindo as situações a serem alcançadas pela concreta distribuição de bens e serviços e pelo desenvolvimento de novos valores de políticas públicas.</p>

                        <p>O objetivo expressa um resultado transformador da situação atual em que se encontra um determinado tema.</p>

                        <p>Além disso, o objetivo permite a definição de iniciativas que declarem aquilo que deve ser ofertado na forma de bens e serviços, com metas factíveis e realistas para o Governo e a sociedade no período de vigência do Plano.</p>

                        <p>Pretende-se, com isso, evitar declarações genéricas que não representem desafios, bem como a assunção de compromissos inatingíveis.</p>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>A regra é que cada programa tenha apenas um objetivo, de modo a deixar mais claro o foco do programa. Excepcionalmente, o programa poderá ter mais de um objetivo, mediante justificativa do órgão gestor.</p>
                            </div>
                        </div>

                        <p class="SubSubTitulo">As Iniciativas</p>
                        <hr>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Iniciativas (O quê?)</strong></p>

                        <p>Consistem nas entregas à sociedade ou ao Estado de bens e serviços (produtos), resultando na execução de um conjunto de ações orçamentárias e não-orçamentárias, com o propósito principal de contribuir para a consecução do objetivo do programa e, consequentemente, para o resultado do tema estratégico.</p>

                        <p>Como mencionado, <strong>produto</strong> consiste no bem ou serviço ofertado à sociedade ou ao próprio Estado.</p>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Escola construída, sistema de TV via satélite implantado. Em alguns casos, pode ser expresso pelos beneficiários da iniciativa: família assentada</p>
                            </div>
                        </div>

                        <p>Dessa forma, o produto responde à pergunta "<strong>O quê?</strong>", apontando para o que será entregue à sociedade (ou ao Estado) e, em alguns casos, <strong>quem</strong> será beneficiado com a execução da iniciativa.</p>

                        <p>As iniciativas definem a atuação do Poder Público e estabelecem um elo entre o PPA e o Orçamento (Lei Orçamentária Anual – LOA).</p>

                        <p>Os títulos das iniciativas devem comunicar o que será entregue à sociedade ou ao Estado como contribuição para o alcance do objetivo do programa.</p>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Construção, implantação etc.</p>
                            </div>
                        </div>

                        <p>Apenas as iniciativas finalísticas, conforme conceituadas posteriormente, deverão ter seu(s) produto(s) principal(is) cadastrados com suas respectivas metas regionalizadas.</p>

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Por ocasião da escolha do(s) produto(s) principal(is), o usuário deve dar atenção ao disposto no título da iniciativa, de modo a evitar incoerências.
                                <div class="ExemploCaixa">
                                    <p class="ExemploTitulo"> Exemplo</p>
                                    <div class="ExemploTexto">
                                        <p><strong>Iniciativa:</strong> construção, reforma e ampliação de escolas;<br><strong>Produto principal:</strong> escola construída</p>
                                    </div>                                
                                </div>
                                </p>
                            </div>
                        </div>

                        <p>Por fim, temos a última pergunta feita por ocasião da elaboração dos programas:</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><u><strong> Valor global (Por quanto?)</strong></u></p>

                        <p>Expressa uma previsão dos recursos necessários à execução do programa, ou seja, os recursos orçamentários e não-orçamentários suficientes para a oferta dos produtos, nas iniciativas, que contribuem para o alcance do objetivo do programa, construído para a consecução de resultados.</p>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>O valor global do programa será sumarizado pelo registro das despesas das ações ligadas às suas respectivas iniciativas.</p>
                            </div>
                        </div>

                        <p>Vale ressaltar que os programas não agregam apenas recursos de natureza fiscal do Estado, mas podem incorporar também recursos disponíveis do setor privado, do terceiro setor e de parcerias, o que será expresso por meio das ações não-orçamentárias.</p>

                        <p><u><strong>Classificação das Iniciativas</strong></u></p>

                        <p>As iniciativas podem ser classificadas em diferentes categorias, conforme os seguintes critérios:</p>

                        <p><strong>Contribuição para os temas</strong></p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Temáticas</strong><br>Quando contribuem apenas para o resultado do tema ao qual seu programa está vinculado; e</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Multitemáticas</strong><br>Quando além de contribuírem para o tema de seu programa, contribuem para outro tema.</p>

                        <p>Dependendo do caso, a iniciativa que contribuir para o resultado de outro tema deverá ter uma ação orçamentária separada para essa finalidade, de modo a se destacar o seu “pedaço” do recurso orçamentário, que contribui para um tema diferente daquele ao qual seu programa está preponderantemente relacionado.</p>

                        <div class="accordion accordion-flush" id="AccordionFase03">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Necessidade de recursos financeiros</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase03">
                                    <div class="accordion-body">
                                        <p><strong>Valoradas:</strong> que exigem a previsão de recursos financeiros para sua execução, subdividindo-se em:</p>
                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> orçamentárias: quando os recursos constam na LOA; e</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> não-orçamentárias: recursos aplicados diretamente por outros entes federativos ou entidades privadas e que, portanto, não constam na LOA do Estado.</li>
                                        </ul>
                                        <p><strong>Não-valoradas:</strong> são aquelas que não demandam o desembolso de recursos financeiros, especialmente as iniciativas de articulação, coordenação e gestão.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Oferta</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase03">
                                    <div class="accordion-body">
                                        <p><strong>Finalísticas:</strong> quando geram bens ou serviços para a sociedade – projetos e custeio finalístico.</p>
                                        <p><strong>Administrativas:</strong> quando o foco da oferta é o funcionamento da máquina administrativa – projetos e custeio administrativo.</p>
                                        <p><strong>Especiais:</strong> são aquelas das quais resultam ações orçamentárias da mesma natureza, sendo voltadas para o atendimento de despesas que não contribuem para a manutenção, expansão ou aperfeiçoamento das ações de Governo, como amortização, juros, encargos e rolagem da dívida contratual e mobiliária etc.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>Temporalidade</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase03">
                                    <div class="accordion-body">
                                        <p><strong>Contínuas:</strong> são as correspondentes às atividades necessárias ao funcionamento da máquina administrativa e dos serviços destinados à população - custeio administrativo e finalístico.</p>
                                        <p><strong>Não-Contínuas:</strong> são aquelas cuja execução é limitada a um determinado período - projetos.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item07">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <strong>Individualização do produto</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase03">
                                    <div class="accordion-body">
                                        <p><strong>Individualizadas:</strong> quando se destina à entrega de um único produto (Hospital Regional Metropolitano), tendo em vista sua grande contribuição para a evolução de um indicador de resultado e o elevado volume de recursos orçamentários previstos.</p>
                                        <p><strong>Agregadas:</strong> quando se destina à entrega de várias unidades do mesmo produto ou afins, sem necessidade de destaque: implantação de escolas estaduais de educação profissional.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item08">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        <strong>Padronização</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase03">
                                    <div class="accordion-body">
                                        <p><strong>Padronizadas:</strong> quando sua descrição for comum para os vários órgãos do Estado, sendo definida pela Seplag, como deverá ser, em regra, o caso das iniciativas administrativas (custeio e projetos administrativos – Programa 500) e das iniciativas finalísticas contínuas (custeio finalístico).</p>
                                        <p><strong>Não-padronizadas:</strong> quando sua descrição for única e definida pela órgão gestor, atendendo às suas especificidades.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item09">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                        <strong>Compartilhamento</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="Item09" data-bs-parent="#AccordionFase03">
                                    <div class="accordion-body">
                                        <p><strong>Exclusivas:</strong> quando só uma Secretaria de Governo executa ações orçamentárias ligadas à determinada iniciativa.</p>
                                        <p><strong>Compartilhadas</strong> quando mais de uma Secretaria executa ações orçamentárias ligadas à mesma iniciativa.</p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>Aquário Ceará, executado pela Setur e pela Seinfra.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p><strong>Atributos das Iniciativas</strong></p>

                        <p>As iniciativas devem apresentar as seguintes informações:</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Meta (Quantos?)</strong><br>Expressa a quantidade de um determinado bem ou serviço a ser entregue por meio da execução de uma iniciativa finalística durante a vigência do Plano, de modo a contribuir para a realização do objetivo pretendido. As metas representam a medida física das iniciativas.</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Ano(s) (Quando?)</strong><br>Os produtos das iniciativas deverão ter suas quantidades programadas distribuídas em um ou mais anos de vigência do PPA, de modo a informar quando se pretende realizar sua entrega.</p>

                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Região (Onde?)</strong><br>Expressa o alcance territorial das metas definidas para as iniciativas, ou seja, indica em que região de planejamento pretende-se realizar a oferta do(s) produto(s).</p>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>A distribuição espacial dos produtos das iniciativas foi orientada pelas Diretrizes Regionais, advindas das oficinas do Planejamento Participativo e Regionalizado, cujo foco principal é contribuir para o desenvolvimento de todas as regiões do Ceará, em suas três perspectivas: econômica, social e ambiental.</p>
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
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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