<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteritem</title>
</head>

<body background="https://wallpaperaccess.com/full/1566582.jpg"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-style="color:rgba(247, 247, 248, 0.911) bg-dark">
        <div class="container-fluid" style="font-family:courier;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="/ah" style="font-family:verdana;color:yellow"> Joy </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/ah">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ai">Alter Items</a>
              </li>
              
              
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Log Out</a>
                    </li>
                </ul>
            </form>
            
          </div>
        </div>
      </nav>
<div class="container">

<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
 </div>
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
 <br><br>
 <form action="/upstage" method="post">
 @csrf
 <table style="font-family:verdana;color:rgb(161, 165, 190);" class="table table-borderless">
 <tr>
     <td>Stage Design id</td>
     <td>Stage Design Type</td>
     <td>Stage Design Price</td>
     <td><input type="hidden" name="id"  value="{{$info->id}}"/></td>
     </tr>
     <tr>
     <td><input value="{{$info->sid}}" name="sid" type="text" class="form-control"></td>
     <td><input value="{{$info->stype}}" name="stype" type="text" class="form-control"></td>
     <td><input value="{{$info->sprice}}" name="sprice" type="text" class="form-control"></td>

     <td><button class="btn btn-outline-primary"  type="submite">UPDATE</button></td></tr>
 
 
    



 
 
 </table>
 </form>
 </div>
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
</div>
</div>
</div>

<div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
    <br>
    <br>
    <h6 style="font-family:verdana;color:rgb(151, 155, 151);">USEFUL LINKS</h6>
    <table class="table table-borderless">
        <tr><td><a class="navbar-brand" href="/ah">Home</a></td></tr>  
               
                <tr><td><a class="navbar-brand" href="/ai">Alteritem</a></td></tr>
    </table>
        </div>

        



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  

</body>
</html>
