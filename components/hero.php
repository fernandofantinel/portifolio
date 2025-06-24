<main class="relative flex flex-col items-center gap-14 pt-18 pb-36 border border-red-500">
  <div class="flex flex-col items-center absolute top-[72px] gap-2">
    <span class="text-main-red">Meu trabalho</span>
    <span class="text-2xl font-bold leading-[1.2] text-gray-100">Veja os projetos em destaque</span>
  </div>
  <div class="grid grid-cols-2 gap-6 absolute top-[189px] bottom-36 px-20">
    <?php include('./components/projects.php') ?>
    <?php include('./components/projects.php') ?>
  </div>
</main>