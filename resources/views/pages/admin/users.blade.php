@extends('main')

@section('styles')

@endsection

@section('title', 'Users')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-content">
				<table id="users" class="table table-striped table-no-bordered table-hover table-responsive" width="100%" datatables>
					<thead>
						<tr>
							<th>ID</th>
							<th>Email Address</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Contanct Number</th>
							<th>Bank</th>
							<th>Bank Account</th>
							<th>Coins.ph Wallet</th>
							<th>Group</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>jgetaruelas@gmail.com</td>
							<td>Joseph</td>
							<td>Getaruelas</td>
							<td>09950835452</td>
							<td>BPI</td>
							<td>123456789</td>
							<td>ajklajsfkljsdflja13434lkjsdkfsjdasdf</td>
							<td>1</td>
							<td>Active</td>							
						</tr>
						<tr>
							<td>2</td>
							<td>edanao@gmail.com</td>
							<td>Eddel</td>
							<td>Danao</td>
							<td>09950835452</td>
							<td>BPI</td>
							<td>123456789</td>
							<td>ajklajsfkljsdflja13434lkjsdkfsjdasdf</td>
							<td>1</td>
							<td>Inactive</td>
						</tr>						
					</tbody>
				</table>							
			</div>
		</div>		
	</div>
</div>

@endsection
@section('scripts')

@endsection