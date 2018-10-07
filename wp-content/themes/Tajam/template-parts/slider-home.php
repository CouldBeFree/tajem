<div class="slider-holder">
    <?php
    $slider = CFS()->get('home_slider');
    if ($slider){
        foreach ($slider as $slider_item) { ?>
            <div class="slide">
                <p class="content"><?php echo $slider_item['slider_content'] ?></p>
                <div class="link-holder">
                    <a href="<?php echo $slider_item['button_link'] ?>" class="button-item"><?php echo $slider_item['button_text'] ?></a>
                </div>
            </div>
        <?php }
    }
    ?>
</div>