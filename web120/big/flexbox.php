<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Christian Patton's BIG Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <!-- MenuMaker Plugin -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <!-- Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="js/script.js"></script>
 </head>
 <body>
   <div class="wrapper">
      <header>
       <h1>Web Development Research Topics &amp; Examples </h1>
       <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><i class="fa fa-fw fa-institution"></i> WEB120</a></li>
     <li><a href="index.php"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
     <li><a href="flexbox.php"><i class="fa fa-fw fa-th-large"></i> Flexbox</a></li>
     <li><a href="rvm.php"><i class="fa fa-fw fa-mobile"></i> Responsive Vs. Mobile</a></li>
     <li><a href="gallery.php"><i class="fa fa-fw fa-camera-retro"></i> Image Gallery</a></li>
     <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
        <ul>
           <li><a href="shopping.php"><i class="fa fa-fw fa-shopping-cart"></i> Shopping Carts</a></li>
           <li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.php"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Christian</a></li>
  </ul>
       </nav>
    </header>
     
<!--START LEFT COLUMN -->
    <section>
        <h2>Flexbox</h2>
        <p><b> What exactly is a “flexbox”?</b> </p>
        
        <p><i>“The Flexible Box Module, usually referred to as flexbox, was designed as a one-dimensional layout model, and as a method that could offer space distribution between items in an interface and powerful alignment capabilities.”</i> (Mozilla)</p>
        
        <p>Flexbox deals with layout in one dimension at a time — either as a row or as a column. </p>
        
        <p><b>So when should (or shouldn’t) you be using flexbox?</b></p>
        <p>The strong suits of flexbox are its many uses in scaling, vertical/horizontal alignment and ordering. Sounds pretty useful, but there are a number of situations where it should be avoided.
</p>
        <p>“<b>Don't</b> use flexbox for page layout. A basic grid system using percentages, max-widths, and media queries is a much safer approach for creating responsive page layouts. Optimally you’d use a grid system in conjunction with flexbox to achieve the most responsive website. Furthermore, because the flexbox layout is dependent upon content, issues can arise as the page loads.
 
</p>
        <p><b>Don’t</b> add display:flex; to every single container div. Ask yourself if flexbox really solves an alignment, scale, or ordering issue that can’t be solved in a simpler way with basic CSS.
</p>
        <p><b>Don’t</b> use flexbox if you have a lot of traffic from IE8 and IE9. While there are fallbacks, the experience won’t look the same.” (Brolik)</p>
        <p>While it may not be applicable to every single situation, flexbox is undoubtedly an important indication of the constant evolution of modern web.
</p>
       </section>
<!--END LEFT COLUMN -->
       
<!--START RIGHT COLUMN-->
    <aside>
        <h3>Citations &amp; Additional Links</h3>
        <dl>
            <dt>Aria. “Basic Concepts of Flexbox.” MDN Web Docs, 6 Jan. 2019.</dt>
        </dl>
                <dl><a href="developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concept
s_of_Flexbox/">Basic Concepts</a>
        </dl>
        <dl>
            <dt>Caldwell, Alex. “When to Use Flexbox.” The Brolik Blog, 20 Apr. 2016.</dt>
        </dl>
        <dl><a href="brolik.com/blog/when-to-use-flexbox/">When To Use</a>
        </dl>
       </aside>
       
<!--END RIGHT COLUMN-->
       

  
       
<?php include 'includes/footer.php';?>
  </div>
 </body>
</html>

