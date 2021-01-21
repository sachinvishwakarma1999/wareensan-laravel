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
                        <h4 class="title">Edit Claimant</h4>
                    </div>

                    <div class="page-right-body-content">
                        <div class="claimant-section">
                            <div class="claimant-head">
                                <div class="d-flex flex-wrap justify-content-between align-items-start">
                                    <div>
                                        <h4 class="title">Mdm Claimant Test 123</h4>
                                        <p class="subtitle">Status: <span>Not Scheduled Yet</span></p>
                                    </div>

                                    <a href="#" class="btn btn-primary waiting_btn">Waiting</a>
                                </div>
                            </div>

                            <div class="claimant-content">
                                <div class="tabs-part">
                                    <ul class="nav nav-tabs nav-bordered customtab">
                                        <li class="nav-item">
                                            <a href="#claimant-details" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                <span class="d-none d-lg-block">Claimant Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim-deceased" data-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                <span class="d-none d-lg-block">Claim Deceased</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#payments" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-none d-lg-block">Payments</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#reinternment" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-none d-lg-block">Exhumation/Reinternment</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#activity-log" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-none d-lg-block">Activity Log</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="claimant-details">
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

                                                            <div class="form-group">
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

                                                            <div class="form-group">
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
                                                            <div class="form-group">
                                                                <label class="form-label">Remarks</label>
                                                                <textarea name="remarks" class="form-control" placeholder="Enter any comments here."></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <ul class="form_btn_part d-flex flex-wrap">
                                                                <li>
                                                                    <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Update Changes">
                                                                </li>
                                                                <li>
                                                                    <input type="reset" name="reset" class="btn btn-primary theme_btn_outline" value="Clear Changes">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="claim-deceased">
                                            <div class="claim_deceased_tabs_content">
                                                <ul class="d-flex flex-wrap add-btn-part">
                                                    <li>
                                                        <a href="#" class="btn btn-primary theme_btn" data-target="#deceasedDetailsModal" data-toggle="modal">Add New Deceased</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-primary theme_btn" data-target="#searchDeceasedModal" data-toggle="modal">Print Registration Form</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-primary theme_btn">Print Verification Form</a>
                                                    </li>
                                                </ul>

                                                <div class="theme-data-table table-responsive">
                                                    <table class="table theme_table_widthout_pagination claim_deceased_table">
                                                        <thead>
                                                            <tr>
                                                                <th>Created</th>
                                                                <th class="remove-sort">Deceased Name</th>
                                                                <th class="remove-sort">New Plague Name</th>
                                                                <th class="remove-sort">Gender</th>
                                                                <th class="remove-sort">Date of Death</th>
                                                                <th>Block</th>
                                                                <th>Plot</th>
                                                                <th>Block Type</th>
                                                                <th class="remove-sort">Relation to Claimant</th>
                                                                <th class="remove-sort">Special Requirement</th>
                                                                <th class="remove-sort">Status</th>
                                                                <th class="remove-sort"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td></td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>Brother</td>
                                                                <td>
                                                                    <span class="requirment">SARS</span>
                                                                </td>
                                                                <td>Not Verified</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-primary theme_btn print_btn">Print QR label</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td></td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>Brother</td>
                                                                <td></td>
                                                                <td>Not Verified</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-primary theme_btn print_btn">Print QR label</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td></td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>Brother</td>
                                                                <td></td>
                                                                <td>Not Verified</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-primary theme_btn print_btn">Print QR label</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td></td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>Brother</td>
                                                                <td></td>
                                                                <td>Not Verified</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-primary theme_btn print_btn">Print QR label</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="payments">
                                            <div class="payment_tabs_content">
                                                <ul class="d-flex flex-wrap add-btn-part">
                                                    <li>
                                                        <a href="#" class="btn btn-primary theme_btn" data-toggle="modal" data-target="#addPaymentModal">Add New Payment</a>
                                                    </li>
                                                </ul>

                                                <div class="theme-data-table table-responsive">
                                                    <table class="table theme_table_widthout_pagination payment_table">
                                                        <thead>
                                                            <tr>
                                                                <th class="remove-sort">Bill Date</th>
                                                                <th class="remove-sort">Invoice No.</th>
                                                                <th class="remove-sort">Payment Mode</th>
                                                                <th class="remove-sort">Payment Amount</th>
                                                                <th class="remove-sort">Remarks</th>
                                                                <th class="remove-sort">Created By</th>
                                                                <th class="remove-sort">Plot</th>                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>#0000001</td>
                                                                <td>NETS</td>
                                                                <td>S$165.00</td>
                                                                <td></td>
                                                                <td>Humairah</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-primary theme_btn print_btn print_invoice_btn">Print Invoice</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="reinternment">
                                            <div class="claim_deceased_tabs_content">
                                                <h4 class="mb-2">Exhumation Schedule</h4>
                                                <ul class="d-flex flex-wrap add-btn-part">
                                                    <li>
                                                        <a href="#" class="btn btn-primary theme_btn" data-target="#ExhumationReinternmentModal" data-toggle="modal">Edit Schedule</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-primary theme_btn">Print Reinternment Certificate</a>
                                                    </li>
                                                </ul>

                                                <div class="theme-data-table table-responsive">
                                                    <table class="table theme_table_widthout_pagination claim_deceased_table">
                                                        <thead>
                                                            <!-- remove-sort -->
                                                            <tr>
                                                                <th>Exhumation Start</th>
                                                                <th>Deceased Name</th>
                                                                <th>New Plague Name</th>
                                                                <th>Gender</th>
                                                                <th>Date of Death</th>
                                                                <th>Block</th>
                                                                <th>Plot</th>
                                                                <th>Plot Type</th>
                                                                <th>NOK</th>
                                                                <th>New Plot</th>
                                                                <th>New Crypt</th>
                                                                <th>Position</th>
                                                                <th>Field Officer</th>
                                                                <th>Special</th>
                                                                <th>Status</th>
                                                                <th class="remove-sort text-right">
                                                                    <i class="mdi mdi-settings icon"></i>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>24/10/2020 08:00 AM</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>JOHNSON BIN</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>NOK NAME</td>
                                                                <td>1</td>
                                                                <td>0000</td>
                                                                <td>1</td>
                                                                <td>Field Officer A</td>
                                                                <td></td>
                                                                <td>Reinterred</td>
                                                                <td>
                                                                    <a href="#" class="view_btn">View more</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>24/10/2020 08:00 AM</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>JOHNSON BIN</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>NOK NAME</td>
                                                                <td>1</td>
                                                                <td>0000</td>
                                                                <td>1</td>
                                                                <td>Field Officer A</td>
                                                                <td></td>
                                                                <td>Reinterred</td>
                                                                <td>
                                                                    <a href="#" class="view_btn">View more</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>24/10/2020 08:00 AM</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>JOHNSON BIN</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>NOK NAME</td>
                                                                <td>1</td>
                                                                <td>0000</td>
                                                                <td>1</td>
                                                                <td>Field Officer A</td>
                                                                <td></td>
                                                                <td>Reinterred</td>
                                                                <td>
                                                                    <a href="#" class="view_btn">View more</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>24/10/2020 08:00 AM</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>JOHNSON BIN</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>NOK NAME</td>
                                                                <td>1</td>
                                                                <td>0000</td>
                                                                <td>1</td>
                                                                <td>Field Officer A</td>
                                                                <td></td>
                                                                <td>Reinterred</td>
                                                                <td>
                                                                    <a href="#" class="view_btn">View more</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="activity-log">
                                            <div class="activity_tabs_content">
                                                <div class="activity-table">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <td>Date</td>
                                                                <td>Staff Name</td>
                                                                <td>Action</td>
                                                                <td>Reason</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> 14 Sep 2019  04:14 PM</td>
                                                                <td>Humairah</td>
                                                                <td class="font-weight-semibold">Edit Deceased Details</td>
                                                                <td>Grave Discrepancy</td>
                                                            </tr>
                                                            <tr>
                                                                <td> 14 Sep 2019  04:14 PM</td>
                                                                <td>Humairah</td>
                                                                <td class="font-weight-semibold">Add Deceased to Claimant Registry under Claimant123</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td> 14 Sep 2019  04:14 PM</td>
                                                                <td>Humairah</td>
                                                                <td class="font-weight-semibold">Add Deceased to Claimant Registry under Claimant123</td>
                                                                <td></td>
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
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search Deceased Popup -->
    <div id="searchDeceasedModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg bgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Search Deceased</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <div class="search-form">
                        <label>Register Claims</label>
                        <form method="post">
                            <div class="d-flex flex-wrap">
                                <div class="form-input search-input-width">
                                    <input type="text" name="search" class="form-control" placeholder="Search by Deceased Name, Year of Death, Block No, Plot Number">
                                </div>
                                <ul class="btn_part d-flex flex-wrap">
                                    <li>
                                        <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Search">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>

                    <div class="theme-data-table table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Deceased Name</th>
                                    <th>Gender</th>
                                    <th>Date of Death</th>
                                    <th>Block</th>
                                    <th>Plot</th>
                                    <th>Sub Plot</th>
                                    <th>Grave Type</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ziana Zain Bte Mat Kesom</td>
                                    <td>F</td>
                                    <td>23 Apr 1945</td>
                                    <td>53</td>
                                    <td>466</td>
                                    <td></td>
                                    <td>Principal</td>
                                </tr>
                                <tr>
                                    <td>Ziana Zain Bte Mat Kesom</td>
                                    <td>F</td>
                                    <td>23 Apr 1945</td>
                                    <td>53</td>
                                    <td>466</td>
                                    <td></td>
                                    <td>Principal</td>
                                </tr>
                                <tr>
                                    <td>Ziana Zain Bte Mat Kesom</td>
                                    <td>F</td>
                                    <td>23 Apr 1945</td>
                                    <td>53</td>
                                    <td>466</td>
                                    <td></td>
                                    <td>Principal</td>
                                </tr>
                                <tr>
                                    <td>Ziana Zain Bte Mat Kesom</td>
                                    <td>F</td>
                                    <td>23 Apr 1945</td>
                                    <td>53</td>
                                    <td>466</td>
                                    <td></td>
                                    <td>Principal</td>
                                </tr>
                            </tbody>                                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- / Search Claimant Popup -->

