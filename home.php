<?php include"header.php";?>
<body >
    
    <div class="imed_logo">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark pl-5 fixed-top">
            <div class="container">
                <a href="" class="navbar-brand text-warning fornt-weight-bold text-left">ONLINE SERVICE PROVIDER</a>
                <span class="navbar-text">Customer satisfaction, our primary motto</span>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>

                </button>   
                  <div class="collapse navbar-collapse text-center " id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link text-white"> HOME </a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link text-white"> SERVICES </a>
                        </li>
                        <li class="nav-item">
                            <a href="registration.php" class="nav-link text-white"> REGISTRATION </a>
                        </li>
                         <li class="nav-item">
                            <a href="login.php" class="nav-link text-white"> LOGIN </a>
                        </li>

                        <li class="nav-item">
                            <a href="login.php" class="nav-link text-white"> ADMIN </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#contact" class="nav-link text-white"> CONTACT </a>
                        </li>
                    </ul>
                    
                  </div>            
            </div>
        </nav>

        <header class="image" class="img-fluid"  style="background-image: url(images/b2.jpg);">
            
        </header>

        <div class="container discription">
            <div class="jumbotron">
                <h3 class="text-center">OSP SERVICES</h3>
                <p>
                OSP Services is India’s leading chain of multi-brand Electronics and Electrical service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic
        Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.
                </p>
                
            </div>
            
        </div>
         
         <section class="image2">

        <div class="container text-center" id="services">
            <h1>OUR SERVICES</h1>
        

        <div class="row rowsetting">
            <div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
                <a href="#"></a>
                <figure class="figure">
                    <img src="images/b4.jpg" class="figure-img img-fluid rounded-circle" height="200px" width="200px">
                    <figcaption>
                        <h4>Electronic Appliances</h4>
                    </figcaption>
                    
                </figure>
                
            </div>
            


            <div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
                <a href="#"></a>
                <figure class="figure">
                    <img src="images/b5.jpg" class="figure-img img-fluid rounded-circle" height="1000px" width="1000px">
                    <figcaption>
                        <h4>Preventive Maintenance</h4>
                    </figcaption>
                    
                </figure>
                
            </div>
           
              <div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
                <a href="#"></a>
                <figure class="figure">
                    <img src="images/b6.jpg" class="figure-img img-fluid rounded-circle" height="10000px" width="1000px">
                    <figcaption>
                        <h4>Fault Repair</h4>
                    </figcaption>
                    
                </figure>
                
            </div>
            
           </div> 
             

        </div>
        <?php include("contact.php");?>
    </section>
    

       
    </div>  

</body>
</html>