
<?php  
session_start();
require_once("admin/database.php");




?>


<!DOCTYPE html>

<html lang="pt-br">







<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div>

    <div style="background-color:#141414;">



        <head>

            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
                id="bootstrap-css">

            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            <meta charset="UTF-8">

            <meta name="viewport" content="width=device-width,

                    initial-scale=1.0,

                    minimum-scale=1.0">



            <title>Orvalho</title>



            <meta name="keywords" content="Marketplace ecommerce responsive

                    HTML5

                    Template" />

            <meta name="description" content="Wolmart is powerful

                    marketplace

                    &amp;

                    ecommerce responsive Html5 Template.">

            <meta name="author" content="D-THEMES">



            <!-- Favicon -->

            <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">



            <!-- WebFont.js -->

            <script>
            WebFontConfig = {

                google: {

                    families: ['Poppins:400,500,600,700,800']

                }

            };

            (function(d) {

                var wf = d.createElement('script'),

                    s = d.scripts[0];

                wf.src = 'assets/js/webfont.js';

                wf.async = true;

                s.parentNode.insertBefore(wf, s);

            })(document);
            </script>

            <script>
            $(document).ready(function() {



                'use strict';



                var c, currentScrollTop = 0,

                    navbar = $('nav');



                $(window).scroll(function() {

                    var a = $(window).scrollTop();

                    var b = navbar.height();



                    currentScrollTop = a;



                    if (c < currentScrollTop && a > b + b) {

                        navbar.addClass("scrollUp");

                    } else if (c > currentScrollTop && !(a <= b)) {

                        navbar.removeClass("scrollUp");

                    }

                    c = currentScrollTop;



                    console.log(a);

                });



            });
            </script>
            <script src="https://kit.fontawesome.com/9c1dc7efe4.js" crossorigin="anonymous"></script>

            <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

            <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font"
                type="font/woff2" crossorigin="anonymous">

            <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font"
                type="font/woff2" crossorigin="anonymous">

            <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font"
                type="font/woff2" crossorigin="anonymous">

            <link rel="preload" href="assets/fonts/wolmart.woff?png09e" as="font" type="font/woff"
                crossorigin="anonymous">


                  <!-- Vendor CSS -->
            <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
<!-- Default CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/demo10.min.css">



          
            <style>
            .sticky-content.fix-bottom {

                bottom: 0;

                position: fixed;

                position: fixed;

                left: 0;

                right: 0;

                opacity: 1;

                transform: translateY(0);

                z-index: 1051;

                box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.1);



            }



            .container {

                position: relative;

                width: 100%;

            }



            .image {

                opacity: 1;

                display: block;

                width: 100%;

                height: auto;

                transition: .5s ease;

                backface-visibility: hidden;

            }



            .middle {

                transition: .5s ease;

                opacity: 0;

                position: absolute;

                top: 50%;

                left: 50%;

                transform: translate(-50%, -50%);

                -ms-transform: translate(-50%, -50%);

                text-align: center;

            }



            .container:hover .image {

                opacity: 0.3;

            }



            .container:hover .middle {

                opacity: 1;

            }



            .text {

                background-color: #ab8e66;

                color: white;

                font-size: 16px;

                padding: 16px 32px;

            }



            a:hover {

                color: #000;

            }



            a {

                color: black;

                text-decoration: none;

            }



            @media only screen and (max-width: 480px) {

                #ocult {

                    background-image: none !important;

                }

            }



            @media only screen and (max-width: 480px) {

                #onlymobile {

                    padding: auto;



                }

            }



            @media only screen and (max-width: 768px) {



                .bannermobile {

                    width: 500px;

                    height: 350px;

                }

            }



            .btn-wrap {

                position: relative;

                text-align: center;

            }







            .container1 {

                width: 100%;



                clear: both;

            }



            a {

                display: inline-block;

                color: #fff;

                text-decoration: none;

                font-family: Poppins, sans-serif;

            }



            nav {

                background: #141414;

                height: 60px;

                line-height: 60px;

                box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);

                position: fixed;

                top: 0;

                left: 0;

                width: 100%;

                z-index: 9998;

                transition: all 0.5s;

            }



            nav.scrollUp {

                transform: translateY(-80px);

            }



            nav ul.navbar-menu {

                margin: 0;

                padding: 0;

                display: inline-block;

                float: right;

            }



            nav ul.navbar-menu li {

                display: inline-block;

                margin: 0 10px;

            }



            nav ul.navbar-menu li a {

                color: #fff;

                font-size: 14px;

            }



            nav a#brand {

                text-transform: uppercase;

                float: left;

                font-weight: 800;

                font-size: 20px;

            }



            nav button {

                background: none;

                width: 30px;

                height: 40px;

                margin-top: 20px;

                border: none;

                float: right;

                display: inline-block;

                cursor: pointer;

                display: none;

            }



            nav button span {

                width: 30px;

                height: 40px;

                height: 2px;

                background: #333;

                display: block;

                margin: 5px 0;

            }



            @media (max-width: 768px) {

                nav ul.navbar-menu {

                    display: none;

                }



                nav button {

                    display: block;



                }

            }



            @media (max-width: 767px) {





                .nav-list {

                    display: none;

                    position: absolute;

                    top: 60px;

                    right: 0;

                    width: 26vh;

                    height: 70vh;

                    background-color: #141414;

                    flex-direction: column;

                    align-items: start;

                    justify-content: space-around;

                    transform: translateX(100%);

                }



                .nav-list li {



                    opacity: 0;

                    margin-left: 0;

                }



                .mobile-menu {

                    display: block;



                }



            }





            .nav-list.active {

                transform: translateX(0);

            }





            .mobile-menu {

                cursor: pointer;

                display: none;

            }



            .mobile-menu div {



                width: 32px;

                height: 2px;

                background: #fff;

                margin: 8px;



            }
            </style>





        </head>

    </div>



    <body class="home">

        <div class="page-wrapper">


















            <!--start os header-->
            <nav>
                <div class="container1" style="height:60px; margin-left:2%;  ">
                    <a style=" justify-content: end;" id="brand" href=" #"><img style="height: 30px;"
                            src="./assets/images/logo.png" /></a>


                    <ul class="navbar-menu " style="margin-right:2%">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="perfumes.php">Catálogo de perfumes</a>
                        </li>
                        <li>
                            <a href="contact-us.php">Contato</a>
                        </li>
                        <li>
                            <a href="planos.php">Planos</a>
                        </li>
                        <?php
                        if (isset($_SESSION['email'])) {
                        ?>
                        <li>
                            <a href="dashboard.php">
                                Minha Conta</a>
                        </li>
                        <?php } else { ?>
                        <?php } ?>
                        <?php if (isset($_SESSION['email'])) { ?>

                        <li>
                            <a href="action.php?logout=1">
                                Sair</a>
                        </li><?php
                                } else {

                                    ?>
                        <li> <i style="color: #fff;" class="w-icon-account"></i>
                            <a href="login.php">Entrar</a>
                        </li>
                        <li><a href="login.php#cadastro"> <i class="w-icon-account"></i>
                                Cadastre-se</a></li><?php } ?>
                    </ul>

                </div>
            </nav>
            <!-- End of Header -->







            <div class="container" style="margin-top: 100px;">



                <center>

                    <h2> <strong>TERMOS E CONDIÇÕES DE USO DA PLATAFORMA - ORVALHO SCENT JOURNEY</strong> <br><br><br>

                    </h2>

                </center>

                <p>

