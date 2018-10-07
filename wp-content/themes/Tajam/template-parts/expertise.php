<ul class="expertise-list">
    <?php
    $slider = CFS()->get('card');
    if ($slider){
        foreach ($slider as $slider_item) { ?>
            <li>
                <div class="icon"><img src="<?php echo $slider_item['card_icon'] ?>" alt="icon"></div>
                <h3><?php echo $slider_item['card_headline'] ?></h3>
                <p><?php echo $slider_item['card_content'] ?></p>
            </li>
        <?php }
    }
    ?>
</ul>