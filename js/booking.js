function showSelection(){
  var jenis = $('#SP').val();

  if(jenis == 'service'){
    $('#service').show();
  }else {
    $('#service').hide();
  }

  if(jenis == 'paket'){
    $('#paket').show();
  }else {
    $('#paket').hide();
  }
}

function serSelection(){
  var service = $('#service').val();

  if(service == 'hair'){
    $('#hair').show();
  }else {
    $('#hair').hide();
  }

  if(service == 'nail'){
    $('#nail').show();
  }else {
    $('#nail').hide();
  }

  if(service == 'makeup'){
    $('#makeup').show();
  }else {
    $('#makeup').hide();
  }
}