<?php echo $_SESSION['user'];
 ?>

                    <strong>Informações Preliminares</strong> <br>

                    O presente instrumento regula os termos e condições de uso da

                    plataforma “ORVALHO SCENT JOURNEY” (https://orvalhosj.com/) que é o

                    endereço eletrônico referente a Loja Virtual da Orvalho Scent

                    Journey, inscrita no CNPJ sob nº 41.421.932/0001-95, com sede e foro

                    jurídico na Cidade de Barueri/SP, (doravante denominada de “ORVALHO

                    SCENT JOURNEY” ou de “ORVALHO SJ”).<br>

                    A plataforma ORVALHO SCENT JOURNEY detém como missão, visão e

                    valores:<br>

                    <strong>Missão:</strong> Proporcionar aos assinantes uma jornada ao mundo dos

                    perfumes.<br>

                    <strong>Visão:</strong> Somos catalisador do conhecimento de perfumes para

                    consumidores<br>

                    <strong>Valores: </strong> Responsabilidade: Temos a responsabilidade de entregar com

                    qualidade e integridade os nossos serviços. <br>



                    Você, leitor, na qualidade de usuário da plataforma “ORVALHO SJ”,

                    deverá observar os termos aqui estipulados a fim de utilizar os

                    serviços do site. Ao acessar a “ORVALHO SJ”, você concorda com os

                    dispositivos deste Instrumento de Termos e Condições de Uso

                    (doravante denominado Contrato ou Termo), sobretudo com a coleta e

                    uso de suas informações, conforme estabelecido na Política de

                    Privacidade da “ORVALHO SJ”, independentemente de ser ou não um

                    usuário registrado do serviço.<br><br>

                    <strong>Definições</strong><br><br>



                    <strong> USUÁRIO: </strong>todas as pessoas que navegam, compram e utilizam os

                    serviços e/ou produtos oferecidos pelo site/plataforma “ORVALHO

                    SCENT JOURNEY” (https://orvalhosj.com/) estabelecendo uma relação de

                    consumo.<br><br>

                    <strong>PLATAFORMA:</strong> O site/loja virtual de endereço eletrônico

                    https://orvalhosj.com/ no qual o Usuário poderá utilizar-se para

                    adquirir os produtos/serviços ofertados pela Orvalho Scent Journey.<br><br>

                    <strong> LOGIN:</strong> identificação de um Usuário perante o sistema.<br><br>

                    <strong>SENHA:</strong> conjuntos de caracteres, de conhecimento único do Usuário,

                    utilizado no processo de verificação de sua identidade, assegurando

                    que este é realmente quem diz ser.<br><br>

                    <strong>PLANOS:</strong> Produto/Serviço ofertado pela Orvalho Scent Journey. São as

                    assinaturas mensais ou semestrais contratadas pelo Usuário para

                    recebimento dos produtos condizentes com cada espécie de plano.

                    ORVALHO SCENT JOURNEY: proprietária da plataforma

                    https://orvalhosj.com/. Nestes “Termos e Condições de Uso” é

                    denominada como “ORVALHO SCENT JOURNEY” ou de “ORVALHO SJ”;

                    LGPD: Lei Geral de Proteção de Dados (Lei nº 13.709/2018);

                    DADOS PESSOAIS: qualquer informação relacionada a pessoal natural

                    que a identifique, ou que, usada em combinação com outras

                    informações tratadas, identifique um indivíduo. Ainda, qualquer

                    informação por meio da qual a identificação ou informação de contato

                    de uma pessoa natural seja possível;

                    TITULAR: pessoa natural a quem se referem os dados pessoais objeto

                    do tratamento; <br><br>



                    <strong>Condições Gerais de Uso</strong> <br>



                    <strong>1. DO USO</strong>



                    <strong> 1.1.</strong> Do Objetivo deste Documento

                    O presente Termo estabelece obrigações contratadas de livre e

                    espontânea vontade, por tempo indeterminado, entre a plataforma e as

                    pessoas físicas ou jurídicas, usuárias do site

                    https://orvalhosj.com/.<br>



                    <strong>2. DA ACEITAÇÃO</strong>

                    Através da aceitação deste termo o Usuário concorda com as

                    disposições constantes de cada cláusula e para a utilização de

                    serviços, receberá um cadastro individual e intransferível, que

                    poderá ser cancelado a qualquer tempo e por qualquer motivo pela

                    “ORVALHO SCENT JOURNEY”, que resguarda para si todos os direitos não

                    expressamente concedidos aqui no serviço e no conteúdo do

                    aplicativo.<br>



                    <strong> 2.1. Comprometimento</strong>

                    Ao utilizar a plataforma o usuário aceita integralmente as presentes

                    normas e compromete-se a observá-las, sob o risco de aplicação das

                    penalidades cabíveis.<br>



                    <strong>2.2. Da imprescindibilidade da aceitação</strong>

                    A aceitação do presente instrumento é imprescindível para o acesso e

                    para a utilização de quaisquer serviços fornecidos pela empresa.

                    Caso não concorde com as disposições deste instrumento, o usuário

                    não deve utilizá-los.<br>

                    3. DA CONTA



                    <strong> 3.1. Acesso e requisitos de abertura</strong>

                    A abertura de conta/cadastro na plataforma “ORVALHO SJ” dará ao

                    assinante acesso à plataforma para aquisição dos planos (vide

                    Cláusula 7) e outros serviços ofertados. O cliente precisa ter

                    capacidade legal para contratar e ser maior de 18 anos.<br>



                    <strong>3.2. Contas de Terceiros:</strong>

                    É estritamente vedada a utilização de contas de outros usuários da

                    plataforma sem a autorização do respectivo titular, sob pena de

                    responsabilização por eventuais danos causados a quem quer que seja

                    advindo deste uso indevido. Poderá, inclusive, incorrer nos crimes

                    de falsa identidade e estelionato, ambos previstos no Código Penal

                    Brasileiro, sem prejuízo de eventual responsabilização por

                    legislação específica.<br>



                    <strong>3.3. Informações para abertura de conta</strong>

                    No momento da abertura da conta/cadastro na plataforma “ORVALHO SJ”

                    , assim como em demais momentos em que a prestação de informações

                    seja necessária a obtenção do serviço ou produto, o Usuário

                    fornecerá dados que serão armazenados e tratados na plataforma,

                    tendo este o dever de informá-los com precisão e completude.

                    3.4.1. O Usuário se responsabiliza pelas informações fornecidas para

                    abertura da conta e obtenção dos serviços da plataforma.

                    3.4.2. Recomenda-se a utilização de senhas com combinação de

                    números, letras maiúsculas, minúsculas e demais símbolos a fim de

                    torná-la forte, sendo o usuário responsável pela segurança da senha

                    criada.<br>



                    <strong>3.5. Do recebimento de avisos, e-mails e notificações</strong>

                    Ao fornecer endereço de e-mail, número de telefone móvel (com acesso

                    a aplicativos de mensagem instantânea), endereço físico e demais

                    informações eventualmente necessárias a utilização da plataforma, o

                    Usuário concorda em usá-los para enviar avisos relacionados ao

                    serviço ou produto, incluindo avisos exigidos por lei, em vez de

                    comunicação por correio postal. A plataforma poderá usar o endereço

                    de e-mail e telefone fornecidos para enviar outras mensagens, como

                    alterações nos recursos da “ORVALHO SJ” e ofertas especiais. Se o

                    usuário não deseja receber essas mensagens de e-mail ou telefone,

                    pode optar por não as receber enviando mensagem à central de suporte

                    com a referida solicitação.<br><br>



                    <strong>4. DA SEGURANÇA E LEGISLAÇÃO APLICÁVEL</strong><br><br>



                    <strong>4.1. Do Tratamento de Dados Pessoais:</strong>

                    Sem prejuízo do estabelecido na Política de Privacidade da

                    plataforma, o Usuário fornecerá os seguintes dados para realização

                    do cadastro na “ORVALHO SJ”:

                    a) Nome completo;

                    b) Endereço de e-mail;

                    c) Endereço físico, para recebimento de produtos e outras

                    correspondências;

                    d) Número de CPF;

                    e) Dados bancários (Cartão de Crédito).<br>



                    <strong> 4.2. Do fornecimento de dados pessoais:</strong>

                    As informações são fornecidas via preenchimento de formulário pelo

                    Usuário no ato da contratação do serviço e em demais momentos que

                    sejam necessários para obtenção dos serviços, ficando este

                    responsável pela sua correção, veracidade e atualização.<br>



                    <strong>4.3. Da base legal para tratamento e outras disposições:</strong>

                    O tratamento dos dados pessoais será desenvolvido tomando como base

                    legal principal aquela prevista no Artigo 7º, inciso V da Lei

                    Federal nº 13.709/2018, qual seja: “quando necessário para a

                    execução de contrato ou de procedimentos preliminares relacionados a

                    contrato do qual seja parte o titular, a pedido do titular dos

                    dados”. Para demais detalhes - vide Política de Privacidade ou entre

                    em contato com o Suporte.<br>

                    <strong> 4.3.1. É de exclusiva responsabilidade do Usuário a inserção de</strong>

                    dados pessoais corretos e atualizados, autorizando a “ORVALHO SJ” a

                    tratá-los para fins que atendam às bases legais previstas pelos

                    arts. 7º e 11 da LGPD, especialmente aquela acima elencada.<br>



                    <strong>4.4. Das aplicáveis</strong>

                    As relações jurídicas resultantes do presente contrato são regidas

                    pela legislação brasileira, especialmente pelo Marco Civil da

                    Internet (Lei nº 12.965/2014) e seu Decreto Regulamentador (Decreto

                    nº 8.771/2016), pela Lei Geral de Proteção de Dados (Lei nº

                    13.709/2018), pelo Código de Defesa do Consumidor (Lei nº

                    8.078/1990) e pelo Código Civil (Lei nº 10.406/2002), sem prejuízo

                    de demais normas vigentes.<br><br>



                    <strong> 5. INTERNET</strong><br><br>



                    Para que haja a obtenção das funcionalidades, serviços, produtos e

                    ferramentas da plataforma Orvalho SJ, o Usuário deve garantir uma

                    conexão estável de internet, não sendo a ORVALHO SJ responsável por

                    prover esta conexão e nem responsável por mal funcionamento do

                    aplicativo em razão de má conexão de internet do Usuário.<br><br>



                    <strong> 6. DA UTILIZAÇÃO DA PLATAFORMA</strong><br><br>



                    <strong>6.1. Pedidos</strong>

                    Os pedidos serão realizados somente através da plataforma da Orvalho

                    SJ, não havendo qualquer redirecionamento para outro sítio

                    eletrônico.

                    6.1.1. Dos produtos

                    A Orvalho SJ é uma empresa independente que não tem vínculo com

                    nenhuma das empresas ou marcas que constam no nosso catálogo,

                    estabelecendo-se uma relação estritamente comercial. Ademais, a

                    Orvalho SJ se certifica que todos os perfumes veiculados na

                    plataforma são 100% originais, havendo rígido controle de

                    fornecimento, trabalhando somente com produtores autorizados e com

                    selo "GOLDEN PREMIUM" concedido pela ADIPEC (Associação dos

                    Distribuidores e Importadores de Perfumes, Cosméticos e Similares).<br>



                    <strong> 6.2. Entrega de produtos</strong>

                    A modalidade de entrega dos produtos adquiridos na plataforma será

                    informada no momento da finalização da compra, podendo ser

                    desempenhada via correios ou através de transportadora<br>



                    <strong> 6.3. Limitação geográfica de atendimento</strong>

                    Por questões de logística e infraestrutura limitadas, a Orvalho SJ

                    declara, de pronto, a impossibilidade quanto ao atendimento dos

                    clientes localizados fora do Estado de São Paulo.<br>



                    <strong>6.4. Das devoluções</strong>

                    A Orvalho SJ se limita ao cumprimento do direito de arrependimento

                    estabelecido no Código de Defesa do Consumidor no seu artigo 49,

                    ficando, desde já claro que, solicitações de devolução feitas depois

                    de 7 (sete) dias corridos do recebimento do produto, não terão

                    respaldo jurídico, portanto, não deverão ser atendidas.<br>



                    <strong> 7. DOS SERVIÇOS OFERECIDOS</strong>



                    A Orvalho SJ é uma plataforma digital (e-commerce) que tem como

                    objetivo proporcionar aos assinantes uma jornada ao mundo dos

                    perfumes, ofertando aos seus consumidores planos de assinatura para

                    aquisição de perfumes, nas modalidades mensal e semestral, conforme

                    disposto na aba “Planos” da plataforma.<br>



                    <strong>7.1. Das especificações dos planos</strong>

                    Aspectos como quantidade de produtos e tipos de produtos poderão

                    variar conforme o plano de assinatura contratado. Para verificar os

                    planos ofertados e suas composições, o usuário deve acessar a aba

                    “Planos” da plataforma.<br>



                    <strong>7.2. Dos anúncios</strong>

                    O USUÁRIO declara ter ciência de que a Orvalho SJ poderá expor

                    anúncios, seus ou de terceiros na plataforma.<br>



                    <strong>7.3. Da Capacidade</strong>

                    A utilização da plataforma somente deverá ser operada por Usuários

                    maiores de 18 (dezoito) anos de idade e em plena capacidade civil.

                    Aqueles que não tiverem tais requisitos deverão estar assistidos ou

                    representados por agente capaz conforme o caso.<br>



                    <strong> 7.4. Das variações e mudanças dos produtos e planos de assinatura</strong>

                    Os produtos poderão variar por cor, tamanho, material, entre outras

                    características, não importando na mudança do preço, considerando as

                    especificações de cada plano contratado.<br>



                    <strong>7.5. Da disponibilidade dos produtos</strong>

                    Os produtos poderão variar de acordo com a sua disponibilidade e

                    estoque, podendo haver discrepância entre USUÁRIOS distintos, não

                    importando em substituição por produtos de menor valia ou

                    qualidade,diante da escassez de determinado item.<br>



                    <strong>7.6. Dos produtos</strong>

                    O assinante receberá, no primeiro mês da assinatura, um

                    porta-perfume juntamente com a fragrância do mês em 8ml (oito

                    mililitros). Nos meses subsequentes o assinante receberá a

                    fragrância do mês, apenas, observados os detalhes de cada plano

                    contratado.<br><br>



                    <strong>8. PLANO E PAGAMENTO</strong><br><br>

                    A abertura de conta se dá com a assinatura feita na própria

                    plataforma constando todos os dados necessários, conferindo ao

                    assinante/USUÁRIO acesso a todas as funcionalidades, serviços e

                    ferramentas da plataforma Orvalho SJ.<br>



                    <strong>8.1. Planos de assinatura</strong>

                    A assinatura da plataforma para os USUÁRIOS se dará através da

                    contratação de um plano de assinatura, no qual é cobrado mensalidade

                    ou semestralidade paga para manutenção do plano.<br>



                    <strong> 8.2. Cancelamento da assinatura:</strong>

                    O cancelamento poderá ser feito por solicitação expressa do USUÁRIO

                    e, se for o caso, por iniciativa da plataforma pelo não cumprimento

                    das regras estabelecidas<br>

                    <strong>8.2.1.</strong> O Cancelamento é operado através de e-mail enviado à Central

                    de Suporte no endereço contato@orvalhosj.com.<br>

                    <strong>8.2.2.</strong> Não havendo cancelamento tempestivo (vide cláusula 8.2.4.) da

                    assinatura, o Usuário autoriza a Orvalho SJ a renovar e cobrar o

                    preço do plano usando a sua Forma de pagamento escolhida.<br>

                    <strong> 8.2.3. </strong>Com o cancelamento, a assinatura será encerrada. O Status do

                    plano contratado poderá ser verificado na tela de perfil do Usuário

                    ou em outra aba acessível dentro da plataforma. <br>

                    <strong> 8.2.4.</strong> As solicitações de cancelamento do plano mensal poderão ser

                    operadas em até 14 (quatorze) dias antes da cobrança seguinte, sem

                    custos.<br>

                    <strong> 8.2.5.</strong> As solicitações de cancelamento do plano semestral poderão

                    ser operadas a qualquer tempo, mas mediante pagamento de multa por

                    rescisão antecipada em 2% calculada sobre o total do valor de

                    contrato.<br>



                    <strong>8.3. Ajuste no valor da assinatura</strong>

                    Os valores de assinatura poderão ser revisados periodicamente para

                    melhor adequação ao contínuo aprimoramento dos serviços,

                    ferramentas, funcionalidades e acessos da plataforma ORVALHO SJ, o

                    que será sempre comunicado previamente ao Usuário através dos

                    endereços/telefones fornecidos ou endereço de email, ou até mesmo em

                    tela apresentada na plataforma após o login.<br>



                    <strong> 8.3.1.</strong> O valor da anuidade sofrerá também reajuste monetário na base

                    do Índice Geral de Preços do Mercado (IGP-M), publicado pela

                    Fundação Getúlio Vargas, ou outro índice equivalente aplicável ao

                    serviço<br>



                    <strong>8.4. Dos dados para pagamento</strong>

                    Na contratação de determinado serviço ou produto, a plataforma

                    poderá solicitar as informações financeiras do usuário, como CPF,

                    endereço de cobrança e dados de cartões. Ao inserir referidos dados

                    o usuário concorda que sejam cobrados, de acordo com a forma de

                    pagamento que venha a ser escolhida, os preços então vigentes e

                    informados quando da contratação. Referidos dados financeiros

                    poderão ser armazenadas para facilitar acessos e contratações

                    futuras.<br><br>



                    <strong>9. DO BLOQUEIO</strong> <br><br>



                    O não cumprimento das regras estabelecidas na Cláusula 12 deste

                    termo, e demais obrigações constituídas e inadimplidas pelo USUÁRIO

                    com a Plataforma, sobretudo falta de pagamento de valor do plano,

                    poderão implicar no bloqueio temporário e ou permanente dependendo

                    do grau (a critério da plataforma).<br>



                    <strong>9.1. Dever de confidencialidade</strong>

                    O Usuário se compromete em manter o sigilo e confidencialidade de

                    suas informações de registro, sobretudo senhas, logins e demais

                    dados de acesso, devendo notificar a plataforma sempre que houver

                    suspeita de vazamento de informações ou acessos não autorizados.<br><br>



                    <strong>10. REEMBOLSO</strong> <br><br>

                    Não será operado qualquer reembolso por pagamento realizado à

                    Orvalho SJ, tampouco oferecerá créditos ou devoluções por períodos

                    de assinatura utilizados parcialmente ou não desfrutados,

                    reservando-se ao direito de reembolsar conforme somente às

                    disposições legais.<br>



                    <strong>10.1. Casos de cancelamento</strong>

                    Com o pedido de cancelamento da assinatura, será cessado o acesso do

                    USUÁRIO à Plataforma de forma imediata, sem prejuízo de cobranças

                    vencidas e não pagas.<br><br>



                    <strong>11.CUPOM DE DESCONTO</strong><br><br>

                    A Orvalho SJ poderá ofertar Cupons de Descontos para aquisição de

                    plano(s) de assinatura da plataforma. O Usuário que obtiver o cupom

                    de desconto deverá utilizá-lo apenas 01 (uma) vez, sendo este

                    intransferível, além de dever observar as regras pertinentes a cada

                    cupom conforme for o caso.<br><br>





                    <strong> 12. DAS CONCORDÂNCIAS</strong><br><br>

                    O USUÁRIO, no aceite do presente termo, concorda em:<br>

                    <strong>a)</strong> Não descumprir as determinações deste termo de uso e política de

                    privacidade;<br>

                    <strong> b)</strong> Não fraudar terceiros através da obtenção dos serviços, produtos,

                    e funcionalidades da plataforma;<br>

                    <strong>c) </strong>Não divulgar conteúdos abusivos, difamatórios ou caluniosos

                    envolvendo a plataforma;<br>

                    <strong>d)</strong> Não transmitir conteúdo que não pertence ao Usuário ou que ele

                    não tenha direito de publicar ou distribuir;<br>

                    <strong>e)</strong> Acessar a plataforma somente mediante autorização, jamais

                    ingressando no aplicativo por meio de práticas de “hacking”,

                    “password mining” ou qualquer outro meio fraudulento;<br>

                    <strong>f) </strong>Praticar atos que sejam condizentes com a boa-fé e a moral;<br>

                    <strong>g)</strong> não utilizará a plataforma para executar qualquer tipo de<br>

                    atividade ilegal ou para tomar qualquer ação que afete negativamente

                    o desempenho do sistema;<br>

                    <strong>h)</strong> não transferir a terceiros desautorizados os dados ou informações

                    acessadas;<br><br>



                    <strong>13. SUPORTE</strong><br><br>



                    A Orvalho SJ disponibiliza o correio eletrônico

                    contato@orvalhosj.com para fornecer o devido suporte ao Usuário da

                    plataforma, bem como para eventuais esclarecimentos quanto aos

                    serviços e produtos.<br><br>



                    <strong>14. PENALIDADES</strong><br><br>



                    Além dos casos específicos já previstos no presente instrumento, o

                    descumprimento dos dispositivos deste Termo poderá ensejar:<br>

                    <strong> a)</strong> Bloqueio da conta do Usuário por tempo indeterminado, sem

                    prejuízo de demais ações a nível judicial cabíveis.<br>

                    <strong> b)</strong> Suspensão da conta do Usuário de forma imediata<br>

                    <strong> c)</strong> Cancelamento da conta do Usuário;<br><br>



                    <strong>14.1. Demais consequências</strong>

                    Nos casos de suspensão do acesso à conta do usuário, preferências e

                    conteúdos relacionados aos cadastrados em questão serão bloqueados

                    definitivamente e nenhuma alteração poderá ser realizada nos dados

                    cadastrais, dados de pagamento ou nos conteúdos obtidos, tampouco

                    poderá ser feito qualquer resgate de conteúdo na respectiva conta.<br><br>



                    <strong>14.2. Outros bloqueios</strong>

                    Nos casos de bloqueio a conta do cadastro do usuário, todos os

                    conteúdos da plataforma serão automaticamente bloqueados, não

                    assistindo ao USUÁRIO, por essa razão, qualquer direito de

                    indenização ou ressarcimento.<br><br>



                    <strong>15. DA PROPRIEDADE INTELECTUAL E DOS DIREITOS AUTORAIS</strong><br><br>



                    <strong>15.1.</strong> O Usuário tem plena ciência de que a propriedade intelectual

                    dos serviços prestados são exclusivos da Orvalho SJ e de qualquer

                    empresa do mesmo grupo econômico, o que abrange tanto a propriedade

                    intelectual e imaterial, e dentro dos moldes e condições

                    estabelecidos pela Orvalho SJ ou empresa do mesmo grupo econômico,

                    pelo que o Usuário consigna sua anuência na condição posta,

                    caracterizando-se como grave infração contratual o seu não

                    cumprimento, acarretando na rescisão contratual por justo motivo,

                    bem como devido pelo Usuário à Orvalho SJ o pagamento correspondente

                    ao seu uso indevido, nos termos da legislação civil, além de

                    responder criminalmente e/ou perdas e danos conforme o caso.<br>



                    <strong>15.2.</strong> O presente Termo de Uso concede aos usuários uma licença não

                    exclusiva, intransferível e não licenciável, para acessar e fazer

                    uso da plataforma e dos serviços e produtos por ela

                    disponibilizados.<br>



                    <strong>15.3.</strong> A estrutura do site ou aplicativo, as marcas, logotipos, nomes

                    comerciais, layouts, gráficos e design de interface, imagens,

                    ilustrações, fotografias, apresentações, vídeos, conteúdos escritos

                    e de som e áudio, programas de computador, banco de dados, arquivos

                    de transmissão e quaisquer outras informações, observados os termos

                    da Lei da Propriedade Industrial (Lei nº 9.279/96) e Lei de Direitos

                    Autorais (Lei nº 9.610/98), estão devidamente reservados, para uso

                    exclusivo da ORVALHO COMÉRCIO DE PERFUMES LTDA.<br><br>



                    <strong>16. ALTERAÇÕES NOS TERMOS DE USO</strong> <br><br>

                    A ORVALHO SJ poderá alterar, a qualquer tempo, este Termo de Uso,

                    visando seu aprimoramento e melhoria.<br><br>



                    <strong> 17. CONDIÇÕES GERAIS</strong><br><br>



                    <strong>17.1. Instabilidades no Sistema</strong>

                    O Usuário expressa sua plena ciência de que poderá se deparar com

                    eventuais instabilidades do sistema, e que este sofrerá ajustes e

                    alterações diárias sem a necessidade de prévias comunicações, não se

                    responsabilizando a ORVALHO SJ por eventuais danos disto advindos.<br><br>



                    <strong>17.2. Eleição de Foro</strong><br><br>

                    Fica eleito o foro de Barueri/SP para dirimir quaisquer

                    controvérsias acerca da utilização da Ferramenta ou destes Termos de

                    Uso.



                    <strong>17.3. Das Nulidades</strong> <br>

                    Na hipótese de determinada disposição ou disposições desses Termos

                    de uso ser consideradas inválidas, ilegais ou não aplicáveis, a

                    validade, legalidade e aplicabilidade das demais disposições devem

                    permanecer em pleno vigor.<br><br><br><br>



                </p>





            </div>













            <!-- Start of Footer -->

            <footer class="footer footer-dark

                                appear-animate" data-animation-options="{

                                'name': 'fadeIn'

                                }" style="margin-top: 40px;">



                <div class="footer-newsletter bg-primary">

                    <div class="container">

                        <div class="row

                                            justify-content-center

                                            align-items-center">

                            <div class="col-xl-5 col-lg-6">

                                <div class="icon-box

                                                    icon-box-side

                                                    text-white">

                                    <div class="icon-box-icon

                                                        d-inline-flex">

                                                        <i class="fas fa-envelope ml-sm-0 ml-lg-4"></i>


                                    </div>

                                    <div class="icon-box-content">

                                        <h4 class="icon-box-title

                                                            text-white1

                                                            text-uppercase

                                                            font-weight-bold">Receba

                                            todas as

                                            novidade em

                                            tempo real

                                        </h4>

                                        <p class="text-white1">Fique

                                            por dentro

                                            do mundo das

                                            fragrâncias.

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-7 col-lg-6

                                                col-md-9 mt-4

                                                mt-lg-0">

                                <form action="#" method="get" class="input-wrapper

                                                    input-wrapper-inline

                                                    input-wrapper-rounded">

                                    <input type="email" class="form-control

                                                        mr-2

                                                        bg-white" name="email" id="email" placeholder="Email" />

                                    <button class="btn

                                                        btn-dark

                                                        btn-rounded" type="submit">Inscreva-se<i
                                            class="w-icon-long-arrow-right"></i></button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="container-fluid d-sm-show d-xs-show">

                    <div class="footer-top">

                        <div class="row">



                            <div style="margin-left: 10%;" class="col-sm-3 col-lg-4">

                                <div class="widget">

                                    <a style="margin-top: -60px; margin-bottom: 20px;" href="index.php"
                                        class="logo-footer">

                                        <img src="assets/images/demos/demo10/footer-logo.png" alt="logo-footer"
                                            width="144" height="45" />

                                    </a>

                                    <h3 class="widget-title">Institucional</h3>

                                    <ul class="widget-body">

                                        <li><a href="contact-us.php">Sobre

                                                Nós</a></li>

                                        <li><a href="contact-us.php">FAQ</a></li>

                                        <li><a href="contact-us.php">Fale

                                                Conosco</a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-sm-3 col-lg-4">

                                <div class="widget">

                                    <h4 class="widget-title">Minha

                                        Conta</h4>

                                    <ul class="widget-body">

                                        <li><a href="login.php">Cadastre-se</a></li>

                                        <li><a href="login.php">Entrar</a></li>

                                        <li><a href="contact-us.php">Ajuda</a></li>

                                        <li><a href="#">Política

                                                de

                                                Privacidade</a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-sm-2 col-lg-3">

                                <div class="widget">

                                    <h4 class="widget-title">Serviços

                                        ao Cliente</h4>

                                    <ul class="widget-body">

                                        <li><a href="contact-us.php">Métodos

                                                de Pagamento</a></li>

                                        <li><a href="contact-us.php">Central

                                                de Suporte</a></li>

                                        <li><a href="contact-us.php">Envio</a></li>

                                        <li><a href="contact-us.php">Termos

                                                e Condições</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>





                <!-- End of Footer -->

        </div>

