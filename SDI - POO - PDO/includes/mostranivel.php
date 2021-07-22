<?php if ($_SESSION['user'][0]['nivel_acesso'] == 1) { ?>

    <a href="#" class="badge badge-info mb-1"><?= $_SESSION['user'][0]['acesso'] ?> - <?= $_SESSION['user'][0]['nome'] ?></a>

<?php } else if ($_SESSION['user'][0]['nivel_acesso'] == 2) { ?>

    <a href="#" class="badge badge-info mb-1"><?= $_SESSION['user'][0]['acesso'] ?> - <?= $_SESSION['user'][0]['nome'] ?></a>

<?php } else if ($_SESSION['user'][0]['nivel_acesso'] == 3) { ?>

    <a href="#" class="badge badge-info mb-1"><?= $_SESSION['user'][0]['acesso'] ?> - <?= $_SESSION['user'][0]['nome'] ?></a>

<?php } else { ?>

    <a href="#" class="badge badge-info mb-1"><?= $_SESSION['user'][0]['acesso'] ?> - <?= $_SESSION['user'][0]['nome'] ?></a>

<?php } ?>