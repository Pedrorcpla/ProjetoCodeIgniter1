<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        min-height: 100vh;
        background: rgb(0, 0, 0);
    }
    .header{
        position: absolute;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 30px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 10000;
        border-bottom: 1px solid #4fff034b;
        background: rgb(0, 0, 0);
    }
    .header .logo{
        color: #4dff03;
        font-weight: 700;
        font-size: 2em;
        text-decoration: none;
    }
    .header ul{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .header ul li{
        list-style: none;
        margin-left: 20px;
    }
    .header ul li a{
        text-decoration: none;
        padding: 6px 15px;
        color: white;
        font-size: 1.5em;
        border-radius: 20px;
        transition: 0.3s;
        letter-spacing: 0.03em;
    }
    .header ul li a:hover{
        color: #4dff03;
        box-shadow: 0 0 20px #4fff0383;
    }
    #menu{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        height: 80vh;
        padding: 40px 0;
    }
    #menu .imgBx{
        position: relative;
        width: 100vw;
        opacity: 1;
        top: -10vh;
        height: 90vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 2s;
    }
    .blur{
        filter: blur(20px);
        opacity: 0.4;
    }
    #menu .imgBx h2{
        position: absolute;
        color: #4dff03;
        font-size: 15em;
    }
    #menu .imgBx p{
        position: absolute;
        margin-top: 50vh;
        margin-right: -42.5vw;
        color: #fff;
        font-size: 8em;
    }
    .mais{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        height: 5vh;
        padding: 40px 0;
    }
    .mais a{
        color: #4dff03;
        font-size: 2em;
        animation: animate2 2s ease infinite;
    }

    @keyframes animate2 {
        0%,100%{
            transform: translateY(5px);
        }
        50%{
            transform: translateY(-5px);
        }
    }

    @media only screen and (max-width: 1000px) {
        .header{
            width: 100%;
            padding: 30px 50px;
        }
        .header .logo{
            font-weight: 700;
            font-size: 3em;
        }
        .header ul li{
            margin-left: 20px;
        }
        .header ul li a{
            padding: 6px 10px;
            font-size: 1.5em;
            border-radius: 20px;
        }
        #menu{
            height: 80vh;
            padding: 20px 0;
        }
        #menu .imgBx{
            width: 100vw;
            top: 0;
            height: 90vh;
        }
        #menu .imgBx h2{
            font-size: 12.5em;
        }
        #menu .imgBx p{
            margin-top: 34vh;
            margin-right: -50vw;
            font-size: 5em;
        }
    }
    @media only screen and (max-width: 650px) {
        .container .box .content h2{
            font-size: 20px;
        }
        .container .box .content p{
            font-size: 20px;
        }
        .container .box .content a{
            font-size: 20px;
        }
        .container .box .content h2{
            font-size: 1em;
        }
        .container .box .content p{
            font-size: 0.5em;
        }
        .container .box .content a{
            font-size: 1em;
        }
        .header{
            width: 100%;
            padding: 30px 40px;
        }
        .header .logo{
            font-weight: 700;
            font-size: 1.2em;
        }
        .header ul li{
            margin-left: 15px;
        }
        .header ul li a{
            padding: 6px 8px;
            font-size: 1em;
            border-radius: 20px;
        }
        #menu{
            height: 80vh;
            padding: 20px 0;
        }
        #menu .imgBx{
            width: 100vw;
            top: 0;
            height: 90vh;
        }
        .blur{
            filter: blur(20px);
        }
        #menu .imgBx h2{
            font-size: 8em;
        }
        #menu .imgBx p{
            margin-top: 24vh;
            margin-right: -60vw;
            font-size: 3.5em;
        }
    }

    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 40px 0;
        margin-top: 5%;
    }
    .container .box{
        position: relative;
        width: 320px;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5%;
        margin-left: 5%;
        margin-bottom: 10%;
        transition: 0.5s;
    }
    .container .box::before{
        content: '';
        position: absolute;
        top: 0;
        left: 50px;
        width: 50%;
        height: 100%;
        background: #fff;
        border-radius: 8px;
        transform: skewX(15deg);
        transition: 0.5s;
    }
    .container .box::after{
        content: '';
        position: absolute;
        top: 0;
        left: 50px;
        width: 50%;
        height: 100%;
        background: #fff;
        border-radius: 8px;
        transform: skewX(15deg);
        transition: 0.5s;
        filter: blur(20px);
        opacity: 0.4;
    }
    .container .box:hover:before,
    .container .box:hover:after{
        transform: skewX(0deg);
        left: 20px;
        width: calc(100% - 90px);
    }
    .container .box:nth-child(1):before,
    .container .box:nth-child(1):after{
        background: #4dff03;
    }
    .container .box:nth-child(2):before,
    .container .box:nth-child(2):after{
        background: #00d0ff;
    }
    .container .box:nth-child(3):before,
    .container .box:nth-child(3):after{
        background: #ffbc00;
    }
    .container .box span{
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 50;
        pointer-events: none;
    }
    .container .box span::before{
        content:"";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 8px;
        background: rgba(50, 50, 50, 0.1);
        backdrop-filter: blur(10px);
        opacity: 0;
        transition: 0.5s;
        animation: animate 2s ease-in-out infinite;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5)
    }
    .container .box:hover span::before{
        top: -50px;
        left: 50px;
        width: 100px;
        height: 100px;
        opacity: 1;
    }
    .container .box span::after{
        content:"";
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border-radius: 8px;
        background: rgba(50, 50, 50, 0.1);
        backdrop-filter: blur(10px);
        opacity: 0;
        transition: 0.5s;
        animation: animate 2s ease-in-out infinite;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        animation-delay: -1s;
    }
    .container .box:hover span::after{
        bottom: -50px;
        right: 50px;
        width: 100px;
        height: 100px;
        opacity: 1;
    }
    @keyframes animate{
        0%,100%{
            transform: translateY(-10px);
        }
        50%{
            transform: translateY(-40px);
        }
    }
    .container .box .content{
        position: relative;
        left: 0;
        padding: 20px 40px;
        background: rgba(50, 50, 50, 0.15);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        border-radius: 8px;
        backdrop-filter: blur(30px);
        z-index: 1;
        transition: 0.5s;
        color: #fff;
    }
    .container .box:hover .content{
        left: -25px;
        padding: 50px 40px;
    }
    .container .box .content h2{
    font-size: 2em;
    color: #fff;
        margin-bottom: 10px;
    }
    .container .box .content p{
        font-size: 1.5em;
        margin-bottom: 10px;
        line-height: 1.4em;
    }
    .container .box .content a{
        display: inline-block;
        font-size: 1.1em;
        color: #111;
        background: #fff;
        padding: 10px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 700;
        margin-top: 5px;
    }

    .infos{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 40px 0;
    }
    .infos .content{
        position: relative;
        left: 0px;
        width: 90vw;
        min-height: 50vh;
        padding: 20px 40px;
        background: rgba(50, 50, 50, 0.15);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        border-radius: 8px;
        backdrop-filter: blur(10px);
        z-index: 1;
        transition: 0.5s;
        color: #fff;
    }
    #sobre h2,
    #sobre span{
        color:#4dff03;
    }
    #servicos h2,
    #servicos span{
        color:#00d0ff;
    }
    #clientes h2,
    #clientes span{
        color:#ffbc00;
    }
    .infos .content p{
        font-size: 1.4em;
        letter-spacing: 2px;
    }
    .infos .content img{
        width: 20vw;
        margin: 0 2%;
    }
    .infos .content .row{
        margin-top: 2%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .rodape{
        margin-top: 2%;
        margin-bottom: 2%;
        border-top: 1px solid #4fff034b;
        background: rgba(50, 50, 50, 0.15);
        min-height: 20vh;
        display: flex;
        color: white;
    }
    .rodape .left{
        margin: 2% 5%;
        min-width: 50vw;
    }
    .fa-whatsapp{
        color:#4dff03;
        margin-right: 3%;
    }
    .fa-envelope{
        color:#00d0ff;
        margin-right: 3%;
    }
    .fa-instagram{
        color:#ffbc00;
        margin-right: 3%;
    }
    .rodape .left h3{
        font-size:1.3em;
        margin-bottom: 5%; 
    }
    .rodape .left li{
        font-size: 1.3em;
        list-style: none;
        margin-top: 3%;
        letter-spacing: 0.1em;
    }
    .rodape .left a{
        text-decoration: none;
        color: white;
    }
    .right{
        min-width: 20vw;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1% 0;
        margin-bottom: 1%;
    }
    .right p{
        color: gray;
        letter-spacing: 0.1em;
        font-size: 1.5em;
    }
    .right span{
        color:#4dff03;
    }
</style>
<div class="infos" id="sobre">
    <div class="content">
        <h2>SOBRE NÓS...</h2>
        <br>
        <p><span>Jungle Office</span>:<br><br>- Por que escolhemos esse nome?<br>- Qual área de atuação?<br>- Desde quando estamos no mercado?<br>- Qual é nosso objetivo?<br><br>Bem, vamos lá!!!<br><br>A <span>Jungle Office</span> recebeu esse nome por causa do amor que temos pela natureza e por nosso trabalho, sendo que nosso escritório está localizado bem no meio de uma reserva ecológica no extremo sul do estado de São Paulo, cercado por uma floresta nativa da Mata Atlântica. Com o desejo de alcançar clientes de qualquer lugar escolhemos um nome que todos entenderiam, numa linguagem universal.<br><br>A <span>Jungle Office</span> é um escritório de tecnologia voltado para área de design visual, com foco em diagramação, ilustração, design gráfico, modelagem e impressão 3D. Visto que esse mercado está em constante alteração, acompanhamos as tendencias, nos esforçando ao máximo para nos mantermos atualizados e na tangencia do mercado.<br><br>A <span>Jungle Office</span> teve seu início em meados de 2019 com atividades pontuais em arte final para serviços gráficos. Logo na sequência surgiu a oportunidade de iniciarmos com modelagem e impressão 3d e ao mesmo tempo surgiram parcerias que nos estruturaram e nos potencializaram no rigoroso mercado de diagramação. Os fundadores contam com experiência neste ramo desde 1999.<br><br>A equipe <span>Jungle Office</span> trabalha em diferentes áreas da tecnologia e é composta por diagramadores, revisores, ilustradores, designers e desenvolvedores web.<br><br>O objetivo da <span>Jungle Office</span> é suprir seus clientes com soluções rápidas, práticas, com qualidade acima da média e com o melhor custo-benefício. Queremos atender de modo humanizado e personalizado nossos clientes, conscientes de que cada indivíduo tem seus anseios e suas necessidades a serem atendidas.<br><br>Sendo assim, formamos a <span>Jungle Office</span> para atender o mercado com qualidade e serviços competitivos nos segmentos que atendermos.<br><br>Venha ser nosso parceiro e deixe a <span>Jungle Office</span> surpreender você!</p>
    </div> 
</div>