<?php
$projects = [
    [
        "title" => "My Portfolio",
        "completed" => true,
        "year" => 2026,
        "description" => "My first portfolio website, built with PHP and HTML.",
        "stack" => ["PHP", "HTML", "Tailwind"],
        "image" => "./assets/project1.png"
    ],
    [
        "title" => "Task Manager",
        "completed" => false,
        "year" => 2026,
        "description" => "A simple task management application built with PHP and HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
        "image" => ""
    ],
    [
        "title" => "Book Reading Tracker",
        "completed" => false,
        "year" => 2026,
        "description" => "An application for tracking books and managing a personal reading list.",
        "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
        "image" => ""
    ],
    [
        "title" => "Another Project",
        "completed" => false,
        "year" => 2026,
        "description" => "A project currently under development.",
        "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
        "image" => ""
    ],
];
?>

<?php foreach ($projects as $project): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
        <div class="w-1/5 flex items-center justify-center">
            <img class="h-42 rounded-md shadow-lg shadow-slate-900" src="<?= $project['image'] ?>" />
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl"><?= $project['title'] ?></h3>
                <div class="cursor-default space-x-1">
                    <?php
                    $colors = ['amber', 'lime', 'sky', 'rose', 'fuchsia', 'purple'];
                    foreach ($project['stack'] as $index => $stack):
                        $color = $colors[$index % count($colors)];
                    ?>
                        <span class="bg-<?= $color ?>-400 text-<?= $color ?>-900 rounded-md px-2 py-1 font-semibold text-sm"><?= $stack ?></span>
                    <?php endforeach ?>
                </div>
            </div>
            <p class="leading-6"><?= $project['description'] ?></p>


            <?php if ($project['completed']): ?>
                ✅
                <span class="text-sm text-gray-400 opacity-50 italic">(Completed in <?= $project['year'] ?>)</span>

            <?php else: ?>
                <span class="text-sm text-gray-400 opacity-50 italic">In progress...</span>
            <?php endif ?>

        </div>
    </div>
<?php endforeach ?>