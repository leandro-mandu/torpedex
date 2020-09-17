//v. 6 by infopets/mandu software

ctrl = "sms"; //controller

var sms = {
  store: function(dados) {
    return $.post("/api/" + ctrl, dados).then(function(data) {
      return data;
    });
  },


  update: function(dados) { // editar / novo
    var action="store";
    if ( dados.id == "" ) action="store";
    return $.post(ctrl + action + "/" + dados.id, dados).then(function(data) {
      return data;
    });
  },



  listar: function() {
    return $.getJSON(url + ctrl + "/listar/" + paginacao.get()).then(function(data) {
      return data;
    });
  },
  ler: function(id) {
    return $.getJSON(url + "Empresas/ler/" + id).then(function(data) {
      return data;
    });
  },
  contar: function() {
    return $.getJSON(url + "Empresas/contar").then(function(data) {
      return data;
    });
  },
  set_padrao: function(id) {
    return $.getJSON(url + "Empresas/set_padrao/" + id).then(function(data) {
      return data;
    });
  }
};
