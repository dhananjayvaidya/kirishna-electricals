<!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" style="background:#071dd2" data-bg-imge="img/figure/breadcumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Our Services</h1>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url();?>">Home</a>
                                </li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view("front/default/sections/all-services-grid.php",array("hide_heading"=>true));?>
        