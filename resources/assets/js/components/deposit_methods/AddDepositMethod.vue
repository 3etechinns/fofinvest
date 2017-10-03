<template>
<div class="modal fade" active id="add_deposit_method" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add New Deposit Method</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="#" action="#" @submit.prevent="addDepositMethod()">
				<div class="modal-body">
					<div class="card">							
				        <div class="card-content">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Owner</label>
								<div class="col-sm-10">
								    <select class="form-control" required v-model="deposit_method.user_id">
								    	<option value="">Select</option>
								    	<option v-for="own in owners" :value="own.id">{{ own.name }}</option>
								    </select>
								</div>
							</div>					        	
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Value</label>
								<div class="col-sm-10">
				                <input type="text" placeholder="Enter Value" class="form-control" required v-model="deposit_method.value">
								</div>
							</div>						        	
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Method</label>
								<div class="col-sm-10">
				                <input type="text" placeholder="Enter Method" class="form-control" required v-model="deposit_method.method">
								</div>
							</div>	
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Receive</label>
								<div class="col-sm-10">
				                <input type="text" placeholder="Enter Receive" class="form-control" required v-model="deposit_method.receive">
								</div>
							</div>									
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Identifier</label>
								<div class="col-sm-10">
				                <input type="text" placeholder="Enter Identifier" class="form-control" required v-model="deposit_method.identifier">
								</div>
							</div>	
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Reference Type</label>
								<div class="col-sm-10">
				                <input type="text" placeholder="Enter Reference Type" class="form-control" required v-model="deposit_method.ref_type">
								</div>
							</div>						            				            				            
				        </div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
</template>

<script>
    export default {
    	data: function() {
    		return {
    			deposit_method: {
    				user_id:   '',
    				value:     '',
    				method:    '',
    				receive:   '',
    				identifier:'',
    				ref_type:  '',
    			},
    			owners: [],
    		}
    	},
        mounted: function() {
        	this.getOwners()
        },
        methods: {
        	addDepositMethod: function() {
			    var self = this
			    return axios.post('/deposit_methods/add', self.deposit_method)
			      .then(function (response) {
			        self.$emit('depositMethod')
			        $('#add_deposit_method').modal('hide')
			      })
			      .catch(function (error) {
			        self.fetchError = error
			      })   
        	},
        	getOwners: function() {
			    var self = this
			    return axios.get('/deposit_methods/get_owners')
			      .then(function (response) {
			       	self.owners = response.data
			      })
			      .catch(function (error) {
			        self.fetchError = error
			      })   
        	},
        },
    }
</script>