<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- /font style -->
        <!-- font icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
         <!-- /icon style -->
         <!-- style -->
         <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <!-- /style -->
           <!-- custom css -->
           <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
           <!-- /custom csss -->

    <title></title>
</head>
<body>
    <!-- side bar -->
    @include('includes.sidebar')
    <!-- /side bar -->
    <section class="my-container">
        <!-- header -->
        <div class="g-0 container-fluid">
        <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="header_iner align-items-center justify-content-between d-flex">
                            <div class="search align-items-center justify-content-between d-flex">
                                <div class="search_inner">
                                    <form action ="#">
                                    <i class="material-icons-outlined md-26 search-icon">search</i>
                                    <div class="search-field">
                                        <input type="text" class="form-control form-input" placeholder="Search...">
                                    </div>
                                    <i class="material-icons-outlined md-26 filter-icon">tune</i>                  
                                </div>
                                <div class="notification align-items-center justify-content-around d-flex">
                                    <i class="material-icons-outlined md-26">notifications</i>
                                </div>
                            </div> 
                            <div class="avatar1  d-flex justify-content-between align-items-center">
                                <div class="avatars">
                                    <img src="{{asset('images/logo.jpg')}}"  alt="Image"/>
                                </div>
                                <div class="name">
                                    <div>Steven Smith</div>
                                    <div class="staff">Staff</div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /header -->
        <!-- product name and the button -->
        <div class=" container-fluid">
            <ul class="list-inline d-flex flex-row d-flex justify-content-between align-items-start ms-4">
                        <li class="product1 list-inline-item w-50 ml-2  ">
                        <span>
                            Products
                        </span>
                        </li>      

                        <li class="product  list-inline-item  w-25">
                                <a href="#" class="product-link list-inline-item d-flex justify-content-center  w-50 p-2  " >New Product</a>
                        </li>
            </ul>
        </div>
        <!-- /product name and the button -->

        <!-- navigation tabs -->
        
            <ul class="nav nav-tabs w-100 justify-content-content d-flex flex-row  p-2">
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#" class="nav-links">
                        Plumbing Tools
                    </a>
                </li>
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#" class="nav-links" >
                        Building Material
                    </a>
                </li>
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#" class="nav-links">
                        Electronics Tools
                    </a>
                </li>
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#"class="nav-links" >
                        Gypsum Board
                    </a>
                </li>
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#" class="nav-links" >
                        Safety Tools
                    </a>
                </li>
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#" class="nav-links">
                        Iron Sheet
                    </a>
                </li>
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#" class="nav-links">
                        Tiles
                    </a>
                </li>
                <li class="navigation-items nav-item pl-2 mt-2 ">
                    <a href="#" class="nav-links ">
                        Screw
                    </a>
                </li>
            </ul>
      
        <!-- /navigation tabs -->

        <!-- product1 -->
        <div class="container1 row  d-flex justify-content-between align-items-center flex-row w-80 pl-4 ">
            <div class="col">
                <img src="{{asset('images/logo.jpg')}}" class="image " alt="Image">
            </div>
            <div class="col">
                <div class="name-of-component">
                    Cement
                </div>
                <div class="price-of-component">
                    TZS 11,000
                </div>
            </div>
            <div class="col">
                
            </div>
            <div class="col">
                <div class="dropdown">
                    <ul class="dropdown" aria-labelledby="">
                            <li class="dropdown-item dropdown-toggle" data-toggle="dropdown">
                                Dangote
                            </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="prices d-flex flex-row justify-center align-items-center w-100">
                <div class="name-of-component">
                    Total:
                </div>
                <div class="price-of-component">
                    TZS 11,000
                </div>
                </div>
                
                <!-- sales button -->
                <li class="product  list-inline-item  w-100">
                                <a href="#" class="product-link list-inline-item d-flex justify-content-center  w-50 p-1  " >Sale</a>
                        </li>
                <!-- /sales button -->
            </div>

        </div>
        <!-- /product1 -->

    </section>
    
    
</body>
</html>