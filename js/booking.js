function showSelection(){
  var jenis = $('#SP').val();
  $('#SP').hide();
  
  if(jenis == 'Service'){
    $('#service').show();
  }else if(jenis == 'Paket'){
    $('#paket').show();
  }
}

function serSelection(){
  var service = $('#service').val();
  if(service == 'hair'){
    $('#makeup').hide();
    $('#nail').hide();
    $('#hair').show();
  }else if(service == 'nail'){
    $('#hair').hide();
    $('#makeup').hide();
    $('#nail').show();
  }else if(service == 'makeup'){
    $('#hair').hide();
    $('#nail').hide();
    $('#makeup').show();
  }else if(service == 'Paket1'){
    $('#hair').hide();
    $('#nail').hide();
    $('#makeup').hide();
    $('#paket').show();
  }
}


// function showSelection(){
//   var jenis = $('#SP').val();
//   //var service = $('#service').val();

//   if(jenis == 'Service'){
//     // $('#service').css("display", "block");
//     // if(service == 'hair'){
//     //   $('#hair').css("display", "block");
//     // }else if(service == 'nail'){
//     //   $('#nail').css("display", "block");
//     // }else if(service == 'makeup'){
//     //   $('#makeup').css("display", "block");
//   //  $('#service').css("display", "none");
// //  }else if(jenis == 'Paket'){
//     //$('#paket').css("display", "block");
//   }
// }
