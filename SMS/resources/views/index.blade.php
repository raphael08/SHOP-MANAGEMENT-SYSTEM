<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- font style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- /font style -->
        <!-- icon style -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
      <!-- /icon style -->

        <!-- style -->
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- /style -->
    </head>
    <body>
        <!-- side bar -->
        @include('includes.sidebar') 
        <!-- / sidebar -->
        
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
            <!-- content -->
            <div class="g-0 container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="content_iner align-items-start justify-content-start d-flex flex-column">
                            <h1>Bootstrap 5 Sidebar Navigation</h1>
                            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam facilis inventore harum, architecto libero recusandae porro doloremque sunt cum consectetur, autem, vitae ea nihil sapiente voluptas at aut suscipit eos? Sapiente quam culpa aliquam
                                itaque debitis nihil doloremque rem! Praesentium quae, facere nobis impedit quisquam aliquid maxime error? Totam eaque earum fuga aliquam sequi excepturi illum optio quas tempora ea! Eum perspiciatis accusantium distinctio eveniet consequatur
                                sint illo officiis? Saepe dolores fugiat rerum, voluptatem sunt culpa nihil accusantium voluptates unde hic magnam quos est perspiciatis recusandae incidunt quod laborum vitae. Harum modi inventore ea odit eaque ut maiores voluptate nihil
                                aspernatur voluptatibus exercitationem ipsa nam animi neque tempore, eligendi, repellendus praesentium ex voluptatum? Magni laboriosam nemo, assumenda veniam aperiam eum! Eos, ipsum. Eum illo quos quo tempora excepturi reprehenderit numquam
                                voluptas! Blanditiis autem optio labore quisquam culpa, tempora minus eum repudiandae ea voluptatem quia obcaecati velit cum dolorum esse dolorem!</p>
                            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam facilis inventore harum, architecto libero recusandae porro doloremque sunt cum consectetur, autem, vitae ea nihil sapiente voluptas at aut suscipit eos? Sapiente quam culpa aliquam
                                itaque debitis nihil doloremque rem! Praesentium quae, facere nobis impedit quisquam aliquid maxime error? Totam eaque earum fuga aliquam sequi excepturi illum optio quas tempora ea! Eum perspiciatis accusantium distinctio eveniet consequatur
                                sint illo officiis? Saepe dolores fugiat rerum, voluptatem sunt culpa nihil accusantium voluptates unde hic magnam quos est perspiciatis recusandae incidunt quod laborum vitae. Harum modi inventore ea odit eaque ut maiores voluptate nihil
                                aspernatur voluptatibus exercitationem ipsa nam animi neque tempore, eligendi, repellendus praesentium ex voluptatum? Magni laboriosam nemo, assumenda veniam aperiam eum! Eos, ipsum. Eum illo quos quo tempora excepturi reprehenderit numquam
                                voluptas! Blanditiis autem optio labore quisquam culpa, tempora minus eum repudiandae ea voluptatem quia obcaecati velit cum dolorum esse dolorem!</p>   
                        </div>
                    </div>
                </div>
            </div
    </section>
        <!-- /content -->
        
        
        <!--cript  -->
        <!-- bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
        <!-- custom js -->
            
        <!--/script  -->
    </body>
</html>