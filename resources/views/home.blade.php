<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title>Welcome</title>

    <meta name="description" content="Free download theme onepage, clean and modern responsive for all"/>
    <meta name="keywords" content="responsive, html5, onepage, themes, template, clean layout, free web"/>
    <meta name="author" content="Thomsoon.com"/>
    
    <link rel="shortcut icon" href="img/favicon.png"> 
    
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style-responsive.css" />       

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    
</head>

<body>


<div class="preloader" id="preloader">
    <div class="item">
      <img src="img/loading.gif">
    </div>
</div>


<div class="container">


<!-- section start-page -->

  <section class="start-page parallax-background" id="home">
  
    <div class="opacity"></div> <!-- Opacity color -->
      <div class="content">
        <div class="text">
        
          <div class="logo"><img src="img/logo.png"></div>
        
          <h1>Creative</h1><hr/>
          <p>Please calm down</p>
          
          <a href="#berita"><div class="read-more">Read more</div></a>
          
        </div>
        <div class="arrow-down"></div>
      </div>
  
  </section>

  <!-- section menu mobile -->
  
  <section class="menu-media">
  
    <div class="menu-content">
    
      <div class="logo">News</div>
      
      <div class="icon"><a href="#"><img src="img/icons/menu-media.png"/></a></div>
    
    </div>
   
  </section>
  
    <ul class="menu-click">
        <a href="#home"><li href="#home">HOME</li></a>
        <a href="#berita"><li href="#berita">BERITA</li></a>
        <a href="#contact"><li href="#contact">CONTACT</li></a>
        
    </ul>
   
   
  <!-- section menu -->
  
  <section class="menu">

    <div class="menu-content">
    
    <div class="logo">Onepage</div>
    
      <ul >
<li><a href="/komentar/komentarpublic">KOMENTAR</a></li>
        <a href=" https://github.com/danielrpl2">ABOUT ME</a>
        <li><a href="#home">HOME</a></li>
<a href="https://wa.me/+6289652159944?text=Hello">CONTACT</a>
      </ul>
    </div>
  
  
  </section>

<div class="container"> 

<div>
  <div >
      @foreach($postingan as $postingan)
            <h1>  p</h1>
    <h1 style="text-align: center; color: black;">{{ $postingan->judul }}</h1><br>  
    <h2 style="color : black;text-align: center;">{{ $postingan->isi}}</h2>

 </div>
            @endforeach 

</div>
</div>
    
  <!-- Scripts -->
  
  <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.10.4.min.js" type="text/javascript"></script> <!-- jQuery -->
  <script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
  <script src="js/jquery.sticky.js"></script> <!-- jQuery Stick Menu -->
  <script src="js/masonry.pkgd.min.js"></script> <!-- All script -->
  <script src="js/imagesloaded.pkgd.min.js"></script> <!-- All script --> 

   <script>
     $(function(){
   
       var $container = $('.grid');
     
       $container.imagesLoaded( function(){
         $container.masonry({
           itemSelector : 'li'
         });
       });
     
     });
   </script>
  <script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->  
  <script src="js/script.js"></script> <!-- All script -->  


</body>

</html>
