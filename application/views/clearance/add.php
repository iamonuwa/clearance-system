<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->title;?></h1>
         </div>
        </div>
    <div class="row">
            <div class="col-md-12">
                <form name="apply_clearance" id="apply_clearance" action="<?= base_url('clearance/apply');?>" method="POST">
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                        <label>Session (Graduation)</label>
                        <select name="sessions">
                        <?php foreach($sessions as $key => $value): ?>
                        <option name="<?= $value->name;?>"><?= $value->name;?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                        <label>Fullname: </label>
                            <input type="text" name="name" class="form-control" id="name" required data-validation-required-message="Please Enter Your Fullname." disabled="true" placeholder="Enter Your Fullname (Surname First)" value="<?= $this->aauth->get_user()->name;?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                        <label>Registration Number:</label>
                            <input type="text" name="pin" class="form-control" id="text" required data-validation-required-message="Please Enter Your ID Number (Registration Number For Students)" disabled="true" placeholder="Enter Your ID Number (Registration Number For Students)" value="<?= $this->aauth->get_user()->id_number;?>">
                        </div>
                    </div>
                     <div class="col-md-6 control-group form-group">
                        <div class="controls">
                        <label>Department:</label>
                    <input type="text" name="department" class="form-control" id="department" required data-validation-required-message="Please Enter Your Department." disabled="true" placeholder="Enter Your Department" value="<?= $this->aauth->get_user()->department;?>">
                     </div>
                     </div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" name="phone" class="form-control" id="phone" required data-validation-required-message="Please Enter Your Phone Number." disabled="true" placeholder="Enter Your Phone Number" value="<?= $this->aauth->get_user()->phone;?>">
                        </div>
                    </div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                        <label>Email Address:</label>
                    <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please Enter Your Email Address." disabled="true" placeholder="Enter Your Email Address" value="<?= $this->aauth->get_user()->email;?>">
                     </div>
                     </div>
                    <div id="success"></div>
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                    <button type="submit" class="btn btn-primary"> Apply </button>
                    </div>
                </form>
            </div>
</div>
