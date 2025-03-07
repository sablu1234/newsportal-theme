<!doctype html>
<html class="no-js" lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="description"
    content="The latest international news from Frivizn, featuring top stories from around the world and breaking news, as it happens.">
  <meta name="author" content="dukibu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home | Frivizn News</title>

  <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700|Open+Sans&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('assets/css/normalize.css');?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/main.css';?>">

</head>

<body id="top">

  <div class="content-wrap">

    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Header -->
    <header role="banner">

      <section class="nav-section">

        <!-- Logo -->
        <div class="logo">
          <a href="index.html" title="Frivizn logo">Frivizn</a>
        </div>

        <!-- Navigation -->
        <nav class="nav-menu" role="navigation">
          <ul class="nav-links">
            <li><a href="index.html" title="Home">Home
<?php 
$friends="0";
if($friends<10){
  echo '<br>you are my friends';
}
else{
  echo '<br>you are not my friends';
}




?>

            </a></li>
            <li><a href="article.html" title="World">World</a>
            <li><a href="#politics.html" title="Politics">Politics</a></li>
            <li><a href="#business.html" title="Business">Business</a></li>
            <li><a href="#sport.html" title="Sport">Sport</a></li>
            <li><a href="#entertainment.html" title="Entertainment">Entertainment</a></li>
            <li>
              <a href="#more" title="More">More...<span class="dropdown-toggle" aria-expanded="false"></span>
                <span class="screen-reader-text">Expand child menu</span></a>
              <ul class="sub-menu">
                <li><a href="#" title="Science">Science</a></li>
                <li><a href="#" title="Travel">Travel</a></li>
                <li><a href="#" title="Health">Health</a></li>
                <li><a href="#" title="Style">Style</a></li>
                <li><a href="#" title="Weather">Weather</a></li>
                <li><a href="#" title="Video">Video</a></li>
              </ul>
            </li>
          </ul>
          <div class="burger">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
          </div>
        </nav>
      </section> <!-- end of class="nav-section"-->

    </header>

    <!-- Main -->
    <main class="main" role="main">

      <div class="top-news">

        <section class="latest-news">
          <div class="headline">
            <p>Breaking News</p>
            <a href="article.html">
              <h1>Lorem ipsum dolor sit amet</h1>
            </a>
          </div>
        </section> <!-- End of class="latest-news" -->

        <section class="top-stories">
          <h2>Top Stories</h2>
          <div class="headline headline-1">
            <a href="#">
              <h1>Quisque sit amet mi lectus</h1>
            </a>
          </div>
          <div class="headline headline-2">
            <a href="#">
              <h1>Cras placerat augue tellus</h1>
            </a>
          </div>

          <div class="headline headline-3">
            <a href="#">
              <h1>Rutrum laoreet non pulvinar</h1>
            </a>
          </div>
        </section> <!-- End of class="top-stories" -->

      </div> <!-- End of class="top-news" -->

      <section class="world">
        <h2>World</h2>
        <div class="story story-1">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/politics2.jpg';?>" alt="Protesters">
            </div>
            <div class="story-headline">
              <h3>Donec quis velit tellus Vestibulum</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story story-2">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/politics10.jpg"';?> alt="Police Officers">
            </div>
            <div class="story-headline">
              <h3>Pariatur laboriosam voluptatum labore tenetur</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story story-3">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/world9.jpg';?>" alt="Aerial view of the city">
            </div>
            <div class="story-headline">
              <h3>bibendum antes auctor sans aliquam</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>
      </section> <!-- End of class="world" -->

      <section class="politics">
<h2>Politics</h2>

<?php 
// $name="hasan";
// $cell= "0132054646";
// $email="mdjljla@gmail.com";

// $personeinfo=array("hasan","0132054646","mdjljla@gmail.com");

// foreach ($personeinfo as $value){
//   echo $value;
// }

// $info=array('d',4464,"hadi jaman");
// echo count($info);
// echo $info[2];

// $studentinfo=array(
//   'key'=>'value',
//   'name' =>'hadi jaman',
//   'childinfo'=>array(
//     'c_name'=>'rowza',
//   ),
//   );
// echo $studentinfo['childinfo']['c_name'];

// $slno=0;
// for($taka=0;$taka<100;$taka+=10){
//   echo $taka.'<br>';
//   $slno++;
// }
// echo $slno;

$taka=0;
while($taka<100){
  echo $taka;
  $taka+=10;
}





if(have_posts()):
while(have_posts()): the_post();
?>
<div class="story">
          <a href="#">
          <?php 
          if(has_post_thumbnail()){
            the_post_thumbnail();
          }
          else{
            ?>
           <img src="<?php echo get_template_directory_uri().'/assets/images/politics4.jpg';?>" alt="Protesters">
            <?php
          }
          
          
          ?>
            <div class="story-img">
             
            </div>
            <div class="story-headline">
              <h3><?php the_title('i am hasan');?></h3>
              <p class="exact-time"><?php the_time();?></p>
              <p class="exact-time"><?php the_author();?></p>
              <p class="exact-time"><?php the_category();?></p>
            </div>
          </a>
        </div>

<?php
endwhile;
else:
  echo "post nai";
endif;



