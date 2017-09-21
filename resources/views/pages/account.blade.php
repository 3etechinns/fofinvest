@extends('main')

@section('styles')

@endsection

@section('title', 'Account')

@section('content')
<div class="row">
	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>PHP</p>1,345
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Account Balance
				</div>
			</div>
	    </div>
	</div>

	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>PHP</p>0
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Total Investment
				</div>
			</div>
	    </div>
	</div>

	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>PHP</p>0
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Active Investment
				</div>
			</div>
	    </div>
	</div>

	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>PHP</p>0
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Total Profit
				</div>
			</div>
	    </div>
	</div>		
</div>
<div class="row">
	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>PHP</p>0
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Total Deposits				
					<div class="pull-right">
						<a href="deposits/cashin" class="btn btn-info btn-fill btn-icon btn-sm">
							Cash In
						</a>
					</div>					
				</div>
			</div>
	    </div>
	</div>

	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>PHP</p>0
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Total Withdrawals
					<div class="pull-right">
						<a href="#" class="btn btn-success btn-fill btn-icon btn-sm">
							Cash Out
						</a>
					</div>						
				</div>
			</div>
	    </div>
	</div>

	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>QTY</p>0
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Active Packages
				</div>
			</div>
	    </div>
	</div>

	<div class="col-lg-3 col-sm-6">
	    <div class="card">
	        <div class="card-content">
	            <div class="row">
	                <div class="col-xs-5">
	                    <div class="icon-big icon-success text-center">
	                        <i class="ti-wallet"></i>
	                    </div>
	                </div>
	                <div class="col-xs-7">
	                    <div class="numbers">
	                        <p>QTY</p>0
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Completed Packages
				</div>
			</div>
	    </div>
	</div>		
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
			$('#registerFormValidation').validate();
            $('#loginFormValidation').validate();
            $('#allInputsFormValidation').validate();
        });
    </script>
@endsection