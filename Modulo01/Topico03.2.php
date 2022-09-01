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

                        <p class="SubTitulo"> Os Momentos da Gestão Estratégica</p>
                        <hr>

                        <p>A Gestão estratégica pode ser entendida como uma composição de quatro momentos principais.</p>

                        <p>Segundo Matus (1996, p. 577), momento é uma instância repetitiva, pela qual passa um processo encadeado e contínuo, que não tem princípio nem fim. O conceito não tem uma característica meramente cronológica e indica instância, ocasião, circunstância ou conjuntura, pela qual passa um processo contínuo ou em cadeia, sem começo nem fim bem definidos.</p>

                        <div class="text-center">
                            <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Ilustração de um circuito com quatro etapas de um planejamento convencional">
                            </a>
                            <p class="TituloFigura"><strong>Figura 08:</strong> Momentos</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura08.png" alt="Ilustração de um circuito com quatro etapas de um planejamento convencional">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura">Fonte: Daguno (2009)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Adotamos aqui a nomenclatura <strong>“momento”</strong>, conforme proposta por Matus (1996), como crítica à concepção de planejamento convencional, composto por um conjunto de etapas ou de fases separadas e estanques. Os momentos indicados no diagrama e as atividades que implicam podem ser caracterizados em:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Diagnóstico:</strong> explica a realidade sobre a qual se quer atuar e mudar; foi, é e tende a ser.</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Formulação:</strong> expressa a situação futura desejada ou o plano; o que deve ser.</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Estratégia:</strong> verifica a viabilidade do projeto formulado e concebe a forma de executá-lo; é possível? Como fazer?</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Operação:</strong> é o agir sobre a realidade; fazer, implementar, monitorar, avaliar.</li>
                        </ul>

                        <br>
                        <p class="SubSubTitulo"> A Análise de Governabilidade – O Triângulo de Governo</p>
                        <hr>

                        <div class="text-center">
                            <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Ilustração de um triângulo com três etapas do balanço de governabilidade">
                            </a>
                            <p class="TituloFigura"><strong>Figura 09:</strong> Balanço de Governabilidade</p>
                        </div>
                    
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura09.png" alt="Ilustração de um triângulo com três etapas do balanço de governabilidade">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura">Fonte: Daguno (2009)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>O conceito de Governabilidade pode ser entendido através de uma ferramenta simples e muito útil para a análise de viabilidade política de projetos e de ações de governo: o Triângulo de Governo. Esse modelo é formado por três variáveis interdependentes que se encontram nos seus vértices, conforme ilustra a imagem. Correndo o risco da simplicidade excessiva, podemos dizer que Governar é controlar de forma adequada essas três variáveis.</p>

                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <p>Um grupo político que pretende governar formula um Projeto de Governo, que pode ser entendido como o conjunto dos objetivos que ele possui e que expressam os desejos da parte da população que o elegeu, conferindo assim, Apoio Político ao governo eleito. É intuitiva a ideia de que o apoio político, em qualquer mandato de um governo eleito, começa alto e tende a diminuir. Assim como a de que um Projeto de Governo que não pretende mudar a situação previamente existente – um projeto meramente <strong>“administrativo”</strong> – não irá requerer uma alta governabilidade, pois não existirão muitos obstáculos à sua ação. Ao contrário, um Projeto de Governo <strong>“transformador”</strong>, que expressa uma grande ambição do ator social de mudar a situação previamente existente, exigirá alta governabilidade. Então, o grau de Governabilidade que um ator social precisa para governar é inversamente proporcional ao Projeto de Governo, entendido este como a ambição de mudar a situação previamente existente.</p>
                        </div>

                        <p>O sistema em que está inserido o Projeto de Governo não é passivo. As resistências e os apoios indicam uma relação de forças que expressam a maior ou a menor sustentação política do que o ator social que governa possui para implementar seu projeto político. Esse <strong>“Apoio Político”</strong> que a sociedade confere ao governante e ao seu Plano de Governo pode ser entendido também como a força (que o ator possui) para <strong>“fazer acontecer”</strong>, e está representado no vértice esquerdo do Triângulo. É também intuitiva a ideia de que a Governabilidade é diretamente proporcional ao Apoio Político com que conta o ator social.</p>

                        <div class="bd-callout bd-callout-warning">
                            <p>A equipe dirigente deve analisar, para cada projeto ou proposta de governo, qual é o efetivo apoio / rejeição / desinteresse de atores políticos. No caso de um governo municipal, eles serão: o Prefeito; secretariado; movimentos sociais e sindicais; apoio partidário; opinião pública; legislativo; meios de comunicação; formadores de opinião etc. O controle dos aspectos que integram o sistema depende da capacidade que o dirigente possui para implementar seu projeto, construindo resultados, mudando a realidade e ampliando, assim, sua Governabilidade.</p>
                        </div>

                        <p>Mas a análise deve informar, também, para cada projeto ou proposta de governo, qual é a capacidade de governar da equipe dirigente, sua experiência de gestão, seus métodos de trabalho, sua organização interna, suas habilidades pessoais, seu controle de meios para empreender o projeto, e seu controle de recursos (tempo, conhecimento, financeiros, pessoal capacitado, capacidade para formar opinião, para gerenciar ou para coordenar processos de trabalho, para gerar legislação ou regulamentações, comunicação, mobilização de apoio).</p>

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto">A Capacidade de Governo (ou governança) é o recurso cognitivo (saber governar) com o qual conta a equipe de governo e deriva desse conjunto de fatores.</p>
                        </div>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>PES - TRIÂNGULO DE GOVERNO</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <div class="text-center">
                                            <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Ilustração de um triângulo com três partes do governo">
                                            </a>
                                            <p class="TituloFigura"><strong>Figura 10:</strong> PES - Triângulo de Governo</p>
                                        </div>
                                    
                                        <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura10.png" alt="Ilustração de um triângulo com três partes do governo">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura">Fonte: Carlos Matus</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p>Essa capacidade de análise de viabilidade é essencial para a Governabilidade, que é diretamente proporcional à Capacidade de Governo. Ela é uma avaliação sistemática sobre a força (ou Apoio Político) necessária para implementar ações de governo e a Capacidade de Governo. A Governabilida dedepende, a cada momento, e para um dado projeto, das situações específicas proporcionadas pela ação sob análise. Dois fatores importantes que afetam a Governabilidade são o tempo, entendido como o recurso mais escasso do governante, e a oportunidade política para empreender uma dada ação degoverno. Em termos mais formais, podemos escrever que g = f (a, c, 1/p). Onde:</p>

                                        <ul>
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s" style="list-style: none"><strong>g - </strong>Governabilidade;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s" style="list-style: none"><strong>a - </strong>Apoio Político;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s" style="list-style: none"><strong>c - </strong>Capacidade de Governo;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s" style="list-style: none"><strong>p - </strong>Ambição do Projeto de Governo.</li>
                                        </ul>

                                        <p>A curva da Capacidade de Governo se inicia baixa e negativa, indicando que a equipe do governo eleito, em geral, não sabe governar. E só o faz, de fato, quando ela atravessa o eixo horizontal. A curva do Apoio Político se inicia positiva e alta, indicando que a equipe do governo eleito conta sempre, no início, com muita aprovação da população.</p>

                                        <p>No primeiro caso, se a equipe dirigente não possui suficiente Capacidade de Governo, ela demorará para começar a governar de fato. E por isso, o Apoio Político, que em geral tende a diminuir, se verá reduzido pela incapacidade da equipe de satisfazer ao interesse da população. Nesta situação, o governo terminará de fato antes do término previsto. Ou então, para manter a Governabilidade, a equipe terá de reduzir o seu Projeto de Governo, isto é, a ambição de mudar a situação previamente existente. Este terá de ser sacrificado de modo a obter apoio político das forças conservadoras.</p>
                                    </div>
                                </div>
                            
                                                        
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>PERÍODO EFETIVO DO GOVERNO</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                    <div class="text-center">
                                            <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Gráfico do início e término do período efetivo do governo">
                                            </a>
                                            <p class="TituloFigura"><strong>Figura 11:</strong> Período Efetivo do Governo</p>
                                        </div>
                                    
                                        <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura11.png" alt="Gráfico do início e término do período efetivo do governo">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura">Fonte: Daguino</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    

                                        <p>No segundo caso, a equipe dirigente consegue adquirir Capacidade de Governo mais rapidamente e, em consequência, o período efetivo de governo começa mais cedo e seu projeto poderá ser mantido até o fim. Isso significa que o governante não irá ser obrigado a diminuir sua expectativa de mudar a realidade. Essa equipe, por começar a governar com uma capacidade de governo maior, pode fazer com que o apoio político aumente em vez de reduzir, contribuindo para que seja promotora do perfil de sua sucessora a qual terá a mesma linha política de projeto bem-sucedido e que tenha o apoio da população. A equipe, por saber governar, faz com que o resultado que alcança promova uma ampliação do mandato previsto. Todavia, para que isso ocorra é necessária a capacidade de governo. Quem não der a devida atenção à capacidade de governo (que é um dos recursos mais importantes para se governar), não conseguirá governar. Poderá até pensar que está governando, ou mesmo governar durante certo tempo, porém a partir de um dado momento não irá mais fazê-lo.</p>

                                        <p>Todavia, no momento posterior, depois se assumir o mandato, o apoio político não será um mero reflexo da plataforma política ou da simpatia da população pelas ideias da equipe que governa. Depois que o governo está em execução, a simpatia não é tão importante como era quando da eleição. A partir desse momento, o apoio político se torna proporcional à capacidade de governo.</p>

                                        <p>E, nesse segundo caso, como se pode ver no gráfico, a partir de um determinado momento, a curva de apoio político começa a subir. Para manter a Governabilidade, a equipe não precisará sacrificar o Projeto de Governo (ambição de mudar a situação existente). Este poderá ser mantido até o fim e o governo acabará depois do término previsto. Ou seja, a equipe poderá fazer a sua sucessora. Observe a imagem 12.</p>

                                        <div class="text-center">
                                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura12.png" alt="Gráfico do início e término do período efetivo do governo">
                                            </a>
                                            <p class="TituloFigura"><strong>Figura 12:</strong> Apoio político proporcional à capacidade de governo</p>
                                        </div>
                                    
                                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Gráfico do início e término do período efetivo do governo">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="FonteFigura">Fonte: Daguino (2009)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p>Dessas evidências surge o argumento de que o tempo que a equipe de governo demora a adquirir capacidade de governo é uma variável crítica. Tempo este que, na realidade, não pode ser considerado como um tempo de governo. Enquanto a equipe está adquirindo capacidade de governo, enquanto a curva não ultrapassa a linha horizontal mostrada no gráfico, alguém, que não ela, está de fato governando. É um tempo durante o qual a tendência é de perda de apoio político.</p>

                        <br>
                        <p class="SubSubTitulo"> A Situação-Problema como Objeto do Planejamento Estratégico Governamental</p>
                        <hr>

                        <p>Com a introdução do conceito de Governabilidade, podemos aprofundar o entendimento do conceito de situação-problema e o papel que ela desempenha no PEG. Assim, partimos da ideia de que qualquer situação pode ser entendida pelo ator com ela envolvido como o resultado, o “placar” de um jogo, e que essa situação pode ser por ele encarada como um problema a resolver. Ou seja, o êxito em um jogo será a solução de um problema ou a mudança do placar.</p>

                        <p><strong>Situação, problema e situação-problema são, para todos os efeitos, sinônimos.</strong></p>

                        <p>Podemos entender a realidade social como um grande jogo integrado por muitos jogos parciais e que possuem suas próprias regras, em que atores se veem envolvidos ou procuram se envolver. Em todos os jogos, há alguns jogadores e alguns espectadores: nenhum ator social participa de todos os jogos. O governante, o ator que planeja ou o encarregado da gestão de uma situação podem ser vistos como jogadores que, com suas ações, produzem acumulações procurando alterar o resultado do jogo. É com base nessas acumulações que eles podem ampliar, ou reduzir, sua capacidade de produzir novas jogadas e alterar a situação inicial.</p>

                        <p>Esse é o mecanismo básico através do qual se acumula ou se desacumula poder e se produz, ou não, mudanças significativas sobre uma dada situação-problema. Observar a ação de governo, que gera acúmulos de poder e resultados socialmente valorizados, é uma atividade-chave do PEG. Essa observação exige:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificação dos jogos e dos problemas em que o ator que planeja está envolvido;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Determinação de sua relação com outros problemas e jogadores;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificação de suas manifestações sobre a realidade ou das evidências que permitam verificar se o problema está se agravando ou sendo solucionado pela ação de governo;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Diferenciação entre as causas e as consequências dos vários jogos parciais.</li>
                        </ul>
                        
                        <p><strong>Conceito de Problema (ou Situação-Problema)</strong></p>

                        <p>O elemento central do momento de Diagnóstico, mostrado no esquema que segue, é a produção de um quadro que identifique e relacione entre si os problemas mais relevantes associados a uma dada situação (ou instituição) em um determinado momento. Por exemplo, de um problema, ou de uma situação-problema, podemos destacar o resultado de um jogo. O problema pode ser:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Estruturado:</strong> quando é possível enumerar todas as variáveis que o compõem; precisar todas as relações entre as variáveis, fazer com que todos os jogadores reconheçam como tal a solução proposta.</li>
                        <br><li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> <strong>Quase estruturado:</strong> quando se podem enumerar apenas algumas das variáveis que o compõem, precisar apenas algumas das relações entre as variáveis, entender suas soluções como,necessariamente, situacionais, isto é, aceitáveis para um ator e vistas com restrições por outros.</li>                            
                        </ul>

                        <p>Os problemas produzidos pelos jogos sociais e por inclusão, os que são alvo do PEG são quase estruturados. Um problema quase estruturado pode conter, como elementos parciais, problemas estruturados, isto é, os problemas estruturados não existem na realidade social, salvo como aspectos ou como partes de problemas quase estruturados.</p>

                        <br><p><strong>Tipos de Problemas</strong></p>
                        <hr>

                        <p>No jogo social, são produzidos três tipos de problema. Adotando como referencial o tempo, o significado e a natureza do seu resultado para um determinado ator, o problema pode ser:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Uma ameaça, isto é, um perigo potencial de perder algo conquistado ou agravar uma situação;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Uma oportunidade, ou seja, a possibilidade de que o jogo social abra e sobre a qual o ator pode agir para aproveitá-la com eficácia ou desperdiçá-la;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Um obstáculo, isto é, uma deficiência passível de ser atacada através da adequada observação e qualificação do jogo em curso.</li>                            
                        </ul>

                        <p><u><strong>Podemos também classificar os problemas quanto:</strong></u></p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ao tempo, fazendo referência se estes são atuais ou potenciais;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> À governabilidade, no que se refere ao controle, podendo ser total, baixo e fora de controle;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> À abrangência, fazendo menção se este é no âmbito nacional, local, específico, estadual ou municipal;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> À estruturação, já que os problemas podem ser estruturados ou quase estruturados.</li>                                
                        </ul>

                        <p>O enfrentamento de problemas já criados ou presentes é um ato reativo. O enfrentamento das ameaças e das oportunidades é um ato propositivo. A ação de caráter propositivo é um objetivo a ser perseguido permanentemente pelo ator que busca melhores resultados e mais possibilidades de êxito. Tais possibilidades, no entanto, não estão usualmente sob controle dos dirigentes públicos.</p>

                        <p>Ao assumir a frente de uma organização ou instância de governo, a escala e a gravidade dos problemas já detectados exigem soluções imediatas que costumam ser tão abrangentes, que a ação do governante tende a ser de caráter reativo. Simultaneamente, entretanto, é necessário vislumbrar as novas ameaças e oportunidades, procurando evitar o agravamento da situação (ação de caráter propositivo).</p>

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Um problema só existe quando uma situação adversa se torna foco de interesse de um ator social. Isso ocorre devido ao mal-estar claramente percebido, que produz o resultado de algum jogo em que ele está envolvido. Ou, em menor medida, à identificação de que o jogo contém oportunidades cujo resultado pode beneficiá-lo. Antes que isso ocorra, o resultado desse jogo é, para o ator, um mal-estar impreciso ou uma mera necessidade sem demanda política.</p>
                            </div>
                        </div> 

                        <p><u><strong>O diagnóstico da situação supõe:</strong></u></p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Listar os problemas declarados pelos diversos atores sociais relevantes;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Avaliar os problemas segundo a perspectiva desses atores;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Situar os problemas no tempo e no espaço;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Verificar se existe complementaridade ou contradição entre os problemas declarados;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Identificar fatos que evidenciam e precisam a existência de problemas;,</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Levantar suas causas e consequências;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Selecionar as causas críticas que podem ser objeto de intervenção.</li>
                        </ul>

                        <p><strong>Como Formular um Problema?</strong></p>

                        <p>A formulação correta de um problema é condição essencial para seu equacionamento. Um problema mal formulado pode levar a uma visão distorcida da situação e à tomada de decisões equivocadas, que podem debilitar o ator.</p>

                        <p>Um problema pode ser uma situação ou um estado negativo, uma má utilização de recursos, uma ameaça ou uma intenção de não perder uma oportunidade. É necessário identificar e precisar problemas atuais ou realmente potenciais, e evitar exercícios de futurologia e de imaginação dispersiva. Um problema não é a <strong>“ausência de uma solução”</strong>. Exemplos de como formular os problemas imersos numa situação podem ser observados na Imagem 13.</p>

                        <div class="text-center">
                            <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura13.png" alt="Ilustração de oito cards com problemas imersos">
                            </a>
                            <p class="TituloFigura"><strong>Figura 13:</strong> Problemas imersos</p>
                        </div>
                    
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura13.png" alt="Ilustração de oito cards com problemas imersos">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura">Fonte: Daguino (2009)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>É conveniente evitar a indicação de temas gerais como problemas.</p>

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Saúde, transporte etc. É também conveniente evitar listar objetivos, como, por exemplo: atingir 50% de imunização; concluir a estrada entre A e B.</p>
                            </div>
                        </div>

                        <br><p><strong>Verificação para seleção de problemas</strong></p>
                        <hr>

                        <p>Partimos do princípio de que a ação de um governo pode ser pior, mas nunca superior à seleção de problemas efetuada pelo dirigente e sua equipe. Os critérios de seleção enunciados não devem ser aplicados problema por problema, mas, sim, na avaliação do conjunto de problemas selecionados. Convém verificarmos a seleção do conjunto de problemas, respondendo às seguintes perguntas:</p>

                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                            <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qual é o valor político dos problemas selecionados versus o valor dos problemas postergados?</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Há concentração ou dispersão de esforços para enfrentá-los?</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qual é a proporção de problemas que exigem continuidade frente aos que exigem inovação?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qual é a proporção de problemas cujos resultados irão amadurecer dentro do período de gestão ou mandato?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qual é o balanço entre os recursos necessários para o enfrentamento dos problemas selecionados em relação aos recursos disponíveis?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Algum dos problemas selecionados pode dissolver-se num problema maior que o compreende?</li>
                            </ul>
                            </div>
                        </div>

                        <br><p><strong>A Descrição de um Problema</strong></p>
                        <hr>

                        <p>Um problema deve ser descrito por intermédio de fatos verificáveis através dos quais ele se manifesta como tal em relação ao ator que o declara. Esses fatos devem ter sua existência amplamente aceita para que possam ser validados. A descrição de um problema é relativa ao ator que o declara: o resultado de um jogo pode ser: um problema para um ator; uma ameaça para um segundo; um êxito para um terceiro; e uma oportunidade para um quarto.</p>

                        <p>A descrição de um problema deve precisar seu significado e torná-lo verificável mediante os fatos que o evidenciam. Para tanto, ela precisa:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reunir suas distintas interpretações possíveis em um só significado;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Precisar o que deve ser explicado: definir seu significado em termos de quantidade e de qualidade, de tempo e de localização;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Evidenciar o problema de uma forma monitorável, isto é, que permita o acompanhamento de sua evolução;</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Permitir que sejam previstas ou definidas fontes de verificação para a descrição construída.</li>
                        </ul>

                        <br><p><strong>A Explicação da Situação-Problema</strong></p>
                        <hr>

                        <p>O conceito de diagnóstico aqui adotado está referido à forma como os atores participantes de um jogo social observam e, portanto, explicam a realidade em que estão inseridos. Toda explicação pressupõe reflexão. É ela que permite que o ator perceba possibilidades para transformar ou para manter uma dada situação. Para explicar um problema, é necessário fazer uma distinção entre:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Causas (o problema se deve a);</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Descrição (o problema se verifica através de);</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Consequências (o problema produz um impacto em).</li>
                        </ul>

                        <p>As causas imediatas da decisão de um jogo são as jogadas (fluxos ou movimentos). Para produzir jogadas, é necessário ter capacidade de “produção” (acumulações ou potenciais que os jogadores possuem ou utilizam). Mas as jogadas válidas são aquelas permitidas pelas regras estabelecidas para cada jogo.</p>
                        
                        <p>Assim, podemos afirmar que explicar uma situação ou um problema consiste em construirmos um modelo explicativo de sua geração e de suas tendências. Logo, é necessário precisar as causas diferenciando-as e indicando se são: fluxos (jogadas); acumulações (capacidades ou incapacidades); ou regras.</p>

                        <br><p><strong>A Diversidade das Explicações Situacionais</strong></p>
                        <hr>

                        <p>Uma mesma realidade pode dar margem a diversas explicações. A carga de subjetividade que anima o diagnóstico de situações implica:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Respostas distintas para uma mesma pergunta;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Perguntas sobre uma mesma situação (as perguntas relevantes são distintas para os distintos jogadores);</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Seleção do foco de atenção sobre a realidade.</li>
                        </ul>

                        <p>Logo, para explicarmos uma realidade precisamos distinguir suas explicações. Para explicar uma situação que me afeta, preciso compreender a explicação do outro, incluindo o que ele pensa sobre minha explicação. Quanto maior for a nossa capacidade de entender a explicação do outro, maior será a probabilidade de êxito de nossas jogadas, além de ser mais potente nossa ação.</p>

                        <br>
                        <p class="SubSubTitulo"> O Fluxograma Explicativo da Situação Seleção de Nós Críticos</p>
                        <hr>

                        <p>A visualização gráfica do resultado da aplicação da Metodologia de Diagnóstico de Situações é a mesma proposta por Matus (1993) para o seu fluxograma explicativo situacional. O fluxograma é um mapa cognitivo que busca sintetizar a discussão realizada por uma equipe sobre uma determinada situação-problema. A sua estruturação é baseada no estabelecimento de relações de causa e de efeito entre as variáveis que a conformam.</p>

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>A elaboração, por uma equipe, de um modelo explicativo do problema que vá além de um mero mapa cognitivo, faz com que ela construa uma síntese rigorosa, seletiva e precisa, com base em nós explicativos concisos e monitoráveis, o que facilita a permanente adaptação da explicação à mudança da situação, facilita também a compreensão, restringindo a possibilidade de ambiguidades devido ao uso de uma simbologia simples e uniforme.</p>
                            </div>
                        </div> 

                        <br><p><strong>Seleção de Nós Críticos</strong></p>
                        <hr>

                        <p>O PEG exige o compromisso de atuar sobre problemas e situações como algo preciso e operacional. De outra maneira, a reflexão como suporte à tomada de decisões não leva à ação efetiva nem se revela prática.</p>

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p><strong>Um fluxograma bem elaborado deve pelo menos atender às seguintes perguntas:</strong></p>
                                
                                <ul class="none">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Como e onde atuar para mudar a descrição de um problema?</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A mudança provocada será suficiente para alcançar os objetivos perseguidos?</li>
                                </ul>
                            </div>
                        </div>                        

                        <p>Os <strong>“nós explicativos”</strong> de um fluxograma (encadeamento de causas ou cadeias causais da situaçãoproblema) sobre os quais podemos atuar com eficácia prática são denominados: <strong>“Nós Críticos”</strong>.</p>

                        <br><p><strong>Critérios para Seleção de Nós Críticos</strong></p>
                        <hr>

                        <p>Agora que sabemos o que são “Nós Críticos”, vamos ver que estes têm algumas condições a cumprir. São elas:</p>

                        <ul class="none">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Ser centros práticos de ação, isto é, o ator que declara o problema pode atuar prática, efetiva e diretamente sobre eles sem precisar atuar sobre suas causas;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Ser nós explicativos que, se resolvidos ou “desatados”, terão alto impacto sobre o problema declarado;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> Ser centros oportunos de ação política, ou seja, seu ataque deve ser politicamente viável durante o período definido pelo ator como relevante e a ação possui uma relação custo-benefício favorável.</li>
                        </ul>

                        <p>Para melhor precisar um "nó crítico", devemos descrevê-lo de forma a torná-lo monitorável e restringir a ambiguidade possível nas interpretações a ele referidas. Com a seleção dos "nós críticos" de uma cadeia explicativa do problema (ou situação), o diagnóstico está concluído.</p>

                        <p>Um último conceito importante da MDS é a árvore de problemas. Esta é formada pelo conjunto de "nós críticos" e o resultado do problema, e indica onde o ator deve concentrar a atenção. Observe a imagem abaixo.</p>

                        <div class="text-center">
                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura14.png" alt="Qautro quadros de processos, do problema à solução">
                            </a>
                            <p class="TituloFigura"><strong>Figura 14:</strong> Árvore de Problemas</p>
                        </div>
                    
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.png" alt="Qautro quadros de processos, do problema à solução">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura">Fonte: Desconhecida</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Os nós críticos escolhidos indicam os centros onde se devem dar as ações de gestão sobre a situação. A definição dessas ações é realizada através da aplicação da Metodologia de Planejamento de Situações (MPS).</p>




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
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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