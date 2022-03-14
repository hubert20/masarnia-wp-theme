<?php
$main_open_hours_icon = get_field('main_open_hours_icon');
$main_open_hours_title = get_field('main_open_hours_title');
$main_open_hours_cnt = get_field('main_open_hours_cnt');
$main_open_hours_background = get_field('main_open_hours_background');
?>

<section class="opening-hours py-4 py-lg-5" style="background-image: url('<?php echo $main_open_hours_background; ?>');" id="opening-hours">
    <div class="container">
        <h2 class="text-center standard-title-3 mb-0">
            <?php echo $main_open_hours_title; ?>
        </h2>
        <div class="sc-title d-flex justify-content-center mb-3 mb-lg-4">
            <div class="sc-title__line">
                <img width="50" height="50" src="<?php echo $main_open_hours_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $main_open_hours_icon['alt']; ?>">
            </div>
        </div>
        <?php echo $main_open_hours_cnt; ?>
        <!-- <div class="row">
            <div class="col-lg-6 d-flex flex-column">
                <div class="opening-hours__box p-3 flex-grow-1">
                    <h4 class="standard-title-6 oswald-font text-brown-brand">PŁOCK:</h4>
                    <ul class="list-unstyled opening-hours__list">
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. GIERZYŃSKIEGO 17</span> <span class="col-lg-4">wt.- pt.- 7.00-18.00</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. REMBIELIŃSKIEGO 3</span> <span class="col-lg-4">wt.- pt.- 7.30-17.00</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. DOBRZYŃSKA 23</span> <span class="col-lg-4">wt.- pt.- 7.00-18.00</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. KRÓLEWIECKA 23 A</span> <span class="col-lg-4">wt.- pt.- 7.00-17.30</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. HUBALCZYKÓW 1B</span> <span class="col-lg-4">wt.- pt.- 7.00-17.00</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                    </ul>
                    <hr>
                    <h4 class="standard-title-6 oswald-font text-brown-brand">KUTNO:</h4>
                    <ul class="list-unstyled opening-hours__list">
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. ZAMOYSKIEGO 4</span> <span class="col-lg-4">wt.- pt.- 6.30-18.00</span> <span class="col-lg-4">sob. 6.30-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. KRÓLEWSKA 11</span> <span class="col-lg-4">wt.- pt.- 7.00-17.00</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled opening-hours__list">
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">BARUCHOWO 44</span> <span class="col-lg-4">wt.- pt.- 7.30-17.00</span> <span class="col-lg-4">sob. 6.30-13.00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column">
                <div class="opening-hours__box p-3 flex-grow-1">
                    <h4 class="standard-title-6 oswald-font text-brown-brand">GOSTYNIN:</h4>
                    <ul class="list-unstyled opening-hours__list">
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. ARMII KRAJOWEJ 14</span> <span class="col-lg-4">wt.- pt.- 6.00-17.00</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. POPIEŁUSZKI 7</span> <span class="col-lg-4">wt.- pt.- 7.00-18.00</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. KOŚCIUSZKI 4</span> <span class="col-lg-4">wt.- pt.- 7.00-17.30</span> <span class="col-lg-4">sob. 7.00-13.00</span></li>
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. ZAMKOWA 2</span> <span class="col-lg-4">wt.- pt.- 7.00-17.00</span> <span class="col-lg-4">sob. 6.00-13.00</span></li>
                    </ul>
                    <hr>
                    <h4 class="standard-title-6 oswald-font text-brown-brand">ŻYCHLIN:</h4>
                    <ul class="list-unstyled opening-hours__list">
                        <li class="row mb-3 mb-lg-0"><span class="col-lg-4 fw-bold">UL. NARUTOWICZA 17</span> <span class="col-lg-4">wt.- pt.- 8.00-17.00</span> <span class="col-lg-4">sob. 8.00-13.00</span></li>
                    </ul>
                    <hr>
                    <h4 class="standard-title-6 oswald-font text-brown-brand">BIELSK:</h4>
                    <ul class="list-unstyled opening-hours__list">
                        <li class="row"><span class="col-lg-4 fw-bold">UL. PLAC WOLNOŚCI 1</span> <span class="col-lg-4">wt.- pt.- 6.30-17.30</span> <span class="col-lg-4">sob. 6.30-13.00</span></li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</section>