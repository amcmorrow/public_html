<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Andrew McMorrow - Ecommerce Specialist</title>
        
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
    <!--Syntax Highlighting -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>

      <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />

</head>

    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
           
            <x-navbar />

             <!-- About Section -->
  <section id="about" class="uk-section uk-section-small">
    <div class="uk-container"><br><br>
      <img class="uk-align-center" src="{{ asset('img/amm-signature.png') }}" width="" height="" alt=""><br><br>
      <h2 class="uk-text-center">A bit of background...</h2>
      <p>With over a decade of experience in digital marketing and e-commerce, I have had the privilege of leading digital marketing efforts for multiple companies. My expertise lies in overseeing campaigns, schedules, and website maintenance while utilizing my skills in UX design, database management, and ad set supervision to drive e-commerce success. Throughout my career, I have demonstrated a strong ability to lead and manage digital marketing and e-commerce operations at a strategic level, focusing on optimizing campaigns, enhancing user experiences, and leveraging data-driven insights to deliver measurable results.</p>
      <p>My passion for innovation, coupled with my deep understanding of the ever-evolving digital landscape, enables me to develop and execute effective strategies that drive growth and profitability. I take pride in my ability to collaborate with cross-functional teams, bringing a strategic vision and hands-on approach to every project I undertake. As I continue to grow and evolve in my career, I remain dedicated to leveraging my expertise to help businesses thrive in the digital age, confident in my ability to make a significant impact in the field of digital marketing and e-commerce.</p></div>
  </section>

  <!-- Professional Projects Section -->
 <style>
  .card-img, .card-img-bottom, .card-img-top {
  padding: 20px;
}
 </style>
 
  <section id="projects" class="uk-section uk-section-small">
    <div class="uk-container">
<div class="row">
    <h2 class="uk-text-center">Full Time Work</h2>
      <div class="uk-flex uk-flex-center"><a href="/resume/" target="_blank" class="btn btn-primary" style="width:50%;">View Resume</a></div>
</div>
     
<br><br>
<div class="row">
  <div class="col-sm-6">
 <div class="card">
 <img src="{{ asset('img/revobrands-logo-950x225.png') }}" class="card-img-top" alt="Revo Brands">
  <div class="card-body">
    <h4 class="card-title">Revo Brands</h4>
    <h6 class="card-subtitle mb-2 text-muted">Web Design, UX Design</h6>
        <p class="card-text">Revo Brands ignites growth in enthusiast and mission critical brands through superior innovation, design and marketing. We go to market through our brands Real Avid and Outdoor Edge.</p>
        <a href="http://revobrands.com" target="_blank" class="btn btn-primary">Visit Revobrands.com</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
 <div class="card">
  <img src="{{ asset('img/realavid-logo-950x225.png') }}" class="card-img-top" alt="Real Avid">
  <div class="card-body">
    <h4 class="card-title">Real Avid</h4>
    <h6 class="card-subtitle mb-2 text-muted">SEO, UX Design, Email Marketing</h6>
        <p class="card-text">Real innovation and smart design have made Real Avid the go-to brand for Gun DIY® consumers. From Master Grade® tools to High Performance Gun CleaningTM and the world’s leading line of multi-tools for guns, Real Avid sets the high bar for real world performance.</p>
        <a href="https://realavid.com" target="_blank" class="btn btn-primary">Visit RealAvid.com</a>
      </div>
    </div>
  </div>
