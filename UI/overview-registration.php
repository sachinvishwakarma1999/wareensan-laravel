<!--- Header -->
<?php include 'includes/header.php'; ?>
<!-- / Header -->

<!-- Content -->
<section class="container-fluid">
    <div class="row">
        <div class="page-body w-100">
            <div class="d-flex flex-wrap">
                <!-- Sidebar -->
                    <?php include 'includes/sidebar.php'; ?>
                <!-- / Sidebar -->

                <div class="page-right-body">
                    <div class="page-right-header">
                        <ul class="d-flex flex-wrap menu-list">
                            <li>
                                <a href="overview.php">Overview</a>
                            </li>
                            <li class="active">
                                <a href="overview-registration.php">Registration</a>
                            </li>
                            <li>
                                <a href="exhumation-reinternment.php">Exhumation/Reinternment</a>
                            </li>
                        </ul>
                    </div>

                    <div class="page-right-body-content">
                        <div class="tiles-section">
                            <div class="tiles-content">
                                <div class="d-flex flex-wrap">
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center">
                                            <h4 class="number" style="color: #BA79CB;">5</h4>
                                            <span class="label">E-appointment</span>
                                        </div>
                                    </div>

                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center">
                                            <h4 class="number" style="color: #439DF5;">5</h4>
                                            <span class="label">Waiting</span>
                                        </div>
                                    </div>

                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center">
                                            <h4 class="number" style="color: #F79732;">5</h4>
                                            <span class="label">Verification In Progress</span>
                                        </div>
                                    </div>

                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center">
                                            <h4 class="number">5</h4>
                                            <span class="label">Completed</span>
                                        </div>
                                    </div>

                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center">
                                            <h4 class="number" style="color: #85CD9D;">5</h4>
                                            <span class="label">Walk in/ Enquiries</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="theme-box">
                            <div class="theme-box-head">
                                <h4 class="title">Registration Log</h4>
                            </div>

                            <div class="theme-box-content">
                                <div class="search-form">
                                    <label>Register Claims</label>
                                    <form method="post">
                                        <div class="d-flex flex-wrap">
                                            <div class="form-input search-input-width">
                                                <input type="text" name="search" class="form-control" placeholder="Search  Claimant Name, ID, Deceased Name">
                                            </div>
                                            <ul class="btn_part d-flex flex-wrap">
                                                <li>
                                                    <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Search">
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-primary theme_btn" data-toggle="modal" data-target="#addNewClaimantModal">Create New Claim</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>

                                <div class="theme-data-table table-responsive our-dropdown-table">
                                    <table class="table registration_table">
                                        <thead>
                                            <tr>
                                                <th class="remove-sort">No.</th>
                                                <th>Status</th>
                                                <th class="remove-sort">Claimant ID</th>
                                                <th class="remove-sort">Claimant Name</th>
                                                <th class="remove-sort">Deceased Name</th>
                                                <th>Date of Death</th>
                                                <th>Block</th>
                                                <th>Plot</th>
                                                <th>Session</th>
                                                <th class="remove-sort text-right">
                                                    <i class="mdi mdi-settings icon"></i>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="10">
                                                    <div class="table-dropdown-btn">
                                                        <span>E- Registration <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="table-dropdown-data register-color">
                                                        <table class="table border-0 table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="10">
                                                    <div class="table-dropdown-btn">
                                                        <span>Verification In Progress <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="table-dropdown-data progress-color">
                                                        <table class="table border-0 table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="10">
                                                    <div class="table-dropdown-btn">
                                                        <span>Waiting <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="table-dropdown-data waiting-color">
                                                        <table class="table border-0 table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="10">
                                                    <div class="table-dropdown-btn">
                                                        <span>Completed <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="table-dropdown-data completed-color">
                                                        <table class="table border-0 table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>07</td>
                                                                    <td>Verification In progress</td>
                                                                    <td>S1234567A</td>
                                                                    <td>Claimant Name</td>
                                                                    <td>Deceased Name</td>
                                                                    <td>Date of Death</td>
                                                                    <td>Block</td>
                                                                    <td>Plot</td>
                                                                    <td>S1</td>
                                                                    <td>
                                                                        <a href="#" class="view_btn">View Claim</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search Claimant Popup -->
    <div id="searchClaimantModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg bgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Search Claimant</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <div class="search-form">
                        <label>Register Claims</label>
                        <form method="post">
                            <div class="d-flex flex-wrap">
                                <div class="form-input search-input-width">
                                    <input type="text" name="search" class="form-control" placeholder="Search by Claimant Name, Claimant ID, Deceased Name, Block No, Plot Number">
                                </div>
                                <ul class="btn_part d-flex flex-wrap">
                                    <li>
                                        <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Search">
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-primary theme_btn">Create New Claim</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>

                    <div class="theme-data-table table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Claimant ID</th>
                                    <th>Claimant Name</th>
                                    <th>Gender</th>
                                    <th>Contact No.</th>
                                    <th>Email Address</th>
                                    <th>Address</th>
                                    <th>Remarks</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>S1234567A</td>
                                    <td>Claimant Name</td>
                                    <td>M</td>
                                    <td>91234567 (Daughter)</td>
                                    <td>Claimanttest@wareesan.com</td>
                                    <td>Blk 123 Street Address #12-34</td>
                                    <td>Remarks here</td>
                                </tr>
                                <tr>
                                    <td>S1234567A</td>
                                    <td>Claimant Name</td>
                                    <td>M</td>
                                    <td>91234567 (Daughter)</td>
                                    <td>Claimanttest@wareesan.com</td>
                                    <td>Blk 123 Street Address #12-34</td>
                                    <td>Remarks here</td>
                                </tr>
                                <tr>
                                    <td>S1234567A</td>
                                    <td>Claimant Name</td>
                                    <td>M</td>
                                    <td>91234567 (Daughter)</td>
                                    <td>Claimanttest@wareesan.com</td>
                                    <td>Blk 123 Street Address #12-34</td>
                                    <td>Remarks here</td>
                                </tr>
                                <tr>
                                    <td>S1234567A</td>
                                    <td>Claimant Name</td>
                                    <td>M</td>
                                    <td>91234567 (Daughter)</td>
                                    <td>Claimanttest@wareesan.com</td>
                                    <td>Blk 123 Street Address #12-34</td>
                                    <td>Remarks here</td>
                                </tr>
                            </tbody>                                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- / Search Claimant Popup -->

