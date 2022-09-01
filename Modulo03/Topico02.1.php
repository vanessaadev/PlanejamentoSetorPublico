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
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <p class="SubTitulo"> Tipos de Diagnóstico</p>
                        <hr>

                        <p><strong>O Diagnóstico Estratégico é construído a partir de duas visões distintas:</strong></p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A visão para fora da empresa – o diagnóstico externo;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A visão para dentro da empresa - o diagnóstico interno.</li>
                        </ul>

                        <p>O Diagnóstico Estratégico Externo (DEE) (Análise do Ambiente Externo) é a atividade mais complexa e, na maioria dos casos, a mais relevante do processo de planejamento estratégico.</p>

                        <p>O produto do DEE é a identificação das oportunidades e das ameaças que uma organização tem e que será a base para que ela atinja a sua eficácia organizacional.</p>

                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Ilustração com círculos dos ambientes de uma organização">
                            </a>
                            <p class="TituloFigura"><strong>Figura 04:</strong> Os diferentes ambientes de uma Organização</p>                            
                        </div>

                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Ilustração com círculos dos ambientes de uma organização">
                                    </div>
                                    <div class="modal-footer text-center">
                                    <p class="FonteFigura"><strong>Fonte:</strong> Pereira (2009)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>O Diagnóstico Estratégico Interno (Análise da Organização) é a atividade que permite que uma organização tome consciência real dos seus pontos fortes e fracos e está relacionada com a eficiência operacional.</p>

                        <p>É imprescindível analisar os fatores externos e internos para que um sólido diagnóstico possa ser feito, visto que as mudanças influenciam as organizações, obrigando-as a responderem através de novos paradigmas e novas estratégias.</p>

                        <p class="SubSubTitulo"> Diagnóstico Estratégico Externo</p>
                        <hr>

                        <p>O DEE (ou Análise Ambiental) é a maneira como a organização faz o mapeamento ambiental e a análise das forças competitivas que existem no ambiente. Os principais objetivos do DEE são:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificar indicadores de tendências;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Avaliar o ambiente de negócios;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Avaliar a evolução setorial;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Analisar a concorrência.</li>
                        </ul>

                        <p><strong>O DEE se divide em duas análises distintas:</strong></p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Macroambiente – é a análise de fatores globais (demográficos, socioculturais, econômicos, dentre outros) que, na maioria dos casos, afetam todas as organizações de maneira similar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Análise Setorial – é a análise de fatores (concorrentes, fornecedores, clientes, dentre outros) relacionados diretamente com o setor de negócios no qual determinada organização atua.</li>
                        </ul>

                        <p>O macroambiente difere do ambiente setorial, porque o macroambiente é o universo geral no qual todas as organizações atuam, enquanto o ambiente setorial é aquele no qual uma organização específica atua. Entretanto, as fronteiras entre o macroambiente e o ambiente setorial não devem ser vistos como fronteiras estáticas, uma vez não se tratam de sistemas inertes, mas sim de sistemas dinâmicos, pois tanto a empresa, como o macroambiente de uma forma geral são seres “<strong>organizacionais</strong>” vivos. Esses conceitos estão ilustrados na imagem 5.</p>

                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura05.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                            </a>
                            <p class="TituloFigura"><strong>Figura 05:</strong> Integração entre planejamento e orçamento</p>                            
                        </div>

                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura05.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                                    </div>
                                    <div class="modal-footer text-center">
                                    <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Macroambiente</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>O macroambiente consiste no ambiente geral das organizações, onde estão todos os fatores externos a uma organização, dentre os quais se destacam: os fatores demográficos, econômico, socioculturais, político-legais, tecnológicos e ecológicos.</p>

                                        <div class="text-center">
                                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura06.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                                            </a>
                                            <p class="TituloFigura"><strong>Figura 0:</strong> Macroambiente e Microambiente</p>                            
                                        </div>

                                        <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura06.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                    <p class="FonteFigura"><strong>Fonte:</strong> Chiavenato e Shapiro; Microambientes (2003)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p>Os fatores demográficos refletem mudanças demográficas, tais como: tamanho, densidade e distribuição geográfica populacional, mobilidade da população e processo migratório e taxa de crescimento e envelhecimento da população, dentre outros.</p>

                                        <p>Essas mudanças quando bem monitoradas podem revelar grandes oportunidades ou problemas para uma organização sensível a um outro desses fatores. Tais fatores normalmente mudam de forma lenta e, portanto, quando bem monitorados não causam grandes sustos.
                                        </p>

                                        
                                        <p><i class="none fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Fatores Econômicos</strong><br>
                                        Os fatores econômicos refletem a situação econômica, refletem o estado geral da economia em termos de inflação, níveis de receita, produto interno bruto, desemprego e outros indicadores responsáveis por grande parte das mudanças no ambiente externo. As mudanças na economia trazem oportunidades e problemas às organizações e cabe aos seus gestores saber aproveitá-las ou contorná-las, além de continuamente monitorar as mudanças dos indicadores-mestres da economia, buscando minimizar fraquezas e capitalizar oportunidades.</p>

                                        <p><i class="none fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Fatores Sócioculturais</strong><br>
                                        Os fatores sócioculturais são mudanças no sistema cultural e social, que afetam as ações de uma organização e a demanda por seus produtos ou serviços, tais como: direitos humanos, hábitos das pessoas em relação a atitudes e suposições, crenças e aspirações pessoais, relacionamentos interpessoais e estrutura social, estrutura educacional ou preocupação com a saúde e o preparo físico, dentre outros.</p>
                                        
                                        <p><i class="none fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Fatores Político-Legais</strong><br>
                                        Os fatores político-legais caracterizam-se por numerosas leis e inúmeras autoridades que exercem indireta e forte influência sobre as organizações. Os fatores tecnológicos podem influenciar o uso do conhecimento e de técnicas da organização na produção de seus produtos e serviços, além de afetarem suas características.</p>

                                        <p>Devido às constantes mudanças na tecnologia, a administração deve se manter à frente dos mais recentes desenvolvimentos, para manter a competitividade da organização. Esses fatores possuem, em geral, uma velocidade de mudança muito grande, e, portanto, o grau de influência desses fatores em uma organização depende do seu grau de dependência em relação a eles.</p>

                                        <p><i class="none fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Fatores Ecológicos</strong><br>
                                        Os fatores ecológicos são aqueles relacionados com o uso adequado e de forma sustentável dos recursos naturais de uma forma geral. Na atualidade, eles exercem um grande impacto sobre a organização que não os administrar de forma adequada, em função do crescente nível de consciência ambiental e de desenvolvimento ecológico da população.</p>

                                        <hr>

                                        <p>Uma leitura distinta, mas complementar, para o macroambiente é aquela proposta por John Naisbit, há 25 anos, em seu livro Megatendências, uma vez que muitas dessas tendências se revelam bem conectadas com os tempos atuais. Naisbit, analisa quatro fatores (Quadro 1) e sua proposta é a de que as suas alterações ocorrem de forma lenta e, depois de consolidadas, influenciam o ambiente por um longo tempo, cerca de sete a dez anos, e às vezes até mais.</p>

                                        <table class="table">
                                            <thead>
                                                <tr class="Thteste">
                                                    <th>Fatores</th>
                                                    <th>Descrição</th>
                                                </tr>
                                            </thead>
                                            <tbody class="Tdborda">
                                                <tr>
                                                    <td>Econômicos</td>
                                                    <td>
                                                        <ul class="none" style="text-align:left">
                                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Globalização da economia;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Viagens (lazer) será a maior indústria global;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ásia e América - "zonas do agrião" - investimento e crescimento;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> De nações para redes internacionais - blocos;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Do trabalho intenso para alta tecnologia;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Do centralismo do estado para o controle do mercado.</li>
                                                        </ul></td>
                                                </tr>
                                                <tr>
                                                    <td>Sociais</td>
                                                    <td>
                                                        <ul class="none" style="text-align:left">
                                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Estilo de vida global versus nacionalismo cultural;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mulheres na liderança (trabalho, moda, política, esportes, família etc.);</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Da denominação masculina para a emergência da mulher;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Supremacia do servidor/cidadão.</li>
                                                        </ul></td>
                                                </tr>
                                                <tr>
                                                    <td>Políticos</td>
                                                    <td>
                                                        <ul class="none" style="text-align:left">
                                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Descentralização do poder;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Emergência de um socialismo de livre mercado;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Novos códigos de conduta no século 21;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mais democracia, mais países.</li>
                                                        </ul></td>
                                                </tr>
                                                <tr>
                                                    <td>Tecnológicos</td>
                                                    <td>
                                                        <ul class="none" style="text-align:left">
                                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A revolução das telecomunicações;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Comunidades eletrônicas;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Máquinas capazes de emoção e raciocínio;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Alta tecnologia e grande contato humano;</li>
                                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A Era da biologia (clonagem, biorremediação).</li>
                                                        </ul></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="TituloFigura" style="text-align: center;"><strong>Quadro 01:</strong> Fatores que afetam o macroambiente de uma organização<br><strong>Fonte:</strong> NAISBIT (1983)</p>
                                        
                                        <p>O fato concreto é que os fatores do macroambiente exercem influência sobre uma organização e seus negócios e, portanto, são relevantes e devem ser considerados. As organizações precisam analisar esses fatores e suas mudanças, estando preparadas para usá-los a seu favor quando possível e minimizar os seus prejuízos, quando for o caso. Em resumo, já que é difícil influenciar esses fatores do macroambiente, é fundamental, no mínimo, monitorá-los para não ser surpreendido por eles.</p>                            
                                    </div>
                                </div>                                
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Setor de Negócios</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>O Setor de Negócios  consiste no ambiente com o qual a organização se relaciona diretamente, ambiente este em que atua de forma competitiva e cujos principais elementos são: mercado, clientes, produtos e/ou serviços, concorrentes e fornecedores. Esse é o ambiente específico no qual uma organização interage para sobreviver e prosperar com grupos e pessoas reais e ele é diferente para cada organização, variando conforme os negócios em que atua.</p>
                                        <p>O mercado, numa definição ampla, é a instituição social que emerge naturalmente das relações econômicas e que permite às pessoas (ou grupo de pessoas) realizar trocas, normalmente reguladas pela lei da oferta e da procura.</p>

                                        <div class="text-center">
                                            <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Ilustração com os principais elementos do setor de negócios">
                                            </a>
                                            <p class="TituloFigura"><strong>Figura 07:</strong> Os principais elementos do setor de negócios</p>                            
                                        </div>

                                        <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura07.png" alt="Ilustração com os principais elementos do setor de negócios">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                    <p class="FonteFigura"><strong>Fonte:</strong> CHIAVENATO e SHAPIRO (2003)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p>Numa definição restrita, mercado consiste no segmento de pessoas, empresas ou áreas geográficas onde estão os consumidores e prospects de uma empresa ou marca. Algumas perguntas são muito relevantes para a tomada de decisões estratégicas.</p>

                                        <div class="SaibaMaisTexto" style="border-radius: 7px 7px 7px 7px;background-color: #539df121;">
                                            <p><strong>Qual o tamanho do mercado no qual uma empresa atua (ou deseja atuar)?</strong></p>
                                            <p><strong>Quais as tendências e perspectivas deste mercado?</strong></p>
                                            <p><strong>Quais as causas de crescimento deste mercado e possíveis consequências?</strong></p>
                                        </div>

                                        <p>Essas são algumas das perguntas que se bem respondidas ajudam e muito na definição de decisões estratégicas.</p>

                                        <p>Os clientes são pessoas físicas e/ou jurídicas que compram produtos e/ou usam serviços de uma organização. Eles diferem entre si sob diversos aspectos, como: idade, sexo, educação, estilo de vida e renda. De todas as forças diretas com as quais uma organização interage, os clientes são as mais vitais, pois deles depende seu presente e seu futuro.</p>

                                        <p>Uma organização deve conhecer muito bem seus clientes e seus não clientes e para isso é necessária a realização de pesquisas frequentes com eles, pois a análise dos resultados dessas pesquisas trará elementos concretos para a tomada de decisões estratégicas. Por outro lado, pesquisa mal feitas, que falhem no mapeamento das mudanças de hábitos, preferências e necessidades dos clientes, podem conduzir uma organização a resultados desastrosos.</p>

                                        <p>Os produtos são os bens tangíveis produzidos por uma organização. Serviços são atividades intangíveis realizadas por uma organização que atendem às necessidades de determinados clientes ou que agregam valor a bens produzidos. O conhecimento do mercado e dos clientes é que permite a uma organização saber que produtos e/ou serviços atendem às suas necessidades, bem como o nível de competição, de padronização e de diferenciação/inovação dos produtos/serviços que a instituição deve oferecer.</p>

                                        <p>Os concorrentes são organizações específicas que oferecem mercadorias iguais ou similares aos mesmos clientes e que competem entre si pelos mesmos recursos do mercado, como matéria-prima e mão de obra. Os concorrentes podem ser diretos ou indiretos. Os concorrentes diretos são aqueles que produzem produtos e serviços similares, enquanto os concorrentes indiretos alteram o interesse do consumidor, desviando as suas intenções de compra.</p>

                                        <p>As mudanças oriundas de concorrentes indiretos são mais difíceis de se prever e de monitorar do que aquelas dos concorrentes diretos. Os fornecedores são provedores específicos de recursos humanos, financeiros, materiais e de informação, necessários a uma organização para operar. Fornecedores são organizações que fornecem recursos como fundos, energia, equipamentos, serviços e materiais para a produção de produtos ou serviços das organizações. Esses recursos afetam expressivamente a qualidade, o custo e o prazo de entrega de qualquer produto ou serviço.</p>
                                    </div>
                                </div>                                
                            </div>
                        </div><br>

                        <p class="SubSubTitulo">Diagnóstico Estratégico Interno</p>
                        <hr>

                        <p>O DEI (ou análise do ambiente interno) é o retrato da realidade da organização no momento em que ele foi feito. É olhar para dentro da organização. Esse olhar para dentro permite a identificação de potencialidades e vulnerabilidades, agrupando perspectivas internas divergentes e com isso vislumbrando um “<strong>retrato</strong>” mais focado e compreensivo da organização.</p>

                        <p>Esse retrato deve, no mínimo, analisar as principais áreas ou funções da organização, como, por exemplo, recursos humanos, marketing ou produção, a utilização e o nível de ferramentas de gestão, de sistemas e métodos organizacionais.</p>

                        <div class="text-center">
                            <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Macroambiente, Microambiente e Ambiente Interno">
                            </a>
                            <p class="TituloFigura"><strong>Figura 08:</strong> Macroambiente, Microambiente e Ambiente Interno</p>                            
                        </div>

                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura08.png" alt="Macroambiente, Microambiente e Ambiente Interno">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr class="Thteste">
                                    <th>Etapa</th>
                                    <th>Objetivo</th>
                                    <th>O que deve ser analisado</th>
                                </tr>
                            </thead>
                            <tbody class="Tdborda">
                                <tr>
                                    <td>Primeira</td>
                                    <td>Análise das <u>funções</u> principais da organização</td>
                                    <td>
                                        <ul class="none" style="text-align: left;">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Marketing</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Finanças</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Recursos Humanos</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Produção</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Logística (TI)</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Outras (P&D)</li>
                                        </ul>     
                                    </td>
                                </tr>
                                <tr>
                                    <td>Segunda</td>
                                    <td>Análise dos <u>sistemas e métodos</u><u>organizacionais</u> da organização.</td>
                                    <td>
                                        <ul class="none" style="text-align: left;">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Avaliação Competitiva</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Recursos Organizacionais</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Arquitetura Organizacional</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Gestão de Processos</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Competências Essenciais</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Gestão de Qualidade</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="TituloFigura" style="text-align: center;"><strong>Quadro 02:</strong> Etapas e Objetivos para a realização do diagnóstico estratégico interno</p>

                        <p>A primeira etapa tem como objetivo analisar as principais funções que qualquer organização possui. O olhar deve ser feito na forma com a qual a organização desenvolve estas funções, através de perguntas bem elaboradas junto aos responsáveis pelas funções, bem como através de <em>brainstorm</em> com pessoas que são afetadas por essas funções no interior da organização.</p>

                        <p>A segunda etapa tem como objetivo analisar as ferramentas de gestão, sistemas e métodos que são utilizados pela organização. Esse olhar ultrapassa as fronteiras das principais funções quando analisadas isoladamente, pois cada uma das facetas, que esse olhar buscará, estará olhando a organização para dentro como um todo.</p>

                        <p>Essa análise completa permitirá a identificação objetiva dos Fatores Críticos de Sucesso da organização no ramo de atividade na qual ela opera ou planeja operar. Fatores Críticos de Sucesso (FCS) são os fatores que levam uma organização a cumprir sua missão (razão de ser) e atingir sua visão.</p>

                        <p>Os FCS são fatores-chave, ou seja, fatores cujo desenvolvimento será determinante e principal responsável para que uma organização se sobressaia em relação a seus concorrentes. A comparação dos FCS de uma organização com os seus concorrentes diretos ou indiretos permite identificar aqueles que são superiores, inferiores ou semelhantes aos das organizações comparadas. O resultado dessa análise fornecerá de uma forma muito precisa os pontos fortes, neutros e fracos de uma organização.</p>

                        <p>Os pontos fortes são características ou forças internas controláveis da empresa, que, se bem utilizadas, permitem alcançar vantagem competitiva sobre seus concorrentes. Por outro lado, os pontos fracos são características ou forças internas controláveis, que, se expostas ao ambiente, dificultam alcançar vantagem competitiva sobre seus concorrentes</p>

                        <div class="text-center">
                            <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Quatro passos para a elaboração de estratégias após o DEI">
                            </a>
                            <p class="TituloFigura"><strong>Figura 09:</strong> Passos para a elaboração de estratégias após o DEI</p>                            
                        </div>

                        <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura09.png" alt="Quatro passos para a elaboração de estratégias após o DEI">
                                        <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> Almeida (2000)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Uma síntese das principais características e diferenças dos diagnósticos estratégicos externo e interno de uma organização é apresentada no Quadro 3.</p>

                        <table class="table">
                            <thead>
                                <tr class="Thteste">
                                    <th> </th>
                                    <th>Externo</th>
                                    <th>Interno</th>
                                </tr>
                            </thead>
                            <tbody class="Tdborda">
                                <tr>
                                    <td>O que se procura</td>
                                    <td>Eficácia</td>
                                    <td>Eficiência</td>
                                </tr>
                                <tr>
                                    <td>Horizonte de Tempo Analisado</td>
                                    <td>Futuro</td>
                                    <td>Presente</td>
                                </tr>
                                <tr>
                                    <td>Produto</td>
                                    <td>Oportunidades e ameaças	</td>
                                    <td>Pontos fortes e fracos</td>
                                </tr>
                                <tr>
                                    <td>Ação</td>
                                    <td>A entidade deverá se adaptar ao futuro do ambiente</td>
                                    <td>A ação só depende da própria entidade</td>
                                </tr>
                                <tr>
                                    <td>Como será montada a estratégia</td>
                                    <td>Procura-se aproveitar as oportunidades e evitar as ameaças</td>
                                    <td>Procura-se tirar vantagem dos pontos fortes e reduzir os pontos fracos</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="TituloFigura" style="text-align: center;"><strong>Quadro 03:</strong> Principais características e diferenças do diagnóstico estratégico<br><strong>Fonte:</strong> Almeida (2000)</p>

                        <p>As imagens 10 e 11 apresentam de forma esquemática os produtos dos Diagnósticos Estratégicos Externo e Interno.</p>

                        <div class="text-center">
                            <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                            </a>
                            <p class="TituloFigura"><strong>Figura 10:</strong> Passos para a elaboração de estratégias após o DEI</p>                            
                        </div>

                        <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura10.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Passos para a elaboração de estratégias após o DEI</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                            </a>
                            <p class="TituloFigura"><strong>Figura 11:</strong> Os Produtos do Diagnostico Estratégico Interno</p>                            
                        </div>

                        <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura11.png" alt="Ilustração com círculos da integração entre planejamento e orçamento">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura">Os Produtos do Diagnostico Estratégico Interno</p>
                                    </div>
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
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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