</div>
<br>
  <div class="row">
  <div class="col-sm-6">
 <div class="card">
  <img src="{{ asset('img/outdooredge-logo-950x225.png') }}" class="card-img-top" alt="Outdoor Edge">
  <div class="card-body">
    <h4 class="card-title">Outdoor Edge</h4>
    <h6 class="card-subtitle mb-2 text-muted">UX Design, SEO, Email Marketing</h6>
        <p class="card-text">Outdoor Edge is a leading knife and tool brand that develops and uses innovative technology to create highly functional knives for hunters, fishers, outdoor enthusiasts, tradesmen and everyday carry. Their patented RazorSafeTM Blade System leads the industry in replaceable blade knives.</p>
        <a href="https://outdooredge.com" target="_blank" class="btn btn-primary">Visit Outdooredge.com</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
 <div class="card">
  <img src="{{ asset('img/workiqtools-logo-950x225.png') }}" class="card-img-top" alt="WorkIQ Tools">
  <div class="card-body">
    <h4 class="card-title">WorkIQ Tools</h4>
    <h6 class="card-subtitle mb-2 text-muted">Brand Development, Web Design, SEO, Email Marketing</h6>
        <p class="card-text">The world’s smartest bench vise system is transforming the way DIYers, craftsmen, hobbyists, makers, and pros work. The IQ Vise System’s three parts combine to help you solve problems. The IQ Vise articulates and rotates 360 degrees for optimal work positioning. Task-specific IQ Vise Jaws grip varying materials. And, IQ Connect plug-and-play accessories are an extra set of hands. Let The IQ Vise System help you work faster, easier, and smarter.</p>
        <a href="https://workiqtools.com" target="_blank" class="btn btn-primary">Visit WorkIQTools.com</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
 <div class="col-sm-6">
 <div class="card">
  <img src="{{ asset('img/dakotastones-logo-950x225.png') }}" class="card-img-top" alt="Dakota Stones">
  <div class="card-body">
    <h4 class="card-title">Dakota Stones</h4>
    <h6 class="card-subtitle mb-2 text-muted">ERP, Web Development, Email Marketing</h6>
        <p class="card-text">Dakota Stones manufactures the only branded line of gemstone beads in the world.</p>
        <a href="https://dakotastones.com" target="_blank" class="btn btn-primary">Visit Dakotastones.com</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <div class="card">
  <img src="{{ asset('img/goodybeads-logo-950x225.png') }}" class="card-img-top" alt="Goody Beads">
  <div class="card-body">
    <h4 class="card-title">Goody Beads</h4>
    <h6 class="card-subtitle mb-2 text-muted">Database Management, Web Design, Email Marketing</h6>
        <p class="card-text">At GoodyBeads, our mission is to bring you the latest jewelry-making trends. With over 20 years of experience, our staff has a great eye to keep you in the loop and make your projects shine.</p>
        <a href="https://web.archive.org/web/20221002025812/https://goodybeads.com/collections/kits" target="_blank" class="btn btn-primary">Visit Goodybeads.com</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
 <div class="col-sm-6">
 <div class="card">
  <img src="{{ asset('img/ticasino-logo-950x225.png') }}" class="card-img-top" alt="Treasure Island Casino">
  <div class="card-body">
    <h4 class="card-title">Treasure Island Casino</h4>
    <h6 class="card-subtitle mb-2 text-muted">Email Marketing, Video Graphics, SEO</h6>
        <p class="card-text">Located along the Mississippi River, our breath-taking casino resort boasts fine and casual dining options, a full-service salon and spa, a family friendly water park, bowling alley, an event center and live entertainment venues including an outdoor amphitheater.</p>
        <a href="https://ticasino.com" target="_blank" class="btn btn-primary">Visit TIcasino.com</a>
      </div>
    </div>
</div>
 <div class="col-sm-6">
 <div class="card">
  <img src="{{ asset('img/ainsleyshea-logo-950x225.png') }}" class="card-img-top" alt="Ainsley Shea">
  <div class="card-body">
    <h4 class="card-title">Ainsley Shea</h4>
    <h6 class="card-subtitle mb-2 text-muted">Web Design, Brand Development</h6>
        <p class="card-text">Our method is a bit different. We don't want to throw tactics at you. We sit down with a white board with your key people and get everyone to understand the story.</p>
        <a href="https://web.archive.org/web/20120326013420/http://www.ainsleyshea.com/" target="_blank" class="btn btn-primary">Visit AinselyShea.com</a>
        </div>
    </div>
  </div>
