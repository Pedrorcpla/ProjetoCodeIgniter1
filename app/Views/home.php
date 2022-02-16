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
    font-family: Futura-Bold;
    }
    body{
        min-height: 100vh;
        background: rgb(0, 0, 0);
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
            transform: translateY(-30px);
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
        font-family: Futura-Light;
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
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Seja bem vindo!</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#">Features</a>
                            <a class="nav-link" href="#">Pricing</a>
                            <a class="nav-link disabled">Disabled</a>
                        </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Fim Header -->
        <!-- Inicio do corpo da página -->
        <div class="row">
            <div class="col">
                
            </div>
        </div>
        <div class="container" id="cards">
            <div class="box">
                <span></span>
                <div class="content">
                    <h2>Sobre nós</h2>
                    <p>- Por que escolhemos esse nome?<br>- Qual nossa área de atuação?<br>- Desde quando estamos no mercado?<br>- Qual é nosso objetivo?</p>
                    <a href="#sobre">Veja Mais</a>
                </div>
            </div>
            <div class="box">
                <span></span>
                <div class="content">
                    <h2>Serviços</h2>
                    <p>A equipe Jungle Office é composta por diagramadores, ilustradores, designers e desenvolvedores web.<br> Venha conferir o que podemos fazer por você!</p>
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
        <div class="row">
            <div class="col">
                <h3>Todos os direitos reservados</h3>
            </div>
        </div>
        
        <!-- Final do corpo da página -->
        <!-- Inicio do footer -->
        
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!-- Final do footer -->