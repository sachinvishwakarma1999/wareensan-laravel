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
                            <li class="active">
                                <a href="overview.php">Overview</a>
                            </li>
                            <li>
                                <a href="overview-registration.php">Registration</a>
                            </li>
                            <li>
                                <a href="exhumation-reinternment.php">Exhumation/Reinternment</a>
                            </li>
                        </ul>
                    </div>

                    <div class="page-right-body-content">
                        <div class="tiles-section overview-tiles-section">
                            <div class="tiles-content">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="label">Claimed</span>
                                            <h4 class="number" style="color: #BA79CB;">14,603</h4>
                                        </div>
                                    </div>
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="label">Exhumed</span>
                                            <h4 class="number" style="color: #439DF5;">14,318</h4>
                                        </div>
                                    </div>
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="label">Re-interned</span>
                                            <h4 class="number" style="color: #F0C000;">14,141</h4>
                                        </div>
                                    </div>
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="label">Unclaimed</span>
                                            <h4 class="number" style="color: #707070;">34,301</h4>
                                        </div>
                                    </div>
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="label">No show</span>
                                            <h4 class="number" style="color: #FF3F39;">150</h4>
                                        </div>
                                    </div>
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="label">Objector</span>
                                            <h4 class="number" style="color: #F79732;">48,904</h4>
                                        </div>
                                    </div>
                                    <div class="tiles-box">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="label">Total</span>
                                            <h4 class="number" style="color: #85CD9D">48,904</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chart-part d-flex flex-wrap justify-content-between">
                            <div class="phase-box-part">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <label>Select Phase</label>
                                    </li>
                                    <li>
                                        <select class="form-control">
                                            <option>All Phases</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="theme-box">
                                <div class="theme-box-head">
                                    <h4 class="title">Exhumation Summary</h4>
                                </div>
                                <div class="chart-box">
                                    <canvas id="exhumation-summary" height="150"></canvas>
                                </div>
                            </div>

                            <div class="theme-box">
                                <div class="theme-box-head">
                                    <h4 class="title">Claims Summary</h4>
                                </div>
                                <div class="chart-box">
                                    <canvas id="claims-summary" height="150"></canvas>
                                </div>
                            </div>

                            <div class="theme-box">
                                <div class="theme-box-head">
                                    <h4 class="title">Reinternment Summary</h4>
                                </div>
                                <div class="chart-box">
                                    <canvas id="reinternment-summary" height="150"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="theme-box">
                            <div class="theme-box-head">
                                <h4 class="title">Timeline</h4>
                            </div>

                            <div class="theme-box-content">
                                <div class="timeline-graph-box">
                                    <div class="d-flex flex-wrap justify-content-end align-items-center">
                                        <div class="year-select">
                                            <select class="form-control">
                                                <option>2020</option>
                                            </select>
                                        </div>

                                        <div class="filter-bar">
                                            <ul class="d-flex flex-wrap align-items-center">
                                                <li>
                                                    <label class="label">Sort by:</label>
                                                </li>
                                                <li>
                                                    <a href="#">Week</a>
                                                </li>
                                                <li>
                                                    <a href="#">Month</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="timeline-bar-chart"></div>
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
exhumation-summary
<script type="text/javascript">
    $(function () {
        "use strict";
        // exhumation-summary
        new Chart(document.getElementById("exhumation-summary"), {
            type: 'pie',
            data: {
              labels: ["Unexhumed", "Exhumed", "No Show"],
              datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#8CC989", "#F2C924","#FF3F39"],
                data: [70,30,5]
              }]
            },
            options: {
              title: {
                display: false,
              }
            }
        });

        // claims-summary
        new Chart(document.getElementById("claims-summary"), {
            type: 'pie',
            data: {
              labels: ["Principal", "Supplementary"],
              datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#8CC989", "#F2C924"],
                data: [80,20]
              }]
            },
            options: {
              title: {
                display: false,
              }
            }
        });

        // reinternment-summary
        new Chart(document.getElementById("reinternment-summary"), {
            type: 'pie',
            data: {
              labels: ["Principal", "Supplementary"],
              datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#8CC989", "#F2C924"],
                data: [75,25]
              }]
            },
            options: {
              title: {
                display: false,
              }
            }
        });

        // timeline-bar-chart
        Morris.Bar({
            element: 'timeline-bar-chart',
            data: [{
                y: 'Jan',
                claimed: 0,
                exhumed: 0,
                reintered: 0
            }, {
                y: 'Feb',
                claimed: 0,
                exhumed: 0,
                reintered: 0
            }, {
                y: 'Mar',
                claimed: 190,
                exhumed: 470,
                reintered: 350
            },{
                y: 'Apr',
                claimed: 0,
                exhumed: 470,
                reintered: 350
            },{
                y: 'May',
                claimed: 0,
                exhumed: 300,
                reintered: 220
            },{
                y: 'Jun',
                claimed: 0,
                exhumed: 470,
                reintered: 420
            },{
                y: 'Jul',
                claimed: 0,
                exhumed: 280,
                reintered: 270
            },{
                y: 'Aug',
                claimed: 50,
                exhumed: 420,
                reintered: 460
            }, {
                y: 'Sep',
                claimed: 0,
                exhumed: 420,
                reintered: 470
            }, {
                y: 'Oct',
                claimed: 0,
                exhumed: 0,
                reintered: 0
            }, {
                y: 'Nov',
                claimed: 0,
                exhumed: 0,
                reintered: 0
            }, {
                y: 'Dec',
                claimed: 0,
                exhumed: 0,
                reintered: 0
            }],
            xkey: 'y',
            ykeys: ['claimed', 'exhumed', 'reintered'],
            labels: ['Claimed', 'Exhumed', 'Reintered'],
            barColors:['#C186D0', '#439DF5', '#F0C000'],
            hideHover: 'auto',
            gridLineColor: '#eef0f2',
            resize: true
        });
    }); 
</script>
<!-- / Footer