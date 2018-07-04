$(document).ready(function() {	

	function init() {

		setInterval(function(){ est(); }, 5000);

	}	

	function est() {

		let tiket = $("#tiket").val();

		console.log(tiket);

		 $.post("/JMYWEBCODE",{i:tiket}, function(result){
		console.log(result);
			let res = JSON.parse(result);			

			console.log(res);

			if(res.estado=='activo')

				redireccionar();

		});

	}

	function redireccionar(){

		let u = $("#web").val();

		window.location = u;

	};

	$("#refrescar").click(function(){

		est();

	});

	init();

});