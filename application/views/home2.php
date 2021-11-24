<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
  <?php if ($this->session->userdata('logado')) { ?>
  <div class="container">
    <header>
      <h3><?= $data['title'] = $this->lang->line('title') ?> <?= $_SESSION['logado']['name'] ?>!</h3>

      <div style="display: flex; justify-content: space-around;">
        <span style="display: flex; justify-content: space-around;">
          <a href="home">PT-BR</a>
          <a href="home2" style="margin-left: 8px;">EN-US</a>
        </span>

        <a href="<?= base_url('logout') ?>" style="margin-left: 24px;">
          <p><?= $data['logout'] = $this->lang->line('logout') ?></p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
            <path fill-rule="evenodd"
              d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
          </svg>
        </a>
      </div>
    </header>

    <main>
      <div class="infos-card">
        <div class="input-group">
          <label for="name"><?= $data['labelName'] = $this->lang->line('labelName') ?></label>
          <input type="text" name="name" id="name" value="<?= $_SESSION['logado']['name'] ?>" readonly>
        </div>

        <div class="input-group">
          <label for="email"><?= $data['labelEmail'] = $this->lang->line('labelEmail') ?></label>
          <input type="email" name="email" id="email" value="<?= $_SESSION['logado']['email'] ?>" readonly>
        </div>

        <form action="">
          <button>
            <?= $data['editButton'] = $this->lang->line('editButton') ?>
          </button>
        </form>

        <form method="delete" action="<?= base_url('delete/' . $_SESSION['logado']['cd']) ?>">
          <button class="secondary-button">
            <?= $data['deleteButton'] = $this->lang->line('deleteButton') ?>
          </button>
        </form>
      </div>
    </main>
  </div>
  <?php } else {
    redirect(base_url('login'));
  }; ?>
</body>

</html>