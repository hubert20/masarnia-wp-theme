<?php
$main_about_icon = get_field('main_about_icon');
$main_about_title = get_field('main_about_title');
$main_about_cnt = get_field('main_about_cnt');
$main_about_background = get_field('main_about_background');
?>
<section id="o-nas" class="masarnia-o-nas" style="background-image: url('<?php echo $main_about_background; ?>');">
    <div class="masarnia-o-nas__bg-mask py-4 py-lg-5">
        <div class="container">
            <h2 class="text-center standard-title-3 mb-0">
                <?php echo $main_about_title; ?>
            </h2>
            <div class="sc-title d-flex justify-content-center mb-3 mb-lg-4">
                <div class="sc-title__line">
                    <img width="50" height="50" src="<?php echo $main_about_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $main_about_icon['alt']; ?>">
                </div>
            </div>
            <?php echo $main_about_cnt; ?>
        </div>
    </div>
</section>