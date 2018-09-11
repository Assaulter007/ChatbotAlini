<div class="row">
	<div class="col-md-11 themes d-none d-sm-block">
		<a class="close-theme">X</a><br>
		<center>
			<h2 style="margin-bottom: 3px;">TEMAS</h2>Você pode escolher a paleta de cores do site a tua própria maneira, faça bom uso e deixe o site com a sua cara!<br><br>
			<hr style="border: solid 1px #414b84; width: 75%;"><br>

			<div class="row">
				<div class="col-md-3"><b>Tema Padrão</b>
				<div class="theme-1"
					id="tema" 
					gradientcolor="linear-gradient(to right, #3a6186, #89253e)" 
					backgrounddiv="#37333b" 
					backgroundimage="url(../images/wpxblue2.jpg)"
					backgroundbody="#efefef"
					cortexto="#000000"
					cortextodiv="#FFFFFF"
					skewscolor="#efefef"
					divball="#37333b"
					divballcontour="8px solid rgb(109, 59, 88)"
					icongradient1="url(../images/brain-iconpadrao.png)"
					icongradient2="url(../images/gear-iconpadrao.png)"
					icongradient3="url(../images/puzzle-iconpadrao.png)">
				<br><br>
				<img class="theme-icon2" src="images/theme-icon.png">
				</div>
				</div>

				<div class="col-md-3"><b>Tema Escuro</b>
				<div class="theme-2"
					id="tema" 
					gradientcolor="linear-gradient(to right, #bbd2c5, #536976)" 
					backgrounddiv="#d8d8d8" 
					backgroundimage="url(../images/wp6.jpg)"
					backgroundbody="#232323"
					cortexto="#FFF"
					cortextodiv="#000"
					skewscolor="#232323"
					divball="#37333b"
					divballcontour="8px solid #788f92"
					icongradient1="url(../images/brain-iconescuro.png)"
					icongradient2="url(../images/gear-iconescuro.png)"
					icongradient3="url(../images/puzzle-iconescuro.png)">
				<br><br>
				<img class="theme-icon2" src="images/theme-icon.png">
				</div>
				</div>

				<div class="col-md-3"><b>Tema Lava</b>
				<div class="theme-3"
					id="tema" 
					gradientcolor="linear-gradient(to right, #BF6900, #D13800)" 
					backgrounddiv="#efefef" 
					backgroundimage="url(../images/back-test6.jpg)"
					backgroundbody="#191919"
					cortexto="#FFF"
					cortextodiv="#000"
					skewscolor="#191919"
					divball="#efefef"
					divballcontour="8px solid rgb(205, 68, 0)"
					icongradient1="url(../images/brain-iconlava.png)"
					icongradient2="url(../images/gear-iconlava.png)"
					icongradient3="url(../images/puzzle-iconlava.png)">
				<br><br>
				<img class="theme-icon2" src="images/theme-icon.png">
				</div>
				</div>

				<div class="col-md-3"><b>Tema Inverno</b>
				<div class="theme-4"
					id="tema" 
					gradientcolor="linear-gradient(to right, #5E503F, #5E503F)" 
					backgrounddiv="#22333b" 
					backgroundimage="url(../images/back-test4.jpg)"
					backgroundbody="#efefef"
					cortexto="#000000"
					cortextodiv="#FFF"
					skewscolor="#efefef"
					divball="#efefef"
					divballcontour="8px solid #5E503F"
					icongradient1="url(../images/brain-iconinverno.png)"
					icongradient2="url(../images/gear-iconinverno.png)"
					icongradient3="url(../images/puzzle-iconinverno.png)">
				<br><br>
				<img class="theme-icon2" src="images/theme-icon.png">
				</div>
				</div>

				<div class="tab">
					<img class="theme-icon" src="images/theme-icon.png">
					<img class="theme-icon" src="images/arrow-left.png" style="height: 24px;">
				</div>
			</div>

				<br>
					<hr style="border: solid 1px #414b84; width: 75%;"><br>
				Não se esqueça de salvar suas alterações!<br>
				<button class="save-theme button-1 button-1plus" id="salvar">SALVAR</button>

		</center>
	</div>
