var statiPremuto = [false,false,false,false];
function checkAndChangeStati(index) {
	statiPremuto[index] = !statiPremuto[index];

	for(let i=0; i<statiPremuto.length ;i++) {
		if(i == index)
			continue;
		statiPremuto[i] =  false;
	}

	return statiPremuto[index];
}

$(document).ready(function() {
	$('form').hide();

	$('#bottoneRecapito').click(function() {
		$('form').slideUp(131);
		if(checkAndChangeStati(0)) {
			$('#visualizzaRecapito').slideToggle(131);
		}
	});
	$('#bottoneAbbonamento').click(function() {
		$('form').slideUp(131);
		if(checkAndChangeStati(1)) {
			$('#visualizzaAbbonamento').slideToggle(131);
		}
	});
	$('#bottoneGara').click(function() {
		$('form').slideUp(131);
		if(checkAndChangeStati(2)) {
			$('#visualizzaGara').slideToggle(131);
		}
	});
	$('#bottoneOrario').click(function() {
		$('form').slideUp(131);
		if(checkAndChangeStati(3)) {
			$('#visualizzaOrario').slideToggle(131);
		}
	});
});