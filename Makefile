ACTIVE_MODULES=jade compass stylus coffee

all: $(ACTIVE_MODULES)

jade: 
	for file in pages/*.jade; do jade $$file --pretty; done
	for file in pages/*.html; do mv "$$file" "$${file/%.html/.php}"; done
	for file in pages/*.php; do mv $$file .; done

compass:
	compass compile

stylus:
	stylus stylus/*.styl -o stylesheets/

coffee:
	coffee --bare -o javascripts/ -c coffee/*.coffee

clean:
	-for file in pages/*.jade; do f=$${file#*/}; rm $${f%.*}.php; done
	-for file in sass/*.scss; do f=$${file#*/}; rm stylesheets/$${f%.*}.css; done
	-for file in stylus/*.styl; do f=$${file#*/}; rm stylesheets/$${f%.*}.css; done
	-for file in coffee/*.coffee; do f=$${file#*/}; rm javascripts/$${f%.*}.js; done

.PHONY: jade compass stylus coffee clean