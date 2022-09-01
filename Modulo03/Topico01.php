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

                        <h2 class="Titulo"> Gestão Estratégica</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Conceituar teoricamente o planejamento estratégico setorial através das diversas escolas do pensamento estratégico como contributo para a realização da gestão estratégica, através dos conceitos de missão, visão, valores e objetivos da organização.</p>

                        <p class="SubTitulo"> Conceituação</p>
                        <hr>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto"><strong> “Gestão estratégica é nome do desafio mais mportante, árduo e abrangente com que se defronta qualquer organização privada ou pública: de que maneira estabelecer as bases para o êxito de amanhã e ao mesmo tempo competir para vencer nos mercados de hoje. A vitória no presente não é o bastante; a não ser que, simultaneamente, as sementes do êxito de amanhã também estejam sendo plantadas e cultivadas, a empresa não terá futuro”. </strong>
                            <p class="text-end">(FAHEY, 1999)</p>
                            </p>
                        </div>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto"><strong> “Estratégia é a palavra-chave da modernidade, conforme esclarece Williams (1976).”. </strong>
                            </p>
                        </div>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto"><strong> “Em termos etimológicos, ela provém do grego strategia, que significa comando de exército, cargo ou dignidade do chefe militar, bem como aptidão para comandar. Nessa língua, encontra um leque de extensões, ligadas principalmente ao ato de guerrear, como stratégos, ou o general, o chefe militar, o ministro da guerra; strategicós, o próprio do general chefe; stratégema, ou estratagema, ardil de guerra; stratiá, ou expedição militar; stratégion, ou tenda do general, local de reuniões militares, stráteuma, ou exército em campanha; entre outras.”. </strong>
                            <p class="text-end">(PEREIRA, 1969)</p>
                            </p>
                        </div>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto"><strong> “O vocábulo estratégia surgiu na língua inglesa apenas no final do século XVII, para designar alguma coisa feita longe da visão do adversário, em oposição à tática, que implica o comportamento inverso. Estes conceitos já faziam parte da clássica obra de Sun Tzu escrita em 500 a.c. – “A Arte da Guerra”, na qual se percebe que a maioria dos princípios básicos da definição e aplicação da “estratégia” são originados, muito antes da era cristã, seja no tempo de Péricles, para apontar as atividades de liderança, oratória ou poder, ou seja no tempo de Alexandre da Macedônia, para indicar um sistema unificado de Governo.”. </strong>
                            <p class="text-end">(QUINN, 1992; WHIPP, 1996)</p>
                            </p>
                        </div>

                        <div class="bd-callout bd-callout-success">
                            <p class="Texto"><strong> “De várias maneiras, tal uso da estratégia chegou à época contemporânea, por exemplo, nos escritos datados do século XIX do general prussiano Carl von Clausewitz, sugerindo como administrar os exércitos em épocas de conflitos e, mais tarde, no pensamento dos estrategistas militares Foch e Grandmaison sobre as ações francesas na Primeira Guerra Mundial e nas manobras de batalha elaboradas por Patton, McArthur e Rommel durante a Segunda Guerra Mundial.”. </strong>
                            <p class="text-end">(QUINN, 1992)</p>
                            </p>
                        </div>

                        <br><p>Nos dias atuais, estratégia diz respeito à condução de organizações no contexto da competição. De acordo com Hatch (1997) a sua operacionalização inclui: a seleção de objetivos para delimitar e guiar as ações de manutenção ou de melhoria da posição alcançada no mercado; a reunião dos recursos disponíveis; a avaliação de contingências ambientais, tais como os interesses de determinados grupos; inovações tecnológicas; medidas governamentais; entre outras tarefas. Conforme observa Quinn (1992), atividades ainda muito similares àquelas desempenhadas na remota Grécia pelos conquistadores em tempos de luta.</p>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O conceito de estratégia é encontrado com diferentes conotações em diferentes contextos, seja na esfera teórica da academia, ou seja, na vida real de organizações. Além disto, esse é um conceito que, ao ser incorporado ao vocabulário da ciência da administração, veio evoluindo ao longo das últimas décadas a partir de contribuições de diversos pesquisadores na área.</p>

                                <p>Portanto, uma definição exata, precisa e única para estratégia não será encontrada, mas sim uma miríade de definições que foram surgindo ao longo das últimas décadas, principalmente na academia, sendo que várias delas têm sido validadas e utilizadas por muitas empresas da vida real, enquanto, muitas outras definições têm se constituído em modismo passageiro e não se consolidaram. A esse respeito, Mintzberg e Quinn (1995) se manifestam afirmando “que não há uma definição única, universalmente aceita, mas, que entretanto, abundam definições reconhecidamente válidas”.</p>
                            </div>
                        </div>

                        <br><p>A respeito das diversas definições atribuídas ao termo estratégia, apresentam-se algumas dentro da vasta literatura, destacando-se as dos autores abaixo relacionados.</p>

                        <hr>
                        <div class="row">
                            <div class="col-sm">
                                <p class="wow fadeInLeft" data-wow-delay="0.3s">Para Andrews, Christensen, Bower, Hamermesh e Porter (citados por MINTZBERG et al, 2000, p.28), a estratégia é vista como: “a união entre qualificações e oportunidades que posiciona uma empresa em seu ambiente”.</p>
                            </div>
                            <div class="col-sm">
                                <p class="wow fadeInLeft" data-wow-delay="0.3s">Ansoff (1965) explica a estratégia de forma mais técnica, como sendo: “o negócio em que estamos; as tendências que se verificam; decisões heurísticas de primeira ordem; nicho competitivo; e características de portfólio”.</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm">
                                <p class="wow fadeInRight" data-wow-delay="0.3s">Porter (1996) e Mintzberg et al. (2000) afirmam que a estratégia “é a escolha de uma posição única e valiosa baseada em sistemas de atividades que são difíceis de copiar e que agregam valor.”</p>
                            </div>
                            <div class="col-sm">
                                <p class="wow fadeInRight" data-wow-delay="0.3s">Para Shumpeter (apud MINTZBERG et al 2000) e Drucker (1980), a estratégia pode ser vista “como novas combinações que visam explorar oportunidades novas e diferentes no futuro”.</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm">
                                <p class="wow fadeInLeft" data-wow-delay="0.3s">De acordo com Bruner (apud MINTZBERG et al., 2000), a estratégia é vista como um conceito, assim a realização da estratégia é a concretização de um conceito. Outros autores, como Simon e March, citados pelo mesmo autor, acreditam que a estratégia tem lugar na mente do estrategista e este é um conceito de difícil realização.</p>
                            </div>
                            <div class="col-sm">
                                <p class="wow fadeInLeft" data-wow-delay="0.3s">Senge (1990) e Quinn (apud MINTZBERG et al., 2000), afirmam que a estratégia “é um processo de aprendizado, tanto individual como coletivo, ou seja, a estratégia pode fazer com que a organização aprenda ao longo do tempo.”</p>
                            </div>
                        </div>

                        <hr>

                        <br><p>Uma vez que não existe uma única definição para o conceito da estratégia, e sim várias definições que foram formuladas em função de um contexto específico, é possível identificar na literatura autores consagrados que fizeram, a partir de sua ótica e experiência pessoal, sínteses dos diversos conceitos existentes, analisando o que há de mais consistente e maduro sobre o assunto e agrupando-os em famílias afins.</p>

                        <p class="SubSubTitulo">As Escolas do Pensamento Estratégico</p>
                        <hr>

                        <p>Mintzberg, Ahlstrand e Lampel (2000) escreveram “<strong>Safári de Estratégia</strong>”, após uma grande revisão da literatura existente sobre Estratégia e Planejamento Estratégico. Esse livro traz uma síntese dos pensamentos solidificados sobre o assunto nas últimas décadas. Para os autores, as mais relevantes contribuições do assunto puderam ser classificadas em dez pontos de vista distintos, a maioria dos quais, na opinião deles, de uma forma ou de outra foram validadas na prática gerencial ao longo dos anos.</p>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>As dez escolas de pensamento estratégico</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola do Design </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo de concepção, pautado pela Análise SWOT2 para a criação da estratégia. A escola considera estratégia racional e lógica, feita pelo executivo principal. O processo de implementação apresenta separação estanque da fase de formulação, somente possível quando a estratégia for única, simples e explícita.</p>
                                        <p>A principal crítica a esta escola é a inflexibilidade da estratégia.</p>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola de Planejamento </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo que formaliza o planejamento estratégico e fixa objetivos, destacando:</p>
                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Forte presença de auditoria interna e externa para a avaliação da estratégia;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Separação entre o planejamento e a execução e a presença de assessorias externas.</li>
                                        </ul>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola de Posicionamento </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo analítico. A base da escola do posicionamento está na teoria econômica de organização industrial. A partir da estrutura de mercado, constroem-se estratégias na busca de vantagens competitivas. Surgem as estratégias genéricas de Porter, liderança em custo de diferenciação, identificadas a partir do modelo das cinco forças competitivas:</p>
                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Poder de barganha dos fornecedores;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Poder de barganha dos clientes;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Barreiras à entrada;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ameaças de produtos substitutos; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Rivalidade interna da indústria; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Assim como nas escolas do design e do planejamento, a do posicionamento sublinha como principal crítica: a formalidade, a rigidez, a análise pura e reduzida síntese da estratégia. </li>
                                        </ul>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola Empreendedora </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo visionário, pautado na mente do líder por meio de tentativas, o que gera uma destruição criativa. O crescimento é dado como meta, e a visão substitui a formulação de um plano esquematizado, sendo emergente.</p>
                                        <p>Como críticas destacam-se: a centralização no líder; o processo baseado na intuição e a rigidez.</p>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola Cognitiva </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo mental, que tem como base a psicologia cognitiva das décadas de 1980 e 1990. O processo cognitivo como: confusão na identificação de tendências, processamento de informações, mapeamento, realização de conceito e construção.</p>
                                        <p>A principal crítica está na limitada aplicabilidade prática.</p>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola do Aprendizado </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo emergente. A complexidade e imprevisibilidade das organizações impedem o controle deliberado e a formulação precisa da estratégia. A formulação e a implementação de estratégias são indissociáveis. Não só o líder aprende, mas todo o sistema coletivo aprende a formular e implementar estratégias. O aprendizado é emergente, surgindo de todos os tipos de lugares. O papel da liderança é gerenciar o processo de aprendizado estratégico, não de deliberar estratégias. As estratégias nascem do passado, para serem transformadas em planos futuros.</p>
                                        <p>As principais críticas estão relacionadas à falta de uma definição clara da estratégia, à falta da possibilidade coerente e variável de minar estratégias, bem como da possibilidade de desenvolvimento de estratégias erradas.</p>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola do Poder </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo de negociação em função do poder e da política. As estratégias são emergentes. O micropoder visualiza a estratégia como interação, barganha, confronto direto entre interesses estreitos e coalizão inconstante. Já o macropoder vê a organização como promotora do próprio bem-estar por meio de controle ou cooperação com outras organizações, definindo estratégias coletivas.</p>
                                        <p>Como principal crítica aporta-se que esta escola considera que a formulação de estratégias tem como base apenas o poder, desprezando as forças integradoras, como liderança e cultura.</p>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola Cultural </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia ocorre como um processo coletivo de integração social, baseado nas crenças e nas interpretações comum dos membros das organizações. Os indivíduos adquirem as crenças por meio de um processo de aculturação e socialização, sendo este tácito.</p>
                                        <p>A falta de clareza conceitual revela-se como principal crítica a esta escola. Existe o risco de desencorajar mudanças necessárias.</p>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola Ambiental </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo reativo. O ambiente é um conjunto de forças gerais, responsável pela geração de estratégias. As organizações necessitam se adequar a estas forças, ou elas morrerão.</p>
                                        <p>Como principal crítica a esta escola destaca-se o fato de as dimensões do ambiente serem muito abstratas.</p>

                                        <br><p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Escola de Configuração </strong></p>
                                        <hr>
                                        <p>A formulação da estratégia como um processo de transformação. As organizações podem ser escritas em termos de algum tipo de configuração estável em um período de tempo, que dá origem às estratégias. Os períodos de estabilidade são interrompidos, dando origem a novas configurações. Os ciclos de interrupções e mudanças são estáveis, e o sucesso está na administração destes ciclos. As estratégias necessitam ser adequadas ao contexto.</p>
                                        <p>As principais críticas relatam a dificuldade de classificação das organizações em configurações preestabelecidas, já que existem várias nuances. Outra crítica refere-se ao fato de as organizações estarem constantemente mudando, não apenas quando os períodos de estabilidade são interrompidos. A abordagem desta escola pode simplificar uma realidade complexa.</p>                                        
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <p>Para uma visão mais objetiva da formulação da estratégia das escolas, apresentamos um quadro resumo a seguir.</p>

                        <table class="table">
                            <thead>
                                <tr class="Thteste">
                                    <th>Escola</th>
                                    <th>Formulação da Estratégia</th>
                                    <th>Conceito-Chave</th>
                                    <th>Principais Autores</th>
                                </tr>
                            </thead>
                            <tbody class="Tdborda">
                                <tr>
                                    <td>Design</td>
                                    <td>Como um processo de concepção.  </td>
                                    <td>Busca atingir uma adequação entre as capacidades internas e as possibilidades externas, posicionando uma empresa em seu ambiente.</td>
                                    <td>Andrews (1965)</td>
                                </tr>
                                <tr>
                                    <td>Planejamento</td>
                                    <td>Como um processo que formal.</td>
                                    <td>Conduz à formulação de estratégias a partir de um departamento de estratégia que responde diretamente ao executivo principal, e através de um processo formal com muitos indicadores e controles.</td>
                                    <td>Ansoff, Igor (1965)</td>
                                </tr>
                                <tr>
                                    <td>Posicionamento</td>
                                    <td>Como um processo nalítico.</td>
                                    <td>Estratégias genéricas. Define-se um grupo muito pequeno de poucas estratégias-chave que são desejáveis em uma determinada organização e que podem ser defendidas contra concorrentes atuais e futuras.</td>
                                    <td>Porter, Michael (1980)</td>
                                </tr>
                                <tr>
                                    <td>Empreendedora</td>
                                    <td>Como um processo visionário.</td>
                                    <td>A força de um único líder, na sua intuição, julgamento, sabedoria, experiência e critério, para definir as estratégias formais da organização.</td>
                                    <td>Schumpeter (1950)</td>
                                </tr>
                                <tr>
                                    <td>Cognitiva</td>
                                    <td>Como um processo mental.</td>
                                    <td>Tem como ferramenta fundamental a psicologia cognitiva, que através de técnicas adequadas efetua uma sondagem da mente do estrategista.</td>
                                    <td>Simon (1947)</td>
                                </tr>
                                <tr>
                                    <td>Aprendizado</td>
                                    <td>Como um processo emergente.</td>
                                    <td>Está fundamentada no fato de que as estratégias surgem e se consolidam à medida que as pessoas e a organização aprendem a lidar com elas.</td>
                                    <td>Lindblom (1959), Prahalad e Hamel (1990)</td>
                                </tr>
                                <tr>
                                    <td>Poder</td>
                                    <td>Como um processo negociação.</td>
                                    <td>Tem como foco o uso de poder e da política para negociar estratégias favoráveis e determinados interesses.</td>
                                    <td>Allisson (1971)</td>
                                </tr>
                                <tr>
                                    <td>Cultural</td>
                                    <td>Como um processo coletivo.</td>
                                    <td>É um processo enraizado na forma social da cultura organizacional, preocupando-se com a influência da cultura na manutenção da estabilidade estratégica.</td>
                                    <td>Norman (1960)</td>
                                </tr>
                                <tr>
                                    <td>Ambiental</td>
                                    <td>Como um processo reativo.</td>
                                    <td>Está relacionada com uma organização passiva, a qual permite que o ambiente conduza uma pauta de mudanças, devido à forte influência que exerce sobre a formação de estratégias.</td>
                                    <td>Freeman(1977)</td>
                                </tr>
                                <tr>
                                    <td>Configuração</td>
                                    <td>Como um processo de transformação.</td>
                                    <td>Consideram-se os estados da organização e do contexto no qual ela se insere como configurações. Se uma organização adota estados de ser, então a geração de estratégia torna-se um processo de saltar de um estado para outro.</td>
                                    <td>Mintzberg e Miller (1970), Milles e Show (1978)</td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="text-align:center" class="FonteFigura"><strong>Quadro 1 - </strong> As escolas de Pensamento e a Formulação do Processo de Estratégia Adaptado de Mintzberg, Ahlstrand e Lampel(2000)</p>

                        <p>Os autores classificam as dez escolas em três agrupamentos. As três primeiras são de natureza prescritiva – mais preocupadas em saber como as estratégias devem ser formuladas do que em como elas são formuladas. A primeira delas, a Escola do Design, que nos anos 80 apresentou a estrutura básica sobre a qual as duas outras foram construídas, focaliza a formulação de estratégias como um processo de desenho informal. A segunda escola – a Escola do Planejamento – desenvolvida paralelamente nos anos 60 e que teve seu auge nos anos 70, formalizou essa perspectiva, vendo a formulação de estratégias como um processo de planejamento formal separado e sistemático.</p>

                        <p class="wow fadeInRight" data-wow-delay="0.3s">Essa escola perdeu espaço nos anos 80 para a Escola do Posicionamento, menos preocupada com o processo de formulação de estratégias e mais com o conteúdo real das mesmas, concentrando-se na seleção de posições estratégicas no mercado.</p>

                        <p class="wow fadeInDown" data-wow-delay="0.3s">As seis escolas seguintes consideram aspectos específicos do processo de formulação das estratégias e se preocupam menos com a descrição do comportamento estratégico ideal do que com a descrição de como as estratégias são formuladas de fato.</p>

                        <p class="wow fadeInLeft" data-wow-delay="0.3s">Alguns autores proeminentes associam, há muito, a estratégia com espírito empreendedor e descrevem o processo em termos de criação da visão pelo grande líder. Se a estratégia pode ser uma visão pessoal, então sua formulação também precisa ser entendida como o processo de obtenção do conceito na mente de um indivíduo. Analogamente, foi também desenvolvida uma escola cognitiva, a qual busca usar as mensagens da Psicologia Cognitiva para entrar na mente do estrategista.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">Cada uma das quatro escolas seguintes procurou abrir o processo de formulação de estratégia além do indivíduo. Para a Escola de Aprendizado, o mundo é complexo demais para que as estratégias sejam desenvolvidas, de uma só vez, como planos ou visões claras. Portanto, a estratégia deve surgir em passos curtos, à medida que a organização se adapta, ou aprende. A Escola do Poder trata a formulação da estratégia como um processo de negociação, seja por grupos conflitantes, dentro de uma organização, ou pelas próprias organizações, enquanto confrontam seus ambientes externos. Em comparação com esta, há uma outra escola de pensamento, a escola cultural que considera a formulação de estratégia como enraizada na cultura da organização, vendo o processo como sendo fundamentalmente coletivo e cooperativo. E há os proponentes de uma Escola Ambiental em que a formulação das estratégias é um processo no qual a iniciativa não está dentro da organização, mas em seu contexto externo. Assim sendo, procuram compreender as pressões impostas sobre as organizações.</p>

                        <p class="wow fadeInRight" data-wow-delay="0.3s">O grupo final compreende apenas uma escola – a de Configuração. As pessoas dessa escola, em busca da integração, agrupam vários elementos: processo de formulação de estratégias, conteúdo destas e estruturas organizacionais e seus contextos. Isso em estágios, às vezes, sequenciados ao longo do tempo, para descrever os ciclos de vida das organizações. No entanto, se as organizações se acomodam em quadros estáveis, então a formulação de estratégias deve descrever o salto de um quadro para o outro. E assim, um outro lado desta escola descreve o processo como sendo de transformação, incorporando grande parte da literatura e da prática prescritiva sobre mudanças estratégicas.</p>




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
            <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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