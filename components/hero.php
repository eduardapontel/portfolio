<?php
$itens = [
    ["href" => "https://github.com/eduardapontel", "src" => "../assets/github.svg", "alt" => "Github"],
    ["href" => "https://www.linkedin.com/in/eduarda-pontel-2a8675219/", "src" => "../assets/linkedin.svg", "alt" => "Linkedin"],
    ["href" => "mailto:eduardapontel@gmail.com", "src" => "../assets/email.svg", "alt" => "Email"],
];

?>

<section class="flex gap-x-3">
    <div class="w-2/3">
        <h1 class="text-2xl font-bold">Hey! My name is Eduarda.</h1>
        <p class="text-xl leading-6 mt-6">I am a Fullstack Developer who loves to create new projects and learn
            new technologies.
            I have experience with HTML, CSS, JavaScript, React, Node.js, Express.js, PHP, and MySQL.</p>
        </p>

        <ul class="flex gap-x-3 mt-9">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" target="_blank"><img class="h-8 hover:opacity-50 transition-opacity duration-300" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" /></a></li>
            <?php endforeach ?>
        </ul>

    </div>

    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img class="h-60 -mt-6 p-3" src="../assets/profile.png" />
        </div>
    </div>
</section>