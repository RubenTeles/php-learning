<?php require 'views/partials/Lesson_17_head.php' ?>

    <?php
        $description = !empty($_POST['description']) ? $_POST['description'] : '';
        $name = !empty(htmlspecialchars($_POST['name'])) ? htmlspecialchars($_POST['name']) : '';
    ?>
    <h1>
		<?= "Hello, ".  $name; ?>
    </h1>
    <?php if ($description != '') : ?>
    <h3>
        Submit this Task?
    </h3>
    <h4><label for="description">Description: </label></h4>
    <h5><label for="description">"<?=$description?>"</label></h5>
        <form method="POST" action="/create-task">
            <input name="description" type="hidden" value="<?=$description?>">
            <button type="submit">Yes</button>
        </form>
        <form action="/">
            <button type="submit">No</button>
        </form>
    <?php else : ?>
     <h3>
         Do you want add a new Task?
     </h3>
     <form method="POST">
         <label for="description">Description: </label>
         <input name="description" type="text">
         <input name="name" type="hidden" value="<?=$name?>">
         <button type="submit">Submit</button>
     </form>
    <?php endif; ?>


<?php require 'views/partials/Lesson_17_footage.php' ?>