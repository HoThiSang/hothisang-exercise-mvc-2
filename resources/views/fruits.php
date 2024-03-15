<h2>Here are all the fruits : </h2>
<ul>
    <?php foreach ($fruits as $fruit) { ?>

        <li> <?php echo $fruit['name'] . ' cost ' . $fruit['price'] ?></li>

    <?php
    }
    ?>
</ul>