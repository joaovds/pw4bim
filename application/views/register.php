<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= base_url('/assets/styles/register.css') ?>">

  <title>Cadastro</title>
</head>
<body>
  <div class="container">
    <form action="<?= base_url('create') ?>" method="post">
      <h1>Cadastro</h1>

      <div class="input-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
      </div>

      <div class="input-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
      </div>

      <div class="input-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">
      </div>

      <button type="submit">Finalizar</button>

      <a href="login">Já tem uma conta? Faça login</a>
    </form>
  </div>
</body>
</html>