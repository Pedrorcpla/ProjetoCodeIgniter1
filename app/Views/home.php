<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
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
<body>
    <div class="container">
        <!-- Inicio do corpo da página -->
        <div id="menu">
            <div class="imgBx">
                    <h2 class="blur">Pedro</h2>
                    <p class="blur">Tavares</p>
                    <h2>Pedro</h2>
                    <p>Tavares</p>
            </div>
        </div>
        <div class="container" id="cards">
            <div class="box">
                <span></span>
                <div class="content">
                    <h2>Sobre nós</h2>
                    <p>- Por que escolhemos esse nome?<br>- Qual nossa área de atuação?<br>- Desde quando estamos no mercado?<br>- Qual é nosso objetivo?</p>
                    <a href="quemsomos">Veja Mais</a>
                </div>
            </div>
            <div class="box">
                <span></span>
                <div class="content">
                    <h2>Serviços</h2>
                    <p>Tavares é conhecido por fazer programas. Em outras palavras, é um garoto de programa.<br> Venha ver o que ele pode fazer por você!</p>
                    <a href="#servicos">Veja Mais</a>
                </div>
            </div>
            <div class="box">
                <span></span>
                <div class="content">
                    <h2>Clientes</h2>
                    <p>Ao longo de nossa jornada, conquistamos diversos clientes de grande influência no mercado. Veja quem são eles e em quais áreas eles atuam!</p>
                    <a href="#clientes">Veja Mais</a>
                </div>
            </div>
        </div>
        
        <!-- Final do corpo da página -->
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!-- Final do footer -->