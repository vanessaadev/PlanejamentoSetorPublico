<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                                            
                            <p class="Titulo"> O Planejamento Estratégico Governamental (PEG) como Convergência e Enfoque e a Metodologia de Diagnóstico de Situações</p>
                            <hr>

                            <p><strong>Objetivo:</strong> Compreender a importância dos campos de “Análise de Políticas” e de “Planejamento Estratégico Situacional” para a gestão pública e para o processo de elaboração de políticas públicas. Além disso, compreender como se pode gerar coletivamente um mapa cognitivo relativo a uma situação-problema, e como construir o seu fluxograma explicativo.</p>     
                            
                            <p class="SubTitulo"> O Enfoque da Análise de Política</p>
                        <hr>

                        <p>Esse é o primeiro dos enfoques verdadeiramente inovadores e multidisciplinares que vamos analisar. Visto que ele foi conformado a partir da confluência entre a Administração Pública, ou mais precisamente da problematização que começara a fazer acerca da implementação das políticas públicas, de um lado, e da Ciência Política, e mais especificamente da problematização da formação da agenda e do processo decisório, por outro.</p>

                        <p>Sua importância para formar os fundamentos em que se apoia a proposta do PEG está relacionada à capacidade de enfocar a interface entre a sociedade e o Estado e o seu próprio funcionamento de um modo mais revelador do que até então fazia a Ciência Política. Além de enfocar a questão da elaboração dos planos e da sua execução, da alocação de recursos etc., com maior sutileza e realismo do que fazia a Administração Pública.</p>

                        <div class="bd-callout bd-callout-primary">
                            <p class="Texto">Em alguns casos, a Análise de Política nasce como área de pesquisa nos círculos ligados à disciplina de <em>Administração Pública</em>. Como, nos EUA, nos anos 60, eles estavam focalizados na análise organizacional, nos métodos quantitativos etc. e não enfatizavam a questão dos valores e interesses que a Análise de Política argumentava que era essencial para a Administração Pública, essa relação foi muitas vezes complicada. Em outros casos, a Análise de Política se estabelece por diferenciação/exclusão em relação à Ciência Política, em círculos a ela ligados. Como resultado ocorreu uma inflexão  . Sua perspectiva passou a incorporar a análise das organizações e das estruturas de governo, deslocando um pouco o foco da análise do institucional para o comportamental.
                            </p>
                        </div>

                        <p>Apesar das contribuições que desde há muito tempo têm sido realizadas por cientistas sociais para questões como essas, o que é novo é a escala em que elas passam a ocorrer a partir dos anos 1970 nos países capitalistas centrais, e o ambiente mais receptivo que passa a existir por parte dos governos. Esses movimentos recentes se caracterizaram por oferecerem uma nova abordagem e tentarem superar problemas atinentes às perspectivas que tomaram por modelo áreas da Administração Pública ou ainda por dar excessiva ênfase a métodos quantitativos combinados à análise organizacional.</p>

                        <p>Embora várias definições tenham sido cunhadas pelos autores que primeiro trataram o tema, destacamos :</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Bardach (1998)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>Em sua perspectiva, a Análise de Políticas é um conjunto de conhecimentos proporcionado por diversas disciplinas das ciências humanas utilizado para analisar ou buscar resolver problemas concretos relacionados à política (<em>policy</em>) pública.</p>
                                    </div>
                                </div>
                            </div>
                                                        
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Wildavsky (1979)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>A Análise de Política recorre a contribuições de uma série de disciplinas diferentes, a fim de interpretar as causas e consequências da ação do governo, em particular, do processo de elaboração de políticas. Ele considera, ademais, que Análise de Política é uma subárea aplicada, cujo conteúdo não pode ser determinado por fronteiras disciplinares, mas sim por uma abordagem que pareça apropriada às circunstâncias do tempo e à natureza do problema.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Dye (1976)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>Para ele, fazer Análise de Política implica descobrir o que os governos fazem, por que fazem e que diferença isso faz. Desse modo, Análise de Política é a descrição e a explicação das causas e consequências da ação do governo. Numa primeira leitura, essa definição parece descrever o objeto da Ciência Política, tanto quanto o da Análise de Política. No entanto, ao procurar explicar as causas e as consequências da ação governamental, os pesquisadores cientistas políticos têm-se concentrado nas instituições e nas estruturas de governo, só há pouco registrando-se o deslocamento para um enfoque comportamental que caracteriza a Análise de Política.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Ham e Hill (1993)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <p>Ressaltam que só recentemente a política pública tornou-se um objeto importante para os cientistas políticos. E o que a distingue da Ciência Política é a preocupação com o que o governo a faz. Assim, podemos afirmar que o fato de as políticas públicas poderem influenciar a vida de todos os envolvidos por problemas de esferas públicas e política (<em>politics</em>), que os processos e resultados de políticas sempre envolvem vários grupos sociais, e as políticas públicas se constituem em objeto específico e qualificado de disputa entre os diferentes agrupamentos políticos com algum grau de interesse pelas questões que têm no aparelho de Estado um locus privilegiado de expressão, vem tornando a Análise de Política um campo de trabalho cada vez mais importante.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <br><p>Segundo os pesquisadores que fundam o campo, é na Análise de Política, em seu caráter normativo (no sentido de explicitamente portador de valores), que é revelada a preocupação acerca de como as ideias que emergem da análise podem ser aplicadas no sentido de alavancar um projeto social alternativo. Nesse caso, podemos afirmar que a melhoria do processo político através das políticas públicas que promovem a democratização do processo decisório é assumida como um viés normativo. Mas os mesmos pesquisadores apontam ainda a Análise de Política também como um problemoriented, o que demanda e suscita a interdisciplinariedade.</p>

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>A Análise de Política se caracteriza pela sua orientação aplicada, socialmente relevante, multidisciplinar, integradora e direcionada à solução de problemas. Além de sua natureza ser ao mesmo tempo descritiva e normativa.</p> 
                            </div>
                        </div>

                        <br><div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p><strong>E o que faz o Analista das Políticas Públicas?</strong></p>
                                
                                <p>Na opinião de alguns pesquisadores de Análise de Política, o analista das políticas públicas deve situar-se fora do mundo do dia a dia da política (politics) de maneira a poder indagar acerca de algumas das grandes questões relacionadas à função do Estado na sociedade contemporânea e à distribuição de poder entre diferentes grupos sociais.</p>
                                <p>Para uma análise adequada, é necessário explorar três níveis. Níveis que podem ser entendidos, ao mesmo tempo, como aqueles em que se dão realmente as relações políticas (<em>policy e politics</em>) e como categorias analíticas, isto é, como níveis em que estas relações devem ser analisadas. São eles:</p>

                                <div class="accordion accordion-flush" id="AccordionFase02">
                                    <div class="text-center">
                                        <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                                <strong>Funcionamento da estrutura administrativa (institucional)</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>Nível superficial, descritivo, que ligações e redes intra e interagências, determinadas por fluxos de recursos e de autoridade etc. É o que podemos denominar nível da aparência ou superficial;</p>
                                            </div>
                                        </div>
                                    </div>
                                                                
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                                <strong>Processo de decisão</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>Nível em que se manifestam os interesses presentes no âmbito da estrutura administrativa, isto é, dos grupos de pressão que atuam no seu interior e que influenciam o conteúdo das decisões tomadas. Dado que os grupos existentes no interior de uma instituição respondem a demandas de grupos situados em outras instituições públicas e em organizações privadas, as características e o funcionamento desta não podem ser adequadamente entendidos, a não ser em função das relações de poder que se manifestam entre esses grupos. É o que podemos chamar de nível dos interesses dos atores;</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item07">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                                <strong>Relações entre estado e sociedade</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>Referentes ao nível da estrutura de poder e das regras de sua formação, o da “infraestrutura econômico material”. É o determinado pelas funções do Estado que asseguram a reprodução econômica e a normatização das relações entre os grupos sociais. É o que explica, em última instância, a conformação dos outros dois níveis, quando pensados como níveis da realidade, ou as características que assumem as relações a serem investigadas, quando pensadas como categorias analíticas. Esse nível de análise trata da função das agências estatais que é, em última instância, o que assegura o processo de acumulação de capital e a sua legitimação perante a sociedade. É o que podemos denominar nível da essência ou estrutural.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>

                                <p>A análise deve ser desenvolvida de forma reiterada (em ciclos de retroalimentação) do primeiro para o terceiro níveis e vice-versa buscando responder às questões suscitadas pela pesquisa em cada nível. Como indicado, é no terceiro nível em que as razões últimas dessas questões tendem a ser encontradas, uma vez que é ele o responsável pela manutenção da estabilidade política e pela legitimidade do processo de elaboração de políticas.</p>
                            </div>
                        </div>

                        <br><p>No momento de <strong>formulação</strong>, através da filtragem das demandas, seleção dos temas e controle da agenda mediante um processo cujo grau de explicitação é bastante variável, ele vai desde uma situação de conflito explícito, na qual há uma seleção <strong>“positiva”</strong> das demandas que se referem às funções necessárias para manutenção de formas de dominação na organização econômica, como suporte à acumulação de capital e à resolução de conflitos abertos, até uma <strong>“não decisão”</strong>, que opera no nível <strong>“negativo”</strong> da exclusão dos temas que não interessam à estrutura capitalista (como a propriedade privada, ou a reforma agrária), selecionando os que entram ou não na agenda através de mecanismos que filtram ideologicamente os temas e os problemas.</p>

                        <br><div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Nos momentos da <strong>implementação</strong> e da <strong>avaliação</strong>, outros mecanismos de controle político se estabelecem tendo por cenário os dois primeiros níveis e, como âmbito maior e mais complexo de determinação, o terceiro.</p>
                            </div>
                        </div>

                        <br><p>Através do trânsito entre esses três níveis, depois de várias reiterações, é possível conhecermos o comportamento da <strong>“comunidade política”</strong> existente numa área qualquer de política pública, e dessa maneira chegarmos a identificar as características mais essenciais de uma política. Esse processo envolve: examinar a estrutura de relações de interesses políticos construídos pelos atores envolvidos; explicar a relação entre o primeiro nível superficial das instituições e o terceiro nível mais profundo da estrutura econômica.</p>

                        <br><div class="bd-callout bd-callout-warning">
                            <p class="Texto">
                                <p>Podemos dizer que com a análise de uma política é possível, primeiramente, identificarmos as organizações (instituições públicas) com ela envolvidas e os atores que nestas se encontram em posição de maior evidência. Em seguida, e ainda no primeiro nível (institucional) de análise, identificarmos as relações institucionais (isto é, aquelas sancionadas pela legislação) que elas e seus respectivos atoreschave mantêm entre si.</p>
                                <p>Passando a um segundo nível, a pesquisa ocorre sobre as relações estabelecidas entre esses atoreschave que representam os grupos de interesse existentes no interior de uma instituição e de grupos externos, situados em outras instituições públicas e em organizações privadas. As relações de poder, coalizões de interesse, formação de grupos de pressão, cooptação, subordinação etc. devem ser cuidadosamente examinadas de maneira a explicar o funcionamento da instituição e as características da política.</p>
                                <p>A determinação da existência de padrões de atuação recorrente de determinados atores-chave e sua identificação com os de outros atores, instituições, grupos econômicos, partidos políticos etc., de modo a conhecer os interesses dos atores, são os objetivos a serem perseguidos nesse nível de análise.</p>
                                <p>Já no terceiro nível e último nível de análise, mediante uma tentativa sistemática de comparar a situação observada com o padrão (estrutura de poder e das regras de sua formação) conformado pelo modo de produção capitalista – sua “<strong>infraestrutura econômico-material</strong>” e sua “<strong>superestrutura ideológica</strong>” – é que ocorre a explicação. Ou seja, é nessa etapa, através do estabelecimento de relações entre a situação específica que está sendo analisada ao que tipicamente tende a ocorrer no capitalismo avançado (ou periférico, no caso latino-americano), que podemos chegar a entender a essência, isto é, entender como as relações se estabelecem entre as várias porções do Estado e destas com a sociedade.</p>
                                <p>Assim, podemos dizer que o percurso descrito é uma tentativa sistemática de percorrer esse “<strong>caminho de ida e volta</strong>”, apoiando nos sempre no “<strong>mapa</strong>” que esse terceiro nível de análise proporciona.</p>
                            </p>
                        </div>


                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            }); 

                                               
                        </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->                        
                    </div> <!-- End col-md-10 -->
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico02.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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
