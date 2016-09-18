<?php
include './classes/database.php';
$listCategories = searchCategories($conection);
$service = array(
    'serv_cat_id' => '',
    'serv_cat_nome' => ''
);
?>
<section id="contact">
    <div class="container">
        <div class="box last">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Needing help?</h1>
                    <p>Contact us and let's have a coffee.</p>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="./classes/sendemail.php" role="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" required="required" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Phone" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" required="required" name="selection">
                                        <option selected disabled>Selection...</option>
                                        <?php foreach ($listCategories as $service) : ?>
                                            <option value="<?php echo $service['serv_cat_id']; ?>"><?php echo $service['serv_cat_nome']; ?></option>
                                        <?php endforeach; ?> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--/.col-sm-6-->
                <div class="col-sm-6">
                    <h1>Call us </h1>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <abbr title="Phone">P:</abbr> +55(51)9853-0821<br/>
                                <abbr title="Phone">P:</abbr> +55(55)3599-1246
                            </address>
                        </div>
                    </div>
                    <!--                    <h1>Our Address</h1>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Twitter, Inc.</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Twitter, Inc.</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                        </div>-->
                    <h1>Our Address</h1>
<!--                    <h1>Connect with us</h1>-->
                    <div class="row">
                        <div class="col-md-12 embed-responsive embed-responsive-16by9">
<!--                                                    <div class="col-md-6">
<ul class="social">
                                                            <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                                            <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                                        </ul>-->
                            <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=adolfo%20kauffman%20196%20sapiranga&key=AIzaSyD0u1Ho5jBJQ5p_4o74UbLtpNg7_4epe6w" allowfullscreen></iframe>
                        </div>
                        <!--                        <div class="col-md-6">
                                                    <ul class="social">
                                                        <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                                        <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#contact-->