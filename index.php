<?php
$fontes_json = '
[
	{
		"font" : "alegreyea",
		"fontFamily": "Alegreya",
		"fontName": "Alegreya",
		"fontPath": "http://fonts.googleapis.com/css?family=Alegreya:400,700"
	},
	{
		"font" : "amble",
		"fontFamily": "\'Amble Regular\',Verdana,serif",
		"fontName": "Amble Regular",
		"fontPath": "amble/stylesheet.css"
	},
	{
		"font" : "arial",
		"fontFamily": "Arial, Verdana, sans-serif",
		"fontName": "Arial",
		"fontPath": ""
	},
	{
		"font" : "archivoblack",
		"fontFamily": "\'ArchivoBlack-Regular\',Verdana,serif",
		"fontName": "Archivo Black",
		"fontPath": "archivoblack/stylesheet.css"
	},
	{
		"font" : "banda_regular",
		"fontFamily": "\'BandaRegularRegular\',Georgia,serif",
		"fontName": "Banda Regular",
		"fontPath": "banda_regular/stylesheet.css"
	},
	{
		"font" : "brawler",
		"fontFamily": "Brawler",
		"fontName": "Brawler",
		"fontPath": "http://fonts.googleapis.com/css?family=Brawler:400"
	},
	{
		"font" : "codepro_light",
		"fontFamily": "\'code_pro_light_demoregular\',Arial,sans-serif",
		"fontName": "Codepro Light",
		"fontPath": "codepro_light/stylesheet.css"
	},
	{
		"font" : "codepro_regular",
		"fontFamily": "\'code_pro_demoregular\',Arial,sans-serif",
		"fontName": "CodePro Regular",
		"fontPath": "codepro_regular/stylesheet.css"
	},
	{
		"font" : "fertigopro",
		"fontFamily": "\'FertigoProRegular\',Georgia,serif",
		"fontName": "Fertigo Pro",
		"fontPath": "fertigopro_regular/stylesheet.css"
	},
	{
		"font" : "goudyserif",
		"fontFamily": "\'goudyserif\',Georgia,serif;",
		"fontName": "Goudy Serif",
		"fontPath": "goudyserif/stylesheet.css"
	},
	{
		"font" : "inconsolata",
		"fontFamily": "\'Inconsolata\', sans-serif",
		"fontName": "Inconsolata",
		"fontPath": "http://fonts.googleapis.com/css?family=Inconsolata:400,700"
	},
	{
		"font" : "Rosario",
		"fontFamily": "\'Rosario\', sans-serif",
		"fontName": "Rosario",
		"fontPath": "http://fonts.googleapis.com/css?family=Rosario:400,700"
	},
	{
		"font" : "montserrat",
		"fontFamily": "\'montserratregular\',Verdana,sans-serif;",
		"fontName": "Montserrat",
		"fontPath": "montserrat_regular/stylesheet.css"
	},
	{
		"font" : "open_sans",
		"fontFamily": "\'Open Sans\',Arial,sans-serif;",
		"fontName": "Open Sans",
		"fontPath": "http://fonts.googleapis.com/css?family=Open+Sans:400,700"
	},
	{
		"font" : "quicksand",
		"fontFamily": "\'Quicksand\', sans-serif",
		"fontName": "Quicksand",
		"fontPath": "http://fonts.googleapis.com/css?family=Quicksand:400,700"
	},
	{
		"font" : "roboto",
		"fontFamily": "\'Roboto\', sans-serif",
		"fontName": "Roboto",
		"fontPath": "http://fonts.googleapis.com/css?family=Roboto:400,700"
	},
	{
		"font" : "sinkin_sans_regular",
		"fontFamily": "\'sinkin_sans400_regular\',Georgia,serif",
		"fontName": "Sinkin Sans",
		"fontPath": "sinkin_sans_regular/stylesheet.css"
	},
	{
		"font" : "tahoma",
		"fontFamily": "Tahoma,Georgia,serif",
		"fontName": "Tahoma",
		"fontPath": ""
	},
	{
		"font" : "verdana",
		"fontFamily": "Verdana,Arial,serif",
		"fontName": "Verdana",
		"fontPath": ""
	},
	{
		"font" : "wc_mano_negra",
		"fontFamily": "\'wc_mano_negra_btaregular\',Georgia,serif",
		"fontName": "WC Mano Negra",
		"fontPath": "wc_mano_negra/stylesheet.css"
	}
]
';
$fontes = json_decode($fontes_json);
?>
<!DOCTYPE html>
<html lang="pt-br" >
  <head>
		<meta charset="utf-8">

    <title>Webfonts</title>

		<link rel="stylesheet" type="text/css" href="plugins/selectinspiration/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="plugins/selectinspiration/cs-skin-boxes.css" />

			<?php
			foreach($fontes as $Fonte){
				$fontPath = $Fonte->fontPath;
				if($fontPath)
					echo '<link rel="stylesheet" href="'.$fontPath.'" type="text/css" charset="utf-8">';
			}
			?>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/monokai_sublime.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>

		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

    <style type="text/css">
      .smooth {
        transform: rotate (-0.0000000001deg);
        text-shadow: 0 0 1px rgba(0,0,0,0.3);
        font-smooth: always;
      }
			<?php
			foreach($fontes as $Fonte){
				$fonteClass = $Fonte->font;
				$fonteFamily = $Fonte->fontFamily;
				echo ".$fonteClass { font-family: $fonteFamily; }";
			}
			?>
			body,html {
				padding:0; margin:0;
			}
			h1 { font-size: 5em; padding:0;	margin:0; text-transform: uppercase;}
			h2 { font-size: 4em; padding:0;	margin:0; }
			h3 { font-size: 3em; padding:0;	margin:0; }

			#lista-fontes {
				max-height: 72px;
				padding:10px;
				background-color: #23241F;
				margin-bottom:10px;
				box-shadow: 0px 0px 5px #555;
			}
			#pangram-display {
				padding:20px;
			}
			#code {
				width:70%;
				height:60%;
				position:absolute;
				margin:0 auto;
				background-color: #23241F;
				box-shadow: 0px 0px 5px #555;
				top:11%;
				left:10%;
				color: #fff;
				display:none;
				font-family: 'Inconsolata', sans-serif;
				font-size:1rem;
				padding:50px;
			}
			#code pre {
				max-width:100%;
				overflow:none;
			}
			.btn {
				color: #FFF;
				font-size: 1.25em;
				position:relative;
				float:right;
				padding: 0.5em;
				border: 4px solid #FFF;
				text-decoration: none;
			}

			.insert-code {display:none}
		</style>

  </head>

  <body>
		<script>
			</script>
		<section id="lista-fontes">
      <select id="fonte_selecionada" class="cs-select cs-skin-boxes">
  		<?php
			foreach($fontes as $Fonte){
				$fonte = $Fonte->font;
				$nome = $Fonte->fontName;
				echo "<option value	='$fonte' data-class='$fonte'>$nome</option>";
			}
			?>


			</select>

			<a class="btn inconsolata" href="#" onclick="getCode()"><b>&lt;&frasl;code&gt;</b></a>
		</section>
		<section id="pangram-display" class="arial">
			<h3>Marta foi à cozinha pois queria ver belo jogo de xícaras</h3>

			<h1>Foi em Pernambuco que vi</h1>
			<h2>Jerry Hall degustar kiwi com xerez</h2>

			<p>Grave e cabisbaixo, o filho justo zelava pela querida mãe doente. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in consectetur lorem. Pellentesque nec elit vel risus tempor blandit nec sit amet turpis. Nam semper, leo sit amet congue hendrerit, augue purus convallis quam, eu rutrum quam mi eget ligula. Phasellus ornare lacus quis nulla venenatis, id varius nulla ultricies. Nunc tristique quis ante sed lobortis. Donec vehicula mollis ipsum, ut rhoncus risus bibendum ut. In suscipit massa ac urna luctus, suscipit finibus lorem pharetra. Duis tincidunt elementum arcu sit amet laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum massa porttitor diam tempus pharetra. Mauris luctus semper metus, eu egestas nunc tincidunt ac. In rhoncus facilisis auctor.
				Curabitur id finibus magna, vitae viverra purus. Donec at nisl sit amet odio tincidunt dignissim. Quisque interdum sem odio, sed pretium nisi venenatis sit amet. Nam sed neque nec sapien eleifend malesuada. Vivamus dictum mauris eu quam tempus, eu imperdiet velit venenatis. Suspendisse malesuada risus felis, eu semper magna sollicitudin in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				Praesent sapien diam, iaculis dignissim interdum id, malesuada pharetra massa. Fusce purus dui, condimentum at consectetur eget, ultricies at metus. Praesent nec neque lacus. Donec enim nisl, egestas sed nibh nec, ornare tempus justo. Praesent sed efficitur lorem. Morbi consectetur felis non ante euismod, at rutrum erat pulvinar. Proin nec est quis turpis volutpat pretium sed id mi. Morbi a interdum magna. Mauris elementum finibus sodales. Curabitur a urna in sapien aliquet tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer odio augue, molestie eget dignissim non, imperdiet ut erat. Nullam condimentum quis metus eu tempor. Nunc et metus accumsan, volutpat nisi non, semper est. Donec tincidunt vel ligula et dapibus. Aliquam erat volutpat.
