<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('default_charset', 'utf-8');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            background-image: url(/posto/imagens_home/back_sistema.jpg);
            background-size: cover;
        }

        main {
            background-color: #006FF2;
            margin-top: 5.5%;
            margin-left: 80px;
            margin-right: 80px;
            max-width: 100%;
            border-radius: 4px;
            height: 800px;
        }

        #logo {
            background-color: #F3F3F3;
            height: 80px;
            border-radius: 2px;
        }

        img {

            width: 325px;
            margin-left: -60px;
            margin-top: -89px;
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 50px;
            margin-top: -30px;
            margin-left: 90px;
            color: white;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 50px;
            margin-top: -60px;
            margin-left: 90px;
            color: #1F1592;
        }

        h3 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 50px;
            margin-top: -55px;
            margin-left: 120px;
            color: #1F1592;
        }

       
        

        #p {
            width: 50%;
            margin-left: 90px;
            font-family: Arial, Helvetica, sans-serif;

        }

        #span {
            color: white;
            font-size: 30px;

        }

        #span2 {
            color: #1F1592;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px
        }

        .Func_pac_login {
            margin-top: 60px;
            padding: 16px;
            right: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-left: 1095px;
        }

        .Func_pac_login img {
            width: 250px;
            height: 240px;

        }

        .Func_pac_login img:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <header></header>
    <main>

        <div id="logo">
            <img src="/posto/imagens_home/Logo.png">
            <h1>Seja </h1>
            <br>
            <h2>Bem-Vindo</h2>
            
            
            <p id="p"><span id="span">Bem-vindo ao PostoFácil</span>

                <span id="span2"><br><br>Nosso Posto de Saúde é dedicado a cuidar da sua saúde e bem-estar. Nossa equipe de
                    profissionais
                    altamente qualificados está aqui para oferecer serviços médicos de qualidade, promovendo a
                    prevenção, o
                    tratamento e a manutenção da saúde.

                    Oferecemos uma ampla gama de serviços médicos, desde consultas de rotina até cuidados
                    especializados.
                    Nossas instalações modernas e equipamentos avançados garantem um atendimento eficiente e preciso.

                    Na nossa clínica, valorizamos o relacionamento médico-paciente. Nossos profissionais estão prontos
                    para
                    ouvir suas preocupações, responder às suas perguntas e oferecer orientação personalizada para o seu
                    cuidado de saúde.

                    Além dos serviços médicos, também fornecemos recursos educacionais para ajudá-lo a entender melhor
                    sua
                    saúde e adotar hábitos saudáveis. Organizamos palestras, workshops e eventos comunitários para
                    promover
                    a conscientização sobre prevenção de doenças e promoção da saúde.

                    Navegue pelo nosso site para conhecer mais sobre nossos serviços, equipe médica, horários de
                    atendimento
                    e informações de contato. Agende uma consulta conosco e comece sua jornada para uma vida mais
                    saudável.

                    Sua saúde é nossa prioridade. Conte conosco no seu cuidado médico!"

                    </span></p>
        </div>
        <div class="Func_pac_login">
           <a href="/posto/cadastros/cadastro_funcionario.php"> <img src="\posto\imagens_home\cad_func.png" alt="CadastroFunc "></a>
        </div>
        <div class="Func_pac_login">
           <a href="/posto/cadastros/cadastro_paciente.php"> <img src="\posto\imagens_home/cad_pac.png" alt="CadastroPac"></a>
        </div>
        <div class="Func_pac_login">
            <a href="/posto/acoes/login.php"><img src="\posto\imagens_home/icon_login.png" alt="Login"></a>
        </div>

    </main>
    <footer></footer>
</body>

</html>

