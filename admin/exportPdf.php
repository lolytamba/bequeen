<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <div id="content">
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
   </div>
<button id="cmd">download</button>
</body>
<script src="../jquery/dist/jquery.min.js"></script>
<script src="../boostrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/jspdf/dist/jspdf.min.js"></script>
<script>
var doc = new jsPDF("p","px","a4");
var specialElementHandlers = {
      'DIV to be rendered out': function(element, renderer){
       return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 20, 0, {
        'width':800,
            'elementHandlers': specialElementHandlers
    });
    doc.save('saveInCallback.pdf');
});</script>
</html>
