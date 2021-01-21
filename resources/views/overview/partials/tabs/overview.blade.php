<div class="tiles-section overview-tiles-section">
    <div class="tiles-content">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Claimed</span>
                    <h4 class="number" style="color: #BA79CB;">{{ $overview['claimants'] }}</h4>
                </div>
            </div>
            {{-- <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Exhumed</span>
                    <h4 class="number" style="color: #439DF5;">14,318</h4>
                    
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Re-interned</span>
                    <h4 class="number" style="color: #F0C000;">14,141</h4>
                </div>
            </div> --}}
            <!-- <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Re-interned</span>
                    <h4 class="number" style="color: #F0C000;">14,141</h4>
                </div>
            </div> -->
            <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Unclaimed</span>
                    <h4 class="number" style="color: #707070;">4</h4>
                </div>
            </div>
            <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Absentees</span>
                    <h4 class="number" style="color: #FF3F39;">150</h4>
                </div>
            </div>
            <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Objected deceased</span>
                    <h4 class="number" style="color: #F79732;">{{ $overview['objectors'] }}</h4>
                </div>
            </div>
            {{-- <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Total</span>
                    <h4 class="number" style="color: #85CD9D">{{ $overview['totals'] }}</h4>
                </div>
            </div> --}}

            <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Exported Deceased</span>
                    <h4 class="number" style="color: #0014ff;">1</h4>
                </div>
            </div>

            <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Appeals</span>
                    <h4 class="number" style="color: #0014ff;">1</h4>
                </div>
            </div>

            <div class="tiles-box">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="label">Grave Discrepancies</span>
                    <h4 class="number" style="color: #0014ff;">1</h4>
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
        <div class="chart-box" style="float: left!important;">
            <canvas id="exhumation-summary" height="150"></canvas>
        </div>
        {{-- <div class="chart-box" style="float: left!important;">
            <canvas id="reinternment-summary" height="150"></canvas>
        </div> --}}
    </div>

    <div class="theme-box" >
        <div class="theme-box-head">
            <h4 class="title">Claims Summary</h4>
        </div>
        <div class="chart-box">
            <canvas id="claims-summary" height="150"></canvas>
        </div>
    </div>

    <!-- <div class="theme-box">
        <div class="theme-box-head">
            <h4 class="title">Reinternment Summary</h4>
        </div>
        <div class="chart-box">
            <canvas id="reinternment-summary" height="150"></canvas>
        </div>
    </div> -->
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
