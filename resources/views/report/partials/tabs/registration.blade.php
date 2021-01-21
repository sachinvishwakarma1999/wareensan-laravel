<div class="tiles-section">
    <div class="tiles-content">
        <div class="d-flex flex-wrap">
            <div class="tiles-box">
                <div class="d-flex align-items-center">
                    <h4 class="number" style="color: #BA79CB;">{{$number_appointment}}</h4>
                    <span class="label">E-appointment</span>
                </div>
            </div>

            <div class="tiles-box">
                <div class="d-flex align-items-center">
                    <h4 class="number" style="color: #439DF5;">{{$number_waiting}}</h4>
                    <span class="label">Waiting</span>
                </div>
            </div>

            <div class="tiles-box">
                <div class="d-flex align-items-center">
                    <h4 class="number" style="color: #F79732;">{{$number_verified}}</h4>
                    <span class="label">Verification In Progress</span>
                </div>
            </div>

            <div class="tiles-box">
                <div class="d-flex align-items-center">
                    <h4 class="number">{{$number_completed}}</h4>
                    <span class="label">Completed</span>
                </div>
            </div>

            <div class="tiles-box">
                <div class="d-flex align-items-center">
                    <h4 class="number" style="color: #85CD9D;">{{$number_walk}}</h4>
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
                        <input type="search" name="search" class="form-control" placeholder="Search  Claimant Name, ID, Deceased Name">
                    </div>
                    <ul class="btn_part d-flex flex-wrap">
                        <li>
                            <input type="submit" name="submit" class="btn btn-primary theme_btn" id="btnSearch" value="Search">
                        </li>
                        <li>
                            <a href="#" class="btn btn-primary theme_btn" data-toggle="modal" data-target="#addNewClaimantModal">Create New Claim</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>

        <div class="theme-data-table table-responsive">
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
                </tbody>
            </table>
        </div>
    </div>
</div>
