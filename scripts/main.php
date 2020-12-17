<section class='disc'>
    <div class='container'>
        <div class='box-disc'>
        <?php foreach($database as $data) { ?>
            <img src="<?php echo $data['poster'] ?>" alt="">

            <h4><?php echo $data['title'] ?></h4>

             <p><?php echo $data['author'] ?></p>

            <h4><?php echo $data['year'] ?></h4>
            
            <p><?php echo $data['genre'] ?></p>
            <?php } ?>


        </div>
    </div>

</section>
