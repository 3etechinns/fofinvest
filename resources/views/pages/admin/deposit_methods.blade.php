@extends('main')

@section('styles')

@endsection

@section('title', 'Deposit Methods')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-content">
				<table id="groups" class="table table-striped table-no-bordered table-hover table-responsive" width="100%" datatables>
					<thead>
						<tr>
							<th>ID</th>
							<th>User ID</th>
							<th>Value</th>
							<th>Method</th>
							<th>Receive</th>
							<th>Identifier</th>
							<th>Ref Type</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>1</td>
							<td>coins</td>
							<td>Coins.ph Transfer</td>
							<td>Coins PHP Wallet Address</td>
							<td>32f3ZXeryfgm8LQoTvp3Ccj42g6yFeKaor</td>
							<td>Reference ID</td>
						</tr>
						<tr>
							<td>2</td>
							<td>1</td>
							<td>bpi</td>
							<td>BPI Online Transfer (Savings)</td>
							<td>Account Number</td>
							<td>1199215686</td>
							<td>Confirmation Number</td>
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