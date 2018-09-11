<script src="css/jquery.min.js"></script>
<script>
	$(document).ready(function(){

				$('.space-menu').toggleClass("col-md-6", 1000, "easeOutQuint");
				$('.hide').fadeToggle("fast");

				$('.mobile-button').click(function(){
						$('.sidebar-menu').addClass("hide-animation-menu");
				});

				$('.menu-close, .sidemenu-title').click(function(){
						$('.sidebar-menu').removeClass("hide-animation-menu");
				});

				$('.tab').click(function(){
						$('.themes').addClass('show-div')
				});

				$('.close-theme').click(function(){
						$('.themes').removeClass('show-div')
				});

				$('.theme-1').click(function(){
					alert('tema1');
				});

				$('.theme-2').click(function(){
					alert('tema2');
				});

				$('.theme-3').click(function(){
					alert('tema3');
				});

				$('.theme-4').click(function(){
					alert('tema4');
				});

				$('.save-theme').click(function(){
					alert('Tema Salvo com Sucesso!');
				});

	});
</script>