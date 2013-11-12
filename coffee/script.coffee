if eng
  slogans = [
    ["CROWDFUNDING", "slogan-crowdfunding.php?lang=en"]
    ["TURNING IDEAS INTO BUSINESS", "slogan-idea-impresa.php?lang=en"]
    ["REPOSITIONING A COMPANY", "slogan-riposizionare-azienda.php?lang=en"]
    ["DEFENDING AN HERITAGE", "slogan-difesa-patrimonio.php?lang=en"]
    ["CROWDFUNDING", "slogan-crowdfunding.php?lang=en"]
    ["DEALING WITH DISABILITY", "slogan-assistere-disabile.php?lang=en"]
    ["MANAGING YOUR LIFE", "slogan-gestisci-vita.php?lang=en"]
    ["LEGISLATIVE MONITORING AND LOBBYING", "slogan-lobbying.php?lang=en"]]
else
  slogans = [
    ["CROWDFUNDING", "slogan-crowdfunding.php"]
    ["DA UN'IDEA A UN'IMPRESA", "slogan-idea-impresa.php"]
    ["RIPOSIZIONARE UN'AZIENDA", "slogan-riposizionare-azienda.php"]
    ["LA DIFESA DI UN PATRIMONIO", "slogan-difesa-patrimonio.php"]
    ["CROWDFUNDING", "slogan-crowdfunding.php"]
    ["ASSISTERE UN DISABILE", "slogan-assistere-disabile.php"]
    ["GESTISCI LA TUA VITA", "slogan-gestisci-vita.php"]
    ["MONITORAGGIO LEGISLATIVO", "slogan-lobbying.php"]]

if eng
  testimonial = [
    ["…security, determination and a clear vision of how to address the situation in perfect balance between 'fact' and 'right'…", "Gabriele Brustenghi<br/>Founder of the Fitness Festival"]
    ["…a clear, thorough legal expertise; absolute responsiveness which makes his action immediately reliable…", "Ettore Pietrabissa<br/>General Manager Arcus s.p.a."]
    ["…one of the best features of L & P Law Firm: namely rapid strategy formulation and execution of tasks…", "Domenico Bizzoco<br/>CEO Glovax Asia-Pacific ltd."]
    ["…his personal aptitude and a thorough approach as well as personalized service, have enabled me to assess the problem from unexpected points of view…", "Vincenzo Santoni<br/>Founder Proras Ltd."]]
else
  testimonial = [
    ["…sicurezza, determinazione e chiara visione  di come affrontare la situazione in un perfetto equilibrio fra ‘fatto’ e ‘diritto’…", "Gabriele Brustenghi<br/>Fondatore del Festival del Fitness"]
    ["…una evidente, profonda competenza legale; assoluta prontezza di intervento, che conferisce grande e immediata affidabilità alla sua azione…", "Ettore Pietrabissa<br/>Direttore Generale Arcus s.p.a."]
    ["…una delle migliori caratteristiche dello Studio Legale L&P è la rapiditá nella formulazione della strategia e nell’esecuzione degli incarichi…", "Domenico Bizzoco<br/>CEO Glovax Asia-Pacific ltd."]
    ["…La sua personale attitudine ed un approccio approfondito e personalizzato, mi hanno permesso di valutare il problema da inaspettate prospettive…", "Vincenzo Santoni<br/>Fondatore Proras s.r.l."]]

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

  rnd = Math.floor(Math.random()*(testimonial.length))
  $('#testimonial-preview').html testimonial[rnd][0]
  $('#testimonial-preview-cite').html testimonial[rnd][1]

  $('#twitter').orbit
    fluid: ''
    pauseOnHover: false
    advanceSpeed: 8000
    timer: true
    directionalNav: false

  $("#map-link").toggle (->
    $("#map").show()
  ), ->
    $("#map").hide()

  $('#maximage').css({"visibility": "visible"})

  currentPage = window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1)

  $('a[href="' + currentPage + '"]').addClass "selected-item"
  $('a[href="' + currentPage + '?lang=en"]').addClass "selected-item"

  return
