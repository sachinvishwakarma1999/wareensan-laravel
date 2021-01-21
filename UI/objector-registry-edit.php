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
                        <h4 class="title">Edit Objector</h4>
                    </div>

                    <div class="page-right-body-content">
                        <div class="claimant-section">
                            <div class="claimant-head">
                                <div class="d-flex flex-wrap justify-content-between align-items-start">
                                    <div>
                                        <h4 class="title">Mdm Claimant Test 123</h4>
                                        <p class="subtitle">Status: <span></span></p>
                                    </div>

                                    <a href="#" class="btn btn-primary waiting_btn">Waiting</a>
                                </div>
                            </div>

                            <div class="claimant-content">
                                <div class="tabs-part">
                                    <ul class="nav nav-tabs nav-bordered customtab">
                                        <li class="nav-item">
                                            <a href="#objector-details" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                <span class="d-none d-lg-block">Objector Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#object-deceased" data-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                <span class="d-none d-lg-block">Object Deceased</span>
                                            </a>
                                        </li>                                        
                                        <li class="nav-item">
                                            <a href="#activity-log" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-none d-lg-block">Activity Log</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="objector-details">
                                            <div class="claimant-edit-form-part">
                                                <form method="post">
                                                    <div class="claimant-top-part">
                                                        <div class="claim_num_part">
                                                            <label class="form-label">Objector No.</label>
                                                            <span class="claim-num">000001</span>
                                                        </div>
                                                        <div class="salutation_part">
                                                            <label class="form-label">Salutation</label>
                                                            <select class="form-control">
                                                                <option>Mdm</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Objector Name</label>
                                                                    <input type="text" name="objector_name" class="form-control" placeholder="Claimant Test 123">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label">Objector Name</label>
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
                                                        </div>
                                                    </div>

                                                    <div class="form-box">
                                                        <div class="row">
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
                                                        </div>
                                                    </div>

                                                    <div class="row">                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Reason For Objection</label>
                                                                <textarea name="comments" class="form-control" placeholder="Enter any comments here."></textarea>
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

                                        <div class="tab-pane" id="object-deceased">
                                            <div class="claim_deceased_tabs_content">                                                
                                                <ul class="d-flex flex-wrap add-btn-part">
                                                    <li>
                                                        <a href="#" class="btn btn-primary theme_btn" data-toggle="modal" data-target="#searchDeceasedModal">Add Deceased</a>
                                                    </li>
                                                </ul>

                                                <div class="theme-data-table table-responsive">
                                                    <table class="table theme_table_widthout_pagination object_deceased_table2">
                                                        <thead>
                                                            <tr>
                                                                <th>Created</th>
                                                                <th class="remove-sort">Deceased Name</th>
                                                                <th class="remove-sort">Gender</th>
                                                                <th class="remove-sort">Date of Death</th>
                                                                <th>Block</th>
                                                                <th>Plot</th>
                                                                <th>Block Type</th>
                                                                <th class="remove-sort">Special Requirment</th>
                                                                <th class="remove-sort">Reason for Objection</th>
                                                                <th class="remove-sort"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td>
                                                                    <span class="requirment">SARS</span>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <a href="#" class="view_btn">Delete Claim</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <a href="#" class="view_btn">Delete Claim</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <a href="#" class="view_btn">Delete Claim</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09 Sep 2020</td>
                                                                <td>JOHNSON BIN MAT SALLEH</td>
                                                                <td>M</td>
                                                                <td>23 Apr 1945</td>
                                                                <td>53</td>
                                                                <td>466</td>
                                                                <td>Principal</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <a href="#" class="view_btn">Delete Claim</a>
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
                        <label>Search By</label>
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

<!-- / Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!-- / Footer