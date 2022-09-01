    <!-- PLUGIN DO FADE IN -->

    <style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                    </a> -->
                    <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="index.php" class="MenuTopico sidebar-link <?php if($page=='Apresentacao'){echo'ativo';}?>"><span id="menuNumero"> </span>Apresentação </a>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo 'ativo';}?>"><span id="menuNumero">01 </span>  Um Breve Histórico do Planejamento</a>

                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico01.php#Inicio" class="sidebar-sub <?php if($page=='Topico01'){echo 'ativo';}?>"><span id="menuNumero">
                                         01<span> Início</span>
                                     </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico01.1.php#SubTopico1.1" class="sidebar-sub <?php if($page=='Topico01.1'){echo 'ativo';}?>"><span id="menuNumero">
                                        01.1<span> Contexto Sociopolítico de Inserção do Planejamento Estratégico Governamental e a Construção do “Estado Necessário”</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo 'ativo';}?>"><span id="menuNumero">02 </span>  O Planejamento Estratégico Governamental (PEG) como Convergência e Enfoque e a Metodologia de Diagnóstico de Situações</a>

                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico02.php#Inicio" class="sidebar-sub <?php if($page=='Topico02'){echo 'ativo';}?>"><span id="menuNumero">
                                         02<span> Início</span>
                                     </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico02.1.php#SubTopico2.1" class="sidebar-sub <?php if($page=='Topico02.1'){echo 'ativo';}?>"><span id="menuNumero">
                                        02.1<span> O Enfoque da Análise de Política</span>
                                        </a>
                                    </li>  
                                    <li class="sidebar-item">
                                        <a href="Topico02.2.php#SubTopico2.2" class="sidebar-sub <?php if($page=='Topico02.2'){echo 'ativo';}?>"><span id="menuNumero">
                                        02.2<span> O Enfoque do Planejamento Estratégico Situacional</span>
                                        </a>
                                    </li>                                   
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo 'ativo';}?>"><span id="menuNumero">03 </span>  Metodologia de Diagnóstico de Situações</a>

                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico03.php#Inicio" class="sidebar-sub <?php if($page=='Topico03'){echo 'ativo';}?>"><span id="menuNumero">
                                         03<span> Início</span>
                                     </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico03.1.php#SubTopico3.1" class="sidebar-sub <?php if($page=='Topico03.1'){echo 'ativo';}?>"><span id="menuNumero">
                                        03.1<span> O Conceito de Ator Social e as Características do Jogo Social</span>
                                        </a>
                                    </li>  
                                    <li class="sidebar-item">
                                        <a href="Topico03.2.php#SubTopico3.2" class="sidebar-sub <?php if($page=='Topico03.2'){echo 'ativo';}?>"><span id="menuNumero">
                                        03.2<span> Os Momentos da Gestão Estratégica</span>
                                        </a>
                                    </li>                                   
                                </ul>
                            </div>
                        </li>  
                        
                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#" class="MenuTopico sidebar-link <?php if($page=='Topico04'){echo 'ativo';}?>"><span id="menuNumero">04 </span>  Metodologia de Planejamento de Situações - MPS</a>

                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico04.php#Inicio" class="sidebar-sub <?php if($page=='Topico04'){echo 'ativo';}?>"><span id="menuNumero">
                                         04<span> Início</span>
                                     </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico04.1.php#SubTopico4.1" class="sidebar-sub <?php if($page=='Topico04.1'){echo 'ativo';}?>"><span id="menuNumero">
                                        04.1<span> Planejar por Situações-Problema</span>
                                        </a>
                                    </li>  
                                    <li class="sidebar-item">
                                        <a href="Topico04.2.php#SubTopico4.2" class="sidebar-sub <?php if($page=='Topico04.2'){echo 'ativo';}?>"><span id="menuNumero">
                                        04.2<span> Matriz Operacional</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico04.3.php#SubTopico4.3" class="sidebar-sub <?php if($page=='Topico04.3'){echo 'ativo';}?>"><span id="menuNumero">
                                        04.3<span> Etapas para a Formulação dos um Plano de Ação</span>
                                        </a>
                                    </li> 
                                    <li class="sidebar-item">
                                        <a href="Topico04.4.php#SubTopico4.4" class="sidebar-sub <?php if($page=='Topico04.4'){echo 'ativo';}?>"><span id="menuNumero">
                                        04.4<span> Gestão do Plano</span>
                                        </a>
                                    </li> 
                                    <li class="sidebar-item">
                                        <a href="Topico04.5.php#SubTopico4.5" class="sidebar-sub <?php if($page=='Topico04.5'){echo 'ativo';}?>"><span id="menuNumero">
                                        04.5<span> Componentes de um Sistema de Planejamento Estratégico Governamental</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                                                    
                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Referencias.php" class="MenuTopico sidebar-link <?php if($page=='Referencias'){echo 'ativo';}?>">Referências</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    
    </div>
    <!-- SCRIPT - JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>
