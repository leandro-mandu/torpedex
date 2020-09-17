

$(document).ready(function(){
  $("#btn_enviar").attr('disabled', false);
  $("#btn_enviar").click(function(){
  event.preventDefault();
    var myModal = new bootstrap.Modal(document.getElementById('modal_aguarde'));
    myModal.show();

    var dados = {
                  categoria_id : $("#categoria_id").val(),
                  name : $("#name").val(),
                  content : $("#content").val(),
                  number_ddd : $("#number_ddd").val(),
                  number : $("#number").val()
//                  _token : $("#_token").val()
                };
    console.log("Salvando registro "+dados);
    sms.store(dados).done(function(data){
      console.log("resposta "+data);
  		//var res=jQuery.parseJSON(data);
  		if (data.status == "0"){
        alert("Mensagem incluída na fila para envio! id:"+data.id);
  			window.location.href=ctrl+"/"+data.id;
  		}
      else alert("Erro");
  	}).done( function(){
      console.log("fechar modal");
      myModal.hide();
      console.log("finalizar");
  	});
  });
//	paginacao.paginar();
//	listar();
//	$("#old_bt_novo").hide();
});
