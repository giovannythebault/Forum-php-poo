
/*-------------------- FONCTIONS BOITE MODAL JQUERY ET BOOTSTRAP --------------------*/

// fonction de nettoyage de boîte Modal
function viderModal(){
	$("#bloc-modal").empty();
	$('.modal-backdrop').remove();
}

// Boite modal standart
function creerModal(idModal, titre, fichier, classM, show){
	
	 viderModal();
	
	var code ="<div class='modal fade' id='"+idModal+"' tabindex='-1' role='dialog' aria-labelledby='dial-"+idModal+"' aria-hidden='true'>";
	  code += "<div class='modal-dialog modal-lg'>";
	    code += "<div class='modal-content' style='border-radius:20px;'>";
	      code += "<div class='modal-header bg-"+ classM +"' style='border-radius:20px;'>";
	        code += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
	        code += "<h1 class='modal-title text-center' id='dial-"+idModal+"'>"+titre+"</h1>";
	      code += "</div>";
	      code += "<div class='modal-body'>";
	      	
			code += "<div id='body-"+idModal+"'>";
  			 	
			code += "</div>";
	
	      code += "</div>";
	    code += "</div>";
	  code += "</div>";
	code += "</div>";
	
	$("#bloc-modal").append(code);
	
	$("#body-"+idModal).load(fichier);
	
	if(show == true){
		$('#'+idModal).modal("show");
	}
		
}


//Boite modal de suppression
function modalSuppr(idModal, titre, texte, type, id){
	
	viderModal();
	
	var code ="<div class='modal fade' id='"+idModal+"' tabindex='-1' role='dialog' aria-labelledby='dial-"+idModal+"' aria-hidden='true'>";
	  code += "<div class='modal-dialog modal-lg'>";
	    code += "<div class='modal-content' style='border-radius:20px;'>";
	      code += "<div class='modal-header bg-danger' style='border-radius:20px;'>";
	        code += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
	        code += "<h1 class='modal-title text-center' id='dial-"+idModal+"'>"+titre+"</h1>";
	      code += "</div>";
	      code += "<div class='modal-body'>";
	      	
			code += "<div id='body-"+idModal+"'>";
			
			code += "<form class='form-horizontal' role='form' id='form-gst-vehicule' method='POST' action='' onsubmit='return false;'>";

				code += "<div class='form-group'>";
					code += "<div class='col-sm-12'>";
						code += "<h2>Merci de bien vouloir confirmer la suppression du "+texte+" : <b>"+type+"</b></h2>";
					code += "</div>";
				code += "</div>";

				code += "<div class='form-group'>";
					code += "<div class='col-sm-offset-2 col-sm-2'>";
					  code += "<button type='submit' class='btn btn-primary' data-dismiss='modal'>Annuler</button>";
					code += "</div>";
					code += "<div class='col-sm-8'>";
					  code += "<button type='submit' class='btn btn-danger' id='addVehicule'>Confirmer</button>";
					code += "</div>";
				code += "</div>";

			code += "</form>";
				
			code += "</div>";
			
	
	      code += "</div>";
	    code += "</div>";
	  code += "</div>";
	code += "</div>";
	
	$("#bloc-modal").append(code);
	$('#'+idModal).modal("show");
		
}


// Boite modal standartavec icone
function creerModalIco(idModal, titre, fichier, classM, icone, couleur){
	
	viderModal();
	
	var code ="<div class='modal fade' id='"+idModal+"' tabindex='-1' role='dialog' aria-labelledby='dial-"+idModal+"' aria-hidden='true'>";
	  code += "<div class='modal-dialog modal-lg'>";
	    code += "<div class='modal-content' style='border-radius:20px;'>";
	      code += "<div class='modal-header bg-"+ classM +"' style='border-radius:20px;'>";
	        code += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
	        code += "<h1 class='modal-title text-center' id='dial-"+idModal+"'><span class='glyphicon glyphicon-"+icone+"' style='color:"+couleur+"'></span> "+titre+"</h1>";
	      code += "</div>";
	      code += "<div class='modal-body'>";

			code += "<div id='body-"+idModal+"'>";
							 	
			code += "</div>";
		
	      code += "</div>";
	    code += "</div>";
	  code += "</div>";
	code += "</div>";
	
	$("#bloc-modal").append(code);
	
	$("#body-"+idModal).load(fichier);

	$('#'+idModal).modal("show");
		
}

