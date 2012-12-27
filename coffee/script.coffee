$ ->
	$('#maximage').maximage()
		cycleOptions:
			fx: "fade"
			speed: 1000
			timeout: 0
			prev: "#arrow_left"
			next: "#arrow_right"
			pause: 1

		onFirstImageLoaded: ->
			jQuery("#cycle-loader").hide()
			jQuery("#maximage").fadeIn "fast"

		cssBackgroundSize: false

		backgroundSize: ($item) ->
			# Contain portrait but cover landscape
			if $item.data("h") > $item.data("w")
				if $.Window.data("w") / $.Window.data("h") < $item.data("ar")
					$item.height(($.Window.data("w") / $item.data("ar")).toFixed(0)).width $.Window.data("w")
				else
					$item.height($.Window.data("h")).width ($.Window.data("h") * $item.data("ar")).toFixed(0)
			else
				if $.Window.data("w") / $.Window.data("h") < $item.data("ar")
					$item.height($.Window.data("h")).width ($.Window.data("h") * $item.data("ar")).toFixed(0)
				else
					$item.height(($.Window.data("w") / $item.data("ar")).toFixed(0)).width $.Window.data("w")
