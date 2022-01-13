<?php
$hero_cnt = get_field('hero_cnt');
$hero_background_desktop = get_field('hero_background_desktop');
$hero_background_mobile = get_field('hero_background_mobile');
$hero_widget = get_field('hero_widget');
?>

<!-- Top hero -->
<section class="top-hero">
    <?php echo $hero_cnt; ?>
    <?php echo $hero_widget; ?>
</section>

<!-- Style hero -->
<style>
    .top-hero {
        background-image: url('<?php echo $hero_background_mobile; ?>');
    }

    @media screen and (min-width: 992px) {
        .top-hero {
            background-image: url('<?php echo $hero_background_desktop; ?>');
        }
    }
</style>