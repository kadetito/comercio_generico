
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

<script language="javascript">
$(document).ready(function(){
    $("#marca").on('change', function () {
        $("#marca option:selected").each(function () {
            elegido=$(this).val();
            $.post("index.php", { elegido: elegido }, function(data){
                $("#modelo").html(data);
            });			
        });
   });
});
</script>
</head>

<body>

    
    <div class="row">
        <div id="content" class="col-lg-12">
            <form class="row" action="" method="post">
                <div class="form-group col-lg-3">
                    <label for="marca">Marca</label>
                    <select name="marca" id="marca" class="form-control">
                        <option value="1">Renault</option>
                        <option value="2">Seat</option>
                        <option value="3">Peugeot</option>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="modelo">Modelo</label>
                    <select name="modelo" id="modelo" class="form-control">
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">7</option>
                        <option value="4">21</option>
                        <option value="5">Scennic</option>
                        <option value="6">Traffic</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>
