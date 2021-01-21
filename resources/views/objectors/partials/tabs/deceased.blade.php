<div class="claim_deceased_tabs_content">
    <ul class="d-flex flex-wrap add-btn-part">
        @can(config('permission.permissions.add_deceased'))
            <li>
                <a href="#" class="btn btn-primary theme_btn" data-toggle="modal" data-target="#deceasedDetailsModal">Add Deceased</a>
            </li>
        @endcan
    </ul>

    <div class="theme-data-table table-responsive">
        <table class="table object_deceased_table2">
            <thead>
            <tr>
                <th>Created</th>
                <th class="remove-sort">Deceased Name</th>
                <th class="remove-sort">Gender</th>
                <th class="remove-sort">Date of Death</th>
                <th>Block</th>
                <th>Plot</th>
                <th>Block Type</th>
                <th class="remove-sort">Special Requirement</th>
                <th class="remove-sort">Reason for Objection</th>
                <th class="remove-sort"></th>
            </tr>
            </thead>
            <tbody>
{{--            <tr>--}}
{{--                <td>09 Sep 2020</td>--}}
{{--                <td>JOHNSON BIN MAT SALLEH</td>--}}
{{--                <td>M</td>--}}
{{--                <td>23 Apr 1945</td>--}}
{{--                <td>53</td>--}}
{{--                <td>466</td>--}}
{{--                <td>Principal</td>--}}
{{--                <td>--}}
{{--                    <span class="requirment">SARS</span>--}}
{{--                </td>--}}
{{--                <td></td>--}}
{{--                <td>--}}
{{--                    <a href="#" class="view_btn">Delete Claim</a>--}}
{{--                </td>--}}
{{--            </tr>--}}
            </tbody>
        </table>
    </div>
</div>

@include('objectors.partials.modals.deceased', ['id' => $id])
@include('objectors.partials.modals.confirm', ['id' => $id])
