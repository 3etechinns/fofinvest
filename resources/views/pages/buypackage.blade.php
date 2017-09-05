@extends('main')

@section('styles')

@endsection

@section('title', '| Buy Package')

@section('content')
<div class="row">
	<div class="col-md-4>
	    <div class="card">
	        <form id="registerFormValidation" action="" method="" novalidate="novalidate">
	            <div class="card-header">
					<h4 class="card-title">
						Purchasing a package
					</h4>
				</div>
	            <div class="card-content">
	                <div class="form-group">
	                    <label class="control-label">
							Number of Packages: <star>*</star>
						</label>
	                    <input class="form-control" name="no_of_packages" type="number" required="true"  aria-required="true">
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Package Price: </label>
	                    <input class="form-control" name="package_price" type="number" required="true" aria-required="true">
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Grand Total: </label>
	                    <input class="form-control" name="grand_total" type="number" required="true" aria-required="true">
	                </div>
	                <div class="category"><star>*</star> Required fields</div>
	            </div>
				<div class="card-footer">
					<button type="submit" class="btn btn-info btn-fill col-md-8 col-md-offset-2 ">Purchase</button>
					<div class="clearfix"></div>
				</div>
	        </form>
	    </div>
	</div>
	<div class="col-md-4>
	    <div class="card">
	        <form id="registerFormValidation" action="" method="" novalidate="novalidate">
	            <div class="card-header">
					<h4 class="card-title">
						Purchasing a package
					</h4>
				</div>
	            <div class="card-content">
	                <div class="form-group">
	                    <label class="control-label">
							Number of Packages: <star>*</star>
						</label>
	                    <input class="form-control" name="no_of_packages" type="number" required="true"  aria-required="true">
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Package Price: </label>
	                    <input class="form-control" name="package_price" type="number" required="true" aria-required="true">
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Grand Total: </label>
	                    <input class="form-control" name="grand_total" type="number" required="true" aria-required="true">
	                </div>
	                <div class="category"><star>*</star> Required fields</div>
	            </div>
				<div class="card-footer">
					<button type="submit" class="btn btn-info btn-fill col-md-8 col-md-offset-2 ">Purchase</button>
					<div class="clearfix"></div>
				</div>
	        </form>
	    </div>
	</div>	
</div>

@endsection
@section('scripts')

@endsection