 <div class="container">
 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->title;?>
            </div>
        </div>
<!-- Content Row -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    Department Of Computer Science<br>
                    Akanu Ibiam Fed. Poly, Unwana<br>
                    Ebonyi State, Nigeria
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: +234 (0) 806 245 7326</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:admin@company.com">admin@company.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/isaac.onuwa1"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://ng.linkedin.com/pub/nnachi-isaac-onuwa/78/544/109"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/isaac_onuwa"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://google.com/+IsaacOnuwa"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

        </div>