</div>

 <script src="../js/jquery-1.12.0.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){

	if(localStorage.body != ""){
        $('.info-box').css('border-image', localStorage.gradientcolor);
        $('.info-box2').css('border-image', localStorage.gradientcolor);
        $('.info-box').css('background-color', localStorage.backgrounddiv);
        $('.info-box2').css('background-color', localStorage.backgrounddiv);
        $('body').css('background-color', localStorage.backgroundbody);
        $('.hero').css('background-image', localStorage.backgroundimage);
        $('.middle-text').css('color', localStorage.cortexto);
        $('.info-box').css('color', localStorage.cortextodiv);
        $('.info-box2').css('color', localStorage.cortextodiv);
        $('.skew-1').css('background-color', localStorage.skewscolor);
        $('.skew-2').css('background-color', localStorage.skewscolor);
        $('.div-ball').css('background-color', localStorage.divball);
        $('.icon-img1').css('background-image', localStorage.icongradient1);
        $('.icon-img1-mobile').css('background-image', localStorage.icongradient1);
        $('.icon-img2').css('background-image', localStorage.icongradient2);
        $('.icon-img2-mobile').css('background-image', localStorage.icongradient2);
        $('.icon-img3').css('background-image', localStorage.icongradient3);
        $('.icon-img3-mobile').css('background-image', localStorage.icongradient3);

    }

     $(document).on('click','#tema',function(){

        var gradientcolor = $(this).attr('gradientcolor');
        var backgrounddiv = $(this).attr('backgrounddiv');
        var backgroundbody = $(this).attr('backgroundbody');
        var backgroundimage = $(this).attr('backgroundimage');
        var cortexto = $(this).attr('cortexto');
        var cortextodiv = $(this).attr('cortextodiv');
        var skewscolor = $(this).attr('skewscolor');
        var divball = $(this).attr('divball');
        var divballcontour = $(this).attr('divballcontour');
        var icongradient1 = $(this).attr('icongradient1');
        var icongradient2 = $(this).attr('icongradient2');
        var icongradient3 = $(this).attr('icongradient3');


        $('.info-box').css('border-image',gradientcolor);
        $('.info-box2').css('border-image',gradientcolor);
        $('.info-box').css('background-color',backgrounddiv);
        $('.info-box2').css('background-color',backgrounddiv);
        $('body').css('background-color',backgroundbody);
        $('.hero').css('background-image',backgroundimage);
        $('.middle-text').css('color',cortexto);
        $('.info-box').css('color',cortextodiv);
        $('.info-box2').css('color',cortextodiv);
        $('.skew-1').css('background-color',skewscolor);
        $('.skew-2').css('background-color',skewscolor);
        $('.div-ball').css('background-color',divball);
        $('.div-ball').css('border',divballcontour);
        $('.icon-img1').css('background-image',icongradient1);
        $('.icon-img1-mobile').css('background-image',icongradient1);
        $('.icon-img2').css('background-image',icongradient2);
        $('.icon-img2-mobile').css('background-image',icongradient2);
        $('.icon-img3').css('background-image',icongradient3);
        $('.icon-img3-mobile').css('background-image',icongradient3);


     });

$('#salvar').click(function(){
    localStorage.setItem('gradientcolor', $('.info-box').css('border-image'));
    localStorage.setItem('gradientcolor', $('.info-box2').css('border-image')); 

    localStorage.setItem('backgrounddiv', $('.info-box').css('background-color'));
    localStorage.setItem('backgrounddiv', $('.info-box2').css('background-color'));

    localStorage.setItem('backgroundbody', $('body').css('background-color'));
    localStorage.setItem('backgroundimage', $('.hero').css('background-image'));

    localStorage.setItem('cortexto', $('.middle-text').css('color'));

    localStorage.setItem('cortextodiv', $('.info-box').css('color'));
    localStorage.setItem('cortextodiv', $('.info-box2').css('color'));

    localStorage.setItem('skewscolor', $('.skew-1').css('background-color'));
    localStorage.setItem('skewscolor', $('.skew-2').css('background-color'));

    localStorage.setItem('divball', $('.div-ball').css('background-color'));
    localStorage.setItem('divballcontour', $('.div-ball').css('border'));

    localStorage.setItem('icongradient1', $('.icon-img1').css('background-image'));
    localStorage.setItem('icongradient1', $('.icon-img1-mobile').css('background-image'));

    localStorage.setItem('icongradient2', $('.icon-img2').css('background-image'));
    localStorage.setItem('icongradient2', $('.icon-img2-mobile').css('background-image'));

    localStorage.setItem('icongradient3', $('.icon-img3').css('background-image'));
    localStorage.setItem('icongradient3', $('.icon-img3-mobile').css('background-image'));


});
    
 });

</script>