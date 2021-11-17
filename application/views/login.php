<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= base_url('/assets/styles/login.css') ?>">

  <title>Login</title>
</head>
<body>
  <?php if(!(!!$this->session->userdata('logado'))) { ?>
  <div class="container">
    <form action="<?= base_url('logar') ?>" method="post">
      <h1>Login</h1>

      <div class="input-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
      </div>

      <div class="input-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">

        <span>Esqueci minha senha</span>
      </div>

      <button type="submit">Entrar</button>

      <a href="register">Não tem uma conta? Cadastre-se</a>
    </form>
  </div>
  <?php } else { redirect(base_url()); }; ?>
</body>
</html>