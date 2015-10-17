 <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Company Name
                </h1>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Login Here
                    </div>
                    <form method="POST" action="<?= base_url('login');?>" id="login_account" name="login_account">
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                        <input type="email" name="email" class="form-control" required data-validation-required-message="Please Enter Email Address." placeholder="Email Address">
                     </div>
                    <div class="panel-body">
                        <input type="password" name="password" class="form-control" required data-validation-required-message="Please Enter Your Password." placeholder="Password">
                     </div>
                     <div class="panel-body">
                     <button type="submit" class="btn btn-primary">Login</button>
                     </div> 
                     <div class="panel-body">
                     <a href="<?= base_url('register');?>">Start A New Clearance Application</a> | <a href="<?= base_url('reset');?>">Forgot Password</a>
                     </div>
                    </form>
                </div>
            </div>
         </div>
        <!-- /.row -->
