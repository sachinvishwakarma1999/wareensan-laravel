@extends('layouts.app')

@section('content_header')
    <h4 class="title">N-1-13 Section 1</h4>
@endsection
<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } td {    max-width: 30px;    min-width: 31px;    height: 0px;text-align: center;}a {text-decoration: none;    color: #000;}
		.page-right-body .page-right-body-content .map-box-section .maps-block-box.block-box1{
			left:40% !important;
		}
		.map-img-box{
			max-height:600px !important;
		}
</style>
@section('content')
    <form method="post" id="formSearch">
        <div class="search-form">

            <div class="d-flex flex-wrap">
                <div class="form-input block-input-width">
                    <select class="form-control" id="searchBlock" onchange="changeFunc();">
                        <option value="exhumation-map">Block 6</option>
                        <option value="blk-9">Block 9</option>
                        <option value="n-1-13-ection-1" selected="selected">N-1-13 Section 1</option>
                        <option value="n-1-13-ection-2">N-1-13 Section 2</option>
                        <option value="n-1-13-ection-3">N-1-13 Section 3</option>
                    </select>
                </div>
                <script>
				   function changeFunc() {
					var selectBox = document.getElementById("searchBlock");
					var selectedValue = selectBox.options[selectBox.selectedIndex].value;
					window.location.href="/"+selectedValue;
				   }
				</script>
                <div class="form-input section-input-width" id="searchPlot">
                    <select class="form-control">
                        <option>Section 13</option>
                        <option>N-1-13 Section 1</option>
                        <option>N-1-13 Section 2</option>
                        <option>N-1-13 Section 3</option>
                    </select>
                </div>
                <div class="form-input search-input-width">
                    <input type="text" name="keysearch" class="form-control"
                        placeholder="Search  Deceased Name, Blk & Plot No." id="searchName">
                </div>
                <ul class="btn_part d-flex flex-wrap">
                    <li>
                        <input type="submit" name="submit" class="btn btn-primary theme_btn" id="btnSearch" value="Search Location">
                    </li>
                </ul>
            </div>
        </div>
        <div class="search-form map-filter-form mb-3">
            <label>Filter By</label>
            <div class="d-flex flex-wrap align-items-center">
                <div class="form-input plot-input-width">
                    <select class="form-control">
                        <option>Plot Status</option>
                    </select>
                </div>
                <div class="form-input section-input-width">
                    <select class="form-control" id="phase" name="phase">
                        <option value="">Phase</option>
                        <option value="2">Phase 2</option>
                        <option value="3">Phase 4</option>
                        <option value="4">Phase 6</option>
                    </select>
                </div>
                <div class="checkbox_part">
                    <div class="custom_checkbox">
                        <input type="checkbox" name="schedule" value="1" id="schedule" class="material-inputs filled-in chk-col-transparent">
                        <label for="schedule">View Exhumation Schedule</label>
                    </div>
                </div>
                <div class="form-input date-input-width">
                    <input type="date" name="start" class="form-control" id="startDate">
                </div>
                <span class="to">to</span>
                <div class="form-input date-input-width">
                    <input type="date" name="end" class="form-control" id="endDate">
                </div>
                <div class="form-input section-input-width">
                    <select class="form-control">
                        <option>Field Officer</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

    <div class="filter_btn_part">
        <ul class="d-flex flex-wrap align-items-center">
            <li>
                <div class="phase-custom-checkbox">
                    <input type="checkbox" name="unclaimed" class="phase-input" id="unclaimed"/>
                    <label for="unclaimed" class="d-flex align-items-center">
                        <span class="phase-checkbox"></span>
                        <p class="mb-0">Unclaimed</p>
                    </label>
                </div>
            </li>
            <li>
                <div class="phase-custom-checkbox">
                    <input type="checkbox" checked="checked" name="phase2" class="phase-input" id="phase2"/>
                    <label for="phase2" class="d-flex align-items-center">
                        <span class="phase-checkbox"></span>
                        <p class="mb-0">Phase 2</p>
                    </label>
                </div>
            </li>
            <li>
                <div class="phase-custom-checkbox">
                    <input type="checkbox" checked="checked" name="phase4" class="phase-input" id="phase4"/>
                    <label for="phase4" class="d-flex align-items-center">
                        <span class="phase-checkbox"></span>
                        <p class="mb-0">Phase 4</p>
                    </label>
                </div>
            </li>
            <li>
                <div class="phase-custom-checkbox">
                    <input type="checkbox" checked="checked" name="phase6" class="phase-input" id="phase6"/>
                    <label for="phase6" class="d-flex align-items-center">
                        <span class="phase-checkbox"></span>
                        <p class="mb-0">Phase 6</p>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="map-box-section">
        <div class="map-img-box">
           <!--  <img src="assets/images/map-full-img.png"> -->
            <div class="maps-block-box block-box1">
                <table cellspacing="0" border="0">
    <colgroup span="2" width="65"></colgroup>
    <colgroup width="66"></colgroup>
    <colgroup span="4" width="64"></colgroup>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7240" sdnum="1033;"><b><font color="#000000">7240</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7241" sdnum="1033;"><b><font color="#000000">7241</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7238" sdnum="1033;"><b><font color="#000000">7238</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7239" sdnum="1033;"><b><font color="#000000">7239</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7236" sdnum="1033;"><b><font color="#000000">7236</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7237" sdnum="1033;"><b><font color="#000000">7237</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7234" sdnum="1033;"><b><font color="#000000">7234</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7235" sdnum="1033;"><b><font color="#000000">7235</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7232" sdnum="1033;"><b><font color="#000000">7232</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7233" sdnum="1033;"><b><font color="#000000">7233</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7230" sdnum="1033;"><b><font color="#000000">7230</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7231" sdnum="1033;"><b><font color="#000000">7231</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7228" sdnum="1033;"><b><font color="#000000">7228</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7229" sdnum="1033;"><b><font color="#000000">7229</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7226" sdnum="1033;"><b><font color="#000000">7226</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7227" sdnum="1033;"><b><font color="#000000">7227</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7222" sdnum="1033;"><b><font color="#000000">7222</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7223" sdnum="1033;"><b><font color="#000000">7223</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7224" sdnum="1033;"><b><font color="#000000">7224</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7225" sdnum="1033;"><b><font color="#000000">7225</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="30" align="center" valign=middle bgcolor="#FFFF00" sdval="7218" sdnum="1033;"><b><font color="#000000">7218</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7219" sdnum="1033;"><b><font color="#000000">7219</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7220" sdnum="1033;"><b><font color="#000000">7220</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7221" sdnum="1033;"><b><font color="#000000">7221</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font size=4 color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7214" sdnum="1033;"><b><font color="#000000">7214</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7215" sdnum="1033;"><b><font color="#000000">7215</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7216" sdnum="1033;"><b><font color="#000000">7216</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7217" sdnum="1033;"><b><font color="#000000">7217</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="30" align="center" valign=middle bgcolor="#FFFF00" sdval="7210" sdnum="1033;"><b><font color="#000000">7210</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7211" sdnum="1033;"><b><font color="#000000">7211</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7212" sdnum="1033;"><b><font color="#000000">7212</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7213" sdnum="1033;"><b><font color="#000000">7213</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=middle><b><font size=4 color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7206" sdnum="1033;"><b><font color="#000000">7206</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7207" sdnum="1033;"><b><font color="#000000">7207</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7208" sdnum="1033;"><b><font color="#000000">7208</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7209" sdnum="1033;"><b><font color="#000000">7209</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7201" sdnum="1033;"><b><font color="#000000">7201</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7202" sdnum="1033;"><b><font color="#000000">7202</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7203" sdnum="1033;"><b><font color="#000000">7203</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7204" sdnum="1033;"><b><font color="#000000">7204</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7205" sdnum="1033;"><b><font color="#000000">7205</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7196" sdnum="1033;"><b><font color="#000000">7196</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7197" sdnum="1033;"><b><font color="#000000">7197</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7198" sdnum="1033;"><b><font color="#000000">7198</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7199" sdnum="1033;"><b><font color="#000000">7199</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7200" sdnum="1033;"><b><font color="#000000">7200</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7191" sdnum="1033;"><b><font color="#000000">7191</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7192" sdnum="1033;"><b><font color="#000000">7192</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7193" sdnum="1033;"><b><font color="#000000">7193</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7194" sdnum="1033;"><b><font color="#000000">7194</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7195" sdnum="1033;"><b><font color="#000000">7195</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7186" sdnum="1033;"><b><font color="#000000">7186</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7187" sdnum="1033;"><b><font color="#000000">7187</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7188" sdnum="1033;"><b><font color="#000000">7188</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7189" sdnum="1033;"><b><font color="#000000">7189</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7190" sdnum="1033;"><b><font color="#000000">7190</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7181" sdnum="1033;"><b><font color="#000000">7181</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7182" sdnum="1033;"><b><font color="#000000">7182</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7183" sdnum="1033;"><b><font color="#000000">7183</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7184" sdnum="1033;"><b><font color="#000000">7184</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7185" sdnum="1033;"><b><font color="#000000">7185</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7176" sdnum="1033;"><b><font color="#000000">7176</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7177" sdnum="1033;"><b><font color="#000000">7177</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7178" sdnum="1033;"><b><font color="#000000">7178</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7179" sdnum="1033;"><b><font color="#000000">7179</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7180" sdnum="1033;"><b><font color="#000000">7180</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7170" sdnum="1033;"><b><font color="#000000">7170</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7171" sdnum="1033;"><b><font color="#000000">7171</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7172" sdnum="1033;"><b><font color="#000000">7172</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7173" sdnum="1033;"><b><font color="#000000">7173</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7174" sdnum="1033;"><b><font color="#000000">7174</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7175" sdnum="1033;"><b><font color="#000000">7175</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7164" sdnum="1033;"><b><font color="#000000">7164</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7165" sdnum="1033;"><b><font color="#000000">7165</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7166" sdnum="1033;"><b><font color="#000000">7166</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7167" sdnum="1033;"><b><font color="#000000">7167</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7168" sdnum="1033;"><b><font color="#000000">7168</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7169" sdnum="1033;"><b><font color="#000000">7169</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7158" sdnum="1033;"><b><font color="#000000">7158</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7159" sdnum="1033;"><b><font color="#000000">7159</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7160" sdnum="1033;"><b><font color="#000000">7160</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7161" sdnum="1033;"><b><font color="#000000">7161</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7162" sdnum="1033;"><b><font color="#000000">7162</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7163" sdnum="1033;"><b><font color="#000000">7163</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7152" sdnum="1033;"><b><font color="#000000">7152</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7153" sdnum="1033;"><b><font color="#000000">7153</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7154" sdnum="1033;"><b><font color="#000000">7154</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7155" sdnum="1033;"><b><font color="#000000">7155</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7156" sdnum="1033;"><b><font color="#000000">7156</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7157" sdnum="1033;"><b><font color="#000000">7157</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7146" sdnum="1033;"><b><font color="#000000">7146</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7147" sdnum="1033;"><b><font color="#000000">7147</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7148" sdnum="1033;"><b><font color="#000000">7148</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7149" sdnum="1033;"><b><font color="#000000">7149</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7150" sdnum="1033;"><b><font color="#000000">7150</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7151" sdnum="1033;"><b><font color="#000000">7151</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7140" sdnum="1033;"><b><font color="#000000">7140</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7141" sdnum="1033;"><b><font color="#000000">7141</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7142" sdnum="1033;"><b><font color="#000000">7142</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7143" sdnum="1033;"><b><font color="#000000">7143</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7144" sdnum="1033;"><b><font color="#000000">7144</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7145" sdnum="1033;"><b><font color="#000000">7145</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7134" sdnum="1033;"><b><font color="#000000">7134</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7135" sdnum="1033;"><b><font color="#000000">7135</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7136" sdnum="1033;"><b><font color="#000000">7136</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7137" sdnum="1033;"><b><font color="#000000">7137</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7138" sdnum="1033;"><b><font color="#000000">7138</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7139" sdnum="1033;"><b><font color="#000000">7139</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7127" sdnum="1033;"><b><font color="#000000">7127</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7128" sdnum="1033;"><b><font color="#000000">7128</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7129" sdnum="1033;"><b><font color="#000000">7129</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7130" sdnum="1033;"><b><font color="#000000">7130</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7131" sdnum="1033;"><b><font color="#000000">7131</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7132" sdnum="1033;"><b><font color="#000000">7132</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7133" sdnum="1033;"><b><font color="#000000">7133</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7120" sdnum="1033;"><b><font color="#000000">7120</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7121" sdnum="1033;"><b><font color="#000000">7121</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7122" sdnum="1033;"><b><font color="#000000">7122</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7123" sdnum="1033;"><b><font color="#000000">7123</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7124" sdnum="1033;"><b><font color="#000000">7124</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7125" sdnum="1033;"><b><font color="#000000">7125</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7126" sdnum="1033;"><b><font color="#000000">7126</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7113" sdnum="1033;"><b><font color="#000000">7113</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7114" sdnum="1033;"><b><font color="#000000">7114</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7115" sdnum="1033;"><b><font color="#000000">7115</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7116" sdnum="1033;"><b><font color="#000000">7116</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7117" sdnum="1033;"><b><font color="#000000">7117</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7118" sdnum="1033;"><b><font color="#000000">7118</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7119" sdnum="1033;"><b><font color="#000000">7119</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7106" sdnum="1033;"><b><font color="#000000">7106</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7107" sdnum="1033;"><b><font color="#000000">7107</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7108" sdnum="1033;"><b><font color="#000000">7108</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7109" sdnum="1033;"><b><font color="#000000">7109</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7110" sdnum="1033;"><b><font color="#000000">7110</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7111" sdnum="1033;"><b><font color="#000000">7111</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7112" sdnum="1033;"><b><font color="#000000">7112</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7099" sdnum="1033;"><b><font color="#000000">7099</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7100" sdnum="1033;"><b><font color="#000000">7100</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7101" sdnum="1033;"><b><font color="#000000">7101</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7102" sdnum="1033;"><b><font color="#000000">7102</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7103" sdnum="1033;"><b><font color="#000000">7103</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7104" sdnum="1033;"><b><font color="#000000">7104</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7105" sdnum="1033;"><b><font color="#000000">7105</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7092" sdnum="1033;"><b><font color="#000000">7092</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7093" sdnum="1033;"><b><font color="#000000">7093</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7094" sdnum="1033;"><b><font color="#000000">7094</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7095" sdnum="1033;"><b><font color="#000000">7095</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7096" sdnum="1033;"><b><font color="#000000">7096</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7097" sdnum="1033;"><b><font color="#000000">7097</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7098" sdnum="1033;"><b><font color="#000000">7098</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7085" sdnum="1033;"><b><font color="#000000">7085</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7086" sdnum="1033;"><b><font color="#000000">7086</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7087" sdnum="1033;"><b><font color="#000000">7087</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7088" sdnum="1033;"><b><font color="#000000">7088</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7089" sdnum="1033;"><b><font color="#000000">7089</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7090" sdnum="1033;"><b><font color="#000000">7090</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7091" sdnum="1033;"><b><font color="#000000">7091</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7078" sdnum="1033;"><b><font color="#000000">7078</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7079" sdnum="1033;"><b><font color="#000000">7079</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7080" sdnum="1033;"><b><font color="#000000">7080</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7081" sdnum="1033;"><b><font color="#000000">7081</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7082" sdnum="1033;"><b><font color="#000000">7082</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7083" sdnum="1033;"><b><font color="#000000">7083</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7084" sdnum="1033;"><b><font color="#000000">7084</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7071" sdnum="1033;"><b><font color="#000000">7071</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7072" sdnum="1033;"><b><font color="#000000">7072</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7073" sdnum="1033;"><b><font color="#000000">7073</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7074" sdnum="1033;"><b><font color="#000000">7074</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7075" sdnum="1033;"><b><font color="#000000">7075</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7076" sdnum="1033;"><b><font color="#000000">7076</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7077" sdnum="1033;"><b><font color="#000000">7077</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7064" sdnum="1033;"><b><font color="#000000">7064</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7065" sdnum="1033;"><b><font color="#000000">7065</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7066" sdnum="1033;"><b><font color="#000000">7066</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7067" sdnum="1033;"><b><font color="#000000">7067</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7068" sdnum="1033;"><b><font color="#000000">7068</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7069" sdnum="1033;"><b><font color="#000000">7069</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7070" sdnum="1033;"><b><font color="#000000">7070</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7058" sdnum="1033;"><b><font color="#000000">7058</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7059" sdnum="1033;"><b><font color="#000000">7059</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7060" sdnum="1033;"><b><font color="#000000">7060</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7061" sdnum="1033;"><b><font color="#000000">7061</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7062" sdnum="1033;"><b><font color="#000000">7062</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7063" sdnum="1033;"><b><font color="#000000">7063</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7054" sdnum="1033;"><b><font color="#000000">7054</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7055" sdnum="1033;"><b><font color="#000000">7055</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7056" sdnum="1033;"><b><font color="#000000">7056</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7057" sdnum="1033;"><b><font color="#000000">7057</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7050" sdnum="1033;"><b><font color="#000000">7050</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7051" sdnum="1033;"><b><font color="#000000">7051</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7052" sdnum="1033;"><b><font color="#000000">7052</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7053" sdnum="1033;"><b><font color="#000000">7053</font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
        <td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7048" sdnum="1033;"><b><font color="#000000">7048</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7049" sdnum="1033;"><b><font color="#000000">7049</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign=middle bgcolor="#FFFF00" sdval="7046" sdnum="1033;"><b><font color="#000000">7046</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="7047" sdnum="1033;"><b><font color="#000000">7047</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
</table>
            </div>
        </div>
        
        <div class="selected_graves_box">
            <div class="graves_box_head">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <h4 class="title">Selected Graves <span>(<span id="graveCount"></span>)</span></h4>
                    <a href="#" class="closeGravesbox">X</a>
                </div>
            </div>
            <div class="graves_box_content">
                <div class="theme-data-table table-responsive">
                    <table class="table graves_table border-0">
                        <thead>
                        <tr>
                            <th class="remove-sort">Plot No.</th>
                            <th class="remove-sort">Deceased Name</th>
                            <th>Status</th>
                            <th class="remove-sort">Actons</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Select Block</option>
                                <option>Map (N-1-13)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Select Section</option>
                                <option>Section 1</option>
                                <option>Section 2</option>
                                <option>Section 3</option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Plot Number</option>
                                <option></option>
                                <option></option> 
                            </select>
                        </div>
                    </div>
                </div>
                <div class="box_bottom_part">
                    <form method="post">
                        <div class="schedule_date_part">
                            <label>Schedule Date</label>
                            <ul class="d-flex flex-wrap">
                                <li class="">
                                    <input type="date" class="form-control" name="date" id="scheduleDate"/>
                                </li>
                                <li class="time_input">
                                    <input type="time" class="form-control" name="time" id="scheduleTime"/>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="reminder_part">
                            <div class="reminder_box">
                                <label class="label">SMS Reminder to Claimant</label>
                                <ul>
                                    <li>
                                        <div class="reminder_custom_checkbox">
                                            <input type="checkbox" class="reminder_input" id="3monthbefore" />
                                            <label for="3monthbefore" class="d-flex align-items-center">
                                                <span class="reminder_checkox"></span>
                                                <p>3 Months before</p>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reminder_custom_checkbox">
                                            <input type="checkbox" class="reminder_input" id="1monthbefore" />
                                            <label for="1monthbefore" class="d-flex align-items-center">
                                                <span class="reminder_checkox"></span>
                                                <p>1 Months before</p>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reminder_custom_checkbox">
                                            <input type="checkbox" class="reminder_input" id="1weekbefore" />
                                            <label for="1weekbefore" class="d-flex align-items-center">
                                                <span class="reminder_checkox"></span>
                                                <p>1 Week before</p>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reminder_custom_checkbox">
                                            <input type="checkbox" class="reminder_input" id="1daybefore" />
                                            <label for="1daybefore" class="d-flex align-items-center">
                                                <span class="reminder_checkox"></span>
                                                <p>1 Day before</p>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="reminder_box">
                                <label class="label">SMS Reminder to Claimant</label>
                                <div class="template_input">
                                    <select class="form-control">
                                        <option>Select Template</option> 
                                            @foreach ($template as $key => $value)
                                            <option value="{{ $value->name }}">{{ $value->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="schedule_btn_part">
                            <input type="submit" name="submit" class="schedule_btn" value="Confirm Schedule" />
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
@endsection
@section('footer_script')
    <script type="application/javascript">

        $(function(){


            $deceased = {};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('exhumation.getdata') }}",
            method: 'get',
            success: function (res) {

                
                deceased = res.data;
                console.log(deceased);

                $("table td[sdval]").each(function () {
                    var row_id = $(this).attr('sdval');
                    var _this = this;
                    if(row_id) {
                        // var row = $('td[sdval='+row_id+']');
                        if(deceased[row_id]) {
                            switch( deceased[row_id].phase ) {
                                case 1: // Unclaimed
                                    $(_this).attr('bgcolor', '#FFF');
                                    break;
                                case 2: // Phase 2
                                    $(_this).attr('bgcolor', '#18B38D');
                                    break;
                                case 3: // Phase 4
                                    $(_this).attr('bgcolor', '#FC3A70');
                                    break;
                                case 4: // Phase 6
                                    $(_this).attr('bgcolor', '#AFD909');
                                    break;
                                default:
                                    $(_this).attr('bgcolor', '#FFF');
                            }
                        } else {
                            $(_this).attr('bgcolor', '#fff');
                        }
                    }
                });

                $('.loading').hide();
            },
            error: function (data) {
            }
        });

            var data_table = [];
            var table = $('.graves_table');
            var grave_count = $('#graveCount');
            $(document).on('click','table td',function() {
                var row_id = $(this).attr('sdval');
                if( row_id && row_id > 0 ) {
                    if(deceased[row_id] ) {
                        if(data_table.indexOf(row_id) === -1) {

                            data_table.push(row_id);
                            console.log(data_table);
                            if(data_table.length > 0) {
                                var table_html = "";
                                // $.each(data_table, function(index, item){
                                    table_html += "<tr id=" + row_id + "><td>" + row_id + "</td><td>" + deceased[row_id].name + "</td><td>" + deceased[row_id].phase_name + "</td><td><a data-id=\""+ row_id +"\" class=\"view_btn delete-grave\">Delete</a></td></tr>";
                                // });
                                table.find('tbody').append(table_html);
                            }
                            grave_count.text(data_table.length);
                            $('.selected_graves_box').show();
                        } else {
                            $('.selected_graves_box').show();
                        }
                    }
                }

            });
            $(".selected_graves_box .graves_box_head .closeGravesbox").click(function(event){
                event.preventDefault();
                $(this).parents('.selected_graves_box').hide();
            });

            $(document).on("click",".delete-grave",function(){
                var row_id = $(this).data('id');
                $('.graves_table tr#'+ row_id).remove();

                // Remove item in array data
                console.log(data_table);
                const index = data_table.indexOf(row_id.toString());
                if (index > -1) {
                    data_table.splice(index, 1);

                    grave_count.text(data_table.length);
                }
            });

            $('.schedule_btn').click(function(e){
                var _this = this;
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var date = $('#scheduleDate').val();
                var time = $('#scheduleTime').val();
                var grave_table = $('.graves_table');
                var grave_table_row = $(grave_table).find('tr');

                if( date ) {
                    if(grave_table_row.length > 0) {
                        $(_this).attr('disabled', 'disabled');
                        var deceased_ids = [];
                        $.each(grave_table_row, function(index, item){
                            var id = $(item).attr('id');
                            if(deceased[id]) {
                                deceased_ids.push(deceased[id].id);
                            }
                        });

                        $.ajax({
                            url: "{{ route('exhumation.addSchedule') }}",
                            method: 'post',
                            data: {'date': date, 'time': time, 'deceased_ids': JSON.stringify(deceased_ids)},
                            success: function (res) {
                                $(_this).removeAttr('disabled');
                                $('.selected_graves_box').hide();
                                data_table = [];
                                table.find('tbody').empty();
                            },
                            error: function (data) {

                            }
                        });
                    }
                } else {
                    $('#scheduleDate').addClass('error');
                }
            });


            $('#btnSearch').click(function(e){
                var search_result = [];
                var _this = this;
                e.preventDefault();

                var key = $('#searchName').val();
                var phase = $("#phase").val();
                var schedule = $("#schedule").val();
                var start = $("#startDate").val();
                var end = $("#endDate").val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('exhumation.search') }}",
                    method: 'post',
                    //data: {'key': key, 'phase': phase, 'schedule': schedule, 'start': start, 'end': end},
                    data: $('#formSearch').serialize(),
                    success: function (res) {
                        if(res.success) {
                            $('table td[sdval]').removeClass('highlight');
                            if(res.data.length > 0) {
                                $.each(res.data, function(index, value){
                                    $('table td[sdval=' + value + ']').addClass('highlight');
                                });
                            }
                        }
                    },
                    error: function (data) {

                    }
                });

                // $('#exhumation-table td[sdval]').removeClass('highlight');
                // if( key_search ) {
                //     for (var key in deceased) {
                //         if (deceased.hasOwnProperty(key)) {
                //             if( getKeyByValue(deceased[key], key_search) ) {
                //                 search_result.push(key);
                //             }
                //         }
                //     }

                //     if( search_result.length > 0 ) {
                //         $.each(search_result, function(index, value){
                //             $('#exhumation-table td[sdval=' + value + ']').addClass('highlight');
                //         });
                //     }
                // }

            });

        })

        function getKeyByValue(object, value) {
            return Object.keys(object).find(key => object[key] == value);
        }

        function checkExist(nameKey, myArray){
            if(myArray.length > 0) {
                for (var i=0; i < myArray.length; i++) {
                    if (myArray[i] === nameKey) {
                        return true;
                    }
                }
            }

            return false;
        }

    </script>
@endsection