<!-- Add Payment Popup -->
    <div id="addPaymentModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg bgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Payment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <div class="invoice-detail">
                        <ul class="d-flex flex-wrap">
                            <li>
                                <span>Invoice No.</span>
                                <span class="detail">INV002036</span>
                            </li>
                            <li>
                                <span>Bill Date:</span>
                                <span class="detail">9 September 2020</span>
                            </li>
                        </ul>
                    </div>
                    <div class="item-box item-detail">
                        <h4 class="title">Item Details</h4>
                        <div class="theme-data-table table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Deceased Name</th>
                                        <th>New Plaque Name</th>
                                        <th>Gender</th>
                                        <th>Date of Death</th>
                                        <th>Block</th>
                                        <th>Plot</th>
                                        <th>Block Type</th>
                                        <th>Relation to Claimant</th>                                  
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>JOHNSON BIN MAT SALLEH</td>
                                        <td>JOHNSON</td>
                                        <td>M</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td>Principal</td>
                                        <td>Principal</td>
                                        <td>
                                            <a href="#" class="view_btn">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JOHNSON BIN MAT SALLEH</td>
                                        <td>JOHNSON</td>
                                        <td>M</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td>Principal</td>
                                        <td>Principal</td>
                                        <td>
                                            <a href="#" class="view_btn">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JOHNSON BIN MAT SALLEH</td>
                                        <td>JOHNSON</td>
                                        <td>M</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td>Principal</td>
                                        <td>Principal</td>
                                        <td>
                                            <a href="#" class="view_btn">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JOHNSON BIN MAT SALLEH</td>
                                        <td>JOHNSON</td>
                                        <td>M</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td>Principal</td>
                                        <td>Principal</td>
                                        <td>
                                            <a href="#" class="view_btn">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>                                        
                            </table>
                        </div>
                    </div>

                    <div class="item-box billing-detail">
                        <h4 class="title">Billing</h4>
                        <div class="billing-detail-list">
                            <ul>
                                <li>
                                    <label>No. of Supplementary Grave</label>
                                    <span>2</span>
                                </li>
                                <li>
                                    <label>Sub-Total</label>
                                    <span>S$160.00</span>
                                </li>
                                <li>
                                    <label>GST @ 7%</label>
                                    <span>S$5.6</span>
                                </li>
                                <li class="pay-amount">
                                    <label>Amount to Pay</label>
                                    <span>S$165.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item-box payment-mode">
                        <h4 class="title">Mode of Payment</h4>
                        <div class="d-flex flex-wrap">
                            <div class="cash-input">
                                <select class="form-control">
                                    <option>Cash</option>
                                </select>
                            </div>

                            <div class="payment-input">
                                <input type="number" name="payment" class="form-control" placeholder="S$165.00">
                            </div>

                            <a href="#" class="btn btn-primary theme_btn">Confirm</a>
                        </div>
                    </div>

                    <div class="form-group remarks-box">
                        <label class="form-label">Remarks</label>
                        <textarea name="remarks" class="form-control" placeholder="Enter any comments here."></textarea>
                    </div>

                    <div class="payment-save-btn-part">
                        <ul class="form_btn_part d-flex flex-wrap justify-content-end">
                            <li>
                                <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Save Changes">
                            </li>
                            <li>
                                <button type="button" class="btn btn-primary theme_btn_outline" data-dismiss="modal">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- / Add Payment Popup -->

