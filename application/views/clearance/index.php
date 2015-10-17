<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><?= $this->title;?>
                </h4>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                <?php
                if($this->aauth->is_member('User')){
                    echo '<a href="'.base_url("clearance/apply").'" class="list-group-item">Clearance Application</a>
                          <a href="'.base_url("clearance/status").'" class="list-group-item">Check Status</a>';
                 }
                 elseif($this->aauth->is_member('Department')){
                    echo '<a href="'.base_url("clearance/view").'" class="list-group-item">View Clearance Application</a>';
                 }
                 elseif($this->aauth->is_member('Administrator')){
                    echo '<a href="'.base_url("site/stats").'" class="list-group-item">Site Stats</a>';
                 }
                   ?>
                    
                </div>
            </div>
            <div class="col-md-9">
                <h2>Section Heading</h2>
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Date Applied</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($clearance as $key => $value):
            echo '<td>'.$this->aauth->get_user($value->user_id)->name.'</td>'
                .'<td>'.$this->aauth->get_user($value->user_id)->id_number.'</td>'
                .'<td>'.$value->last_activity.'</td>'
                .'<td>'.anchor(base_url('clearance/preview/'.$value->id), 'Preview').'</td>';
            endforeach;?>
        </tbody>
    </table>
                </div>
        </div>

  