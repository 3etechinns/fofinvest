@extends('main')

@section('styles')
<style type="text/css">
	.package-height {
		height: 300px !important;
	}
</style>
@endsection

@section('title', 'Buy Package')

@section('content')
<div class="container">
	<div class="alert alert-success" role="alert">
	  	<strong>Remaining Balance: P 3,100</strong>
	</div>	
	<div class="row">
		<div class="col-lg-4">
			<div class="card card-circle-chart" data-background-color="blue">
				<div class="card-header text-center">
	                <h4 class="card-title description">1.25% Monthly</h4>
	                <p>Price P 3,000</p>
	            </div>
				<div class="card-content" style="height:410px">
					<h4 class="description">STANDARD</h4>
					<h5>3 Months (90 days)</h5>
					<h5>Monthly Payout (1/3 Capital + Interest)</h5>
					<hr>
					<input type="number" class="form-control center" style="width: 120px; display: inline-block" placeholder="Quantity">
					<h5>Total Amount: 3,000</h5>
					<h5>Monthly Payout: 1,037.50</h5>
					<h5>Total Payout: 3,112.50</h5>
					<button type="button" class="btn btn-default">Buy Package</button>
				</div>
			</div>	
		</div>
		<div class="col-lg-4">
			<div class="card card-circle-chart" data-background-color="green">
				<div class="card-header text-center">
	                <h4 class="card-title description">2.5% Monthly</h4>
	                <p class="description">Price P 9,000</p>
	            </div>
				<div class="card-content" style="height:410px">
					<h4 class="description">MEGA</h4>
					<h5>3 Months (90 days)</h5>
					<h5>Monthly Payout (1/3 Capital + Interest)</h5>
					<hr>
					<input type="number" class="form-control center" style="width: 120px; display: inline-block" placeholder="Quantity">
					<h5>Total Amount: 9,000</h5>
					<h5>Monthly Payout: 1,037.50</h5>
					<h5>Total Payout: 3,112.50</h5>
					<button type="button" class="btn btn-default">Buy Package</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card card-circle-chart" data-background-color="orange">
				<div class="card-header text-center">
	                <h4 class="card-title description">5% Monthly</h4>
	                <p class="description">Price P 27,000</p>
	            </div>
				<div class="card-content" style="height:410px">
					<h4 class="description">VIP</h4>
					<h5>3 Months (90 days)</h5>
					<h5>Monthly Payout (1/3 Capital + Interest)</h5>
					<hr>
					<input type="number" class="form-control center" style="width: 120px; display: inline-block" placeholder="Quantity">
					<h5>Total Amount: 27,000</h5>
					<h5>Monthly Payout: 1,037.50</h5>
					<h5>Total Payout: 3,112.50</h5>
					<button type="button" class="btn btn-default">Buy Package</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('scripts')

@endsection