<template>
	<div class="card">
		<div class="card-content">
			<div class="row">		
				<add-deposit-method @depositMethod="getDepositMethods()"></add-deposit-method>
				<div class="card-header pull-right">
					<button class="btn btn-default" type="button" @click="openModal()"><i class="glyphicon fa fa-plus"></i>
						Add
					</button>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card-content table-responsive table-full-width">
						<table class="table table-striped">
							<thead>
							   <tr>
							      <th>ID</th>
							      <th>USER ID</th>
							      <th>Value</th>
							      <th>Method</th>
							      <th>Receive</th>
							      <th>Identifier</th>
							      <th>Ref Type</th>
							      <th>Action</th>
							   </tr>
							</thead>
							<tbody>
								<tr v-for="(method, index) in deposit_methods">
									<td>{{ method.id }}</td>
									<td>{{ method.user_id }}</td>
									<td>{{ method.value }}</td>
									<td>{{ method.method }}</td>
									<td>{{ method.receive }}</td>
									<td>{{ method.identifier }}</td>
									<td>{{ method.ref_type }}</td>
									<td>
										<button class="btn btn-warning" type="button"><i class="glyphicon fa fa-edit"></i></button>
										<button class="btn btn-danger" type="button" @click="deleteDepositMethod(method.id)"><i class="glyphicon fa fa-trash-o"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>
</template>

<script>
    export default {
    	data: function(){
    		return {
				deposit_methods: [
					// { id: 1, user_id: 1, value: 'coins', method: 'Coins.ph Transfer', owner: 'Joseph Getaruelas', receive: 'Coins PHP Wallet Address', identifier: '32f3ZXeryfgm8LQoTvp3Ccj42g6yFeKaor', ref_type: 'Reference ID'},
					// { id: 2, user_id: 1, value: 'bpi',   method: 'BPI Online Transfer (Savings)', owner: 'Joseph Getaruelas', receive: 'Account Number', identifier: '1199215686', ref_type: 'Confirmation Number'},
					// { id: 3, user_id: 1, value: 'union', method: 'Union Online Transfer (Savings)', owner: 'Joseph Getaruelas', receive: 'Account Number', identifier: '100578047863', ref_type: 'Transaction Id'},
				],
				    			
    		}
    	},
        mounted: function() {
            this.getDepositMethods()
        },
        methods:{
        	getDepositMethods: function() {
			    var self = this
			    return axios.get('/deposit_methods/get_list')
			      .then(function (response) {
			        self.deposit_methods = response.data
			      })
			      .catch(function (error) {
			        self.fetchError = error
			      })        		
        	},
        	openModal: function() {
        		$('#add_deposit_method').modal('show')
        	},
        	deleteDepositMethod: function(id) {
        		var index = Data.map(function(e) { return e.name; }).indexOf('Nick');
			    var self = this
			    return axios.delete('/deposit_methods/delete/'+id)
			      .then(function (response) {
			        if(response.data==true) self.deposit_methods.splice(index, 1)
			      })
			      .catch(function (error) {
			        self.fetchError = error
			      })           		
        	},
        }
    }
</script>	