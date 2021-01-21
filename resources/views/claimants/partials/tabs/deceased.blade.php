<div class="claim_deceased_tabs_content">
    <ul class="d-flex flex-wrap add-btn-part">
        @can(config('permission.permissions.add_deceased'))
            <li>
                <a href="#" class="btn btn-primary theme_btn" data-target="#deceasedDetailsModal" data-toggle="modal">Add New Deceased</a>
            </li>
        @endcan
        <li>
            <a href="#" class="btn btn-primary theme_btn" data-target="#searchDeceasedModal" data-toggle="modal">Print Registration Form</a>
        </li>
        <li>
            <a href="#" class="btn btn-primary theme_btn">Print Verification Form</a>
        </li>
    </ul>

    <div class="theme-data-table table-responsive">
        <table class="table claim_deceased_table">
            <thead>
            <tr>
                <th>Created</th>
                <th class="remove-sort">Deceased Name</th>
                <th class="remove-sort">New Plague Name</th>
                <th class="remove-sort">Gender</th>
                <th class="remove-sort">Date of Death</th>
                <th>Block</th>
                <th>Plot</th>
                <th>Sub Plot</th>
                <th>Block Type</th>
                <th class="remove-sort">Relation to Claimant</th>
                <th class="remove-sort">Attention</th>
                <th class="remove-sort">Status</th>
                <th class="remove-sort"></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

@include('claimants.partials.modals.deceased', ['id' => $id])
