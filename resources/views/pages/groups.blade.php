@extends('main')

@section('styles')

@endsection

@section('title', '| Groups')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-content">
				<table id="groups" class="table table-striped table-no-bordered table-hover table-responsive" width="100%" datatables>
					<thead>
						<tr>
							<th>ID</th>
							<th>Country</th>
							<th>Currency</th>
							<th>Package Amount</th>
							<th>Interest Rate</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Philippines</td>
							<td>PHP</td>
							<td>5,000</td>
							<td>15%</td>
							<td>Active</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Denmark</td>
							<td>DKK</td>
							<td>1,000</td>
							<td>15%</td>
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