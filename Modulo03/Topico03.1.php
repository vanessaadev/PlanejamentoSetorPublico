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

                        <p class="SubTitulo"> O Processo de Formulação de Estratégias</p>
                        <hr>

                        <p>Definir os objetivos estratégicos é uma tarefa a ser conduzida pelos principais gestores de uma organização. Essa definição não é tarefa fácil, pois toda organização possui diferentes grupos com diferentes expectativas.</p>

                        <p>Esses grupos, os <em>stakeholders</em>  , têm critérios diferentes a respeito do que esperam da organização.</p>

                        <p>A periodicidade da definição e da revisão dos objetivos estratégicos de uma organização é função da velocidade de mudanças nos setores em que ela atua.</p>

                        <p>Uma das formas mais conhecidas, difundidas e utilizadas é a análise SWOT que propõe uma avaliação dos pontos fortes (<em>strenghts</em>) e pontos fracos (<em>weaknesses</em>) da organização à luz das oportunidades (<em>opportunities</em>) e das ameaças (<em>threats</em>) do ambiente externo. A ênfase está nas avaliações das situações externa e interna, porque são os fatores considerados muito relevantes para a formação da estratégia. Após verificar as diversas possíveis estratégias, então é feita a escolha das melhores. As estratégias resultantes desse processo devem ser únicas, simples e explícitas.</p>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto">
                                <p>Outra forma de se formular a estratégia é através dos modelos de Porter  . Para ele:</p>
                                <strong>“O desenvolvimento de uma estratégia ompetitiva é, em essência, o desenvolvimento de uma fórmula ampla para o modo como a empresa irá competir, quais deveriam ser suas metas e as políticas necessárias para levar-se a cabo estas metas.”.</strong>
                                <p class="text-end">PORTER (2013 )</p>
                            </p>
                        </div>

                        <p>Para Porter, a estratégia de uma organização deve ser baseada na estrutura de mercado em que ela atua, não dando muita ênfase às capacidades internas da empresa, tendo como resultado desse processo estratégias genéricas.</p>

                        <p>Diversas outras são as correntes que propõem modelos diferentes para a formulação de estratégias nas organizações. Uma delas, que vem recentemente se destacando, é a da organização que aprende. Nesse caso, a formulação das estratégias caminha ao lado da sua implantação, ou seja, não existe uma dissociação entre pensar e agir. Os defensores dessa corrente de pensamento estratégico defendem que numa organização, que aprende, todas as pessoas, que fazem parte da organização, podem contribuir para o processo de criação das estratégias e a organização tem a possibilidade de experimentar e consequentemente aprender. Assim, a formulação das estratégias passa a ser um processo de aprendizado coletivo ao longo do tempo.</p>

                        <p>O relevante é que o processo de formulação de estratégias possui diversas formas, de acordo com cada tipo de organização. Vale destacar que, atualmente, devido à velocidades das mudanças, com maior ênfase na globalização e nas mudanças tecnológicas, é cada vez mais considerado o fator humano dentro das organizações, estimulando a criatividade, a iniciativa e o aprendizado contínuo, pois segundo Davenport e Prusak (1998):</p>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto">
                                <strong>“… numa economia global, o conhecimento pode ser a maior vantagem competitiva da empresa.”</strong>
                                <p class="text-end">DAVENPORT; PRUSAK (1998)</p>
                            </p>
                        </div>

                        <p>Segundo Júlio  , os objetivos estratégicos mais comuns de uma organização podem ser classificados como: crescer, ou seja, aumentar as vendas. Isso até pode ser escrito de outra maneira, como <strong>“inauguração de novas lojas”, “aquisição de outra empresa”, “estabelecimento de aliança estratégica”</strong>. Porém, segundo Prahalad, crescer tem de ser o objetivo de todas as organizações. <strong>“É crescer ou morrer”</strong>, diz ele.</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Ganhar participação no mercado</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Trata-se de estabelecer um determinado nível de market share para ser atingido em determinado período de tempo.</p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>quando uma organização entra em um novo mercado e quer construir uma participação de 15% em cinco anos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Aumentar a rentabilidade</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Um objetivo organizacional bastante comum é o aumento dos lucros. Porter chega a dizer que esse é o único objetivo que realmente importa. Para ele, a eficiência e o acerto da estratégia de uma organização devem ser medidos pelo seu resultado econômico.</p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Superar uma crise</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>No mundo dos negócios, o objetivo de <strong>“sobreviver”</strong> é básico, principalmente, em épocas turbulentas para a economia ou para preparar-se para superar uma crise que poderá a vir acontecer futuramente.</p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Fortalecer a marca e a imagem ou ampliar a visibilidade</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Esse tipo de objetivo tem sido cada vez mais importante na era da ultracompetição globalizada, em que todo poder pertence ao cliente. Melhorar a posição da marca da organização, ou da marca de seus principais produtos, em pesquisas do tipo Top of Mind é um dos modos de formular esse objetivo. Melhorar o atendimento ao cliente é outro.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p>Júlio (2007) sugere que as estratégias a serem formuladas sejam smart.</p>

                        <table class="table">
                            <tbody class="Tdborda">
                                <tr>
                                    <td>S</td>
                                    <td>e<u><strong>S</strong></u>pecífico</td>
                                    <td>Uma ação (ou um comportamento) observável tem de poder ser descrito ligada a uma taxa, número, porcentagem ou frequência. Como, exemplo: aumentar as vendas em 20%.</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td><u><strong>M</strong></u>ensurável	</td>
                                    <td>De modo geral, é o que se pode medir por meio de um sistema ou método. No exemplo mencionado acima, pode-se medir o crescimento de vendas por meio do resultado do faturamento.</td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td><u><strong>A</strong></u>lcançável</td>
                                    <td>Esse é o princípio de estabelece rum ponto B a ser alcançado a partir de um ponto A conhecido. Se a meta for difícil demais em relação à capacidade da instituição, os funcionários nem "dão partida".</td>
                                </tr>
                                <tr>
                                    <td>R</td>
                                    <td><u><strong>R</strong></u>elevante</td>
                                    <td>O objetivo tem de ser tão relevante para a empresa e para seus indivíduos que consiga lhes injetar ânimo para lutar por ele. Aqui, relevante também pode ser considerado como sinônimo de "desafiador".</td>
                                </tr>
                                <tr>
                                    <td>T</td>
                                    <td><u><strong>T</strong></u>empo definido	</td>
                                    <td>É imprescindível sugerir o estabelecimento de uma data (dia, mês e ano) para o objetivo ser totalmente alcançado. Além disso, é altamente recomendável dividi-lo em várias metas, cada qual com sua data.</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="TituloFigura" style="text-align: center;"><strong>Quadro 04:</strong> Metodologia <em>Smart</em><br><strong>Fonte:</strong>  Júlio (2007)</p>

                        <p class="SubSubTitulo">Métodos para a Formulação de Estratégias</p>

                        <div class="accordion accordion-flush" id="AccordionFase02">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Matriz Swot</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p>Uma ferramenta bastante utilizada no delineamento das ações, auxiliando também na sua priorização, é a matriz SWOT (Forças, Fraquezas, Oportunidades e Ameaças), em que se faz o relacionamento entre os ambientes interno e externo.</p>
                                        <p>O produto da análise SWOT é uma série de decisões sobre que oportunidades serão aproveitadas, quais ameaças serão enfrentadas, que pontos fracos serão minimizados e que pontos fortes serão fortalecidos.</p>
                                        <p>Uma incidência de ameaças externas a muitos pontos fracos indica a necessidade de sobrevivência, ou seja, a organização precisa reduzir custos, desinvestir ou até vender esse negócio.</p>
                                        <p>Já se a instituição encontrar forte relacionamento de pontos fracos internos com oportunidades externas, deve-se buscar rapidamente o crescimento para solidificar o posicionamento da organização no setor.</p>

                                        <div class="text-center">
                                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura12.png" alt="Tipos básicos de estratégias a serem adotadas a partir da Matriz SWOT">
                                            </a>
                                            <p class="TituloFigura"><strong>Figura 12:</strong> Tipos básicos de estratégias a serem adotadas a partir da Matriz SWOT</p>
                                        </div>

                                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Tipos básicos de estratégias a serem adotadas a partir da Matriz SWOT">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura"><strong>Fonte:</strong> Tipos básicos de estratégias a serem adotadas a partir da Matriz SWOT</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p>Quando se tem maior incidência de pontos fortes aliados a oportunidades, tem-se, provavelmente, uma posição, mesmo que potencial, de liderança de mercado, sendo necessário a organização desenvolvê-la.</p>
                                        <p>Por fim, um cruzamento de ameaças e pontos fortes indica uma possível estagnação do negócio em que a empresa tem uma posição de liderança e aponta para a necessidade de manutenção de sua posição.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>Abordagem da Estratégica Competitiva - Modelo de Porter</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p>Para Porter, a estratégia consiste em uma série coerente de ações ofensivas ou defensivas, formuladas com o intuito de proporcionar à organização uma posição sólida no mercado em que atua e de superar a concorrência. Tal posição é alcançada por meio do domínio das cinco forças competitivas que delimitam a concorrência em uma indústria:</p>

                                        <ul class="none">
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ameaça de novos entrantes;</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Poder de barganha dos fornecedores;</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Poder de barganha dos compradores;</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ameaça de produtos ou serviços substitutos;</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Rivalidade entre concorrentes.</li>
                                        </ul>

                                        <p>Cabe ressaltar que quando Porter se refere às indústrias, ele utiliza esse termo de forma genérica, pois tanto se refere às indústrias de bens (automobilística, química. metalúrgica, dentre outras) quanto às indústrias de serviço (hotelaria, entretenimento, turismo, dentre outras).</p>
                                        <p>O conjunto dessas 5 forças determina o potencial de lucro final numa determinada indústria, sendo medido em termos de retorno de longo prazo sobre o capital investido, pois nem todas as indústrias têm o mesmo potencial.</p>

                                        <div class="text-center">
                                            <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura13.png" alt="Modelo das 5 forças de Porter">
                                            </a>
                                            <p class="TituloFigura"><strong>Figura 13:</strong> Modelo das 5 forças de Porter</p>
                                        </div>

                                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura13.png" alt="Modelo das 5 forças de Porter">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura"><strong>Fonte:</strong> Modelo das 5 forças de Porter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p>Elas diferem, fundamentalmente, em seu potencial de lucro final, à medida que o conjunto das forças difere no sentido de diminuir a taxa de retorno sobre o capital investido em relação à taxa competitiva básica de retorno, que é aproximadamente igual ao rendimento sobre títulos do governo a longo prazo, ajustados para mais pelo risco do negócio (PORTER, 1980).</p>
                                        <p>Em qualquer indústria, seja ela doméstica ou internacional, que produza um produto ou um serviço, as regras da concorrência estão englobadas nessas cinco forças competitivas. Seu vigor coletivo provém das habilidades das empresas em uma indústria (PORTER, 1980).</p>
                                    </div>
                                </div>
                            </div><br>
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