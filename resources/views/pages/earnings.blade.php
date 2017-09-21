@extends('main')

@section('styles')

@endsection

@section('title', 'Earnings')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-content">
				<table id="earnings" class="table table-striped table-no-bordered table-hover table-responsive" width="100%" datatables>
					<thead>
						<tr>
							<th>ID</th>
							<th>Total Packages</th>
							<th>Week No</th>
							<th>Amount</th>
							<th>Earned Date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>3</td>
							<td>1</td>
							<td>10,020</td>
							<td>9/5/2017 2:14 AM</td>
						</tr>
						<tr>
							<td>2</td>
							<td>1</td>
							<td>3</td>
							<td>680</td>
							<td>9/5/2017 2:14 AM</td>
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