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

                        <p class="SubTitulo"> O Enfoque do Planejamento Estratégico Situacional</p>
                        <hr>

                        <p>Ao contrário do enfoque da Análise de Política, esse enfoque não será tão detalhado, nesse momento, pois nos tópicos 3 e 4 serão apresentadas, detalhadamente, as duas metodologias (a de Diagnóstico de Situações e a de Planejamento de Situações) que integram o arsenal do PEG.</p>

                        <p>O Planejamento Estratégico Situacional, método PES, surgiu em meados da década de 1970 como resultado da busca de uma ferramenta de suporte ao mesmo tempo científica e política para o trabalho cotidiano de dirigentes públicos e outros profissionais em situação de governo. Seu criador foi o exministro de Planejamento chileno do governo Allende, Carlos Matus. O método PES nasceu de um longo processo de reflexão que teve lugar no período em que ele ficou preso em função do golpe militar, que levou à morte do presidente Allende, em setembro de 1973. Essa reflexão o levou a formular uma crítica ao planejamento governamental tradicional e propor um método alternativo que levasse em conta o caráter situacional (situação do ator que planeja) e estratégico que deveria possuir o planejamento, em especial aquele necessário para lidar com as particularidades do Estado latino-americano.</p>

                        <p>A leitura de qualquer um dos vários livros que Matus escreveu revela que essa crítica tem como pressupostos muitos dos conteúdos abordados pelo enfoque da Análise de Políticas.</p>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Baseado em pressupostos muito semelhantes aos da Análise de Política, o método PES é uma alternativa ao planejamento tradicional.</p>
                            </div>
                        </div>

                        <div class="bd-callout bd-callout-warning">
                            <p class="Texto">
                                <p>O PES conta com um repertório de instrumentos e metodologias que adicionam preocupações mais realistas e próximas do contexto latino-americano à reflexão sobre Análise de Políticas. Destacamos, a seguir, alguns aspectos essenciais dessa metodologia:</p>
                                <ul class="none">
                                    <br><li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-cube CorVerdeClaroEstado"></i> A crítica radical que faz ao planejamento tradicional <strong>“normativo”</strong> (não no sentido de prescritivo, mas sim de voluntarista, escassamente apoiado em análise metodologicamente coerente – e autoritário – baseado em <strong>“acordos de gabinete”</strong> sem participação) e à sua própria epistemologia, de caráter positivista e comportamentalista;</li>  
                                    <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-cube CorVerdeClaroEstado"></i> O uso do termo estratégico, empregado na sua dupla conotação de movimento que visa à solução de uma situação que se configura como um problema para o ator que planeja e de movimento em que este ator enfrenta ou vai ser enfrentado por um adversário que também se move, inclusive em resposta às suas ações. Aquelas ações que irão construir o cenário normativo: aquele cujo conteúdo interessa ao ator que planeja. Estratégico, ademais, por ter seu foco nos projetos de longo prazo de maturação, mais do que em simples manobras táticas (de curto prazo);</li>
                                    <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-cube CorVerdeClaroEstado"></i> A clara distinção que se coloca entre o planejamento estratégico corporativo ou empresarial, do qual lamentavelmente se originam muitas das propostas que são <strong>“contrabandeadas”</strong> para o território governamental, e a proposta que faz de tratar os problemas públicos, situados na interface Estado-Sociedade, de modo coerente com as demandas do conjunto desta sociedade e não com as de um grupo econômica e politicamente favorecido;</li>
                                    <br><li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-cube CorVerdeClaroEstado"></i> O esforço de construção de um método para compreender o jogo social, a relação entre os homens, e atingir resultados relevantes apesar da incerteza sempre presente, a partir de categorias como: ator social, teoria da ação social, produção social e conceitos como o de situação e o de momento. O método PES se coloca, assim, como uma <strong>“contraproposta epistemológica”</strong> ao planejamento de tipo economicista (que, por operar sobre variáveis quantitativas, frequentemente de natureza econômica, dá a enganosa impressão de exatidão e racionalidade) ao:</li>
                                    
                                    <br><ul class="none">
                                        <br><li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Negar a possibilidade de um único diagnóstico da realidade, por enfatizar que os vários atores <strong>“explicam”</strong> ou fazem <strong>“recortes”</strong> interessados da realidade, a partir de suas situações particulares e sempre voltados para a ação. Não é possível, nunca, um conhecimento <strong>“fechado”</strong>, uma verdade acabada sobre a realidade;</li>
                                        <br><li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reconhecer que os atores em situação de governo nunca têm o controle total dos recursos exigidos por seus projetos e, por isso, nunca há certeza de que suas ações alcançarão os resultados esperados. Os recursos escassos não são só os econômicos, mas os de poder, de conhecimento e de capacidade, de organização e gestão, entre outros;</li>
                                        <br><li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Aceitar que a ação humana é intencional e nunca inteiramente previsível, como fazem supor os comportamentalistas;</li>
                                        <br><li class="wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Aceitar que o jogo social é sempre de <strong>“final aberto”</strong>.</li>
                                    </ul>                                                                      
                                </ul>
                            </p>
                        </div>

                        <p>Nessa medida, apesar da incerteza, da incapacidade de controlar os recursos, do abandono de qualquer posição determinística, há sempre espaço para a ação humana intencional, para se “<strong>fazer história</strong>”, para se “<strong>construir sujeitos</strong>” individuais e coletivos e para se lutar contra a improvisação, construindo um caminho possível que se aproxime do rumo desejado.</p>
                        


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