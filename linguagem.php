
<!DOCTYPE html>
<html>

<head>
	<title>Prova</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

<body class="body">
   <div class="container"> 
        <div class="row">
        <div class="col-4">
        <img src="./img/codigo.svg" alt="">
    </div>
   
    <div class="col-8">

      <form action="fim-cad-linguagem.php" method="POST"> 
         <div>
            <div class="form-group">
            <label for="exampleInputEmail1">Cadastre uma Linguagem</label>
            <input type="text" class="form-control" name="linguagens" id="linguagens" aria-describedby="emailHelp" placeholder="Ex: Flutter">
        </div>
   </div>

    <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>

    </form>

    </div>
  </div>
</div>

</body>

</html>