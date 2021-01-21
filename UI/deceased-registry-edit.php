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
                        <h4 class="title">Edit Deceased</h4>
                    </div>

                    <div class="page-right-body-content">
                        <div class="claimant-section">
                            <div class="claimant-head">
                                <div class="d-flex flex-wrap justify-content-between align-items-start">
                                    <div>
                                        <h4 class="title">Ziana Zain Bte Mat Kesom</h4>                                        
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <p class="subtitle">Status: <span>Claimed</span></p>
                                            </li>
                                            <li>
                                                <p class="subtitle">Special Requirement: <span class="status">SARS</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="claimant-content">
                                <div class="tabs-part">
                                    <ul class="nav nav-tabs nav-bordered customtab">
                                        <li class="nav-item">
                                            <a href="#deceased-details" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                <span class="d-none d-lg-block">Deceased Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#activity-log" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-none d-lg-block">Activity Log</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="deceased-details">
                                            <div class="claimant-edit-form-part">
                                                <form method="post">
                                                    <div class="claimant-top-part">
                                                        <div class="claim_num_part">
                                                            <label class="form-label">Deceased ID</label>
                                                            <span class="claim-num">000001</span>
                                                        </div>
                                                        <div class="salutation_part">
                                                            <label class="form-label">Deceased Name</label>
                                                            <span class="font-weight-bold">Ziana Zain Bte Mat Kesom</span>
                                                        </div>
                                                    </div>

                                                    <div class="claimant-top-part">
                                                        <div class="salutation_part">
                                                            <label class="form-label">Deceased Name on Plague</label>
                                                            <span class="font-weight-bold">Ziana</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="w-22">
                                                        <div class="claimant-top-part">
                                                            <div class="salutation_part">
                                                                <div class="d-flex flex-wrap justify-content-between">
                                                                    <div class="block-box text-center">
                                                                        <label class="form-label">Block</label>
                                                                        <span class="font-weight-bold">6</span>
                                                                    </div>
                                                                    <div class="block-box text-center">
                                                                        <label class="form-label">Plot No.</label>
                                                                        <span class="font-weight-bold">222</span>
                                                                    </div>
                                                                    <div class="block-box text-center">
                                                                        <label class="form-label">Sub Plot No.</label>
                                                                        <span class="font-weight-bold"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="claimant-top-part">
                                                            <div class="salutation_part">
                                                                <div class="d-flex flex-wrap justify-content-between">
                                                                    <div class="block-box">
                                                                        <label class="form-label">Burial Date</label>
                                                                        <span class="font-weight-bold">27 May 1946</span>
                                                                    </div>
                                                                    <div class="block-box">
                                                                        <label class="form-label">Age at death</label>
                                                                        <span class="font-weight-bold">40</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="claimant-top-part">
                                                        <div class="salutation_part">
                                                            <label class="form-label">Special Requirement</label>
                                                            <span class="font-weight-bold text-red">SARS</span>
                                                        </div>
                                                    </div>

                                                    <div class="row">                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Remarks</label>
                                                                <textarea name="remarks" class="form-control" placeholder="Enter any comments here."></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <ul class="form_btn_part d-flex flex-wrap">
                                                                <li>
                                                                    <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Edit Deceased Details">
                                                                </li>                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </form>
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

<!-- Confirm Popup -->
    <div id="confirmModal" data-backdrop="static" class="modal fade theme_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Deceased Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label class="form-label">Please enter the reason for editing Deceased Record</label>
                            <textarea class="form-control" placeholder="Grave Discrepancy"></textarea>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary theme_btn">Confirm</button>
                    <button type="button" class="btn btn-primary theme_btn_outline" data-dismiss="modal">Cancel</button>                    
                </div>
            </div>
        </div>
    </div>
<!-- / Confirm Popup -->

<!-- / Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<script>
    $(document).ready(function(){
        $("#confirmModal").modal('show');
    });
</script>
<!-- / Footer