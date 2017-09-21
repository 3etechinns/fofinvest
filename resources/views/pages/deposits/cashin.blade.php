@extends('main')

@section('style')
<style type="text/css">
	[v-cloak] {
	  display: none;
	}
	.card-content li {
		width: 33.333%;
	}
	.tab-content {
		min-height: 200px;
	}	
</style>
@endsection
@section('content')
<div class="row" id="app" v-cloak>
	<div class="col-md-8 col-md-offset-2">
            <div class="card card-wizard" id="wizardCard">
                <form id="wizardForm" method="" action="" novalidate="novalidate">
                    <div class="card-header text-center">
                        <h4 class="card-title">Cash In Processing</h4>
                        <p class="category">Please fill out all the information.</p>
                    </div>
					<div class="card-content">
    				    <ul class="nav nav-pills">
    						<li :class="{active: (button==1)}">
    							<a>Method</a>
    						</li>
    						<li :class="{active: (button==2)}">
    							<a>Amount</a>
    						</li>
    						<li :class="{active: (button==3)}">
    							<a>Payment</a>
    						</li>
    					</ul>
    					<div class="tab-content">
    					    <div :class="'tab-pane '+((button==1)?'active':'')">
                                <h5 class="text-center">Select your payment method</h5>
                                <div class="row">
									<div class="col-md-6 col-md-offset-3">
					            		<div class="form-group has-success">
					            			<select class="form-control" v-model.trim="method">
					            				<option v-for="payment in pay_method" :value="payment.value">@{{ payment.method }}</option>
					            			</select>
					            		</div>
									</div>
                                </div>
    					    </div>
    					    <div :class="'tab-pane '+((button==2)?'active':'')">   					    	
                                <h5 class="text-center">Type in the exact amount to deposit</h5>
                                <div class="row">
									<div class="col-md-6 col-md-offset-3">
					            		<div class="form-group has-success">
					            			<input type="number" class="form-control" v-model.number="amount">
					            			<code v-if="valid_amount">Amount should be at least 1000 PHP.</code>
					            		</div>
									</div>
                                </div>
    					    </div>
    						<div :class="'tab-pane '+((button==3)?'active':'')">
    							<h4 class="text-center text-space">Complete your payment</h4>
    							<div class="row">
    								<div class="text-space text-center">
	    								<p><strong>Method: </strong>@{{ pay_method[method_i].method }}</p>
	    								<p><strong>@{{ pay_method[method_i].receive }}:</strong> @{{ pay_method[method_i].identifier }}</p>
	    								<p><strong>Owner: </strong>@{{ pay_method[method_i].owner }}</p>
	    								<p><strong>Amount Due: </strong>@{{ amount }}</p>
	    								<p>
	    									<strong>Ref Code </strong>  (@{{ pay_method[method_i].ref_type }}:)
	    									<input type="text" class="form-control" style="width:235px;display:inline" v-model="ref_code">
	    								</p>
    								</div>
    								<div class="col-md-12 text-center">
	    								<code><strong>Note: </strong> After you transfered the amount, click the "Paid" button.</code>    								
    								</div>
    							</div>
		                        <div class="row">
		                        	<div class="col-md-12 text-center"><br>
		                        		<button type="button" class="btn btn-success btn-fill btn-wd">Paid</button>
				                        <button type="button" class="btn btn-warning btn-fill btn-wd" @click="window.location.href='/account'">Cancel</button>
		                        	</div>
		                        </div>    							
    					    </div>
    					</div>
					</div>
    				<div class="card-footer">
    					<div class="row">
    						<div class="col-md-12">
		                        <button type="button" class="btn btn-default btn-fill btn-wd btn-back pull-left" 
		                        v-if="button==2"
		                        @click="button=1">Back</button>
		                        <button type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right" 
		                        v-if="button==1||button==2"
		                        @click="nextButton()">Next</button>
    						</div>
    					</div>
                        <div class="clearfix"></div>
    				</div>
            	</form>
        	</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/apps/cashin.js?rnd='.rand()) }}"></script>
@endsection