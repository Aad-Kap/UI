@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h3>Search Results</h3>
    <div class="products">
    <img class="timg" 
    
    
    
    src="data:image/jpeg;base64,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" alt="">



<div class="p"><p>Echo your sentiment analysis in this div. It will be center aligned altogether</p> <br>
    
     <p>Example <span><br></span> Name:Aadarsh <span><br></span> Product:Major Project <span><br></span> Review:Working!!!</p>
    <p>Example <span><br></span> Name:Aliya <span><br></span> Product:Major Project <span><br></span> Review:Working!!!</p>
    <p>Example <span><br></span> Name:Anushka<span><br></span> Product:Major Project <span><br></span> Review:Working!!!</p>
   
</div>



   
</div>

</div>
@endsection
</body>
</html>
    
<style>

    .container{
        
    }

    .p{
        margin-top:2rem;
  padding:2rem;
  justify-content: center;
  align-items: center;
  text-align: center;
    }
</style>