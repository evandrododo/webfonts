webfonts
========

Webfonts collection

Para adicionar uma fonte edite o arquivo index.php:

Caso seja fonte do Google fonts, coloque a url
Caso seja através do @font-face adicione o caminho do arquivo
Exemplo:
```json
{
	"font" : "alegreyea",
	"fontFamily": "Alegreya",
	"fontName": "Alegreya",
	"fontPath": "http://fonts.googleapis.com/css?family=Alegreya:400,700"
},
{
	"font" : "archivoblack",
	"fontFamily": "\'ArchivoBlack-Regular\',Verdana,serif",
	"fontName": "Archivo Black",
	"fontPath": "archivoblack/stylesheet.css"
}
```