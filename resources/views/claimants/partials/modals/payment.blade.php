<!-- Add Payment Popup -->
<div id="addPaymentModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg bgModal"
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <div class="modal-body">
                <div id="msgErrorPayment">
                </div>
                {{--                <div class="invoice-detail">--}}
                {{--                    <ul class="d-flex flex-wrap">--}}
                {{--                        <li>--}}
                {{--                            <span>Invoice No.</span>--}}
                {{--                            <span class="detail">INV002036</span>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <span>Bill Date:</span>--}}
                {{--                            <span class="detail">9 September 2020</span>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}

                <div class="item-box item-detail">
                    <h4 class="title">Item Details</h4>
                    <form class="form-inline mb-3" id="addPayment" role="form">
                        <div class="form-group mr-2">
                            <select class="form-control select2" id="itemDeceased">
                                <option value="">Please select deceased</option>
                                @foreach( $deceased->get() as $item)
                                    <option value="{{ $item->id }}" data-object="{{$item}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mr-2">
                            <input type="text" class="form-control" placeholder="Price" id="itemPrice">
                        </div>
                        <input type="submit" class="btn btn-primary form-control" value="Add Item" id="btnAddItem"/>
                    </form>
                    <div class="theme-data-table table-responsive">
                        <table class="table m-0" id="tableItems">
                            <thead>
                            <tr>
                                <th>Deceased Name</th>
                                <th>New Plaque Name</th>
                                <th>Gender</th>
                                <th>Date of Death</th>
                                <th>Block</th>
                                <th>Plot</th>
                                <th>Sub Plot</th>
                                <th>Grave Type</th>
                                <th>Relation to Claimant</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="item-box billing-detail">
                    <h4 class="title">Billing</h4>
                    <div class="billing-detail-list">
                        <ul>
                            <li>
                                <label>No. of Supplementary Grave</label>
                                <span id="graveNumber">0</span>
                            </li>
                            <li>
                                <label>Sub-Total</label>
                                <span id="subTotal">S$0.00</span>
                            </li>
                            <li>
                                <label>GST @ 7%</label>
                                <span id="paymentTax">S$0.00</span>
                            </li>
                            <li class="pay-amount">
                                <label>Amount to Pay</label>
                                <span id="paymentTotal">S$0.00</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="item-box payment-mode">
                    <h4 class="title">Mode of Payment</h4>
                    <div class="d-flex flex-wrap">
                        <div class="cash-input">
                            <select class="form-control" name="payment_mode" id="paymentMode">
                                <option value="Cash">Cash</option>
                                <option value="Nets">Nets</option>
                                <option value="PayNow">PayNow</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                            </select>
                        </div>

                        <div class="payment-input">
                            <input type="number" name="payment" class="form-control" placeholder="S$0.00">
                        </div>

                        <a href="#" class="btn btn-primary theme_btn">Confirm</a>
                    </div>
                </div>

                <div class="form-group remarks-box">
                    <label class="form-label">Remarks</label>
                    <textarea name="remark" class="form-control" placeholder="Enter any comments here." id="paymentRemark"></textarea>
                </div>

                <div class="payment-save-btn-part">
                    <ul class="form_btn_part d-flex flex-wrap justify-content-end">
                        <li>
                            <button name="submit" class="btn btn-primary theme_btn" id="btnAddPayment">Save Changes</button>
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