</div>

<!-- End of Page-wrapper -->

<!-- Start of Sticky Footer -->

<div class="sticky-footer sticky-content fix-bottom">

    <a href="index.php" class="sticky-link active">

        <i class="w-icon-home"></i>

        <p>Início</p>

    </a>

    <a href="shop-banner-sidebar.html" class="sticky-link">

        <i class="w-icon-category"></i>

        <p>Catálogo</p>

    </a>

    <a href="my-account.html" class="sticky-link">

        <i class="w-icon-account"></i>

        <p>Account</p>

    </a>

    <div class="cart-dropdown dir-up">

        <a href="cart.html" class="sticky-link">

            <i class="w-icon-cart"></i>

            <p>Cart</p>

        </a>

        <div class="dropdown-box">

            <div class="products">

                <div class="product product-cart">

                    <div class="product-detail">

                        <h3 class="product-name">

                            <a>Beige knitted elas<br>tic

                                runner shoes</a>

                        </h3>

                        <div class="price-box">

                            <span class="product-quantity">1</span>

                            <span class="product-price">$25.68</span>

                        </div>

                    </div>

                    <figure class="product-media">

                        <a>

                            <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />

                        </a>

                    </figure>

                    <button class="btn btn-link btn-close" aria-label="button">

                        <i class="fas fa-times"></i>

                    </button>

                </div>



                <div class="product product-cart">

                    <div class="product-detail">

                        <h3 class="product-name">

                            <a>Blue utility pina<br>fore

                                denim dress</a>

                        </h3>

                        <div class="price-box">

                            <span class="product-quantity">1</span>

                            <span class="product-price">$32.99</span>

                        </div>

                    </div>

                    <figure class="product-media">

                        <a>

                            <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />

                        </a>

                    </figure>

                    <button class="btn btn-link btn-close" aria-label="button">

                        <i class="fas fa-times"></i>

                    </button>

                </div>

            </div>



            <div class="cart-total">

                <label>Subtotal:</label>

                <span class="price">$58.67</span>

            </div>



            <div class="cart-action">

                <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>

                <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>

            </div>

        </div>

        <!-- End of Dropdown Box -->

    </div>



    <div class="header-search hs-toggle dir-up">

        <a href="#" class="search-toggle sticky-link">

            <i class="w-icon-search"></i>

            <p>Search</p>

        </a>

        <form action="#" class="input-wrapper">

            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required />

            <button class="btn btn-search" type="submit">

                <i class="w-icon-search"></i>

            </button>

        </form>

    </div>

