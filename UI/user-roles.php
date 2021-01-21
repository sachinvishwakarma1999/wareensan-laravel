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
                        <h4 class="title">User Roles</h4>
                    </div>

                    <div class="page-right-body-content">
                        <div class="user-roles-form">
                            <form method="post">
                                <div class="search-form">
                                    <label>User</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-input search-input-width">
                                            <select class="form-control" name="user_role">
                                                <option>Super User</option>
                                            </select>
                                        </div>
                                        <ul class="btn_part d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="btn btn-primary theme_btn">Add Role</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="checkbox-list-part">
                                    <div class="checkbox-list-box">
                                        <h4 class="title">Administration</h4>
                                        <ul class="checkbox-list">
                                            <li>
                                                <input type="checkbox" id="add_user_roles" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="add_user_roles">Add User roles</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="edit_deceased_records" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="edit_deceased_records">Edit Deceased Records</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="edit_claimant_records" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="edit_claimant_records">Edit Claimant Records</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="edit_objector_records" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="edit_objector_records">Edit Objector Records</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="checkbox-list-box">
                                        <h4 class="title">Schedule</h4>
                                        <ul class="checkbox-list">
                                            <li>
                                                <input type="checkbox" id="edit_schedule" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="edit_schedule">Edit Schedule</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="add_schedule" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="add_schedule">Add Schedule</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="checkbox-list-box">
                                        <h4 class="title">Exhumation Map</h4>
                                        <ul class="checkbox-list">
                                            <li>
                                                <input type="checkbox" id="schedule_graves" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="schedule_graves">Schedule Graves for Exhumation</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="add_filter_option" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="add_filter_option">Add filter option</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="checkbox-list-box">
                                        <h4 class="title">Claimant</h4>
                                        <ul class="checkbox-list">
                                            <li>
                                                <input type="checkbox" id="add_claimant" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="add_claimant">Add Claimant</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="edit_claimant_details" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="edit_claimant_details">Edit Claimant Details</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="add_deceased" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="add_deceased">Add Deceased</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="verify_deceased" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="verify_deceased">Verify Deceased</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="add_payment" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="add_payment">Add Payment</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="edit_payment_records" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="edit_payment_records">Edit Payment Records</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="checkbox-list-box">
                                        <h4 class="title">Reports</h4>
                                        <ul class="checkbox-list">
                                            <li>
                                                <input type="checkbox" id="generate_report" class="material-inputs filled-in chk-col-transparent" checked />
                                                <label for="generate_report">Generate Report</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul class="form_btn_part d-flex flex-wrap">
                                    <li>
                                        <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Save Changes">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!-- / Footer