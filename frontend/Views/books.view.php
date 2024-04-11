<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<?php     $books = [
        [
            'title' => 'Sort your head out',
            'author' => 'Sam Delaney',
            'yearPublished' => 2023
        ],
        [
            'title' => 'Mr Nice',
            'author' => 'Howard Marks',
            'yearPublished' => 1996
        ],
        [
            'title' => 'The lord of the Rings',
            'author' => 'J.R.R.Tolkien',
            'yearPublished' => 1954
        ],
    ]; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->

        <ul>
            <?php foreach ($books as $book): ?>
                <li><?= $book['title'] ?> by <?= $book['author'] ?> (<?= $book['yearPublished'] ?>)</li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>


<?php require('partials/footer.php') ?>