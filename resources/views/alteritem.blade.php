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
                <a class="nav-link" href="/ai">Add Items</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/userview">View</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/vieworders">view orders</a>
              </li>
              
              
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="/logout">Log Out</a>
                    </li>
                </ul>
            </form>
            
          </div>
        </div>
      </nav>



    
    <div
        <div class="row">
            
            <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-6">
                        
<table class="table table-borderless"><br><br><br>

    <tr><br><br><br> <form action="/ap" method="post">
            {{ csrf_field() }} 
        <td style="color:rgba(161, 161, 167, 0.911)">Event</td>
        <td><input name="eid" placeholder="Event id" type="text" value="{{old('eid')}}" class="form-control"></td>
        <span class="text-danger">@error('eid'){{$message}} @enderror  </span></td>
        <td><input name="ename" placeholder="Event name" type="text" value="{{old('ename')}}" class="form-control"></td>
        <span class="text-danger">@error('ename'){{$message}} @enderror  </span></td>
        <td><input name="eprice" placeholder="Event price" type="text" value="{{old('eprice')}}" class="form-control"></td>
        <span class="text-danger">@error('eprice'){{$message}} @enderror  </span></td>
        <td><button type="submit" class="btn btn-primary">ADD</button></td></form>
        
    </tr>



    <tr> <form action="/af" method="post">
            {{ csrf_field() }} 
        <td style="color:rgba(161, 161, 167, 0.911)">Food Package</td>
        <td><input name="fid" placeholder="Food pkg id" type="text" value="{{old('fid')}}" class="form-control"></td>
        <span class="text-danger">@error('fid'){{$message}} @enderror  </span></td>
        <td><input name="fname" placeholder="Food pkg name" type="text" value="{{old('fname')}}" class="form-control"></td>
        <span class="text-danger">@error('fname'){{$message}} @enderror  </span></td>
        <td><input name="fprice" placeholder="Food pkg price" type="text" value="{{old('fprice')}}" class="form-control"></td>
        <span class="text-danger">@error('fprice'){{$message}} @enderror  </span></td>
        <td><button type="submit" class="btn btn-primary">ADD</button></td></form>
        
    </tr>
    <tr> <form action="/as" method="post">
            {{ csrf_field() }} 
        <td style="color:rgba(161, 161, 167, 0.911)">Stage Design</td>
        <td><input name="sid" placeholder="Stage des id" type="text" value="{{old('sid')}}" class="form-control"></td>
        <span class="text-danger">@error('sid'){{$message}} @enderror  </span></td>
        <td><input name="stype" placeholder="Stage des type" type="text" value="{{old('stype')}}" class="form-control"></td>
        <span class="text-danger">@error('stype'){{$message}} @enderror  </span></td>
        <td><input name="sprice" placeholder="Stage des price"  type="text" value="{{old('sprice')}}" class="form-control"></td>
        <span class="text-danger">@error('sprice'){{$message}} @enderror  </span></td>
        <td><button type="submit" class="btn btn-primary">ADD</button></td></form>
        
    </tr>
    
</table>


 </div>

</div>






    </div>

    <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <br>
        <br>
        <h6 style="font-family:verdana;color:rgb(161, 165, 161);">USEFUL LINKS</h6>
        <table class="table table-borderless">
            <tr><td><a class="navbar-brand" href="/ah">Home</a></td></tr>  
                   
                    <tr><td><a class="navbar-brand" href="/ai">Additem</a></td></tr>
                    <tr><td><a class="navbar-brand" href="/userview">View</a></td></tr>

        </table>
            </div>

            


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
  </body>
</html>