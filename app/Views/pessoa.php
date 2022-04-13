<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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
        height: 80vh;
        padding: 40px 0;
    }
    #menu h1{
        margin-right: 5%;
    }
</style>
<div id="menu">
    <h1> <?=$title?> </h1>
    <br>
    <?php
        foreach($pessoas as $pessoas_item){
            echo $pessoas_item['nome']."<br>";
        }
    ?>
</div>