<?php include 'includes/header.php'; ?>
<section class="container-fluid" id="claim-registration">
    <div class="row">
        <div class="page-body w-100">
        	<div class="page-right-body w-100 p-0">
        		<div class="top-level-title">
        			<h3>Registration</h3>
        		</div>
        		<div class="claimant-edit-form-part page-right-body-content">
                    <form method="post">
                    	<div class="form-group">
	                    	<div class="field-title">
	                    		<h4>Claimant Details <span>*</span></h4>
	                    	</div>
							<label class="form-label">Please key in the details of the claimant below</label>
                    	</div>
                        <div class="claimant-top-part">
                            <div class="salutation_part">
                                <label class="form-label">Salutation</label>
                                <select class="form-control">
                                    <option>Mdm</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Claimant Name</label>
                                    <input type="text" name="claimant_name" class="form-control" placeholder="Claimant Test 123">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Claimant NRIC/FIN/Passport no.</label>
                                    <input type="text" name="passport_no" class="form-control w-85" placeholder="S1234567A">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Contact No.</label>
                                    <div class="d-flex flex-wrap add_new_column">
                                        <input type="number" name="contact" class="form-control" placeholder="91234567 (Daughter)">
                                        <a href="#" class="btn btn-primary theme_btn">Add new +</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Claimanttest@wareesan.com">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Postal Code</label>
                                    <div class="d-flex flex-wrap postal_column">
                                        <input type="text" name="postal_code" class="form-control" placeholder="123456">
                                        <a href="#" class="btn btn-primary theme_btn">Get Address</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Block / House</label>
                                    <input type="text" name="block_house" class="form-control" placeholder="blk123">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <input type="text" name="street" class="form-control" placeholder="Street Address">
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 row justify-content-between level_column">
                                        <div class="input_box">
                                            <label class="form-label">Level</label>
                                            <input type="number" name="level" class="form-control" placeholder="05">
                                        </div>
                                        <div class="input_box">
                                            <label class="form-label">Unit</label>
                                            <input type="number" name="unit" class="form-control" placeholder="27">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
	                            <div class="field-title">
		                    		<h4>Deceased Details<span>*</span></h4>
		                    	</div>
		                    	<div class="form-group">
	                                <label class="form-label">Please key in the details of the deceased you wish to claim below</label>
	                            </div>
                            </div>

                            <div class="col-md-12 row">
                            	<div class="col-md-6">
	                            	<div class="form-group">
		                                <label class="form-label">Deceased Name</label>
		                                <input type="text" name="passport_no" class="form-control w-85" placeholder="" value="">
		                            </div>
		                            <div class="form-group block_input_part">
		                                <div class="d-flex flex-wrap">
		                                    <div class="block_input">
		                                        <label class="form-label">Block</label>
		                                        <input type="number" name="block" class="form-control">
		                                    </div>
		                                    <div class="block_input">
		                                        <label class="form-label">Plot No.</label>
		                                        <input type="number" name="plot_no" class="form-control">
		                                    </div>
		                                    <div class="block_input">
		                                        <label class="form-label">Sub Plot No.</label>
		                                        <input type="number" name="sub_plot_no" class="form-control" readonly="">
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="form-group">
		                                <label class="form-label">Relationship to Claimant</label>
		                                <input type="text" name="passport_no" class="form-control w-85" placeholder="" value="">
		                            </div>
		                            <div class="form-group">
		                                <label class="form-label">Deceased Name on New Plaque (Max 16 Characters)</label>
		                                <input type="text" name="passport_no" class="form-control w-85" placeholder="" value="">
		                            </div>
		                            <div class="drag-file-box form-group">
		                                <label class="form-label">Deceased Death Certificate</label>
                                        <div action="#" class="dropzone">
	                                        <div class="fallback">
	                                            <input name="file" type="file" multiple />
	                                        </div>
	                                    </div>
                                    </div>
                                     <div class="form-group">
                                    	<input type="reset" name="reset" class="btn btn-primary theme_btn_outline" value="Add More Deceased">
		                            </div>
                            	</div>
                            </div>

                            <div class="col-md-12">
	                            <div class="field-title">
		                    		<h4>Appointment Details<span>*</span></h4>
		                    	</div>
		                    	<div class="form-group">
	                                <label class="form-label">Please choose your preferred appointment date and time, our service officers will contact you shortly </label>
	                            </div>
                            </div>
                            <div class="col-md-12">
                            	<div class="form-group date-time">
                            		<input type="date" name="" class="form-control">
                            		<input type="time" name="" class="form-control" value="00:00">
                            	</div>
                            </div>

                            <div class="col-md-12">
                                <ul class="form_btn_part d-flex flex-wrap">
                                    <li>
                                        <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Confirm Registration">
                                    </li>
                                    <li>
                                        <input type="reset" name="reset" class="btn btn-primary theme_btn_outline" value="Clear Registration">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
        	</div>
    	</div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>