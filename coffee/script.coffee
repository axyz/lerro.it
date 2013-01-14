slogans =
  "url(\"images/bg/01.jpg\")": ["DA UN'IDEA A UN'IMPRESA", "slogan-idea-impresa.php"]
  "url(\"images/bg/02.jpg\")": ["RIPOSIZIONARE UN'AZIENDA", "slogan-riposizionare-azienda.php"]
  "url(\"images/bg/03.jpg\")": ["LA DIFESA DI UN PATRIMONIO", "slogan-difesa-patrimonio.php"]
  "url(\"images/bg/04.jpg\")": ["ASSISTERE UN DISABILE", "slogan-assistere-disabile.php"]
  "url(\"images/bg/05.jpg\")": ["GESTISCI LA TUA VITA", "slogan-gestisci-vita.php"]

$ ->
	$('#maximage').maximage
		cycleOptions:
			before: (curr) ->
				console.log curr.style.backgroundImage
				$("#slogan h1").delay(100).html "<a href ='"+ slogans[curr.style.backgroundImage][1] + "'>" + slogans[curr.style.backgroundImage][0] + "&nbsp;<i class='icon-circle-arrow-right'></i></a>"
				return

	return
