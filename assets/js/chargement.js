var chargement = document.getElementById('wait');
var equipe = document.querySelectorAll('#equipe');

for(var i=0; i<equipe.length; i++)
{
	equipe.item(i).addEventListener('click', function() {
		chargement.style.display = 'block';
		window.location.reload();
	}, false);
}