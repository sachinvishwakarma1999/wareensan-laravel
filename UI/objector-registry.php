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
                        <h4 class="title">Objector Registry</h4>
                    </div>

                    <div class="page-right-body-content">
                        <div class="search-form">
                            <label>Search By</label>
                            <form method="post">
                                <div class="d-flex flex-wrap">
                                    <div class="form-input search-input-width">
                                        <input type="text" name="search" class="form-control" placeholder="Search by Objector Name, Objector ID, Deceased Name">
                                    </div>
                                    <ul class="btn_part d-flex flex-wrap">
                                        <li>
                                            <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Search">
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-primary theme_btn">Create Objector Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>

                        <div class="theme-data-table table-responsive">
                            <table class="table theme_table_widthout_pagination object_deceased_table">
                                <thead>
                                    <tr>
                                        <th class="remove-sort">Objector ID</th>
                                        <th class="remove-sort">Objector Name</th>
                                        <th class="remove-sort">Gender</th>
                                        <th class="remove-sort">Contact No.</th>
                                        <th class="remove-sort">Email Address</th>
                                        <th class="remove-sort">Address</th>
                                        <th class="remove-sort">Mailing Address</th>
                                        <th class="remove-sort">Remarks</th>
                                        <th class="remove-sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Objector Name</td>
                                        <td>M</td>
                                        <td>91234567 (Daughter)</td>
                                        <td>Claimanttest@wareesan.com</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Remarks here</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Objector Name</td>
                                        <td>M</td>
                                        <td>91234567 (Daughter)</td>
                                        <td>Claimanttest@wareesan.com</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Remarks here</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>Objector Name</td>
                                        <td>M</td>
                                        <td>91234567 (Daughter)</td>
                                        <td>Claimanttest@wareesan.com</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Remarks here</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td>Objector Name</td>
                                        <td>M</td>
                                        <td>91234567 (Daughter)</td>
                                        <td>Claimanttest@wareesan.com</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Blk 123 Street Address #12-34</td>
                                        <td>Remarks here</td>
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
</section>


<!-- / Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!-- / Footer