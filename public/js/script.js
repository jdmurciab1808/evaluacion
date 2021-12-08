//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this)
        .parent()
        .next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li")
        .eq($("fieldset").index(next_fs))
        .addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
        { opacity: 0 },
        {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = now * 50 + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    transform: "scale(" + scale + ")",
                    position: "absolute"
                });
                next_fs.css({ left: left, opacity: opacity });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: "easeInOutBack"
        }
    );
});

$(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this)
        .parent()
        .prev();

    //de-activate current step on progressbar
    $("#progressbar li")
        .eq($("fieldset").index(current_fs))
        .removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
        { opacity: 0 },
        {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = (1 - now) * 50 + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({ left: left });
                previous_fs.css({
                    transform: "scale(" + scale + ")",
                    opacity: opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: "easeInOutBack"
        }
    );
});

$(".submit").click(function() {
    return false;
});

let numero = 1;
let nuevo = function() {
    numero++;
    console.log(numero);
    jQuery(".inputs").append(`
	<div id="${numero}">
		<div class="border border-dark rounded mt-3">
			<div class="d-flex flex-column py-2">
				<div class="d-flex flex-row col">
					<div class="form-group col-4">
						<p>Metas</p>
						<input type="text" id="meta" class="form-control" placeholder="Escribe tu Meta.">
					</div>
					<div class="form-group col-4">
						<p>Funciones</p>
						<input type="text" id="funciones" class="form-control" placeholder="Escribe tu Función.">
					</div>
					<div class="form-group col-4">
						<p>Evidencias</p>
						<input type="file" name="evidencias">
					</div>
				</div>
				<div class="d-flex flex-row col">
					
					<div class="form-group col-4">
						<p>Acordardo</p>
						<input type="number" class="form-control">
					</div>
					<div class="form-group col-4">
						<p>Cumplido</p>
						<input type="number" class="form-control">
					</div>
					<div class="form-group col-4">
						<p>Sujeto a Cronograma</p>
						<div class="form-group custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="custom${numero}">
							<label class="custom-control-label" for="custom${numero}"></label>
						</div>
						
					</div>
				</div>
			</div>
			<div class="d-flex flex-column col">
				<div class="form-group col">
					<button class="btn btn-danger" onclick="eliminar(${numero})">Eliminar</button>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	`);
};

let eliminar = function(n) {
    jQuery("div").remove(`#${n}`);
};






