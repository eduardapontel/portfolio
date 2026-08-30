<?php
    $itens = [
        ['href' => '#projects', 'text' => 'Projects'],
        ['href' => 'https://github.com/eduardapontel', 'text' => 'Github'],
        ['href' => 'https://www.linkedin.com/in/eduarda-pontel-2a8675219/', 'text' => 'LinkedIn'],
        ['href' => 'mailto:eduardapontel@gmail.com', 'text' => 'Email'],
    ];

?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex justify-between items-center">
    <div class="font-bold text-lg text-orange-200">
        ✨ My Portfolio ✨
    </div>

    <div class="">
        <ul class="flex gap-x-3 font-medium">
            <?php foreach($itens as $item): ?>
            <li>
                <a class="hover:underline" href="<?= $item['href'] ?>"><?= $item['text'] ?></a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</header>