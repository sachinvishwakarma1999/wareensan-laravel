<style type="text/css">
    div#printSection {
        display: none;
    }
    .printTbl a {
        display: none;
    }
</style>
<div class="payment_tabs_content">
    <ul class="d-flex flex-wrap add-btn-part">
        @can(config('permission.permissions.add_payment'))
            <li>
                <a href="#" class="btn btn-primary theme_btn" data-toggle="modal" data-target="#addPaymentModal">Add New Payment</a>
            </li>
        @endcan
    </ul>

    <div class="theme-data-table table-responsive">
        <table class="table payment_table claimant_payment_table" style="width: 100%">
            <thead>
            <tr>
                <th class="remove-sort">Invoice Date</th>
                <th class="remove-sort">Invoice No.</th>
                <th class="remove-sort">Payment Mode</th>
                <th class="remove-sort">Payment Amount</th>
                <th class="remove-sort">Remarks</th>
                <th class="remove-sort">Created By</th>
               <!--  <th class="remove-sort">Block</th>
                <th class="remove-sort">Plot</th>
                <th class="remove-sort">Sub Plot</th> -->
                <th class="remove-sort">Print</th>
            </tr>
            </thead>
            <tbody>
            {{--<tr>--}}
            {{--<td>09 Sep 2020</td>--}}
            {{--<td>#0000001</td>--}}
            {{--<td>NETS</td>--}}
            {{--<td>S$165.00</td>--}}
            {{--<td></td>--}}
            {{--<td>Humairah</td>--}}
            {{--<td>--}}
            {{--<a href="#" class="btn btn-primary theme_btn print_btn print_invoice_btn">Print Invoice</a>--}}
            {{--</td>--}}
            {{--</tr>--}}
            </tbody>
        </table>
    </div>
</div>

@include('claimants.partials.modals.payment', ['deceased' => $deceased])


<!-- Add Payment Popup -->
<div id="printBtn" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg bgModal"
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Invoice Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <div class="modal-body">
                <div id="msgErrorPayment">
                </div>

                <div class="item-box billing-detail">
                    <h4 class="title">Billing</h4>
                    <div class="billing-detail-list">
                        <div class="theme-data-table table-responsive">
                            <table class="table payment_table claimant_payment_table printTbl" style="width: 100%">
                                <thead>
                                <tr>
                                    <th class="remove-sort">Invoice Date</th>
                                    <th class="remove-sort">Invoice No.</th>
                                    <th class="remove-sort">Payment Mode</th>
                                    <th class="remove-sort">Payment Amount</th>
                                    <th class="remove-sort">Remarks</th>
                                    <th class="remove-sort">Created By</th>
                                   <!--  <th class="remove-sort">Block</th>
                                    <th class="remove-sort">Plot</th>
                                    <th class="remove-sort">Sub Plot</th> -->
                                    <th class="remove-sort" style="display: none;">Print</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-group remarks-box">
                    <label class="form-label">Remarks</label>
                    <textarea name="remark" class="form-control" placeholder="Enter any comments here." id="paymentRemark"></textarea>
                </div>

                <div class="payment-save-btn-part">
                    <ul class="form_btn_part d-flex flex-wrap justify-content-end">
                        <li>
                            <button name="submit" class="btn btn-primary theme_btn" id="btnPrint">Print</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary theme_btn_outline" data-dismiss="modal">
                                Cancel
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Add Payment Popup -->

<script type="text/javascript">
    document.getElementById("btnPrint").onclick = function () {

    //var element = document.getElementById("printSection");
    //element.classList.add("fade");
    //element.classList.add("show");
    //document.getElementById('printBtn').style.display = 'none';
    printElement(document.getElementById("printBtn"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");

        $printSection.id = "printSection";
        document.body.appendChild($printSection);

    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();

}
</script>


