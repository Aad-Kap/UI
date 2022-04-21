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
<h3>Search Results</h3>
<div id="main-container">
  <div class="container">
    <div class="box">
    </div>
    <div class="content">
      <p class="title">Title</p>
      <p class="sub-title">Sub-Title</p>
      <div class="img">Description</div>
    </div>
  </div>
  <div class="container">
    <div class="box">
    </div>
    <div class="content">
      <p class="title">Title</p>
      <p class="sub-title">Sub-Title</p>
      <div class="img">Description</div>
    </div>
  </div>
</div>

@endsection
</body>
</html>
    
<style>

#main-container {
  
  
}
.container {
 
  height: 200px;
  
  margin: 5px;
}
.box {
  display: inline-block;
  vertical-align: top;
  width: 85px;
  height: 85px;
  background: #446C74;
  margin: 5px;

}
.content {
    padding-left:10px;
  display: inline-block;
  vertical-align: top;
}
.title, .sub-title {
  margin: 0;
  padding: 3px 10px 3px 0;
}
.title {
  font-size: 17px;
  font-weight: bold;
}
.sub-title {
  font-weight: bold;
  color: #3F3F3F;
}
.img {

  width: 100px;
  height: 35px;
  border: 3px solid #EBEAAE;
}

  
</style>