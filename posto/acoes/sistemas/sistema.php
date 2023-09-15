<?php ini_set('default_charset', 'utf-8'); ?>
<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> />
    <script src="/posto/acoes/sistema.js" defer></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  background-image: url(/posto/imagens/Captura\ de\ tela\ 2023-09-10\ 220309.png);
}

.flex {
  display: flex;
  align-items: center;
  
}
.nav_image {
  display: flex;
  min-width: 55px;
  justify-content: center;
  
  
}
.nav_image img {
  height: 90px;
  width: 200px;
  border-radius: 50%;
  object-fit: cover;
}
#img_profile{
    height: 50px;
    width: 80%;
    
}

.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 270px;
  background: #fff;
  padding: 15px 10px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
  
}
.sidebar.close {
  width: calc(55px + 20px);
}
.logo_items {
  gap: 8px;
}
.logo_name {
  font-size: 22px;
  color: #0044c2;
  font-weight: 500px;
  transition: all 0.3s ease;
}
.sidebar.close .logo_name,
.sidebar.close #lock-icon,
.sidebar.close #sidebar-close {
  opacity: 0;
  pointer-events: none;
}
#lock-icon,
#sidebar-close {
  padding: 10px;
  color: #4070f4;
  font-size: 25px;
  cursor: pointer;
  margin-left: -4px;
  transition: all 0.3s ease;
}
#sidebar-close {
  display: none;
  color: #333;
}
.menu_container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-top: 40px;
  overflow-y: auto;
  height: calc(100% - 82px);
}
.menu_container::-webkit-scrollbar {
  display: none;
}
.menu_title {
  position: relative;
  height: 50px;
  width: 55px;
}
.menu_title .title {
  margin-left: 15px;
  transition: all 0.3s ease;
}
.sidebar.close .title {
  opacity: 0;
}
.menu_title .line {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  height: 3px;
  width: 20px;
  border-radius: 25px;
  background: #aaa;
  transition: all 0.3s ease;
}
.menu_title .line {
  opacity: 0;
}
.sidebar.close .line {
  opacity: 1;
}
.item {
  list-style: none;
}
.submenu {
    display: none;
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: rgb(243, 243, 235);
    border-radius: 10px;
  }

  .subitem {
    margin: 0;
    padding: 0;
  }

  .sublink {
    text-decoration: none;
    color: #707070;
    display: flex;
    align-items: center;
    padding: 10px 20px;
  }

  .sublink:hover {
    background-color: #4070f4;
    color: #fff;
  }
