slogans = [
  ["DA UN'IDEA A UN'IMPRESA", "slogan-idea-impresa.php"]
  ["RIPOSIZIONARE UN'AZIENDA", "slogan-riposizionare-azienda.php"]
  ["LA DIFESA DI UN PATRIMONIO", "slogan-difesa-patrimonio.php"]
  ["ASSISTERE UN DISABILE", "slogan-assistere-disabile.php"]
  ["GESTISCI LA TUA VITA", "slogan-gestisci-vita.php"]
  ["LOBBYING", "slogan-lobbying.php"]]

twitterCB = (twitters) ->
  console.log "entered CB"
  statusHTML = []
  i = 0

  while i < twitters.length
    username = twitters[i].user.screen_name
    status = twitters[i].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, (url) ->
      "<a target=\"_blank\" href=\"" + url + "\">" + url + "</a>"
    ).replace(/\B@([_a-z0-9]+)/g, (reply) ->
      reply.charAt(0) + "<a target=\"_blank\" href=\"http://twitter.com/" + reply.substring(1) + "\">" + reply.substring(1) + "</a>"
    )
    statusHTML.push "<div><span>" + status + "\"</span> - <a target=\"_blank\" href=\"http://twitter.com/" + username + "/statuses/" + twitters[i].id_str + "\">" + username + "</a></div>"
    i++
  $("#twitter").html statusHTML.join("")



$ ->
	$('#maximage').maximage
		cycleOptions:
			after: (curr, next, opts) ->
				$("#slogan h1").html "<a href ='"+ slogans[opts.currSlide][1] + "'>" + slogans[opts.currSlide][0] + "&nbsp;<i class='icon-circle-arrow-right'></i></a>"
				return

  $('#testimonial').orbit
    fluid: '16x9'

  $('#twitter').orbit
    fluid: '12x1'
    pauseOnHover: true
    advanceSpeed: 6000

	return
