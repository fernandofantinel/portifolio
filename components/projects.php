<?php
$projects = [
  [
    'thumbnail' => '../assets/img/portfolio_thumb.png',
    'alt' => 'Foto do projeto do portfólio',
    'title' => 'Portfólio',
    'description' => 'Site para exibir os projetos realizados até o momento.',
    'technologies' => [
      [
        'name' => 'PHP',
        'color' => 'bg-indigo-700'
      ],
      [
        'name' => 'HTML',
        'color' => 'bg-orange-500',
      ],
      [
        'name' => 'Tailwind CSS',
        'color' => 'bg-main-blue',
      ],
    ],
  ],
  [
    'thumbnail' => '../assets/img/clone-tabnews_thumb.png',
    'alt' => 'Foto do projeto Clone Tabnews',
    'title' => 'Clone Tabnews',
    'description' => 'Recriação do zero do tabnews.com.br. Projeto feito no curso.dev.',
    'technologies' => [
      [
        'name' => 'JavaScript',
        'color' => 'bg-yellow-300'
      ],
      [
        'name' => 'NodeJS',
        'color' => 'bg-green-800',
      ],
      [
        'name' => 'NextJS',
        'color' => 'bg-zinc-200',
      ],
      [
        'name' => 'Jest',
        'color' => 'bg-rose-400',
      ],
      [
        'name' => 'PostgreSQL',
        'color' => 'bg-slate-700',
      ],
    ],
  ],
];
?>

<?php foreach ($projects as $project): ?>

  <div class="flex gap-6 bg-gray-400 p-6 rounded-[12px] h-[204px]">
    <div class="w-56 h-[156px] flex-shrink-0">
      <img class="w-full h-full object-cover rounded-[8px]" src="<?= $project['thumbnail']; ?>" alt="<?= $project['alt']; ?>">
    </div>
    <div class="flex flex-1 flex-col min-w-0 h-full justify-between">
      <div class="flex flex-col gap-2">
        <span class="text-gray-100 font-bold leading-tight"><?= $project['title']; ?></span>
        <p class="text-gray-200 text-sm leading-normal"><?= $project['description']; ?></p>
      </div>
      <div class="flex flex-wrap gap-2">
        <?php foreach ($project['technologies'] as $technology): ?>
          <div class="<?= $technology['color']; ?> rounded-full px-3 py-1">
            <span class="text-gray-500 font-bold leading-[1.2]"><?= $technology['name']; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<?php endforeach; ?>