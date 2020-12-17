<section class='disc'>
    <div class='container'>
    <?php foreach($database as $data) { ?>
        
        <div class='box-disc'>
          
            <img src="<?php echo $data['poster'] ?>" alt="">

            <h4><?php echo $data['title'] ?></h4>

             <p><?php echo $data['author'] ?></p>

            <h4><?php echo $data['year'] ?></h4>
            
            <p><?php echo $data['genre'] ?></p>
            
        </div>
        <?php } ?>
    </div>

</section>