?>



        


      </section> <!-- End of class="politics" -->

      <section class="business">
        <h2>Business</h2>
        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/business1.jpg';?>" alt="Office">
            </div>
            <div class="story-headline">
              <h3>Curabitur fringilla urna nec quam imperdiet semper</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/business4.jpg';?>" alt="Computer screen">
            </div>
            <div class="story-headline">
              <h3>Phasellus vitae tristique felis, in ornare nulla</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/business7.jpg';?>" alt="Screen with graphic statistics">
            </div>
            <div class="story-headline">
              <h3>Pellentesque nec viverra felis Praesent quis magna sed</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/business10.jpg';?>" alt="Container terminal">
            </div>
            <div class="story-headline">
              <h3>Aliquam a lectus laoreet massa viverra porttitor eu ac hulla</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>
      </section> <!-- End of class="business" -->

      <section class="sport">
        <h2>Sport</h2>
        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/sport2.jpg';?>" alt="Marathon runner">
            </div>
            <div class="story-headline">
              <h3>Pellentesque sagittis augue urna, nec auctor</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/sport5.jpg';?>" alt="Football field">
            </div>
            <div class="story-headline">
              <h3>Duis et hendrerit nunc, Maecenas eu placerat purus</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/sport6.jpg';?>" alt="American football players">
            </div>
            <div class="story-headline">
              <h3>Phasellus eget condimentum libero</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/sport7.jpg';?>" alt="Sport car">
            </div>
            <div class="story-headline">
              <h3>Sed sed felis ut leo malesuada sodales</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>
      </section> <!-- End of class="sport" -->

      <section class="entertainment">
        <h2>Entertainment</h2>
        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/entertainment1.jpg';?>" alt="Live concert">
            </div>
            <div class="story-headline">
              <h3>Pellentesque ultrices massa ac ipsum sollicitudin</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/entertainment4.jpg';?>" alt="Man playing guitar">
            </div>
            <div class="story-headline">
              <h3>Nam accumsan purus luctus nisi consectetur</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/entertainment6.jpg';?>" alt="Wedding">
            </div>
            <div class="story-headline">
              <h3>sit amet euismod lorem bibendum</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>

        <div class="story">
          <a href="#">
            <div class="story-img">
              <img src="<?php echo get_template_directory_uri().'/assets/images/entertainment10.jpg';?>" alt="Fashion model">
            </div>
            <div class="story-headline">
              <h3>Suspendisse at cursus sapien</h3>
              <p class="exact-time">13:53h</p>
            </div>
          </a>
        </div>
      </section> <!-- End of class="entertainment" -->

      <section class="more">
        <h2>More...</h2>
        <a href="#">
          <div class="more-headline">
            <h3>Cras fringilla porta vehicula. Etiam turpis tellus</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

        <a href="#">
          <div class="more-headline">
            <h3>pretium ac purus at, pretium dapibus velit</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

        <a href="#">
          <div class="more-headline">
            <h3>Sed ac elit posuere, cursus risus porttitor</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

        <a href="#">
          <div class="more-headline">
            <h3>Nam egestas, enim a lobortis vestibulum</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

        <a href="#">
          <div class="more-headline">
            <h3>Ligula massa commodo nulla, nec convallis arcu risus</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

        <a href="#">
          <div class="more-headline">
            <h3>Vestibulum dapibus, risus vel condimentum porta</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

        <a href="#">
          <div class="more-headline">
            <h3>a condimentum est nisl sed felis</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

        <a href="#">
          <div class="more-headline">
            <h3>Nullam rhoncus tincidunt felis at auctor donec</h3>
            <p class="exact-time">13:53h</p>
          </div>
        </a>

      </section> <!-- End of class="more" -->

    </main> <!-- End of class="main" -->


    <!-- Footer Links -->
    <div class="footer-links">

      <ul class="social-media-links">
        <li><a href="http://twitter.com"><span class="screen-reader-text">Twitter</span></a></li>
        <li><a href="http://facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
        <li><a href="http://linkedin.com"><span class="screen-reader-text">LinkedIn</span></a></li>
        <li><a href="http://youtube.com"><span class="screen-reader-text">YouTube</span></a></li>
        <li><a href="http://instagram.com"><span class="screen-reader-text">Instagram</span></a></li>
      </ul>

      <ul class="main-footer-links">
        <li><a href="#world" title="World">World</a>
        <li><a href="#politics" title="Politics">Politics</a></li>
        <li><a href="#business" title="Business">Business</a></li>
        <li><a href="#sport" title="Sport">Sport</a></li>
        <li><a href="#entertainment" title="Entertainment">Entertainment</a></li>
        <li><a href="#science" title="Science">Science</a></li>
        <li><a href="#travel" title="Travel">Travel</a></li>
        <li><a href="#health" title="Health">Health</a></li>
        <li><a href="#style" title="Style">Style</a></li>
        <li><a href="#weather" title="Weather">Weather</a></li>
        <li><a href="#video" title="Video">Video</a></li>
      </ul>

      <ul class="info-links">
        <li><a href="#terms-of-use" title="Terms of Use">Terms of Use</a></li>
        <li><a href="#privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
        <li><a href="#about-us" title="About Us">About Us</a></li>
        <li><a href="#advertising" title="Advertising">Advertising</a></li>
        <li><a href="#sitemap" title="Sitemap">Sitemap</a></li>
      </ul>

      <ul class="our-address">
        <li>Our Address:</li>
        <li>Main Street 123</li>
        <li>New York, NY 10000</li>
        <li>111-222-3333</li>
      </ul>

    </div> <!-- End of class="footer-links" -->

    <!-- Footer Credit -->
    <footer role="contentinfo">
      <p>2019 &copy; by Frivizn Studio</p>
      <a class="scroll-top" href="#top"></a>
    </footer>

  </div> <!-- end of class="content-wrap" -->

  <!-- <script src="js/modernizr.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <!--
      <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
      </script>
      <script src="https://www.google-analytics.com/analytics.js" async defer></script> 
    -->

</body>

</html>