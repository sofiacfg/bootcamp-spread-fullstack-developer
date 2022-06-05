<html>

		<head>
			<title>Meu primeiro desafio em PHP! \o/</title>
			
			<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
			
			<style type="text/css">
				body{
					font-family:Calibri, Verdana, Tahoma, Arial
				}
				.navBar{
					height:auto;
					overflow:hidden;
				}
				
				.grupo{
					height:auto;
					border:solid 1px;
				}
				.titulo{
					padding:5px;
					height:auto;

				}
				
				.conteudo{
					padding:5px;
					height: auto;
				}
				
				.cabecalho{
					border:solid 1px;
					border-radius:5px 5px 0 0;
					padding: 5px;
					height:auto;
					background: rgb(112, 156, 190);
				}
				
				.agrupamento{
					display: none;
				}
				.rodape{
					border:solid 1px;
					border-radius:0 0 5px 5px;
					padding: 5px;
					height:auto;
					background: rgb(112, 156, 190);
			</style>
		
		<script type="text/javascript">
var corAtiva = "rgb(112, 156, 190)";
var corInativa = "rgb(255, 255, 255)";
$(function(){
    $(".titulo").hover(
        function(){$(this).css("background", corAtiva);},
        function(){$(this).css("background", corInativa)}
    );
 
    $(".titulo").click(function(){
        $(".agrupamento").slideUp();
        var cont = $(this).next();
        $(cont).slideDown("fast");      
    });
});
</script>
		
		
		
		</head>
		
		<body>
			
			<div class="navBar">
        <div class="cabecalho">
            Bandas para playlist
        </div>
        <div class="grupo">
            <div class="titulo">Rock e Pop</div>
			<div class="agrupamento">
            <div class="conteudo">Charlie Brown Jr.</div>
			<div class="conteudo">Capital Inicial</div>
			<div class="conteudo">Engenheiros do Hawaii</div>
        </div>
        <div class="grupo">
            <div class="titulo">Reggaeton</div>
			<div class="agrupamento">
            <div class="conteudo">Farruko</div>
			<div class="conteudo">Daddy Yankee</div>
        </div>
        <div class="grupo">
            <div class="titulo">Reggae</div>
			<div class="agrupamento">
            <div class="conteudo">Planta e Raíz</div>
			<div class="conteudo">Natiruts</div>
			<div class="conteudo">Cultura Profética</div>
        </div>
		<div class="rodape">

        </div>
        
    </div>    
			
		</body>
		
	
		
</html>