<?php include_once('includes/header.php'); ?>

<!--START TOP AREA-->
<header class="top-area single-page" id="home">
    <?php include_once('includes/nav.php'); ?>

    <div class="page-barner-area">
        <div class="area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="barner-text center white mt50">
                        <h1>Newsletter</h1>
                        <ul class="breadcrumb no-bg mb0">
                            <li><a href="/">Home</a></li>
                            <li class="active"><a href="/newsletter.php">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--END TOP AREA-->

<div class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h2>Join Our Newsletter</h2>
                    <p>You’ll also get our occasional bulletins and information about how you can support our work.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="text-icon-box mb50 center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="box-icon">
                        <i class="ti-headphone-alt"></i>
                    </div>
                    <p>+0044 545 989 62698</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="text-icon-box relative mb50 center  wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="box-icon">
                        <i class="ti-location-pin"></i>
                    </div>
                    <p>28 Green Tower, Street Name New York City, USA</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="text-icon-box relative mb50 xs-mb0 center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="box-icon">
                        <i class="ti-email"></i>
                    </div>
                    <p>acomha@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="contact-form wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <form action="process.php" id="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="form-group" id="name-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="form-group" id="email-field">
                                    <div class="form-input">
                                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group mb0 text-center">
                                    <button type="submit">Send My Newsletter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>