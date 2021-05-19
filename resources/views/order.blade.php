<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLEYR</title>
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
    <br><br>
    
<div class="container">
<div class="row" style="font-family:courier;">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-9 col-xxl-12">
        @if(Session::get('success'))
            <div class="alert alert-danger">
            {{Session::get('success')}}
            </div>
            @endif



<form action="/final" method="post">
@csrf
        <label for="eid" style="color:rgba(161, 161, 167, 0.911)">Choose a event:</label>
        <select class="form-select" aria-label="Default select example" name="ename"> 
                                @foreach($event as $row)
                                <option value="{{$row['ename']}}">{{$row['ename']}}-Rs{{$row['eprice']}}</option>

                                @endforeach
                                </select>

                                <label for="fid" style="color:rgba(161, 161, 167, 0.911)">Choose a food:</label>
        <select class="form-select" aria-label="Default select example" name="fname"> 
                                @foreach($food as $row)
                                <option value="{{$row['fname']}}">{{$row['fname']}}-Rs{{$row['fprice']}}</option>

                                @endforeach
                                </select>

                                <label for="sid" style="color:rgba(161, 161, 167, 0.911)">Choose a stage design:</label>
        <select class="form-select" aria-label="Default select example" name="stype"> 
                                @foreach($stage as $row)
                                <option value="{{$row['stype']}}">{{$row['stype']}}-Rs{{$row['sprice']}}</option>
                                @endforeach
                                </select>


