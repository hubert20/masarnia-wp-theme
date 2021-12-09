<div id="footer-widget" class="footer-widget pt-4 pt-lg-5 pb-5">
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="col-sm-12 col-md-12 col-lg mb-3 mb-lg-0"><?php dynamic_sidebar('footer-1'); ?></div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-2')) : ?>
                <div class="col-sm-12 col-md-12 col-lg mb-3 mb-lg-0"><?php dynamic_sidebar('footer-2'); ?></div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-3')) : ?>
                <div class="col-sm-12 col-md-12 col-lg mb-3 mb-lg-0"><?php dynamic_sidebar('footer-3'); ?></div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-4')) : ?>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-2"><?php dynamic_sidebar('footer-4'); ?></div>
            <?php endif; ?>
        </div>
        <hr>
        <div class="row">
            <?php if (is_active_sidebar('footer-5')) : ?>
                <div class="col-sm-12 col-md-4"><?php dynamic_sidebar('footer-5'); ?></div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-6')) : ?>
                <div class="col-sm-12 col-md-4"><?php dynamic_sidebar('footer-6'); ?></div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-7')) : ?>
                <div class="col-sm-12 col-md-4"><?php dynamic_sidebar('footer-7'); ?></div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-9')) : ?>
                <div class="col-md-12 mt-3"><?php dynamic_sidebar('footer-9'); ?></div>
            <?php endif; ?>
        </div>
        <hr>
        <?php if (is_active_sidebar('footer-8')) : ?>
            <div class="col-sm-12"><?php dynamic_sidebar('footer-8'); ?></div>
        <?php endif; ?>
    </div>
</div>

<!-- Widget campaign -->
<?php if (is_active_sidebar('layer-campaign')) : ?>
    <?php if (in_category('aktualnosci')  || is_page(array('o-paczce', 'komu-pomagamy', 'aktualnosci', 'paczka-seniorow', 'paczka-lekarzy', 'paczka-prawnikow', 'paczka-biznesu', 'dla-firm', 'wspieraja-nas'))) : ?>
        <?php dynamic_sidebar('layer-campaign'); ?>
    <?php endif; ?>
<?php endif; ?>