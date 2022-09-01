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
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <p class="Titulo"> Formulação Estratégica</p>
                            <hr>

                            <p><strong>Objetivo:</strong> Apresentar métodos para formulação de estratégias para aplicar nos processos de gestão da organização.</p>

                            <p><strong>Ter estratégia é fazer escolhas. É escolher como uma organização vai se diferenciar das outras. Escolhas de fazer alguma coisa, como:</strong></p>

                            <ul class="none">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> que clientes atender;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> que produtos produzir e/ou vender;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> ou quais canais de venda utilizar.</li>
                            </ul>

                            <p><strong>E também escolhas de deixar de fazer alguma coisa, conscientemente, como:</strong></p>

                            <ul class="none">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> que clientes não atender;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> em quais canais de venda não atuar;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> e que produtos e/ou serviços não oferecer.</li>
                            </ul>

                            <p>É definir o que é o melhor para a organização, e não apenas usar o que é bom para todas as outras organizações. As escolhas estratégicas representam os grandes caminhos definidos por uma organização para alcançar vantagem competitiva, uma questão fundamental na gestão estratégica.</p>

                            <div class="SaibaMaisTexto" style="border-radius: 7px 7px 7px 7px;background-color: #539df121;">
                                <p>Para Porter  eficiência operacional é uma necessidade, mas não é o suficiente para a garantia do sucesso a longo prazo de uma organização. É preciso ter uma estratégia. É absolutamente imprescindível que os principais gestores de uma organização invistam tempo em traçar estratégias que a diferenciem de seus concorrentes.</p>
                            </div><br>

                            <div class="SaibaMaisTexto" style="border-radius: 7px 7px 7px 7px;background-color: #539df121;">
                                <p>Hamel e Prahalad escreveram o artigo <em>“The core competence of the corporation”</em> para a Harvard Bussiness Review em 1990. Nesse artigo, introduziram o termo competência essencial (<em>core competence</em>), ao apontarem que as empresas bem-sucedidas e extremamente competitivas eram mais que portfólios de negócios, eram portfólios de competências, as estratégias devem ser definidas sobre as competências básicas da organização, tentando aproveitar as oportunidades futuras do ambiente, na busca de vantagem competitiva sustentável.</p>
                            </div><br>

                            <p>Existe espaço para uma série de estratégias de sucesso. O pior erro é não escolher. É tentar um pouco de tudo para, no fim, não conseguir nenhuma vantagem. Isso não funciona porque todas as boas estratégias envolvem escolhas. Para Porter, não se pode ter ao mesmo tempo custos baixos e ser líder ou único em qualidade e serviço.</p>

                            <p>Uma organização pode dizer que possui uma estratégia, quando responde afirmativamente às três perguntas seguintes.</p>

                            <div class="SaibaMaisTexto" style="border-radius: 7px 7px 7px 7px;background-color: #539df121;">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>A instituição escolheu uma posição única, diferente dos concorrentes?</strong></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Optou por desempenhar atividades de marketing e desenvolvimento de produtos de maneira diferente</strong></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>A empresa optou por não fazer determinadas coisas?</strong></li>
                                </ul>
                            </div><br>

                            <p>Quando uma organização consegue criar uma estratégia única, a sua posição no mercado se torna sustentável por muito mais tempo.</p>
                            
                            

          
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
                    <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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
