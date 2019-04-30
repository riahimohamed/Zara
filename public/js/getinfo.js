//Zara Application create by Mohammed Riahi.

$(document).ready(function () {

function getValue($element){
	data = $('#'+$element).val();
	return data;
}

function object(obj){

	$.each( obj, function( key, value ) {
		if(value === ''){
			v = false;
			return v;
		}else{
			v = true;
			return v;
		}
	});

	return v;
}

function nbPers(qte){
	if(qte <= 700){
		return 1;
	}
	else if(qte>=700 && qte<1700){
		return 2;
	}else if(qte>=1700 && qte<2500){
		return 4;
	}else if(qte>=2500 && qte<3500){
		return 5;
	}else if(qte>=3500 && qte<4000){
		return 6;
	}

	return Math.floor(qte/680);
}

function nbTotalPers(a,b,c,d,e,f){
	nbr = a+b+c+d+e+f ;

	return nbr;
}

function nbTime(qte, pers){
	return convertToHHMM(qte/pers/85);
}

function convertToHHMM(info) {
  var hrs = parseInt(Number(info));
  var min = Math.round((Number(info)-hrs) * 60);

  mins = min<9 ? '0'+min : min;
  return hrs +'h'+mins+'min';
}

$('#getinfo').click(function(){

	var elmt = {
		dates : getValue('date'),
		albarane : getValue('code-abarre'),
		qte : getValue('quan-total'),
		fsusp : getValue('Femme-suspendu'),
		fplie : getValue('Femme-plie'),
		hsusp : getValue('Homme-suspendu'),
		hplie : getValue('Homme-plie'),
		esusp : getValue('Enfant-suspendu'),
		eplie : getValue('Enfant-plie'),
	}

	var verif = object(elmt);

	qtetime = elmt['qte'];
	perstime = nbPers(elmt['qte']);

	a= nbPers(elmt['fsusp']);
	b= nbPers(elmt['fplie']) ;
	c= nbPers(elmt['hsusp']);
	d= nbPers(elmt['hplie']);
	e= nbPers(elmt['esusp']) ;
	f= nbPers(elmt['eplie']);

	if(verif === false){
		$('#text-alert').html('Les champs ne sont pas tous complets.');
		$('#text-alert').show();
		$('#text-glob').hide();
	}else{
		$('#datetext').html(elmt['dates']);
		$('#albarane').html(elmt['albarane']);
		$('#ttolatl').html(nbTime(qtetime, perstime));
		$('#nbpers').html(nbTotalPers(a,b,c,d,e,f));

		$('#nbfs').html(nbPers(elmt['fsusp']));
		$('#fst').html(nbTime(elmt['fsusp'], nbPers(elmt['fsusp'])));
		$('#nbfp').html(nbPers(elmt['fplie']));
		$('#fpt').html(nbTime(elmt['fplie'], nbPers(elmt['fplie'])));

		$('#nbhs').html(nbPers(elmt['hsusp']));
		$('#hst').html(nbTime(elmt['hsusp'], nbPers(elmt['hsusp'])));
		$('#nbhp').html(nbPers(elmt['hplie']));
		$('#hpt').html(nbTime(elmt['hplie'], nbPers(elmt['hplie'])));

		$('#nbes').html(nbPers(elmt['esusp']));
		$('#est').html(nbTime(elmt['esusp'], nbPers(elmt['esusp'])));
		$('#nbep').html(nbPers(elmt['eplie']));
		$('#ept').html(nbTime(elmt['eplie'], nbPers(elmt['eplie'])));
		
		$('#text-alert').hide();
		$('#text-glob').show();
	}

});

$('#closebtn').click(function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 100);
});

});