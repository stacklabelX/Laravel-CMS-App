<!doctype Html>

<Html lang="en">

<head>

<meta charset="UTF-8">

<title>@yield('title')</title>

<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">


 
 
<!-- flag icon set -->
<link rel="stylesheet" href="{{ URL::asset('bootstrap.min.css') }}">
 
 
</head>


<body class=" sidebar_hidden side_fixed">

	<div id="wrapper_all">
	<section id="breadcrumbs">

	  <div class="container">
	    <ul>
	      <li><a href="index.php">ANZAPP Admin</a></li>
	      <li><span>@yield('title')</span></li>
	    </ul>
	  </div>
	</section>		


 <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        &copy; 2013 Your Company
                    </div>
                    <div class="col-sm-8">
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Terms of Service</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Contact us</a></li>
                        </ul>

                    </div>
                    <div class="col-sm-1 text-right">
                        <small class="text-muted">v1.2</small>
                    </div>
                </div>
            </div>
        </footer>

        	
	</div>
</body>






  
 


 

