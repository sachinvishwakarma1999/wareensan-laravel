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
                        <h4 class="title">Deceased Registry</h4>
                    </div>

                    <div class="page-right-body-content">
                        <div class="search-form">
                            <label>Search By</label>
                            <form method="post">
                                <div class="d-flex flex-wrap">
                                    <div class="form-input search-input-width">
                                        <input type="text" name="search" class="form-control" placeholder="Search by Deceased Name, Block No, Plot Number">
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
                            <table class="table theme_table_widthout_pagination deceased_registry_table">
                                <thead>
                                    <tr>
                                        <th class="remove-sort">Deceased Name</th>
                                        <th class="remove-sort">Name On Plague</th>
                                        <th class="remove-sort">Gender</th>
                                        <th class="remove-sort">Date of Death</th>
                                        <th class="remove-sort">Block</th>
                                        <th class="remove-sort">Plot</th>
                                        <th class="remove-sort">Sub Plot</th>
                                        <th class="remove-sort">Grave Type</th>
                                        <th class="remove-sort">Status</th>
                                        <th class="remove-sort">Special Requirement</th>
                                        <th class="remove-sort">Claimant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ziana Zain Bte Mat Kesom</td>
                                        <td>Zain Zain</td>
                                        <td>F</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td></td>
                                        <td>Principal</td>
                                        <td>Unregistered</td>
                                        <td><span class="requirment">SARS</span></td>
                                        <td>test123</td>
                                    </tr>
                                    <tr>
                                        <td>Ziana Zain Bte Mat Kesom</td>
                                        <td>Zain Zain</td>
                                        <td>F</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td></td>
                                        <td>Principal</td>
                                        <td>Unregistered</td>
                                        <td><span class="requirment">HIV</span></td>
                                        <td>test123</td>
                                    </tr>
                                    <tr>
                                        <td>Ziana Zain Bte Mat Kesom</td>
                                        <td>Zain Zain</td>
                                        <td>F</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td></td>
                                        <td>Principal</td>
                                        <td>Unregistered</td>
                                        <td><span class="requirment">Prominent Deceased</span></td>
                                        <td>test123</td>
                                    </tr>
                                    <tr>
                                        <td>Ziana Zain Bte Mat Kesom</td>
                                        <td>Zain Zain</td>
                                        <td>F</td>
                                        <td>23 Apr 1945</td>
                                        <td>53</td>
                                        <td>466</td>
                                        <td></td>
                                        <td>Principal</td>
                                        <td>Unregistered</td>
                                        <td></td>
                                        <td>test123</td>
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