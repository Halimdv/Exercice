$.ajax({
	url: "data.json",
	dataType: 'JSON'
}).done(function(response){
	console.log("Ok");
	for(contact in response.contacts){
		$('#contact').append('<p>Prénom: '+response.contacts[contact].firstName+'<p></br>');
		$('#contact').append('<p>Nom: '+response.contacts[contact].lastName+'<p></br>');
		$('#contact').append('<p>Téléphone: '+response.contacts[contact].phone+'<p></br>');
	}
})