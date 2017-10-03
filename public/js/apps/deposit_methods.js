Vue.component('my-component', {
  template: '<div>A custom component!</div>'
})

var app = new Vue({
	el: '#app',
	data: {
		deposit_methods: [
			{ id: 1, user_id: 1, value: 'coins', method: 'Coins.ph Transfer', owner: 'Joseph Getaruelas', receive: 'Coins PHP Wallet Address', identifier: '32f3ZXeryfgm8LQoTvp3Ccj42g6yFeKaor', ref_type: 'Reference ID'},
			{ id: 2, user_id: 1, value: 'bpi',   method: 'BPI Online Transfer (Savings)', owner: 'Joseph Getaruelas', receive: 'Account Number', identifier: '1199215686', ref_type: 'Confirmation Number'},
			{ id: 3, user_id: 1, value: 'union', method: 'Union Online Transfer (Savings)', owner: 'Joseph Getaruelas', receive: 'Account Number', identifier: '100578047863', ref_type: 'Transaction Id'},
		]
	},
	computed: {

	},
	methods: {

	},
})