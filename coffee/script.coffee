slogans = [
  ["DA UN'IDEA A UN'IMPRESA", "slogan-idea-impresa.php"]
  ["RIPOSIZIONARE UN'AZIENDA", "slogan-riposizionare-azienda.php"]
  ["LA DIFESA DI UN PATRIMONIO", "slogan-difesa-patrimonio.php"]
  ["ASSISTERE UN DISABILE", "slogan-assistere-disabile.php"]
  ["GESTISCI LA TUA VITA", "slogan-gestisci-vita.php"]
  ["LOBBYING", "slogan-lobbying.php"]]

loadTweets = (user, count) ->
	items = []
	api = "https://api.twitter.com/1/statuses/user_timeline/" + user + ".json?count=" + count
	$.ajax
  	dataType: "jsonp"
  	url: api
  	success: (data) ->
  		for el in data
  			do (el) ->
  			items.push el

	items



$ ->
	$('#maximage').maximage
		cycleOptions:
			after: (curr, next, opts) ->
				$("#slogan h1").html "<a href ='"+ slogans[opts.currSlide][1] + "'>" + slogans[opts.currSlide][0] + "&nbsp;<i class='icon-circle-arrow-right'></i></a>"
				return

	loadTweets('avvocatwit', 5)

	return
