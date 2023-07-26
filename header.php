<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apreendere</title>    
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css" />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navCor navbar-light flex-column fixed-top">
        <div class="container">
          <div class="row">
            <div class="col-2">
              <img
                alt="Logo"
                src="./imagens/logo-cinza.png"
                class="img-fluid"
              />
            </div>
            <div class="col-10 align-items-center d-flex">
              <div class="d-flex flex-row justify-content-between w-100">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown"
                  aria-expanded="false"
                  aria-label="Alterna navegação"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse w-100"
                  id="navbarNavDropdown"
                >
                  <ul class="navbar-nav justify-content-around w-100">
                    <li class="nav-item active txt-preto">
                      <a class="nav-link text-black" href="Index.html"> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-black" href="Como_estudar.html">
                        Como Estudar
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle text-black"
                        href="#"
                        id="navbarDropdownUniversidadeLink"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Universidades
                      </a>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdownUniversidadeLink"
                      >
                        <a class="dropdown-item" href="#">ENEM</a>
                        <a class="dropdown-item" href="#">UNICAMP</a>
                        <a class="dropdown-item" href="#">USP</a>
                        <a class="dropdown-item" href="#">UNESP</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle text-black"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Matérias
                      </a>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdownMenuLink"
                      >
                        <a class="dropdown-item" href="#">Português</a>
                        <a class="dropdown-item" href="#">Matemática</a>
                        <a class="dropdown-item" href="#">História</a>
                        <a class="dropdown-item" href="#">Biologia</a>
                        <a class="dropdown-item" href="#">Química</a>
                        <a class="dropdown-item" href="#">Física</a>
                        <a class="dropdown-item" href="#">Inglês</a>
                        <a class="dropdown-item" href="#">Geografia</a>
                        <a class="dropdown-item" href="#">Redação</a>
                        <a class="dropdown-item" href="#">Filosofia</a>
                        <a class="dropdown-item" href="#">Sociologia</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    