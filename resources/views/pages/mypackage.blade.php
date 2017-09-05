@extends('main')

@section('styles')

@endsection

@section('title', '| My Package')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-content">
				<table id="mypackage" class="table table-striped table-no-bordered table-hover table-responsive" width="100%" datatables>
					<thead>
						<tr>
							<th>ID</th>
							<th>Purchased Date</th>
							<th>End Date</th>
							<th>Total Weeks</th>
							<th>Total Earnings</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>9/4/2017 3:12AM</td>
							<td>12/20/2017 3:12AM</td>
							<td>0</td>
							<td>0</td>
							<td>Active</td>
						</tr>
						<tr>
							<td>2</td>
							<td>9/4/2017 3:12AM</td>
							<td>12/20/2017 3:12AM</td>
							<td>0</td>
							<td>0</td>
							<td>Active</td>
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