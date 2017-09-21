@extends('main')

@section('styles')

@endsection

@section('title', 'Deposits')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-content">
				<table id="deposits" class="table table-striped table-no-bordered table-hover table-responsive" width="100%" datatables>
					<thead>
						<tr>
							<th>Method</th>
							<th>Amount</th>
							<th>Date</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Bank Transfer</td>
							<td>5,000</td>
							<td>12/20/2017 3:12AM</td>
							<td>Completed</td>
						</tr>
						<tr>
							<td>Coins.ph</td>
							<td>15,000</td>
							<td>12/20/2017 3:12AM</td>
							<td>Pending</td>
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