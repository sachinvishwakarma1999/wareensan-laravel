<div class="page-right-body-content">
                        <div class="report-section">
                            <div class="report-form search-form">
                                <form>
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
                                        <a href="{{ route('report.createpdf')}}" class="report-btn print-btn">
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