Nunc quis auctor risus. Nunc porta pretium leo, vitae tempus erat pretium nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ultrices purus. Phasellus vel egestas elit. Nam imperdiet dui sit amet rhoncus commodo. Cras enim urna, venenatis sit amet eros ac, tincidunt lacinia turpis. Duis cursus malesuada commodo. Sed ut sollicitudin dolor. Sed sed ante tellus. Nunc quis tortor eu dolor accumsan faucibus. Phasellus suscipit lorem et nisi malesuada, sit amet interdum urna pellentesque. Cras eget placerat est. Morbi mattis bibendum sem vitae volutpat. Cras vel metus eu metus fermentum laoreet vel sit amet lectus. Proin efficitur libero lectus, nec rhoncus nibh congue quis. </p>
			<b>Hoje à noite, sem luz, decidi xeretar a quinta gaveta de vovô: achei lingüiça, pão e fubá</b><br>
			<i>Gazeta publica hoje breve anúncio de faxina na quermesse</i>
		</section>

		<section id="code">
		<?php
			foreach($fontes as $Fonte){
				$fonte = $Fonte->font;
				$nome = $Fonte->fontName;
				$family = $Fonte->fontFamily;
				$path = $Fonte->fontPath;
				echo "<div id='".$fonte."-insert' class='insert-code'>";
				echo "<pre><h4>&lt;!--CSS include--&gt;</h4><code class='html'>";
				if($path)
				{
					echo htmlentities('<link rel="stylesheet" href="'.$path.'"');
					echo "\n";
					echo htmlentities('type="text/css" charset="utf-8">');
				} else {
					echo "&lt;!-- Web Safe font! não precisa de include :D --&gt;";
				}
				echo "</code></pre>";
				echo "<pre><h4>&lt;!--CSS class--&gt;</h4><code class='css'>";
				echo htmlentities(".$fonte { font-family: $family; }");
				echo "</code></pre>";
				echo "<pre><h4>&lt;!--Span de teste--&gt;</h4><code class='html'>";
				echo htmlentities("<span class='".$fonte."'>$nome</span>");
				echo "</code></pre>";
				echo "</div>";
			}
		?>

		</section>
		<script src="plugins/selectinspiration/js/classie.js"></script>
		<script src="plugins/selectinspiration/js/selectFx.js"></script>

		<script>
			<?php
			$nomes = array();
			foreach($fontes as $Fonte){
				$nomes[] = $Fonte->font;
			}
			$classes = implode(" ", $nomes);
			?>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
					new SelectFx(el, {
						stickyPlaceholder: false,
						onChange: function(val){
							$('span.cs-placeholder').removeClass('<?=$classes?>');
							$('span.cs-placeholder').addClass(val);
							$('#pangram-display').removeClass('<?=$classes?>');
							$('#pangram-display').addClass(val);
						}
					});
				} );
			})();
			getCode = function() {
				nomeFonte = $("#fonte_selecionada").find(":selected").val();
				$("#code div").hide();
				$("#code #"+nomeFonte+"-insert").show();
				$("#code").fadeIn();
			}
			$(document).mouseup(function (e)
			{
					var container = $("#code");
					if (!container.is(e.target) // if the target of the click isn't the container...
							&& container.has(e.target).length === 0) // ... nor a descendant of the container
					{
							container.fadeOut();
					}
			});
			hljs.initHighlightingOnLoad();
		</script>

  </body>

</html>
