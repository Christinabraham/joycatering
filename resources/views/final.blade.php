<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my order</title>
</head>


<body background="https://www.setaswall.com/wp-content/uploads/2018/01/Dark-Grey-Wallpaper-04-1415x955.jpg"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-style="color:rgba(247, 247, 248, 0.911) bg-dark">
        <div class="container-fluid" style="font-family:courier;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="/uh" style="font-family:verdana;color:yellow"> Joy </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/uh">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ub">View Items</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ug">Gallery</a>
              </li>
              <li class="nav-item">
            <a class="nav-link" href="/uo">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/finalorders">My Orders</a>
          </li>
              <li class="nav-item">
                <a class="nav-link" href="/uc">Contact</a>
              </li>
              
            </ul>
            <form class="d-flex">
         
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              
                  <a class="nav-link active" href="/logout">Welcome.....{{session('username')}}</a>
              </li>
              <li class="nav-item">
              
                  <a class="nav-link active" href="/logout">Log Out</a>
              </li>
              
          </ul>
      </form>
          </div>
        </div>
      </nav>
      <div class="container">

        <div class="row" >
            <div class="col col-12 col-sm-12 col-md-9 col-lg-7 col-xl-9 col-xxl-12">
                <table class="table table-borderless">
        

        <table style="font-family:courier;color:white;" class="table table-borderless">
 <tr >
     
     <td ><b>User Name</b></td>
     <td><b>Event Name</b></td>
     <td><b>Food Package</b></td>
     <td><b>Staget Design</b></td>
     <td><b>Total Price</b></td>
     </tr>
     
     

        @foreach($orders as $order)
        <tr>
        <td>{{$order->uname}}</td>


        <td>{{$order->ename}}</td>


        <td>{{$order->fname}}</td>


        <td>{{$order->stype}}</td>


        <td>{{$order->total}}</td>
<td><a href="/odelete/{{$order->id}}" class="btn btn-outline-danger">Remove</a></td>

</tr>
@endforeach
</table>


</div>


</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  

 </body>
</html>