</div>

<!-- End of Sticky Footer -->



<!-- Start of Sticky Footer -->

<div class="sticky-footer sticky-content fix-bottom">

    <a href="index.php" class="sticky-link active">

        <i class="w-icon-home"></i>

        <p>Início</p>

    </a>

    <a href="demo10-shop.html" class="sticky-link">

        <i class="w-icon-list"></i>

        <p>Catálogo</p>

    </a>

    <a href="my-account.html" class="sticky-link">

        <i class="w-icon-account"></i>

        <p>Usuário</p>

    </a>

    <div class="cart-dropdown dir-up">

        <a href="wishlist.html" class="sticky-link">

            <i class="w-icon-heart"></i>

            <p>Favoritos</p>

        </a>



        <!-- End of Dropdown Box -->

    </div>



    <div>

        <a href="contact-us.html" class=" sticky-link">

            <i class="w-icon-comments"></i>

            <p>Contato</p>

        </a>



    </div>

</div>

<!-- End of Sticky Footer -->



<!-- Start of Scroll Top -->

<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">

        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
            r="34" style="stroke-dasharray: 16.4198, 400;"></circle>

    </svg> </a>

<!-- End of Scroll Top -->



<!-- Start of Mobile Menu -->

<div class="mobile-menu-wrapper">

    <div class="mobile-menu-overlay"></div>

    <!-- End of .mobile-menu-overlay -->



    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>

    <!-- End of .mobile-menu-close -->



    <div class="mobile-menu-container

                                    scrollable">

        <form action="#" method="get" class="input-wrapper">

            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required />

            <button class="btn btn-search" type="submit">

                <i class="w-icon-search"></i>

            </button>

        </form>

        <!-- End of Search Form -->

        <div class="tab">

            <ul class="nav nav-tabs" role="tablist">

                <li class="nav-item">

                    <a href="#main-menu" class="nav-link active">Main

                        Menu</a>

                </li>

                <li class="nav-item">

                    <a href="#categories" class="nav-link">Categories</a>

                </li>

            </ul>

        </div>

        <div class="tab-content">

            <div class="tab-pane active" id="main-menu">

                <ul class="mobile-menu">

                    <li><a href="index.php">Home</a></li>

                    <li>

                        <a href="shop-banner-sidebar.html">Shop</a>

                        <ul>

                            <li>

                                <a href="#">Shop

                                    Pages</a>

                                <ul>

                                    <li><a href="shop-banner-sidebar.html">Banner

                                            With

                                            Sidebar</a></li>

                                    <li><a href="shop-boxed-banner.html">Boxed

                                            Banner</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Full

                                            Width

                                            Banner</a></li>

                                    <li><a href="shop-horizontal-filter.html">Horizontal

                                            Filter<span class="tip

                                                                            tip-hot">Hot</span></a></li>

                                    <li><a href="shop-off-canvas.html">Off

                                            Canvas

                                            Sidebar<span class="tip

                                                                            tip-new">New</span></a></li>

                                    <li><a href="shop-infinite-scroll.html">Infinite

                                            Ajax

                                            Scroll</a></li>

                                    <li><a href="shop-right-sidebar.html">Right

                                            Sidebar</a></li>

                                    <li><a href="shop-both-sidebar.html">Both

                                            Sidebar</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Shop

                                    Layouts</a>

                                <ul>

                                    <li><a href="shop-grid-3cols.html">3

                                            Columns

                                            Mode</a></li>

                                    <li><a href="shop-grid-4cols.html">4

                                            Columns

                                            Mode</a></li>

                                    <li><a href="shop-grid-5cols.html">5

                                            Columns

                                            Mode</a></li>

                                    <li><a href="shop-grid-6cols.html">6

                                            Columns

                                            Mode</a></li>

                                    <li><a href="shop-grid-7cols.html">7

                                            Columns

                                            Mode</a></li>

                                    <li><a href="shop-grid-8cols.html">8

                                            Columns

                                            Mode</a></li>

                                    <li><a href="shop-list.html">List

                                            Mode</a></li>

                                    <li><a href="shop-list-sidebar.html">List

                                            Mode

                                            With

                                            Sidebar</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Product

                                    Pages</a>

                                <ul>

                                    <li><a href="product-variable.html">Variable

                                            Product</a></li>

                                    <li><a href="product-featured.html">Featured

                                            &amp;

                                            Sale</a></li>

                                    <li><a href="product-accordion.html">Data

                                            In

                                            Accordion</a></li>

                                    <li><a href="product-section.html">Data

                                            In

                                            Sections</a></li>

                                    <li><a href="product-swatch.html">Image

                                            Swatch</a></li>

                                    <li><a href="product-extended.html">Extended

                                            Info</a>

                                    </li>

                                    <li><a href="product-without-sidebar.html">Without

                                            Sidebar</a></li>

                                    <li><a href="product-video.html">360<sup>o</sup>

                                            &amp;

                                            Video<span class="tip

                                                                            tip-new">New</span></a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Product

                                    Layouts</a>

                                <ul>

                                    <li><a>Default<span class="tip

                                                                            tip-hot">Hot</span></a></li>

                                    <li><a href="product-vertical.html">Vertical

                                            Thumbs</a></li>

                                    <li><a href="product-grid.html">Grid

                                            Images</a></li>

                                    <li><a href="product-masonry.html">Masonry</a></li>

                                    <li><a href="product-gallery.html">Gallery</a></li>

                                    <li><a href="product-sticky-info.html">Sticky

                                            Info</a></li>

                                    <li><a href="product-sticky-thumb.html">Sticky

                                            Thumbs</a></li>

                                    <li><a href="product-sticky-both.html">Sticky

                                            Both</a></li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="vendor-dokan-store.html">Vendor</a>

                        <ul>

                            <li>

                                <a href="#">Store

                                    Listing</a>

                                <ul>

                                    <li><a href="vendor-dokan-store-list.html">Store

                                            listing

                                            1</a></li>

                                    <li><a href="vendor-wcfm-store-list.html">Store

                                            listing

                                            2</a></li>

                                    <li><a href="vendor-wcmp-store-list.html">Store

                                            listing

                                            3</a></li>

                                    <li><a href="vendor-wc-store-list.html">Store

                                            listing

                                            4</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Vendor

                                    Store</a>

                                <ul>

                                    <li><a href="vendor-dokan-store.html">Vendor

                                            Store

                                            1</a></li>

                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor

                                            Store

                                            2</a></li>

                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor

                                            Store

                                            3</a></li>

                                    <li><a href="vendor-wc-store-product-grid.html">Vendor

                                            Store

                                            4</a></li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="blog.html">Blog</a>

                        <ul>

                            <li><a href="blog.html">Classic</a></li>

                            <li><a href="blog-listing.html">Listing</a></li>

                            <li>

                                <a href="blog-grid.html">Grid</a>

                                <ul>

                                    <li><a href="blog-grid-2cols.html">Grid

                                            2

                                            columns</a></li>

                                    <li><a href="blog-grid-3cols.html">Grid

                                            3

                                            columns</a></li>

                                    <li><a href="blog-grid-4cols.html">Grid

                                            4

                                            columns</a></li>

                                    <li><a href="blog-grid-sidebar.html">Grid

                                            sidebar</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Masonry</a>

                                <ul>

                                    <li><a href="blog-masonry-2cols.html">Masonry

                                            2

                                            columns</a></li>

                                    <li><a href="blog-masonry-3cols.html">Masonry

                                            3

                                            columns</a></li>

                                    <li><a href="blog-masonry-4cols.html">Masonry

                                            4

                                            columns</a></li>

                                    <li><a href="blog-masonry-sidebar.html">Masonry

                                            sidebar</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Mask</a>

                                <ul>

                                    <li><a href="blog-mask-grid.html">Blog

                                            mask

                                            grid</a></li>

                                    <li><a href="blog-mask-masonry.html">Blog

                                            mask

                                            masonry</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="post-single.html">Single

                                    Post</a>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="contact-us.html">Pages</a>

                        <ul>



                            <li><a href="contact-us.html">About

                                    Us</a></li>

                            <li><a href="become-a-vendor.html">Become

                                    A

                                    Vendor</a></li>

                            <li><a href="contact-us.html">Contact

                                    Us</a></li>

                            <li><a href="login.html">Login</a></li>

                            <li><a href="faq.html">FAQs</a></li>

                            <li><a href="error-404.html">Error

                                    404</a></li>

                            <li><a href="coming-soon.html">Coming

                                    Soon</a></li>

                            <li><a href="wishlist.html">Wishlist</a></li>

                            <li><a href="cart.html">Cart</a></li>

                            <li><a href="checkout.html">Checkout</a></li>

                            <li><a href="my-account.html">My

                                    Account</a></li>

                        </ul>

                    </li>

                    <li>

                        <a href="elements.html">Elements</a>

                        <ul>

                            <li><a href="element-products.html">Products</a></li>

                            <li><a href="element-titles.html">Titles</a></li>

                            <li><a href="element-typography.html">Typography</a></li>

                            <li><a href="element-categories.html">Product

                                    Category</a></li>

                            <li><a href="element-buttons.html">Buttons</a></li>

                            <li><a href="element-accordions.html">Accordions</a></li>

                            <li><a href="element-alerts.html">Alert

                                    &amp;

                                    Notification</a></li>

                            <li><a href="element-tabs.html">Tabs</a></li>

                            <li><a href="element-testimonials.html">Testimonials</a></li>

                            <li><a href="element-blog-posts.html">Blog

                                    Posts</a></li>

                            <li><a href="element-instagrams.html">Instagrams</a></li>

                            <li><a href="element-cta.html">Call

                                    to

                                    Action</a></li>

                            <li><a href="element-vendors.html">Vendors</a></li>

                            <li><a href="element-icon-boxes.html">Icon

                                    Boxes</a></li>

                            <li><a href="element-icons.html">Icons</a></li>

                        </ul>

                    </li>

                </ul>

            </div>

            <div class="tab-pane" id="categories">

                <ul class="mobile-menu">

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-tshirt2"></i>Fashion

                        </a>

                        <ul>

                            <li>

                                <a href="#">Women</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">New

                                            Arrivals</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Best

                                            Sellers</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Jewlery

                                            &

                                            Watches</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Men</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">New

                                            Arrivals</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Best

                                            Sellers</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Jewlery

                                            &

                                            Watches</a></li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-home"></i>Home

                            & Garden

                        </a>

                        <ul>

                            <li>

                                <a href="#">Bedroom</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Beds,

                                            Frames

                                            &

                                            Bases</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Dressers</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Nightstands</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Kid's

                                            Beds

                                            &

                                            Headboards</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Armoires</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Living

                                    Room</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Coffee

                                            Tables</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Chairs</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Tables</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Futons

                                            &

                                            Sofa

                                            Beds</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Cabinets

                                            &

                                            Chests</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Office</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Office

                                            Chairs</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Desks</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>

                                    <li><a href="shop-fullwidth-banner.html">File

                                            Cabinets</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Breakroom

                                            Tables</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Kitchen

                                    & Dining</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Dining

                                            Sets</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Kitchen

                                            Storage

                                            Cabinets</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Bashers

                                            Racks</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Dining

                                            Chairs</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Dining

                                            Room

                                            Tables</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Bar

                                            Stools</a></li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-electronics"></i>Electronics

                        </a>

                        <ul>

                            <li>

                                <a href="#">Laptops

                                    &amp;

                                    Computers</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Desktop

                                            Computers</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Monitors</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Laptops</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Hard

                                            Drives

                                            &amp;

                                            Storage</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Computer

                                            Accessories</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">TV

                                    &amp; Video</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">TVs</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Home

                                            Audio

                                            Speakers</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Projectors</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Media

                                            Streaming

                                            Devices</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Digital

                                    Cameras</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Digital

                                            SLR

                                            Cameras</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Sports

                                            &

                                            Action

                                            Cameras</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Camera

                                            Lenses</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Photo

                                            Printer</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Digital

                                            Memory

                                            Cards</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Cell

                                    Phones</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Carrier

                                            Phones</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Unlocked

                                            Phones</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Phone

                                            &

                                            Cellphone

                                            Cases</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Cellphone

                                            Chargers</a></li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-furniture"></i>Furniture

                        </a>

                        <ul>

                            <li>

                                <a href="#">Furniture</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Sofas

                                            &

                                            Couches</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Bed

                                            Frames</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Beside

                                            Tables</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Dressing

                                            Tables</a>

                                    </li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Lighting</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Light

                                            Bulbs</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Lamps</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Celling

                                            Lights</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Wall

                                            Lights</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Bathroom

                                            Lighting</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Home

                                    Accessories</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Decorative

                                            Accessories</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Candals

                                            &

                                            Holders</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Home

                                            Fragrance</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Clocks</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="#">Garden

                                    & Outdoors</a>

                                <ul>

                                    <li><a href="shop-fullwidth-banner.html">Garden

                                            Furniture</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Lawn

                                            Mowers</a>

                                    </li>

                                    <li><a href="shop-fullwidth-banner.html">Pressure

                                            Washers</a></li>

                                    <li><a href="shop-fullwidth-banner.html">All

                                            Garden

                                            Tools</a></li>

                                    <li><a href="shop-fullwidth-banner.html">Outdoor

                                            Dining</a>

                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-heartbeat"></i>Healthy

                            &

                            Beauty

                        </a>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-gift"></i>Gift

                            Ideas

                        </a>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-gamepad"></i>Toy

                            & Games

                        </a>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-ice-cream"></i>Cooking

                        </a>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-ios"></i>Smart

                            Phones

                        </a>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-camera"></i>Cameras

                            & Photo

                        </a>

                    </li>

                    <li>

                        <a href="shop-fullwidth-banner.html">

                            <i class="w-icon-ruby"></i>Accessories

                        </a>

                    </li>

                    <li>

                        <a href="shop-banner-sidebar.html" class="font-weight-bold

                                                        text-primary

                                                        text-uppercase

                                                        ls-25">

                            View All Categories<i class="w-icon-angle-right"></i>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- End of Mobile Menu -->



<!-- Start of Newsletter popup -->



<!-- End of Newsletter popup -->



<!-- Start of Quick View -->



<!-- End of Quick view -->



<!-- Plugin JS File -->

<script src="assets/vendor/jquery/jquery.min.js"></script>

<script src="assets/vendor/floating-parallax/parallax.min.js"></script>

<script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>

<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>







<!-- Main JS -->

<script src="assets/js/main.min.js"></script>

</body>