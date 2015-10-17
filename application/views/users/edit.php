<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->title;?></h1>
         </div>
        </div>
	<div class="row">
            <div class="col-md-12">
                <form name="create_accout" id="create_account" method="POST">
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please Enter Your Fullname." placeholder="Enter Your Fullname (Surname First)" value="<?= $this->aauth->get_user()->name;?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please Enter Your Phone Number." placeholder="Enter Your Phone Number" value="<?= $this->aauth->get_user()->phone;?>">
                        </div>
                    </div>
                   	<div class="col-md-6 control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" id="text" required data-validation-required-message="Please Enter Your ID Number (Registration Number For Students)" placeholder="Enter Your ID Number (Registration Number For Students)" value="<?= $this->aauth->get_user()->id_number;?>">
                        </div>
                    </div>
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                        <select name="department">
                        	<option><?= (!is_null($this->aauth->get_user()->department)) ? $this->aauth->get_user()->department : 'Computer Science' ;?></option>
                        </select>
                    </div>
                   	</div>
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                        <select name="gender">
                            <option>
                            <?php if (!is_null($this->aauth->get_user()->gender)) {
                                $this->aauth->get_user()->gender;
                            }
                            else{
                            foreach($gender as $key => $value): echo '<option name="'.$value->name.'">'.$value->name.'</option>' endforeach;
                            }?>
                            </option>
                        </select>
                    </div>
                   	</div>
                   	<div class="col-md-12 control-group form-group">
                        <div class="controls">
                   	<input type="email" class="form-control" id="email" required data-validation-required-message="Please Enter Your Email Address." placeholder="Enter Your Email Address" value="<?= $this->aauth->get_user()->email;?>">
                     </div>
                     </div>
                    <div id="success"></div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                    <button type="submit" class="btn btn-primary">Modify Account</button>
                    </div>
                </form>
            </div>
</div>