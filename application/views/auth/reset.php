<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->title;?></h1>
         </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form name="resetaccout" action="<?= base_url('reset');?>" id="resetaccount" method="POST">
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                            <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please Enter Your Email Address." placeholder="Enter Your Email Address">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                    <button type="submit" class="btn btn-primary">Reset Account</button>
                    </div>
                    </div>
                </form>
            </div>
	</div>