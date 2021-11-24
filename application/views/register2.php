<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= base_url('/assets/styles/register.css') ?>">

  <title><?= $data['title'] = $this->lang->line('title') ?></title>
</head>

<body>
  <?php if (!(!!$this->session->userdata('logado'))) { ?>
  <div class="container">
    <form action="<?= base_url('create') ?>" method="post">
      <h1><?= $data['title'] = $this->lang->line('title') ?></h1>

      <div class="input-group">
        <label for="name"><?= $data['labelEmail'] = $this->lang->line('labelName') ?></label>
        <input type="text" name="name" id="name">
      </div>

      <div class="input-group">
        <label for="email"><?= $data['labelEmail'] = $this->lang->line('labelEmail') ?></label>
        <input type="email" name="email" id="email">
      </div>

      <div class="input-group">
        <label for="password"><?= $data['labelPassword'] = $this->lang->line('labelPassword') ?></label>
        <input type="password" name="password" id="password">
      </div>

      <button type="submit"><?= $data['button'] = $this->lang->line('button') ?></button>

      <a href="login"><?= $data['link'] = $this->lang->line('link') ?></a>

      <span style="display: flex; justify-content: space-around; margin-top: 40px; width: 100%;">
        <a href="register">PT-BR</a>
        <a href="register2">EN-US</a>
      </span>
    </form>
  </div>
  <?php } else {
    redirect(base_url());
  }; ?>
</body>

</html>