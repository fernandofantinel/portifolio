<?php
$projects = [
  [
    'foto' => '../assets/img/portfolio_thumb.png',
    'alt' => 'Foto do projeto do portfólio',
    'titulo' => 'Portfólio',
    'descricao' => 'Site para exibir os projetos realizados até o momento.',
    'tecnologias' => [
      [
        'nome' => 'PHP',
        'cor' => 'bg-indigo-700'
      ],
      [
        'nome' => 'HTML',
        'cor' => 'bg-orange-500',
      ],
      [
        'nome' => 'Tailwind CSS',
        'cor' => 'bg-main-blue',
      ],
    ],
  ],
  [
    'foto' => '../assets/img/clone-tabnews_thumb.png',
    'alt' => 'Foto do projeto Clone Tabnews',
    'titulo' => 'Clone Tabnews',
    'descricao' => 'Recriação do zero do tabnews.com.br. Projeto feito no curso.dev.',
    'tecnologias' => [
      [
        'nome' => 'JavaScript',
        'cor' => 'bg-yellow-300'
      ],
      [
        'nome' => 'NodeJS',
        'cor' => 'bg-green-800',
      ],
      [
        'nome' => 'NextJS',
        'cor' => 'bg-zinc-200',
      ],
      [
        'nome' => 'Jest',
        'cor' => 'bg-rose-400',
      ],
      [
        'nome' => 'PostgreSQL',
        'cor' => 'bg-slate-700',
      ],
    ],
  ],
];
?>

<?php foreach ($projects as $project): ?>

  <div class="flex gap-6 bg-gray-400 p-6 rounded-[12px] h-[204px]">
    <div class="w-56 h-[156px] flex-shrink-0">
      <img class="w-full h-full object-cover rounded-[8px]" src="<?= $project['foto']; ?>" alt="<?= $project['alt']; ?>">
    </div>
    <div class="flex flex-1 flex-col min-w-0 h-full justify-between">
      <div class="flex flex-col gap-2">
        <span class="text-gray-100 font-bold leading-tight"><?= $project['titulo']; ?></span>
        <p class="text-gray-200 text-sm leading-normal"><?= $project['descricao']; ?></p>
      </div>
      <div class="flex flex-wrap gap-2">
        <?php foreach ($project['tecnologias'] as $tecnologia): ?>
          <div class="<?= $tecnologia['cor']; ?> rounded-full px-3 py-1">
            <span class="text-gray-500 font-bold leading-[1.2]"><?= $tecnologia['nome']; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<?php endforeach; ?>