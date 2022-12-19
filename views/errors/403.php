<?php require("views/partials/header.php") ?>

<?php require("views/partials/navbar.php") ?>

<main class="mt-8 px-2">
  <div class="w-full 2xl:container">
    <p class="text-3xl font-semibold">
      Sorry, you are not authorized to view this page.
    </p>
    <?php
    $path = "/";
    $linkTitle = "Go home";
    require("views/partials/back.php");
    ?>
  </div>
</main>

<?php require("views/partials/footer.php") ?>