</div>
    </div>
  </section>
  
  <!-- Client Projects Section -->
  <section id="clients" class="uk-section uk-section-small">
    <div class="uk-container"><br><br>
      <h2 class="uk-text-center">Personal & Client Projects</h2>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Epic Ebike Adventures Website</h4>
        <p class="card-text">A Shopify site for an ebike rental business in Las Vegas was successfully set up. The process involved choosing the right theme, customizing it to align with the brand, and adding all the necessary products, pages and features such as payment and shipping options, to ensure a seamless customer experience. The final result was a professional, user-friendly and functional online platform that allowed the business to showcase and rent their e-bikes to visitors and locals in Las Vegas.</p>
        <a href="https://epicebikeadventures.com" target="_blank" class="btn btn-primary">Visit Epicebikeadventures.com</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Brisk Services Website</h4>
        <p class="card-text">A successful WordPress website was crafted for a client by following a series of key steps. The foundation was laid by setting up a hosting account and installing WordPress, then selecting the perfect theme from a wide range of options. Customizing the theme with the theme editor or custom CSS brought the vision to life. Pages and posts were added, and functionality was boosted with plugins for features like contact forms, social media, and e-commerce. Navigation was made simple with a well-organized menu. Before launching, the website was thoroughly tested to ensure it was fully functional. The final product was a well-rounded and functional WordPress website for the client.</p>
        <a href="http://briskservicesllc.com" target="_blank" class="btn btn-primary">Visit Briskservicesllc.com</a>
      </div>
    </div>
  </div>
  </div>
  <br>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Driftless Camp Website</h4>
        <p class="card-text">Crafting a successful WordPress website for a client involved several essential steps. The process started with setting up a hosting account and installing WordPress, followed by choosing the ideal theme from a vast collection of options. Customization, page and post creation, plugin integration, and menu organization resulted in a fully functional website ready for launch after thorough testing.</p>
        <a href="/" target="_blank" class="btn btn-primary">Site Archived</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bellflower Bodywork Website</h4>
        <p class="card-text">The process of developing a massage therapy website for a client was a well-planned and executed project. Every step was taken to ensure the website was not only functional but also visually appealing to visitors. However, due to unforeseen circumstances, the website had to be taken down. Despite the setback, I remain committed to working with the client to find a solution to bring the site back online in the future.</p>
        <a href="/" target="_blank" class="btn btn-primary">Site Archived</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Focused Fire Website</h4>
        <p class="card-text">A hosting account was set up and WordPress was installed, followed by choosing a fitting theme from the vast collection available. The chosen theme was then customized using the theme editor or custom CSS to bring the client's vision to life. Pages and posts were added, and functionality was enhanced through the use of plugins for features like contact forms, social media, and e-commerce. A navigation menu was created to make navigation easy for visitors, and the website was thoroughly tested before it was launched. The end result was a well-rounded and functional website that accurately reflected the client's laser engraving business.</p>
        <a href="/" target="_blank" class="btn btn-primary">Site Archived</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Fish Lake Coffee</h4>
        <p class="card-text">As part of our entrepreneurial journey, we established our own LLC to sell home-roasted coffee, leveraging the power of Shopify as our e-commerce platform. To create a compelling online presence, we carefully selected a theme that aligned with our brand vision and customized it using the theme editor and custom CSS. We added essential pages and posts, and enhanced the website's functionality by integrating plugins for contact forms, social media, and e-commerce. To ensure a seamless user experience, we created an intuitive navigation menu and thoroughly tested the website before launch. The result was a professional, well-rounded, and fully functional website that effectively showcased our unique coffee offerings and reflected our passion for quality and craftsmanship.</p>
        <a href="http://fishlakecoffee.com" target="_blank" class="btn btn-primary">Visit fishlakecoffee.com</a>
      </div>
    </div>
  </div>
  <br>
 <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">o0barkbarkbark0o Website</h4>
        <p class="card-text">Recording my music and doing web design and developments is a passion of mine. This is my personal site that is always a work in progress, but will usually host some of my music on a wordpress site.</p>
        <a href="http://o0barkbarkbark0o.amcmorrow.com" target="_blank" class="btn btn-primary">Visit o0barkbarkbark0o</a>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>
  
    <!-- Contact Section -->
  <section id="contact" class="uk-section uk-section-small">
    <div class="uk-container"><br><br>
      <h2 class="uk-text-center">Contact</h2>

    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact me directly. I will get back to you within a matter of hours to help.</p>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65ccccf80ff6374032cd624e/1hmk01asf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<div class="uk-text-center">
<strong>Email:</strong> <a href="mailto:andrew.michael.mcmorrow@gmail.com">andrew.michael.mcmorrow@gmail.com</a><br>
<strong>Phone:</strong> <a href="tel:6123848959">612-384-8959</a><br>
<strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/andrew-mcmorrow-734b3a19" target="_blank">Andrew McMorrow</a>
</div>
</div>
  </section>

  <x-footer />
