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

                        <p class="SubTitulo"> Missão, Visão e Valores: Conceitos</p>
                        <hr>

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Missão</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Significa dizer qual a razão de ser da instituição, para que ela existe.</p>
                                        <p>Fórmula da missão do ponto de vista da qualidade:</p>
                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O QUE FAZER + POR QUE FAZER + PARA QUEM FAZER</li>
                                        </ul>
                                        <p><strong>A missão tem como foco o produto/serviço e os clientes/público beneficiário.</strong></p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>"Integrar as ações governamentais, por meio da coordenação do planejamento de gestão pública, visando ao desenvolvimento do Estado e à promoção da cidadania." <em><strong>(Secretaria de Estado e Planejamento e Gestão de Minas Gerais)</strong></em></p>
                                                <p>"Gerir o planejamento de forma a promover o desenvolvimento sustentável do Estado do Pará."<em><strong>(Secretaria de Planejamento do Estado do Pará)</strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Visão</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>É uma imagem mental, uma descrição daquela situação futura e desejada, que todos os envolvidos almejam. Representa aonde se quer chegar, em um período de tempo determinado.</p>
                                        <p>A visão descreve o futuro desejado, a partir dos esforços individuais, dos esforços das equipes e da alocação de recursos. Embora desafiadora, a visão precisa ser prática, realista e visível. Se não podemos ver claramente o que queremos ser no futuro, certamente não conseguiremos alcançar. Tudo não passará de uma ilusão. Por outro lado, se a visão não for um desafio que mobilize os esforços, não passará de rotineira continuidade.</p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>"Ser excelência em gestão pública, incorporando-a como valor de Estado." <em><strong> (Secretaria de Estado e Planejamento e Gestão de Minas Gerais)</em></strong></p>
                                                <p>"Ser referência na gestão do planejamento estadual."<em><strong>(Secretaria de Planejamento do Estado do Pará)</em></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Valores</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Servem de guia e estabelecem critérios para os comportamentos e atitudes das pessoas responsáveis por tomar decisões e implementar ações na organização.</p>
                                        <p>Os valores são, em outros termos, os limites éticos pelos quais se pautam todos que constituem a organização.</p>
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <ul class="none">
                                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Compromisso com o social;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ações desenvolvidas com competência, ética, honestidade e transparência;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Flexibilidade para aceitar e promover as mudanças;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Respeito e zelo pela coisa pública;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Senso de equipe e valorização do ser humano;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Entender e satisfazer as expectativas dos clientes internos e externos;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Agir proativamente visando alcançar melhores índices de desempenho;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Servidores comprometidos com os resultados da organização;</li>
                                                    <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Seriedade e transparência nas ações.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p><strong>Objetivos Estratégicos</strong></p>

                                        <p>Intenções assertivas e factíveis na busca por algo de valor, de resultados de progresso, vantagens e melhorias, nas quais a situação futura almejada seja melhor que a presente. Devem ser globais e amplos, definidos com foco no longo prazo, com o propósito de cumprir a missão e alcançar a visão da instituição.</p>

                                        <p><strong>Características dos objetivos (SMART):</strong></p>

                                        <p>Ao contrário da missão, que é definida de forma genérica, os objetivos devem ser definidos de forma concreta e devem apresentar as seguintes características:</p>

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i><strong><em>Specific</em> (Específicos)</strong><br>Os objetivos devem ser específicos, claros, concisos e fáceis de entender (não devem ser generalistas). Devem compreender algo que possa ser claramente atingido.</p> 

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i><strong><em>Mensurable</em> (Mensuráveis)</strong><br>Sendo os objetivos constituídos por desejos ou aspirações, devem ser passíveis de serem avaliados, através da definição de parâmetros que verifiquem se foram ou não atingidos.</p> 

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i><strong><em>Attainable</em> (Alcançáveis)</strong><br>Os objetivos têm que ser alcançáveis. Esse aspecto implica que os objetivos sejam propostos em consonância com todos os seus intervenientes, para que estejam motivados e compreendam os objetivos e suas dificuldades. Devem ser definidos de modo congruente com o momento e os recursos.</p> 

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i><strong><em>Realistics</em> (Realistas)</strong><br>Os objetivos devem ser tangíveis e condizentes com a realidade da organização, deve existir a possibilidade de poderem vir a ser alcançados.</p> 

                                        <p><i class="fa fa-cube CorVerdeClaroEstado"></i><strong><em>Time Bound</em> (Tempo)</strong><br>Os objetivos devem ser estabelecidos com um limite temporal bem definido (ou uma série de fases).</p> 
                                    </div>
                                </div>                                
                            </div>
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



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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