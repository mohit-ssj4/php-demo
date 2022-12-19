<?php require("views/partials/header.php") ?>

<?php require("views/partials/navbar.php") ?>

<?php require("views/partials/banner.php") ?>

<main class="mt-4 px-2">
  <div class="w-full 2xl:container flex flex-col gap-8">
    <a href="/note/create" class="flex gap-2 items-center px-8 shadow-lg hover:shadow-xl hover:bg-blue-800 transition duration-200 py-4 rounded-lg bg-blue-600 text-white w-full md:w-fit">
      <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" />
        <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
        <line x1="16" y1="5" x2="19" y2="8" />
      </svg>
      <p>Create note</p>
    </a>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:grid-cols-3 place-items-center">
      <?php foreach ($notes as $note) : ?>
        <a href="/note?id=<?= $note["id"] ?>" class="w-full py-4 px-8 shadow-lg rounded-lg ring-2 ring-blue-100 hover:ring-2 hover:ring-blue-600 hover:bg-blue-50 hover:shadow-xl transition duration-200">
          <?= htmlspecialchars($note["title"]) ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php require("views/partials/footer.php") ?>
