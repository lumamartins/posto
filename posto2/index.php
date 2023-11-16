<?php
ini_set( 'default_charset', 'UTF-8' )
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- title -->
    <title>Posto fácil</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/extends.css" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="navbar__content max-width mb-0">
        <a href="/">
          <img src="./imagens/logo.png" alt="posto_facil" />
        </a>
        <ul class="navbar__links">
          <li><a href="#header">Início</a></li>
          <li><a href="#skills">Serviços</a></li>
          <li><a href="acoes/login.php" style="color: rgb(7, 47, 122);">Entrar</a></li>
          <li><a href="cadastros/cadastro_funcionario" style="color: rgb(47, 128, 250);">Cadastrar</a></li>
        </ul>
        <div class="navbar__mobile">
          <img src="./imagens/image-removebg-preview.png" alt="menu" class="burguer" />
          <ul class="mobile__links">
            <li><a href="#header">Início</a></li>
            <li><a href="#skills">Serviços</a></li>
            <li><a href="acoes/login.php" style="color: rgb(7, 47, 122);">Entrar</a></li>
            <li><a href="cadastros/cadastro_funcionario" style="color: rgb(47, 128, 250);">Cadastrar</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- header -->
    <header id="header" class="max-width">
      <div class="header__left">
        <h1>Olá! nós somos o posto fácil</h1>
        <p>
          Esta é uma página de tutorial sobre o funcionamento de um posto de saúde. Vamos abordar os serviços oferecidos e como entrar em contato.
        </p>
        <a href="#about" class="btn btn-primary">Saiba Mais!</a>
      </div>
      <div class="header__right">
        <div class="header__image">
          <img src="./imagens/bela-jovem-doutora-olhando-a-camera-no-escritorio.jpg" width="20rem" alt="doutora" class="lucas" />
          
        </div>
      </div>
    </header>

    <!-- Sobre -->
    <section id="about" class="about max-width">
      <div class="about__left">
        <h2 class="secondary-title">Como faço para me cadastrar?</h2>
        <p>
          É bem simples, basta você clicar em <b style="color: rgb(59, 128, 231)">Cadastrar</b> no canto superior direito.
        </p>
        <p>Caso já tenha cadastro, faça seu login clicando em <b style="color: rgb(7, 47, 122);">Entrar</b></p>
      </div>
      <div class="about__right">
        <h3 class="tertiary-title mb-m">
         
        </h3>
        
      </div>
    </section>

    
    <section id="skills" class="skills">
      <div class="skills__content max-width">
        <h2 class="tertiary-title">Nossos serviços</h2>
        
        <ul>
          <li class="skills__item">
            <div class="image-container">
              <i class="material-symbols-outlined">
                syringe
              </i>
            </div>
            <h3><b>Vacinas</b></h3>
            <p>
              Você consegue consultar seu histórico de vacinas
            </p>
          </li>
          <li class="skills__item">
            <div class="image-container">
              <i class="material-symbols-outlined">
                inventory_2
              </i>
            </div>
            <h3><b>Medicamentos</b></h3>
            <p>
              Veja os medicamentos disponíveis
            </p>
          </li>
          <li class="skills__item">
            <div class="image-container">
              <i class="material-symbols-outlined ">calendar_month</i>
            </div>
            <h3><b>Calendário de vacinas</b></h3>
            <p>
              Veja as próximas datas de vacinas disponíveis!
            </p>
          </li>
          <li class="skills__item">
            <div class="image-container">
              <i class="material-symbols-outlined">
                phone_in_talk</i>
            </div>
            <h3>Contato</h3>
            <p>
              Em caso de dúvida, ligue para gente ou mande mensagem <br> (031) 99964-3249
          </li>
        </ul>
      </div>
    </section>

    <!-- Projetos -->
    <section id="projects" class="projects max-width">
      <div class="projects__content">
        <h2 class="secondary-title">Passo a passo</h2>
        
      </div>
      <ul>
        <li>
          <div class="image">
            <img src="./imagens/tutorial1.png" alt="Gerenciamento de tarefas" />
          </div>
          <div class="projects__info">
            <h3 class="tertiary-title">
             Possui conta no Posto Fácil?
            </h3>
            <p>
              Caso já tenha uma conta, basta clicar em entrar e preencher oque pede.
            </p>
           
          </div>
        </li>
        <li class="projects__reversed-list">
          <div class="image">
            <img src="./imagens/tutorial2.png" alt="ecommerce" />
          </div>
          <div class="projects__info">
            <h3 class="tertiary-title">
              Não possui uma conta no Posto Fácil?
            </h3>
            <p>
              Fique tranquilo, basta abrir o menu e clicar em cadastrar e preencher todo o formulário.
            </p>
            
          </div>
        </li>
        <li>
          <div class="image">
            <img src="./imagens/tutorial3.png" alt="delivery" />
          </div>
          <div class="projects__info">
            <h3 class="tertiary-title">
              Entrei como Funcionário, como faço para mecher?
            </h3>
            <p>
              No canto esquerdo na barra de navegação está todos nossos serviço, aqui você tem todos os acessos do paciente. 
            </p>

          </div>
        </li>
      </ul>
    </section>

   
    <!-- script -->
    <script src="scripts/index.js"></script>
  </body>
</html>
