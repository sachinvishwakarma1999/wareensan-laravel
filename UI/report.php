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
                        <h4 class="title">Report</h4>
                    </div>

                    <div class="page-right-body-content">
                        <div class="report-section">
                            <div class="report-form search-form">
                                <form method="post">
                                    <div class="d-flex flex-wrap align-items-end">
                                        <div class="form-input report-input-width">
                                            <label class="form-label">Select Report</label>
                                            <select class="form-control" name="schedule_report">
                                                <option>Exhumation Schedule Report</option>
                                            </select>
                                        </div>

                                        <div class="form-input date-input-width">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" name="start_date" class="form-control">
                                        </div>

                                        <div class="form-input date-input-width">
                                            <label class="form-label">End Date</label>
                                            <input type="date" name="end_date" class="form-control">
                                        </div>

                                        <ul class="btn_part d-flex flex-wrap">
                                            <li>
                                                <input type="submit" name="submit" class="btn btn-primary theme_btn" value="View Report">
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>

                            <div class="report-btn-part">
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <a href="#" class="report-btn print-btn">
                                            <span class="mdi mdi-printer icon"></span>
                                            Print
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="report-btn print-btn">
                                            <span class="mdi mdi-file-outline icon"></span>
                                            PDF
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="report-btn print-btn">
                                            <span class="mdi mdi-bulletin-board icon"></span>
                                            CSV
                                        </a>
                                    </li>
                                    <li class="margin-pag">
                                        <a href="#" class="report-btn">First</a>
                                    </li>
                                    <li class="margin-pag">
                                        <a href="#" class="report-btn ">
                                            <span class="fas fa-angle-left arrowIcon"></span>
                                        </a>
                                    </li>
                                    <li class="margin-pag">
                                        <a href="#" class="report-btn ">
                                            <span class="fas fa-angle-right arrowIcon"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="report-btn">Last</a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <div class="report-card-box theme-box">
                                    <div class="report-card-box-head">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <figure class="logo">
                                                <img src="assets/images/wareesan-logo.png" alt="">
                                            </figure>
                                            <div class="info-part">
                                                <div class="d-flex flex-wrap">
                                                    <div class="info-box">
                                                        <p>Exhumation Office</p>
                                                        <p>7 Muslim Cemetart Path 3</p>
                                                        <p>Singapore 718773</p>
                                                    </div>
                                                    <div class="info-box">
                                                        <p>Tel: (65) 623845044</p>
                                                        <p>Local Fax No.: (65) 62642978</p>
                                                        <p>Email: Info@pusara.sg</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="report-schedule-part">
                                        <h4 class="title">Registration Report - Phase 6</h4>
                                        <p class="date">September 2020</p>
                                    </div>

                                    <div class="report-chart-part">
                                        <div class="chart-top-part">
                                            <div class="d-flex flex-wrap">
                                                <div class="chart-left-box">
                                                    <h4 class="title">Claim Summary</h4>
                                                    <canvas id="claim-summary" height="150"></canvas>
                                                </div>

                                                <div class="chart-right-box">
                                                    <div id="claim-bar-chart"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chart-bottom-part">
                                            <div class="claim-timeline-chart-box">
                                                <h4 class="title">Claims Timeline</h4>

                                                <div>
                                                    <canvas id="claims-timeline"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="report-card-box theme-box">
                                    <div class="report-card-box-head">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <figure class="logo">
                                                <img src="assets/images/wareesan-logo.png" alt="">
                                            </figure>
                                            <div class="info-part">
                                                <div class="d-flex flex-wrap">
                                                    <div class="info-box">
                                                        <p>Exhumation Office</p>
                                                        <p>7 Muslim Cemetart Path 3</p>
                                                        <p>Singapore 718773</p>
                                                    </div>
                                                    <div class="info-box">
                                                        <p>Tel: (65) 623845044</p>
                                                        <p>Local Fax No.: (65) 62642978</p>
                                                        <p>Email: Info@pusara.sg</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="report-schedule-part">
                                        <h4 class="title">Exhumation Schedule Report</h4>
                                        <p class="date">02 Jan 2020</p>

                                        <div class="tiles-section overview-tiles-section report-tiles-section">
                                            <div class="tiles-content">
                                                <div class="d-flex flex-wrap">
                                                    <div class="tiles-box">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <span class="label">Total Graves</span>
                                                            <h4 class="number" style="color: #F79731;">13</h4>
                                                        </div>
                                                    </div>
                                                    <div class="tiles-box">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <span class="label">Total Claimants</span>
                                                            <h4 class="number" style="color: #F79731;">3</h4>
                                                        </div>
                                                    </div>
                                                    <div class="tiles-box">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <span class="label">Total Trees</span>
                                                            <h4 class="number" style="color: #F79731;">3</h4>
                                                        </div>
                                                    </div>
                                                    <div class="tiles-box grave-box">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <span class="label">Grave Type</span>
                                                            <div class="d-flex align-items-center">
                                                                <span class="label">S/T</span>
                                                                <h4 class="number" style="color: #F79731;">3</h4>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <span class="label">NB</span>
                                                                <h4 class="number" style="color: #F79731;">3</h4>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="tiles-box">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <span class="label">No Show</span>
                                                            <h4 class="number" style="color: #F79731;">1</h4>
                                                        </div>
                                                    </div>
                                                    <div class="tiles-box">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <span class="label">Special Case</span>
                                                            <h4 class="number" style="color: #F79731;">1</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="report-table-part">
                                            <div class="theme-data-table report_table table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Scheduled Exhumation Date</th>
                                                            <th>Claimant ID</th>
                                                            <th>Claimant Name</th>
                                                            <th>Deceased Name</th>
                                                            <th>New Name on Plague</th>
                                                            <th>Date of Death</th>
                                                            <th>Block</th>
                                                            <th>Plot</th>
                                                            <th>Plot Type</th>
                                                            <th>Session</th>
                                                            <th>New Crypt Number</th>
                                                            <th>Position</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>15 September 2020 </td>
                                                            <td>CL01120</td>
                                                            <td>MOHAMMED ZAHIEDRY BIN JUNID</td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>15 September 2020 </td>
                                                            <td>CL01120</td>
                                                            <td>MOHAMMED ZAHIEDRY BIN JUNID</td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>15 September 2020 </td>
                                                            <td>CL01120</td>
                                                            <td>MOHAMMED ZAHIEDRY BIN JUNID</td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>JUNID BIN HAJI MUKRI</td>
                                                            <td>JUNID HAJI MUKRI</td>
                                                            <td>27-Feb-1990</td>
                                                            <td>20</td>
                                                            <td>1870</td>
                                                            <td>Principal</td>
                                                            <td>S1</td>
                                                            <td>3971</td>
                                                            <td>FR</td>
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
</section>
<!-- / Content -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<script type="text/javascript">
    $(function () {
        "use strict";
        // claims-summary
        new Chart(document.getElementById("claim-summary"), {
            type: 'pie',
            data: {
              labels: ["Principal", "Supplementary"],
              datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#BB7DCB", "#499FF2"],
                data: [80,20]
              }]
            },
            options: {
              title: {
                display: false,
              }
            }
        });

        // claims-summary-bar-chart
        Morris.Bar({
            element: 'claim-bar-chart',
            data: [{
                y: 'BLK 19',
                principal: 2,
                supplementary: 0
            }, {
                y: 'BLK 20',
                principal: 2,
                supplementary: 0
            }, {
                y: 'BLK 06',
                principal: 4,
                supplementary: 0
            },{
                y: 'BLK 07',
                principal: 4,
                supplementary: 0
            },{
                y: 'BLK 08',
                principal: 1,
                exhumed: 0
            },{
                y: 'BLK 09',
                principal: 1,
                supplementary: 0
            },{
                y: 'BLK 10',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 11',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 12',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 13',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 14',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 15',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 16',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 17',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 18',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 21',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 22',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 23',
                principal: 0,
                supplementary: 4
            },{
                y: 'BLK 24',
                principal: 0,
                supplementary: 4
            }, {
                y: 'BLK 25',
                principal: 0,
                supplementary: 4
            }],
            xkey: 'y',
            ykeys: ['principal', 'supplementary'],
            labels: ['Principal', 'Supplementary'],
            barColors:['#BB7DCB', '#439DF5'],
            hideHover: 'auto',
            gridLineColor: '#eef0f2',
            resize: true
        });

        // claims-timeline-bar-chart
        // Bar chart
        new Chart(document.getElementById("claims-timeline"), {
            type: 'bar',
            data: {
              labels: ["02/10", "03/10", "04/10", "05/10", "06/10","07/10","08/10","09/10","10/10","11/10","12/10","13/10","14/10","15/10","16/10","17/10","18/10","19/10","20/10","21/10","22/10","23/10","24/10","25/10","26/10","27/10","28/10","29/10","30/10","31/10"],
              datasets: [
                {
                  label: "Principal",
                  backgroundColor: ["#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB","#BA79CB"],
                  data: [5,1,6,18,14,1,0,1,3,8,13,16,2,2,0,0,10,10,0,1,3,0,1,3,13,16,0,1,1,0]
                },
                {
                  label: "Supplementary",
                  backgroundColor: ["#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5","#439DF5"],
                  data: [2,1,7,23,12,1,0,1,2,9,14,14,1,1,0,0,10,10,0,1,2,0,1,2,14,14,0,1,1,0]
                }
              ]
            },
            options: {
              legend: { display: true },
              title: {
                display: false,
              }
            }
        });
    }); 
</script>
<!-- / Footer