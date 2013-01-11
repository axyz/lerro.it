$ ->
	$('#maximage').maximage
		cycleOptions:
			after: (curr) ->
				console.log curr
				$("#slogan h1").html @src
				return

	return
