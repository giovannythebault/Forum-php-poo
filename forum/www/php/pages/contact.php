
<div class="row">
	<div class="col-sm-offset-3 col-sm-6">
	    <h1 class='text-center text-info'>Formulaire de contact</h1>
	    <hr />
	</div>
</div>




<form class="form-horizontal" role="form" method="post">
    
  <div class="form-group has-feedback">
    <label for="mail" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="mail" onfocusout="validEmail($(this).val())" placeholder="Indiquer votre mail de contact">
      <span class="glyphicon form-control-feedback"></span>
    </div>
  </div>
  
  <div class="form-group has-feedback">
    <label for="objet" class="col-sm-3 control-label">Objet de la demande</label>
    <div class="col-sm-6">
        <select class="form-control" name="objet" onfocusout='validObjet($(this).val())'>
          <option value="0">Sélectionner un type de demande</option>
          <option value="1">Un problème rencontrer</option>
          <option value="2">Un conflit avec un membres</option>
          <option value="3">Une demande pour augmente son status</option>
          <option value="4">Une prise de rendez-vous</option>
        </select>
    </div>
  </div>
  
  <div class="form-group has-feedback">
    <label for="demande" class="col-sm-3 control-label">Votre demande</label>
    <div class="col-sm-6">
      <textarea class="form-control" rows="3" placeholder="Préciser votre demande" name="demande" onfocusout='validDemande($(this).val())'></textarea>
      <span class="glyphicon form-control-feedback"></span>
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-offset-7 col-sm-2">
      <button type="button" class="btn btn-success" id="send">Envoyer la demande</button>
    </div>
  </div>
  
</form>

<script type="text/javascript" charset="utf-8">
	
	function validEmail(valeur){
	    if( valeur == ""){
	        $('input[name=mail]').parent().parent().addClass('has-error');
	        $('input[name=mail]').next().addClass('glyphicon-remove');
	    } else {
	        $('input[name=mail]').parent().parent().removeClass('has-error').addClass('has-success');;
            $('input[name=mail]').next().removeClass('glyphicon-remove').addClass('glyphicon-ok');
	    }
	}
	
	function validObjet(valeur){
        if( valeur == "0"){
            $('select[name=objet]').parent().parent().addClass('has-error');
        } else {
            $('select[name=objet]').parent().parent().removeClass('has-error').addClass('has-success');
        }
    }
    
    function validDemande(valeur){
        if( valeur == ""){
            $('textarea[name=demande]').parent().parent().removeClass('has-success has-warning').addClass('has-error');
            $('textarea[name=demande]').next().removeClass('glyphicon-sign-warning glyphicon-ok').addClass('glyphicon-remove');
        } else if ( valeur.length < 10){
            $('textarea[name=demande]').parent().parent().removeClass('has-error has-success');
            $('textarea[name=demande]').next().removeClass('glyphicon-remove glyphicon-ok');
            $('textarea[name=demande]').parent().parent().addClass('has-warning');
            $('textarea[name=demande]').next().addClass('glyphicon-sign-warning');
        } else if ( valeur.length > 255){
            $('textarea[name=demande]').parent().parent().removeClass('has-error has-success');
            $('textarea[name=demande]').next().removeClass('glyphicon-remove glyphicon-ok');
            $('textarea[name=demande]').parent().parent().addClass('has-warning');
            $('textarea[name=demande]').next().addClass('glyphicon-sign-warning');
        } else {
            $('textarea[name=demande]').parent().parent().removeClass('has-error has-warning').addClass('has-success');
            $('textarea[name=demande]').next().removeClass('glyphicon-remove glyphicon-sign-warning').addClass('glyphicon-ok');
        }
    }
	
	$('#send').on('click',function(){
	     var mail = $('input[name=mail]').val();
	     var obj = $('select[name=objet]').val();
	     var objDem = $('option[value='+obj+']').text();
	     var dem = $('textarea[name=demande]').val();
	     var sendMail = new Object();
	     sendMail.mail = mail;
	     sendMail.objet = objDem;
	     sendMail.demande = dem;
	     
	     msg(sendMail);

	     $.post('/php/requetes/envoie_mail.php', sendMail ).always(function(arg){
	         msg(arg);
	        
	     });
	  
	     
	});
	
</script>

