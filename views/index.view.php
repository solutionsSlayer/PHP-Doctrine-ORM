
<h1 class=" container mx-auto text-center p-4">List of champions</h1>

<table class="table table-primary m-5 p-5 container mx-auto">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#id</th>
        <th scope="col">Name</th>
        <th scope="col">title</th>
        <th scope="col">tags</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($data as $champions) : ?>
        <?php foreach ($champions as $champion) : ?>
            <tr>
                <th scope="row">#<?= $champion->id ?></th>
                <td><?= $champion->name ?></td>
                <td><?= $champion->title ?></td>
                <td><?= $champion->tags ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>

    </tbody>
</table>

<?php

require 'partials/footer.view.php';
