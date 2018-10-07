<div class="testimonial-block">
    <?php
    $slider = CFS()->get('testimonials_slider');
    if ($slider){
        foreach ($slider as $slider_item) { ?>
            <div class="slide">
                <p class="content"><?php echo $slider_item['slider_testimonial'] ?></p>
                <p class="author"><?php echo $slider_item['testimonial_author'] ?></p>
                <p class="position"><?php echo $slider_item['testimonial_position'] ?></p>
                <div class="image-wrap">
                    <img src="<?php echo $slider_item['testimonial_image'] ?>" alt="image">
                </div>
            </div>
        <?php }
    }
    ?>
</div>