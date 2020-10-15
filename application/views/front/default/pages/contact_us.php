<!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common"  style="background:#213165" data-bgimage="<?php echo base_url();?>assets/img/figure/breadcumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Contact Us</h1>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url();?>">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Blog Area Start Here -->
        <section class="section-padding-12-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-box-layout1">
                        <?php /*?><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15069.342212963726!2d73.1085099!3d19.2242024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x663e0d480f4f0171!2sOmkar%20Cool%20Services!5e0!3m2!1sen!2sin!4v1597413323927!5m2!1sen!2sin" frameborder="0" style="width:100%; height:400px;border:0;padding-bottom:30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><?php */?>
                            <br>
                            <div class="contact-info">
                                <div class="media media-none-lg media-none--sm col-md-6">
                                    <div class="item-icon">
                                        <i class="flaticon-call-answer"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>Phone:</h4>
                                        <ul>
                                            <li><a style="color:black;" href="tel:<?php echo $this->settings_model->get_phone_number();?>"><?php echo $this->settings_model->get_phone_number();?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media media-none-lg media-none--sm col-md-6">
                                    <div class="item-icon">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>E-mail:</h4>
                                        <ul>
                                            <li><a style="color:black;" href="mailto:<?php echo $this->settings_model->get_email_address();?>"><?php echo $this->settings_model->get_email_address();?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-info">
                                <div class="media media-none-lg media-none--sm col-md-12 " style="clear:both;">
                                    <div class="item-icon">
                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>Location:</h4>
                                        <ul>
                                            <li><?php echo $this->settings_model->get_office_address();?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-break-md sidebar-widget-area">
                        <div class="widget widget-contact-form">
                            <div class="heading-layout4">
                                <h4>Have you Any Question?</h4>
                            </div>
                            <form class="contact-form-box" method="post" id="contact-form">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-user"></i></div>
                                        <input type="text" placeholder="Name*" class="form-control" name="name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" placeholder="E-mail Address" class="form-control" name="email" data-error="email field is required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-phone"></i></div>
                                        <input type="text" placeholder="Phone*" class="form-control" name="phone" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-question"></i></div>
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" data-error="Phone field is required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fa fa-comments"></i></div>
                                        <textarea placeholder="Address" class="textarea form-control" name="message" id="form-message" rows="4" cols="20" 
                                        data-error="Message field is required" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Send Message</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End Here -->