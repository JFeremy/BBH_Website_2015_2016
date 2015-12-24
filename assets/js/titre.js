var effet = document.getElementById('Titre');
var texte = 'rest retagne andball - Pôle Formation';
var logo = 'BBH';
var tableau = texte.split("");
var cursor = logo.split("");
var len = texte.length;
var i = 0;
var titre = '',
	lettre = '',
	mot1 = 'B',
	mot2 = 'B',
	mot3 = 'H';

var typewriter = {
	targetClass: '.effet',
	target: [],
	interval:0.01,
	_init: function(){
		this.spanify(document.querySelectorAll(this.targetClass))},
	spanify: function(el){
		var l = el[0].innerHTML.length;
		var newVal = '';

		for(var k=0;k<l;k++){
			var animDelay='style="-webkit-animation-delay:'+(this.interval)+'s;"';
			lettre = el[0].innerHTML.charAt(k);
			newVal = '<span class="letter" '+animDelay+'>'+el[0].innerHTML.charAt(k)+'</span>';
		}

		if(i < 5)
		{
			el[0].innerHTML= mot1 + newVal + cursor[1] + cursor[2];
			mot1 += lettre;
		}
		else if((i >= 5) && (i < 13))
		{
			el[0].innerHTML= mot1 + mot2 + newVal + cursor[2];
			mot2 += lettre;
		}
		else
		{
			el[0].innerHTML= mot1 + mot2 + mot3 + newVal;
			mot3 += lettre;
		}
	}             
}   

function start() {
	setTimeout(function(){
		effet.innerHTML = cursor[0] + cursor[1] + cursor[2];
	}, 0);
}

function anim() {
	titre += tableau[i];
	effet.innerHTML = titre;
	typewriter._init();

	i++;

	if ( i < len ) {
		setTimeout(anim, 100);
	}
}  

start();

setTimeout(function(){anim();}, 1000);