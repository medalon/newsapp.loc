<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Главная')</title>

    <meta name="description" content="@yield('description', 'Описание...')">
    <meta name="keywords" content="@yield('keywords', 'keywords...')">

  
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    @yield('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
</head>
<body id="page1">
<div class="wrap">
   <!-- header -->
   <header>
      <div class="container">
         <h1><a href="index.html">Student's site</a></h1>
         <nav>
            <ul>
               <li class="current"><a href="index.html" class="m1">Home Page</a></li>
               <li><a href="about-us.html" class="m2">About Us</a></li>
               <li><a href="articles.html" class="m3">Our Articles</a></li>
               <li><a href="contact-us.html" class="m4">Contact Us</a></li>
               <li class="last"><a href="sitemap.html" class="m5">Site Map</a></li>
            </ul>
         </nav>
         <form action="" id="search-form">
            <fieldset>
            <div class="rowElem">
               <input type="text">
               <a href="#" onClick="document.getElementById('search-form').submit()">Search</a></div>
            </fieldset>
         </form>
      </div>
   </header>
   <div class="container">
      <!-- aside -->
      <aside>
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="#">Programs</a></span></li>
            <li><span><a href="#">Student Info</a></span></li>
            <li><span><a href="#">Teachers</a></span></li>
            <li><span><a href="#">Descriptions</a></span></li>
            <li><span><a href="#">Administrators</a></span></li>
            <li><span><a href="#">Basic Information</a></span></li>
            <li><span><a href="#">Vacancies</a></span></li>
            <li class="last"><span><a href="#">Calendar</a></span></li>
         </ul>
         <form action="" id="newsletter-form">
            <fieldset>
            <div class="rowElem">
               <h2>Newsletter</h2>
               <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
               <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright" onClick="document.getElementById('newsletter-form').submit()">Submit</a></div>
            </div>
            </fieldset>
         </form>
         <h2>Fresh <span>News</span></h2>
         <ul class="news">
            <li><strong>June 30, 2010</strong>
               <h4><a href="#">Sed ut perspiciatis unde</a></h4>
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </li>
            <li><strong>June 14, 2010</strong>
               <h4><a href="#">Neque porro quisquam est</a></h4>
               Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit consequuntur magni. </li>
            <li><strong>May 29, 2010</strong>
               <h4><a href="#">Minima veniam, quis nostrum</a></h4>
               Uis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae. </li>
         </ul>
      </aside>
      <!-- content -->
      <section id="content">
         <div id="banner">
            <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
         </div><div class="ic">More Website Templates at Template</div>
         <div class="inside">
            <h2>Recent <span>Articles</span></h2>
            <ul class="list">
               <li><span><img src="{{ asset('images/icon1.png') }}"></span>
                  <h4>About Template</h4>
                  <p>Free 1028X768 Optimized Website Template from TemplateMonster.com! We hope that you like this tem- plate and will use for your websites.</p>
               </li>
               <li><span><img src="{{ asset('images/icon2.png') }}"></span>
                  <h4>Branch Office</h4>
                  <p>Sed ut perspiciatis unomnis iste natus error sit volup tatem accusantiu loremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
               </li>
               <li class="last"><span><img src="{{ asset('images/icon3.png') }}"></span>
                  <h4>Student’s Time</h4>
                  <p>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempo- ra incidunt ut labore.</p>
               </li>
            </ul>
            <h2>Move Forward <span>With Your Education</span></h2>
            <p><span class="txt1">Student’s Site</span> is a free web template created by Template team. This website template is optimized for 1024X768 screen resolution. </p>
            <div class="img-box"><img src="{{ asset('images/1page-img.jpg') }}">This website template can be delivered in two packages - with PSD source files included and without them. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the template ZIP package to be delivered to.</div>
            <p class="p0">This website template has several pages: <a href="index.html">Home</a>, <a href="about-us.html">About us</a>, <a href="articles.html">Articles</a> (with Article page), <a href="contact-us.html">Contact us</a> (note that contact us form – doesn’t work), <a href="sitemap.html">Site Map</a>.</p>
         </div>
      </section>
   </div>
</div>
<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
         <div class="wrapper">
            <div class="fleft">24/7 Customer Service <span>8.800.146.56.7</span></div>
            <div class="aligncenter"><p>Consulting.com &copy; 2015
<u><a href="http://partners-pro.ru" target="_blank">Partners-Pro.ru</a></u>&nbsp;| Бесплатное изготовление сайтов</p></div>
         </div>
      </div>
   </div>
</footer>
<div class="container">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="height:75px; width:560px">
	<tbody>
		<tr>
			<td style="height:75px; text-align:center; vertical-align:middle; width:560px">
			<p><a href="http://partners-pro.ru" target="_blank"><img alt="Изготовление партнёрских интернет-магазинов и бесплатных сайтов" src="http://partners-pro.ru/site-free/banner.gif" style="height:75px; width:560px" /></a></p>
			</td>
		</tr>
	</tbody>
</table>
</div>

<!-- content -->
@yield('content')
    

{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@yield('scripts')


</body>
</html>