.link {
  text-decoration: none;
  border-radius: 8px;
  margin-bottom: 8px;
  color: #707070;
}
.link:hover {
  color: #fff;
  background-color: #4070f4;
}
.link span {
  white-space: nowrap;
}
.link i {
  height: 50px;
  min-width: 55px;
  display: flex;
  font-size: 22px;
  align-items: center;
  justify-content: center;
  border-radius: 4px;
}
.sidebar_profile {
  padding-top: 10px;
  margin-top: 15px;
  gap: 15px;
  border-top: 2px solid rgba(0, 0, 0, 0.1);
  margin-bottom: 10vh;
}
.sidebar_profile .name {
  font-size: 18px;
  color: #333;
}
.sidebar_profile .email {
  font-size: 15px;
  color: #333;
}
/* Navbar */
.navbar {
  max-width: 500px;
  width: 100%;
  position: fixed;
  top: 0;
  left: 60%;
  transform: translateX(-50%);
  background: #fff;
  padding: 10px 20px;
  border-radius: 0 0 8px 8px;
  justify-content: space-between;
  
}
#sidebar-open {
  font-size: 30px;
  color: #333;
  cursor: pointer;
  margin-right: 20px;
  display: none;
}
.search_box {
  height: 46px;
  max-width: 500px;
  width: 100%;
  border: 1px solid #aaa;
  outline: none;
  border-radius: 8px;
  padding: 0 15px;
  font-size: 18px;
  color: #333;
}
.navbar img {
  height: 40px;
  width: 40px;
  margin-left: 20px;
}
/* Responsive */
@media screen and (max-width: 1100px) {
  .navbar {
    left: 65%;
  }
}
@media screen and (max-width: 800px) {
  .sidebar {
    left: 0;
    z-index: 1000;
  }
  .sidebar.close {
    left: -100%;
  }
  #sidebar-close {
    display: block;
  }
  #lock-icon {
    display: none;
  }
  .navbar {
    left: 0;
    max-width: 100%;
    transform: translateX(0%);
  }
  #sidebar-open {
    display: block;
  }
  
}
    </style>
  </head>
  <body>
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="/posto/imagens/logo.png"  alt="logo_img" />
        </span>
        <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
        <i class="bx bx-x" id="sidebar-close"></i>
      </div>
      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Serviços</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="#" class="link flex">
                <i class="material-symbols-outlined">
                  syringe
                </i>
                <span>Vacinas</span>
              </a>
              <ul class="submenu">
                <li class="subitem">
                  <a href="/posto/cadastros/vacina_cadastro.php" class="sublink flex">
                    <span>Cadastro de vacinas</span>
                  </a>
                </li>
                <li class="subitem">
                  <a href="/posto/estoque/vacina_estoque.php" class="sublink flex">
                    <span>Estoque de Vacinas</span>
                  </a>
                </li>
                <li class="subitem">
                  <a href="/posto/cadastros/vac_cad_paciente.php" class="sublink flex">
                    <span> Registro de Vacinação</span>
                  </a>
                </li>
                <li class="subitem">
                  <a href="/posto/estoque/historico_vac_paciente.php" class="sublink flex">
                    <span>Histórico da Vacinação</span>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="item">
              <a href="/posto/acoes/sistemas/sistema_paciente.php" class="link flex">
                <i class="material-symbols-outlined">
                  patient_list
                </i>
                <span>Dados do paciente</span>
              </a>
              <ul class="submenu">
                <li class="subitem">
                  <a href="sistema_paciente.php" class="sublink flex">
                    <span>Ficha Cadastral</span>
                  </a>
                </li>
                <!-- Adicione mais subitens conforme necessário -->
              </ul>
            </li>
            
            <li class="item">
              <a href="#" class="link flex">
                <i class="material-symbols-outlined">
                  inventory_2
                </i>
                <span>Medicamentos</span>
              </a>
              <ul class="submenu">
                <li class="subitem">
                  <a href="\posto\cadastros\medicamento_cadastro.php" class="sublink flex">
                    <span>Cadastro de Medicamentos</span>
                  </a>
                </li>
                <li class="subitem">
                  <a href="\posto\estoque\medicamento_estoque.php" class="sublink flex">
                    <span>Estoque de Medicamentos</span>
                  </a>
                </li>
                <li class="subitem">
                  <a href="\posto\estoque\medicamento_prescrito.php" class="sublink flex">
                    <span>Medicamentos Prescritos</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
            <li class="item">
              <a href="\posto\estoque\evo-calendar\calendar.php" class="link flex">
                <i class="material-symbols-outlined ">calendar_month</i>
                <span>Calendário de vacinas</span>
              </a>
            </li>
          </ul>
          <ul class="menu_item">
            
            <li class="item">
              <a href="#" class="link flex">
                <i class="material-symbols-outlined">
                    coronavirus</i>
                <span>Alergias</span>
              </a>
            </li>
            <li class="item">
              <a href="\posto\cadastros\cadastro_paciente.php" class="link flex">
                <i class="material-symbols-outlined">
                  person_add</i>
                <span>Cadastrar Paciente</span>
              </a>
            <br>
            <hr>
            <br>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="material-symbols-outlined">
                    logout</i>
                <span>Sair</span>
              </a>
            </li>
           
              
          </ul>
          
          
        </div>
        <div class="sidebar_profile flex">
          <span class="nav_image">
            <img id="img_profile" src="/posto/imagens/usuario.png" alt="Profile" />
          </span>
          <div class="data_text">
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <nav class="navbar flex">
      <i class="bx bx-menu" id="sidebar-open"></i>
      <input type="text" placeholder="Procurar..." class="search_box" />
      <span class="nav_image">
        <img src="/posto/imagens/procurar.png" alt="logo_img" />
      </span>
    </nav>
  </body>
</html>