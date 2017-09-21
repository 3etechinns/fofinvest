var app = new Vue({
	el: '#app',
	data: {
		method: 'coins',
		amount: 1000,
		button: 1,
		valid_amount: false,
		ref_code: '',
		pay_method: [
			{ value: 'coins', method: 'Coins.ph Transfer', owner: 'Joseph Getaruelas', receive: 'Coins PHP Wallet Address', identifier: '32f3ZXeryfgm8LQoTvp3Ccj42g6yFeKaor', ref_type: 'Reference ID'},
			{ value: 'bpi',   method: 'BPI Online Transfer (Savings)', owner: 'Joseph Getaruelas', receive: 'Account Number', identifier: '1199215686', ref_type: 'Confirmation Number'},
			{ value: 'union', method: 'Union Online Transfer (Savings)', owner: 'Joseph Getaruelas', receive: 'Account Number', identifier: '100578047863', ref_type: 'Transaction Id'},
		]
	},
	computed: {
		method_i: function() {
			return this.pay_method.findIndex(x => x.value==this.method)
		},
	},
	methods: {
		nextButton: function() {
			if(this.button==2 && this.amount<1000) {
				this.valid_amount = true		
			} else {
				this.button++
			}
		},
	},
})