<button class="btn btn-outline-primary" type="submit">Book now</button>
</form>
</div>
<div class="row" style="font-family:courier;">
<div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <br>
        <br>
        <h6 style="font-family:courier;color:rgb(149, 153, 149);">USEFUL LINKS</h6>
        <table class="table table-borderless">
        <tr><td><a class="navbar-brand" href="/uh">Home</a></td></tr>  
                    <tr><td><a class="navbar-brand" href="/ub">View Item</a></td></tr>
                    <tr><td><a class="navbar-brand" href="/ug">Gallery</a></td></tr>
                    <tr><td><a class="navbar-brand" href="/uo">Order</a></td></tr>
                    <tr><td><a class="navbar-brand" href="/finalorders">My Orders</a></td></tr>

                    <tr><td><a class="navbar-brand" href="/uc">Contact</a></td></tr>
        </table>
            </div>
            <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-3">
                <br>
                <br>
                <h6 style="font-family:verdana;color:rgb(149, 153, 149);">CONTACT US</h6>
                <table class="table table-borderless">
                    <tr><td><a class="navbar-brand" href="" style="font-family:courier;">                                                  
                        Joy Wallace Catering<br>
                        8501 SW 129 Terrace<br>
                        Miami, FL 33156<br>
                        305.252.0020<br>
                </table>
               
            </div>
            <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
              <div class="social-wrap">
    
                <h4 class="title">
                  <span style="font-family:verdana;color:rgb(24, 26, 24);">.</span>
                </h4> <br><br>
                <link itemprop="url" href="https://www.specsmakers.in">
    <ul class='social_links' itemscope itemtype="http://schema.org/Organization">
      
      <li>
        <a href="https://www.facebook.com/Specsmakersopticiansindia/" itemprop="sameAs" title="Facebook" class="facebook" target="_blank" onClick="ga('send', 'event', { eventCategory: 'socila media icon', eventAction: 'click', eventLabel: 'facebook'});">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 255.97 254.5"><title>Facebook</title><g id="Layer_2" data-name="Layer 2"><g id="Details"><g id="Layer_5" data-name="Layer 5"><path d="M257,114v30c-.22,1-.49,1.94-.64,2.92-4.94,32.27-19.74,59.1-44.58,80.28a126.64,126.64,0,0,1-57.35,27.87c-3.06.63-5.89,1.16-5.86-3.81q.21-40.49,0-81c0-3.39,1.17-4.81,4.65-4.71,6.16.16,12.35-.32,18.48.13,5.19.38,7.1-1.67,7.66-6.58.94-8.26,2.19-16.5,3.69-24.68.72-3.92-.5-5.15-4.26-5.1-8.49.11-17-.07-25.48.06-3.38,0-4.82-1.14-4.74-4.64.16-7.15-.08-14.32.09-21.48.26-11,7.62-18.29,18.71-18.62,4.66-.14,9.33-.11,14-.06,2.94,0,4.25-1.3,4.23-4.23-.05-7.33-.07-14.66,0-22,0-3.05-1.32-4.69-4.33-5-10.42-1-20.79-2.38-31.34-1.28-22.55,2.33-37.62,17.69-39.79,40.38-1,10.66-.64,21.3-.71,32,0,3.65-1.31,5-5,4.94-7.32-.17-14.66.09-22-.09-3.92-.09-5.35,1.48-5.28,5.31.15,8.66.13,17.33,0,26,0,3.64,1.41,5.09,5.06,5,7-.15,14,.22,21-.12,4.86-.24,6.25,1.52,6.21,6.28-.19,26-.08,52-.1,78,0,5.95-.56,6.46-6.29,5.2Q51.68,243.59,22,200.09c-11.58-17-17.9-35.94-21-56.11V114c.25-1.3.52-2.6.75-3.91C8.31,71.2,28.05,41,61.31,19.71,77.4,9.42,95.25,3.92,114,1h30c.8.2,1.59.48,2.41.6q59.42,9.12,91.86,59.71C248.57,77.38,254,95.25,257,114Z" transform="translate(-1 -1)"/></g></g></g></svg>
        </a>
      </li>
      
      
      <li>
        <a href="https://twitter.com/specsmakersopt?lang=en" title="Twitter" itemprop="sameAs" class="twitter" target="_blank" onClick="ga('send', 'event', { eventCategory: 'socila media icon', eventAction: 'click', eventLabel: 'twitter'});">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 255.97 255.97"><title>Twitter</title><g id="Layer_2" data-name="Layer 2"><g id="Details"><g id="Layer_5" data-name="Layer 5"><path d="M114,1h30c.8.2,1.59.48,2.41.6q59.42,9.12,91.86,59.71C248.57,77.38,254,95.25,257,114v30c-.25,1.3-.53,2.6-.75,3.9-6.57,38.88-26.31,69.11-59.56,90.37C180.57,248.55,162.72,254,144,257H114a23.56,23.56,0,0,0-2.41-.6q-59.41-9.12-91.86-59.71C9.4,180.58,3.92,162.72,1,144V114c.25-1.3.52-2.6.75-3.91C8.31,71.2,28.05,41,61.31,19.71,77.4,9.42,95.25,3.92,114,1Zm89.26,78.53c-3.94,1.51-6.91,2.55-9.81,3.77-4.62,1.94-8.34,1.64-12.76-1.72-9.57-7.29-20.54-7.74-31.13-2.4C138.69,84.65,133.19,94,133.23,106.3c0,7.73,0,7.62-7.87,6.42A87.1,87.1,0,0,1,73,85.06c-2.76-3-4-2-5,1.24-3.63,11.48-1.33,21.63,6.6,30.64,1.24,1.39,4.25,2.49,3.08,4.49-1.07,1.83-3.66-.05-5.58-.22a5.29,5.29,0,0,1-1.43-.41c-4-1.63-4.86.1-4,3.68,2.48,10,8.34,17.22,17.77,21.54,1.49.68,3.58.64,4.33,2.68-2.23,1.69-4.61,1.61-6.91,1.53-4.16-.15-4.05,1.67-2.34,4.52,4.84,8,12,12.74,21,14.74,1.17.26,3.07-.4,3.24,1.47.14,1.47-1.5,2.07-2.58,2.78a62.68,62.68,0,0,1-19.56,8.58C76,183.73,70.09,184.07,64.26,185c26.39,14.21,53.54,16,80.41,2.78,32-15.74,46.81-43.13,48.83-78a9.87,9.87,0,0,1,3.63-7.69c3.27-2.79,6.77-5.5,8.83-9.94-4.75.12-8.6,3.08-13.65,1.67C196.59,89.45,201.26,86.07,203.25,79.53Z" transform="translate(-1 -1)"/></g></g></g></svg>
        </a>
      </li>
      
      
      <li>
        <a href="https://www.instagram.com/specsmakersofficial/" itemprop="sameAs" title="Instagram" class="instagram" target="_blank" onClick="ga('send', 'event', { eventCategory: 'socila media icon', eventAction: 'click', eventLabel: 'instagram'});">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 255.97 255.97"><title>Instagram</title><g id="Layer_2" data-name="Layer 2"><g id="Details"><g id="Layer_5" data-name="Layer 5"><path d="M114,1h30c.8.2,1.59.48,2.41.6q59.42,9.12,91.86,59.71C248.57,77.38,254,95.25,257,114v30c-.25,1.3-.53,2.6-.75,3.9-6.57,38.88-26.31,69.11-59.56,90.37C180.57,248.55,162.72,254,144,257H114a23.56,23.56,0,0,0-2.41-.6q-59.41-9.12-91.86-59.71C9.4,180.58,3.92,162.72,1,144V114c.25-1.3.52-2.6.75-3.91C8.31,71.2,28.05,41,61.31,19.71,77.4,9.42,95.25,3.92,114,1Zm12.53,48.38c-9.78-.45-21.92.46-34.06,1-24,1.08-40.95,18.31-42.15,42.35s-1.19,48.26,0,72.4,18.3,41.35,42.54,42.53,48.27,1.19,72.41,0,41.14-18.19,42.38-42.16a709.25,709.25,0,0,0,0-72.91c-1.12-21.92-14.72-37.8-36.38-41.31C157.27,49,143.06,49.4,126.52,49.38Z" transform="translate(-1 -1)"/><path d="M128.9,62.68c12.57.2,24.54-.13,36.52.91,16.83,1.47,27.77,12,28.86,28.84a569.56,569.56,0,0,1,0,72.86c-1.09,17.09-12,27.93-29.14,29a570.94,570.94,0,0,1-72.36,0c-17.15-1.08-28-11.91-29.13-29a568.81,568.81,0,0,1,0-71.87c1.13-18.12,11.72-28.35,29.9-29.89C105.53,62.52,117.51,63,128.9,62.68Zm0,106.9c21.9,0,40.5-18.43,40.66-40.4S151.31,88.64,129.3,88.39,88.34,107,88.39,129C88.43,151,107,169.52,128.92,169.58Zm42.7-74.69a8.64,8.64,0,0,0,8.95-8.67,9,9,0,0,0-8.95-8.82A8.63,8.63,0,0,0,163.08,86C163,91.24,166.41,94.84,171.62,94.89Z" transform="translate(-1 -1)"/><path d="M156.25,129c0,14.82-12.75,27.4-27.56,27.23-14.61-.16-27-12.71-27-27.31,0-14.81,12.76-27.39,27.56-27.23C143.88,101.88,156.27,114.42,156.25,129Z" transform="translate(-1 -1)"/></g></g></g></svg>
        </a>
      </li>
      
      
      <li>
        <a href="https://www.linkedin.com/company/specsmakers/" itemprop="sameAs" title="Pintrest" class='pintrest' target="_blank" onClick="ga('send', 'event', { eventCategory: 'socila media icon', eventAction: 'click', eventLabel: 'pintrest'});">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>LinkedIn</title><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
        </a>
      </li>
      
    </ul>
    
              
            </div>
        </div>



        </div>
        </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  

 </body>
</html>









