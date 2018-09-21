// function showSelection(){
//   var jenis = $('#SP').val();
//   $('#SP').hide();
  
//   if(jenis == 'Service'){
//     $('#service').show();
//   }else if(jenis == 'Paket'){
//     $('#paket').show();
//   }
// }

// function serSelection(){
//   var service = $('#service').val();
//   $('#service').hide();
//   if(service == 'hair'){
//     $('#hair').show();
//   }else if(service == 'nail'){
//     $('#nail').show();
//   }else if(service == 'makeup'){
//     $('#makeup').show();
//   }
// }

function showSelection(){
  var jenis = $('#SP').val();
  var service = $('#service').val();

  if(jenis == 'Service'){
    $('#service').css("display", "block");
    if(service == 'hair'){
      $('#hair').css("display", "block");
    }else if(service == 'nail'){
      $('#nail').css("display", "block");
    }else if(service == 'makeup'){
      $('#makeup').css("display", "block");
  }
    $('#service').css("display", "none");
  }else if(jenis == 'Paket'){
    $('#paket').css("display", "block");
  }
}
