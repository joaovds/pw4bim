<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= base_url('/assets/styles/home.css') ?>">

  <title>Home</title>
</head>
<body>
  <?php if($this->session->userdata('logado')) { ?>
  <div class="container">
    <header>
      <h3>Seja bem vindo, <?= $_SESSION['logado']['name'] ?>!</h3>

      <a href="<?= base_url('logout') ?>">
        <p>Sair</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
          <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
      </a>
    </header>

    <main>
      <div class="infos-card">
        <div class="input-group">
          <label for="name">Nome</label>
          <input type="text" name="name" id="name" value="João Victor" readonly>
        </div>

        <div class="input-group">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" value="email@teste.com" readonly>
        </div>

        <button>Editar</button>
        <button class="secondary-button">Excluir conta</button>
      </div>
    </main>
  </div>
  <?php } else { redirect(base_url('login')); }; ?>
</body>
</html>