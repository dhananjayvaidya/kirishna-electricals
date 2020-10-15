<div class="heading-layout4">
    <h4>Have you Any Question?</h4>
</div>
<form class="contact-form-box" id="contact-form">
    <div class="row">
        <div class="col-12 form-group">
            <div class="form-icon"><i class="fas fa-user"></i></div>
            <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group">
            <div class="form-icon"><i class="fas fa-envelope"></i></div>
            <input type="email" placeholder="E-mail Address" class="form-control" name="email" data-error="email field is required" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group">
            <div class="form-icon"><i class="fas fa-phone"></i></div>
            <input type="text" placeholder="Phone" class="form-control" name="phone" data-error="Phone field is required" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group">
            <div class="form-icon"><i class="fas fa-question"></i></div>
            <input type="text" placeholder="Subject" class="form-control" name="subject" data-error="Phone field is required" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group">
            <div class="form-icon"><i class="fas fa-comments"></i></div>
            <textarea placeholder="Address" class="textarea form-control" name="message" id="form-message" rows="4" cols="20" 
            data-error="Message field is required" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group">
            <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Send Message</button>
        </div>
    </div>
    <div class="form-response"></div>
</form>