<!-- Deceased Details Popup -->
    <div id="deceasedDetailsModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg fullWidthModal body-padding-none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Deceased Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="claimant-top-part">
                            <label class="form-label">Deceased Name on New Plaque</label>
                            <input type="text" name="claimant" placeholder="Claimant Test 123" class="form-control w-45">
                        </div>

                        <div class="deceased-detail-part">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="deceased-detail-box">
                                    <div class="deceased-box-head">
                                        <h4 class="title">Deceased Details</h4>
                                    </div>

                                    <div class="deceased-box-content">
                                        <div class="deceased-list">
                                            <div class="d-flex flex-wrap">
                                                <div class="deceased-list-box">
                                                    <label>Deceased Name</label>
                                                    <span>Claimant Test 123</span>
                                                </div>

                                                <div class="deceased-list-box">
                                                    <label>Deceased Type</label>
                                                    <span>Principal</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group relationship_input">
                                            <label class="form-label">Relationship to Claimant</label>
                                            <input type="text" name="relationship" placeholder="claimant" class="form-control">
                                        </div>
                                        <div class="form-group block_input_part">
                                            <div class="d-flex flex-wrap">
                                                <div class="block_input">
                                                    <label class="form-label">Block</label>
                                                    <input type="number" name="block" class="form-control">
                                                </div>
                                                <div class="block_input">
                                                    <label class="form-label">Plot No.</label>
                                                    <input type="number" name="plot_no" class="form-control">
                                                </div>
                                                <div class="block_input">
                                                    <label class="form-label">Sub Plot No.</label>
                                                    <input type="number" name="sub_plot_no" class="form-control" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Remarks</label>
                                            <textarea name="remarks" class="form-control" placeholder="Enter any comments here."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="deceased-detail-box">
                                    <div class="deceased-box-head d-flex align-items-center">
                                        <h4 class="title">Verification Documents</h4>
                                        <div class="custom-upload-part">
                                            <input type="file" name="file" id="file">
                                            <label class="btn btn-primary theme_btn upload_btn" for="file">Upload</label>
                                        </div>                                    
                                    </div>
                                    <div class="deceased-box-content">
                                        <div class="upload-layout">
                                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="file-info">
                                                    <div class="d-flex align-items-center">
                                                        <span class="mdi mdi-file-outline file-icon"></span>

                                                        <div class="upload-path">
                                                            <span>Claimstest123_Burial Certificate.pdf</span>
                                                            <span>27KB PDF Document</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="removeBtn">
                                                    <span class="mdi mdi-minus"></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="drag-file-box">
                                            <div action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="payment-save-btn-part mt-3">
                            <ul class="form_btn_part d-flex flex-wrap align-items-center justify-content-end">
                                <li>
                                    <a href="#" class="delete_btn">Delete Record</a>
                                </li>
                                <li>
                                    <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Save Changes">
                                </li>
                                <li>
                                    <button type="button" class="btn btn-primary theme_btn_outline" data-dismiss="modal">Close</button>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- / Deceased Details Popup -->


     <div id="ExhumationReinternmentModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg fullWidthModal body-padding-none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Deceased Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="claimant-top-part about-deceased">
                            <h3>Johnson Bin Mat Salleh</h3>
                            <div class="d-flex">
                                <span class="mr-2">Gender: M</span>
                                <span class="mr-2">Date of death: 23 Apr 1945</span>
                                <span class="mr-2">Special:</span>
                            </div>
                        </div>

                        <div class="deceased-detail-part">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="deceased-detail-box d-flex flex-wrap justify-content-between border-0 p-0">
                                    <div class="d-flex flex-wrap justify-content-between show-border">
                                        <div class="col-6 d-flex flex-wrap">
                                            <div>
                                                <div class="deceased-box-head">
                                                    <h4 class="title">Exhumation Details</h4>
                                                </div>
                                                <div class="deceased-box-content">
                                                    <div class="form-group relationship_input">
                                                        <label class="form-label">Name of NOK</label>
                                                        <input type="text" name="relationship" placeholder="NOK Name" class="form-control">
                                                    </div>
                                                    <div class="form-group relationship_input deceased-name">
                                                        <label>Deceased Name</label>
                                                        <span class="value">Johnson Bin Mat Salleh</span>
                                                    </div>
                                                    <div class="form-group block_input_part">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="deceased-name mr-3">
                                                                <label>Plot Type</label>
                                                                <span class="value">Principal</span>
                                                            </div>
                                                            <div class="deceased-name mr-3">
                                                                <label>Block</label>
                                                                <span class="value">6</span>
                                                            </div>
                                                            <div class="deceased-name mr-3">
                                                                <label>Plot No.</label>
                                                                <span class="value">222</span>
                                                            </div>
                                                            <div class="deceased-name mr-3">
                                                                <label>Sub Plot No.</label>
                                                                <span class="value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group relationship_input">
                                                        <label class="form-label">Grave Type</label>
                                                        <input type="text" name="relationship" placeholder="2 Trees with Stones" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group align-self-end mt-4">
                                                <a href="#" class="btn btn-primary theme_btn_outline">View Exhumation Consent</a>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap">
                                            <div>
                                                <div class="deceased-box-head">
                                                    <h4 class="title">Reinternment Details</h4>
                                                </div>
                                                <div class="deceased-box-content">
                                                    <div class="form-group relationship_input">
                                                        <label class="form-label">Remains Type</label>
                                                        <input type="text" name="relationship" placeholder="NR" class="form-control" style="width: 70px;">
                                                    </div>
                                                    <div class="form-group block_input_part">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="deceased-name mr-3">
                                                                <label>New Plot</label>
                                                                <span class="value">0000</span>
                                                            </div>
                                                            <div class="deceased-name mr-3">
                                                                <label>New Crypt</label>
                                                                <span class="value">8888</span>
                                                            </div>
                                                            <div class="deceased-name mr-3">
                                                                <label>Position</label>
                                                                <span class="value">1</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group relationship_input">
                                                        <label class="form-label">New Name on Plague</label>
                                                        <input type="text" name="relationship" placeholder="Johnson Bin" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group align-self-end mt-4">
                                                <a href="#" class="btn btn-primary theme_btn_outline">Sign Reinternment Consent</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group w-100 mt-3">
                                        <label class="form-label">Remarks</label>
                                        <textarea name="remarks" class="form-control" placeholder="Enter any comments here." style="border: 1px solid #454B60;"></textarea>
                                    </div>
                                </div>

                                <div class="deceased-detail-box">
                                    <div class="deceased-box-head d-flex align-items-center">
                                        <h4 class="title">Verification Documents</h4>
                                        <div class="custom-upload-part">
                                            <input type="file" name="file" id="file">
                                            <label class="btn btn-primary theme_btn upload_btn" for="file">Upload</label>
                                        </div>                                    
                                    </div>
                                    <div class="deceased-box-content">
                                        <div class="upload-layout">
                                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="file-info">
                                                    <div class="d-flex align-items-center">
                                                        <span class="mdi mdi-file-outline file-icon"></span>

                                                        <div class="upload-path">
                                                            <span>Claimstest123_Burial Certificate.pdf</span>
                                                            <span>27KB PDF Document</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="removeBtn">
                                                    <span class="mdi mdi-minus"></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="drag-file-box">
                                            <div action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>

                        <div class="payment-save-btn-part mt-3">
                            <ul class="form_btn_part d-flex flex-wrap align-items-center justify-content-end">
                                <li>
                                    <a href="#" class="btn complete-reinternment">Complete Reinternment</a>
                                    <!-- <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Save Changes"> -->
                                </li>
                            </ul>
                        </div>

                        <div class="modal-dialog" id="ConfirmReinternmentModal">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Edit Deceased Details</h4>
                                    <button type="button" class="close cancel" aria-hidden="true">×</button>
                                </div>

                                <div class="modal-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <p>By Signing this document with an electronic signature, I, NOK Name  agree to the Reinternment of Johnson Bin Mat Salleh with the new Plague name Johnson B Mat on Monday, 24 October 2020 15:00 PM </p>
                                            <div>
                                                <div class="text-right mb-1">
                                                    <a href="#" style="color: #F79732;text-decoration: underline; display: inline-block;">Clear</a>  
                                                </div>
                                                <textarea class="form-control" placeholder="Grave Discrepancy"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary theme_btn">Accept</button>
                                    <button type="button" class="btn btn-primary theme_btn_outline cancel">Cancel</button>                    
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        
<!-- / Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#ConfirmReinternmentModal").hide();
        $('.complete-reinternment').click(function(event) {
            $("#ConfirmReinternmentModal").show();
        });

        $('#ConfirmReinternmentModal .cancel').click(function(event) {
            $("#ConfirmReinternmentModal").hide();
        });
    });
</script>
<!-- / Footer