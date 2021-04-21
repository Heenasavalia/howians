@extends('company.layout.main_layout')
@section('content')
<link href="{{asset('/company/plugins/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('/company/css/style.css')}}" rel="stylesheet" type="text/css"/>

<div class="content-body">
			<div class="container-fluid">
				<div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form step</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#wizard_Service"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#wizard_Time">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Details">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Payment">
											<span>4</span>
										</a></li>
									</ul>
									<div class="tab-content">
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-12 mb-12">
													<div class="form-group">
														<label class="text-label">Job title</label>
														<input type="text" name="title" id="title" class="form-control" placeholder="Job title" required>
													</div>
													<div class="form-group">
														<label class="text-label">Type of job</label>
			                                            <div class="form-check mb-2">
			                                                <input type="checkbox" class="form-check-input" name="job_type[]" id="part_time" value="part_time" checked="">
			                                                <label class="form-check-label" for="check1">Part time</label>
			                                            </div>
			                                            <div class="form-check mb-2">
			                                                <input type="checkbox" class="form-check-input" name="job_type[]" id="full_time" value="full_time">
			                                                <label class="form-check-label" for="check2">Full time</label>
			                                            </div>
			                                            <div class="form-check disabled">
			                                                <input type="checkbox" class="form-check-input" name="job_type[]" id="freelacer" value="freelacer" disabled="">
			                                                <label class="form-check-label" for="check3">Freelacer</label>
			                                            </div>
			                                           
                                        			</div>
                                        			 <div class="form-row">
				                                            <div class="col-sm-6">
				                                                <input type="text" class="form-control" placeholder="Min. Salary">
				                                            </div>
				                                            <div class="col-sm-6 mt-2 mt-sm-0">
				                                                <input type="text" class="form-control" placeholder="Max. Salary">
				                                            </div>
			                                        </div>
			                                        <div class="form-group">
			                                            <label>Education</label>
			                                            <select multiple class="form-control default-select" id="sel2">
			                                                <option>10 pass</option>
			                                                <option>12 pass</option>
			                                                <option>Greduate</option>
			                                                <option>Post greduate</option>
			                                                <option>5</option>
			                                            </select>
			                                        </div>
			                                        <div class="form-group mb-0">
			                                            <label>Experiance required</label>

			                                            <label class="radio-inline mr-3"><input type="radio" name="work_experiance_type" value="fresher"> Fresher</label>
			                                            <label class="radio-inline mr-3"><input type="radio" name="work_experiance_type" value="experienced"> Experienced</label>
			                                            
			                                        </div>
			                                        <div class="form-row experiance_type">
				                                            <div class="col-sm-6">
				                                                <input type="text" class="form-control" name="min_experiance" placeholder="Min. Experiance">
				                                            </div>
				                                            <div class="col-sm-6 mt-2 mt-sm-0">
				                                                <input type="text" class="form-control" name="max_experiance" placeholder="Max. Experiance">
				                                            </div>
			                                        </div>	
			                                         <div class="form-group mb-0">
			                                            <label>Education</label>

			                                            <label class="radio-inline mr-3"><input type="radio" name="work_experiance_type" value="fresher"> Fresher</label>
			                                            <label class="radio-inline mr-3"><input type="radio" name="work_experiance_type" value="experienced"> Experienced</label>
			                                            
			                                        </div>	
												</div>
												
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">job type sub categories</label>
                                        				<textarea class="form-control" rows="4" id="comment">laravel,css,html,jquery</textarea>
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">job discription</label>
                                        				<textarea class="form-control" rows="4" id="comment">Need a graduate (B. Sc IT, BCA, B. Tech) who knows basics of HTML and CSS development. Will need a training certificate or proof of experience or portfolio to be shown.</textarea>
													</div>
												</div>
												
											</div>
										</div>
										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row">
														<label class="text-label">job timing</label>
												
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Monday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input1" id="input1">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input2" id="input2">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Tuesday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input3" id="input3">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input4" id="input4">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Wednesday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input5" id="input5">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input6" id="input6">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Thrusday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input7" id="input7">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input8" id="input8">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Friday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input9" id="input9">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input10" id="input10">
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row emial-setup">
												<div class="col-lg-12 col-sm-12 col-6">
													<div class="form-row">
														<label class="text-label">Interview Information</label>
														
													</div>
													<div class="form-row">
			                                            <div class="form-group col-md-12">
			                                                <label>Address</label>
			                                                <input type="text" class="form-control" placeholder="1234 Main St">
			                                            </div>
			                                            <div class="form-group col-md-4">
			                                                <label>country</label>
			                                                <input type="email" class="form-control" placeholder="Email">
			                                            </div>
			                                            <div class="form-group col-md-4">
			                                                <label>state</label>
			                                                <input type="password" class="form-control" placeholder="Password">
			                                            </div>
			                                            <div class="form-group col-md-4">
			                                                <label>City</label>
			                                                <input type="text" class="form-control">
			                                            </div>
			                                        </div>
			                                        <div class="form-row">
														<div class="form-group mb-0">
			                                        	 	<label>Is work from home available? : </label>
				                                            <label class="radio-inline mr-3"><input type="radio" name="optradio">Y	es</label>
				                                            <label class="radio-inline mr-3"><input type="radio" name="optradio">No</label>
				                                            <label class="radio-inline mr-3"><input type="radio" name="optradio"> Option 3</label>
				                                        </div>
				                                    </div>
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<div class="skip-email text-center">
														<p>Or if want skip this step entirely and setup it later</p>
														<a href="javascript:void(0)">Skip step</a>
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
	</div>
@endsection
@push('scripts')
<script src="{{asset('/company/plugins/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}" type="text/javascript"></script>
<script src="{{asset('/company/plugins/vendor/jquery-validation/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/company/js/plugins-init/jquery.validate-init.js')}}" type="text/javascript"></script>
				
@endpush