<ul class="clients-list">
    <?php
    $logo = CFS()->get('clients');
    if ($logo){
        foreach ($logo as $logo_item) { ?>
            <li>
                <img src="<?php echo $logo_item['client_logo'] ?>" alt="logo">
            </li>
        <?php }
    }
    ?>
</ul>