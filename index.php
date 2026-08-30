<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-900 text-gray-200">
    <?php include('./components/header.php') ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <?php include('./components/hero.php') ?>

        <hr class="my-9 border-gray-600">

        <section id="projects"  class="space-y-3 py-6">
            <h2 class="text-2xl font-bold">My Projects</h2>

            <?php include('./components/projects.php') ?>
        </section>
    </main>

    <footer class="mx-auto max-w-screen-lg min-h-20 px-3">
        <div class="border-t border-gray-600 py-9 px-3 text-gray-400 text-sm">
            © Copyright <?=date('Y') ?>. Made with ❤ by me
        </div>
    </footer>

</body>

</html>