<!-- Add New Claimant Popup -->
    <div id="addNewClaimantModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg bgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Claimant</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <div class="claimant-edit-form-part">
                        <form method="post">
                            <div class="claimant-top-part">
                                <div class="claim_num_part">
                                    <label class="form-label">Claims No.</label>
                                    <span class="claim-num">000001</span>
                                </div>
                                <div class="salutation_part">
                                    <label class="form-label">Salutation</label>
                                    <select class="form-control">
                                        <option>Mdm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Claimant Name</label>
                                        <input type="text" name="claimant_name" class="form-control" placeholder="Claimant Test 123">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Claimant NRIC/FIN/Passport no.</label>
                                        <input type="text" name="passport_no" class="form-control w-85" placeholder="S1234567A">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Contact No.</label>
                                        <div class="d-flex flex-wrap add_new_column">
                                            <input type="number" name="contact" class="form-control" placeholder="91234567 (Daughter)">
                                            <a href="#" class="btn btn-primary theme_btn">Add new +</a>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Claimanttest@wareesan.com">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <div class="d-flex flex-wrap postal_column">
                                            <input type="text" name="postal_code" class="form-control" placeholder="123456">
                                            <a href="#" class="btn btn-primary theme_btn">Get Address</a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Block / House</label>
                                        <input type="text" name="block_house" class="form-control" placeholder="blk123">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Street</label>
                                        <input type="text" name="street" class="form-control" placeholder="Street Address">
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-md-6 row justify-content-between level_column">
                                            <div class="input_box">
                                                <label class="form-label">Level</label>
                                                <input type="number" name="level" class="form-control" placeholder="05">
                                            </div>
                                            <div class="input_box">
                                                <label class="form-label">Unit</label>
                                                <input type="number" name="unit" class="form-control" placeholder="27">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Remarks</label>
                                        <textarea name="remarks" class="form-control" placeholder="Enter any comments here."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <ul class="form_btn_part d-flex flex-wrap">
                                        <li>
                                            <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Create Claim">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- / Add New Claimant Popup -->

<!-- / Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<script>
    $(document).ready(function() {
        $('.table-dropdown-data').hide();
        $('.table-dropdown-btn').click(function(event) {
            $(this).toggleClass('active');
            $(this).next('.table-dropdown-data').slideToggle();
        });
    });
</script>
<!-- / Footer