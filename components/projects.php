<?php
$projects = [
  [
    'thumbnail' => '../assets/img/portfolio_thumb.png',
    'alt' => 'Foto do projeto do portfólio',
    'title' => 'Portfólio',
    'description' => 'Site para exibir os projetos realizados até o momento.',
    'url' => 'https://portfolio.fantinel.dev.br',
    'github' => 'https://github.com/fernandofantinel/portifolio',
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
    'url' => 'https://clone-tabnews.fantinel.dev.br/api/v1/status',
    'github' => 'https://github.com/fernandofantinel/clone-tabnews',
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
  [
    'thumbnail' => '../assets/img/devlinks_thumb.png',
    'alt' => 'Foto da página pessoal Devlinks',
    'title' => 'Página pessoal',
    'description' => 'Página pessoal para exibição dos contatos.',
    'url' => 'https://fantinel.dev.br/',
    'github' => 'https://github.com/fernandofantinel/devlinks',
    'technologies' => [
      [
        'name' => 'CSS',
        'color' => 'bg-main-blue',
      ],
      [
        'name' => 'HTML',
        'color' => 'bg-orange-500',
      ],
      [
        'name' => 'JavaScript',
        'color' => 'bg-yellow-300'
      ],
    ],
  ],
  [
    'thumbnail' => '../assets/img/karaoke-roulette_thumb.png',
    'alt' => 'Foto da página Karaoke Roulette',
    'title' => 'Karaoke Roulette',
    'description' => 'Projeto criado para se divertir cantando com amigos.',
    'url' => 'https://karaoke-roulette.vercel.app/',
    'github' => 'https://github.com/fernandofantinel/karaoke-roulette',
    'technologies' => [
      [
        'name' => 'ReactJS',
        'color' => 'bg-sky-400'
      ],
      [
        'name' => 'Vite',
        'color' => 'bg-violet-500',
      ],
      [
        'name' => 'JavaScript',
        'color' => 'bg-yellow-300'
      ],
      [
        'name' => 'HTML',
        'color' => 'bg-orange-500',
      ],
      [
        'name' => 'CSS',
        'color' => 'bg-main-blue',
      ],
    ],
  ],
];
?>

<?php foreach ($projects as $project): ?>

  <div class="flex gap-6 bg-gray-400 p-6 rounded-[12px] h-[204px]">
    <div class="w-56 h-[156px] flex-shrink-0">
      <img class="openModal thumb w-full h-full object-cover rounded-[8px] cursor-pointer" src="<?= $project['thumbnail']; ?>" alt="<?= $project['alt']; ?>">
    </div>
    <div class="flex flex-1 flex-col min-w-0 h-full justify-between">
      <div class="flex flex-col gap-2">
        <div class="flex justify-between">
          <a href="<?= $project['url']; ?>" target="_blank">
            <span class="text-gray-100 font-bold leading-tight"><?= $project['title']; ?></span>
          </a>
          <a href="<?= $project['github']; ?>" target="_blank">
            <img class="text-gray-300" src="../assets/img/github-logo.svg" alt="Logo do GitHub">
          </a>
        </div>
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