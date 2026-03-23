<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/main.css"/>
    <title><?= $title ?? "" ?></title>
</head>
<body>
    <main>
        <div class="centered">
            <section>
                <h1>Liste des categories</h1>
                <?php foreach ($data as $category) : ?>
                    <h2><?= $category->getName() ?></h2>
                <?php endforeach ?>
            </section>
        </div>
    </main>
</body>
</html>
