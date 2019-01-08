<!DOCTYPE html>
<html>
<head>
    <title>New Reader Magazine | The Arts, Literature, & Culture Quarterly</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<meta property="og:title" content="@yield('title', 'default description')">
<meta property="og:description" content="@yield('description', 'default description')">

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
        <nav class="navbar navbar-expand-md bg-light navbar-light">
                <a class="navbar-brand" href="/"><h1>N<b class="active">R</b>Magazine</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                         <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="/site/about">About Us</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="/contribution">Contribution</a>
                        </li> 
                        <li class="nav-item">
                         <a class="nav-link" href="/subscribe/index">Subscribe</a>
                        </li> 
                        <li class="nav-item">
                         <a class="nav-link" href="/blog">Blog</a>
                         </li> 
                    </ul>
                 </div> 
            </nav>
            <div class="clearfix"></div>
            <hr class="divider">
            <div id="abtf">
        <div class="row">
            <div class="col-md-5" id="abtf-left">
                <img src="/images/nrm-third-issue.jpg">
            </div>
            <div class="col-md-7" id="abtf-right">
                <h1>NEW<b class="color-text" style="color:#b42828;">READER</b>MAGAZINE</h1>
                <div class="issue">
                    <h4>ISSUE NO. 3</h4>
                </div>
                <p>
                    Vol.1, Issue 3 New Reader Magazine is out! This quarter we bring you more stories, poems
                    and interviews with writers, artist, and creative communities from all over the world.
                </p>
                <a class="btn" href="/downloads">DOWNLOAD YOUR COPY NOW! </a>
            </div>
        </div>
    </div>

    
    @yield('content')
    
    <footer>
            <ul>
                <li class="d-inline-block"><a href="/">Home</a></li>
                <li class="d-inline-block"><a href="/site/about">About</a></li>
                <li class="d-inline-block"><a href="/site/terms-and-conditions">Terms & Condition</a></li>
                <li class="d-inline-block"><a href="/site/privacy-policy">Privacy</a></li>
            </ul> 
            <div class="row container-fluid">
                <div class="col-md-2">
                    <h1> LOGO </h1>
                </div>
                <div class="col-md-6">
                    <p>
                        New Reader Magazine is a print publication and digital media collective 
                        dedicated to finding brave new voices in art, literature, and culture. We've 
                        made it our personal mission to shine a light on underrated and underrepresented
                        voice from all around the world.
                         
                    </p>
                    <br>
                    <p>
                        Copyright &copy; 2018 New Reader Magazine, All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-1"><div class="vl"></div></div>
                <div class="col-md-3 contacts">
                    <h6> CONTACT US </h6>
                    <p> www.newreadmagazine.com <br>
                        8th Flr 100 Church Street<br>
                        Manhattan, New York 10007<br>
                        USA<br>
                        contact@newreadmagazine.com
                        1-800-734-7871
                    </p>
    
                </div>
               
            </div>
            <div class="clearfix"></div>
        </footer>

<script src="{{asset('js/app.js')}}"></script>


</body>
</html>