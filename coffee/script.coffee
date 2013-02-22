slogans = [
  ["DA UN'IDEA A UN'IMPRESA", "slogan-idea-impresa.php"]
  ["RIPOSIZIONARE UN'AZIENDA", "slogan-riposizionare-azienda.php"]
  ["LA DIFESA DI UN PATRIMONIO", "slogan-difesa-patrimonio.php"]
  ["ASSISTERE UN DISABILE", "slogan-assistere-disabile.php"]
  ["GESTISCI LA TUA VITA", "slogan-gestisci-vita.php"]
  ["LOBBYING", "slogan-lobbying.php"]]

testimonial = [
  ["…sicurezza, determinazione e chiara visione  di come affrontare la situazione in un perfetto equilibrio fra ‘fatto’ e ‘diritto’…", "Gabriele Brustenghi"]
  ["…una evidente, profonda competenza legale; assoluta prontezza di intervento, che conferisce grande e immediata affidabilità alla sua azione…", "Ettore Pietrabissa"]]

twitterCB = (twitters) ->
  statusHTML = []
  i = 0

  while i < twitters.length
    username = twitters[i].user.screen_name
    avatar = twitters[i].user.profile_image_url
    status = twitters[i].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, (url) ->
      "<a target=\"_blank\" href=\"" + url + "\">" + url + "</a>"
    ).replace(/\B@([_a-z0-9]+)/g, (reply) ->
      reply.charAt(0) + "<a target=\"_blank\" href=\"http://twitter.com/" + reply.substring(1) + "\">" + reply.substring(1) + "</a>"
    )
    statusHTML.push "<div style='height:50px;'><img style='float:left;margin-right:2px;height:40px;' src='" + avatar + "'><span>" + status + "\"</span> - <a target=\"_blank\" href=\"http://twitter.com/" + username + "/statuses/" + twitters[i].id_str + "\">" + username + "</a></div>"
    i++
  $("#twitter").html statusHTML.join("")



$ ->
	$('#maximage').maximage
		cycleOptions:
			after: (curr, next, opts) ->
        $("#slogan h1").html "<a href ='"+ slogans[opts.currSlide][1] + "'>" + slogans[opts.currSlide][0] + "&nbsp;<i class='icon-circle-arrow-right'></i></a>"
        $("#slogan h1").delay(100).animate({opacity:1}).delay(3500).animate({opacity:0})
        return

  rnd = Math.floor(Math.random()*testimonial.length)
  $('#testimonial-preview').html testimonial[rnd][0]
  $('#testimonial-preview-cite').html testimonial[rnd][1]

  $('#twitter').orbit
    fluid: ''
    pauseOnHover: false
    advanceSpeed: 8000
    timer: true
    directionalNav: false

  $('body').show()

  $("#map-link").toggle (->
    $("#map").show()
  ), ->
    $("#map").hide()

	return
