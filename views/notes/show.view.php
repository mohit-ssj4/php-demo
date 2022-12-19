<?php require("views/partials/header.php") ?>

<?php require("views/partials/navbar.php") ?>

<?php require("views/partials/banner.php") ?>

<main class="mt-4 px-2">
  <div class="w-full 2xl:container">
    <?php
    $path = "/notes";
    $linkTitle = "Go back";
    require("views/partials/back.php");
    ?>
    <p class="text-xl">
      <?= htmlspecialchars($note["title"]) ?>
    </p>
  </div>
</main>

<?php require("views/partials/footer.php") ?>
