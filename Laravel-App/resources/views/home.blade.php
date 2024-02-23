<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <style>
  .navbar-transparent {
    background-color: transparent !important;
    box-shadow: none !important;
  }
  body {
    width: 100%;
    background-image: url('banner8.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    height: 100%;
  }

  html {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  button {
 border: none;
 position: relative;
 width: 200px;
 height: 73px;
 padding: 0;
 z-index: 2;
 -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='868' width='2500' viewBox='0 0 726 252.17'%3E%3Cpath d='M483.92 0S481.38 24.71 466 40.11c-11.74 11.74-24.09 12.66-40.26 15.07-9.42 1.41-29.7 3.77-34.81-.79-2.37-2.11-3-21-3.22-27.62-.21-6.92-1.36-16.52-2.82-18-.75 3.06-2.49 11.53-3.09 13.61S378.49 34.3 378 36a85.13 85.13 0 0 0-30.09 0c-.46-1.67-3.17-11.48-3.77-13.56s-2.34-10.55-3.09-13.61c-1.45 1.45-2.61 11.05-2.82 18-.21 6.67-.84 25.51-3.22 27.62-5.11 4.56-25.38 2.2-34.8.79-16.16-2.47-28.51-3.39-40.21-15.13C244.57 24.71 242 0 242 0H0s69.52 22.74 97.52 68.59c16.56 27.11 14.14 58.49 9.92 74.73C170 140 221.46 140 273 158.57c69.23 24.93 83.2 76.19 90 93.6 6.77-17.41 20.75-68.67 90-93.6 51.54-18.56 103-18.59 165.56-15.25-4.21-16.24-6.63-47.62 9.93-74.73C656.43 22.74 726 0 726 0z'/%3E%3C/svg%3E") no-repeat 50% 50%;
 mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='868' width='2500' viewBox='0 0 726 252.17'%3E%3Cpath d='M483.92 0S481.38 24.71 466 40.11c-11.74 11.74-24.09 12.66-40.26 15.07-9.42 1.41-29.7 3.77-34.81-.79-2.37-2.11-3-21-3.22-27.62-.21-6.92-1.36-16.52-2.82-18-.75 3.06-2.49 11.53-3.09 13.61S378.49 34.3 378 36a85.13 85.13 0 0 0-30.09 0c-.46-1.67-3.17-11.48-3.77-13.56s-2.34-10.55-3.09-13.61c-1.45 1.45-2.61 11.05-2.82 18-.21 6.67-.84 25.51-3.22 27.62-5.11 4.56-25.38 2.2-34.8.79-16.16-2.47-28.51-3.39-40.21-15.13C244.57 24.71 242 0 242 0H0s69.52 22.74 97.52 68.59c16.56 27.11 14.14 58.49 9.92 74.73C170 140 221.46 140 273 158.57c69.23 24.93 83.2 76.19 90 93.6 6.77-17.41 20.75-68.67 90-93.6 51.54-18.56 103-18.59 165.56-15.25-4.21-16.24-6.63-47.62 9.93-74.73C656.43 22.74 726 0 726 0z'/%3E%3C/svg%3E") no-repeat 50% 50%;
 -webkit-mask-size: 100%;
 cursor: pointer;
 background-color: transparent;
 transform: translateY(8px)
}

button:after {
 content: '';
 position: absolute;
 left: 0;
 right: 0;
 bottom: 0;
 box-shadow: 0px 0 0 0 white;
 transition: all 2s ease;
}

button:hover:after {
 box-shadow: 0px -13px 56px 12px #ffffffa6;
}

button span {
 position: absolute;
 width: 100%;
 font-size: 15px;
 font-weight: 100;
 left: 50%;
 top: 39%;
 letter-spacing: 3px;
 text-align: center;
 transform: translate(-50%,-50%);
 color: black;
 transition: all 2s ease;
}

button:hover span {
 color: white;
}

button:before {
 content: '';
 position: absolute;
 width: 0;
 height: 100%;
 background-color: black;
 left: 50%;
 top: 50%;
 transform: translate(-50%, -50%);
 transition: all 1s ease;
}

button:hover:before {
 width: 100%;
}


  
</style>


  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg navbar-transparent">
  <!-- ... rest of your code ... -->
      <div class="container-fluid">
        <a class="navbar-brand" href="home">My Laravel-App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
          </ul>
        </div>
        <li class="login">
          <a class="login-link" href="login"></a>
        <button>
       <span>LOG IN</span>
      </button>
      </li>
      </div>
      </div>
    </nav>
    
  
      
    <!-- End Example Code -->
  </body>
</html>