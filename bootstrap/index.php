<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Frontend</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="glyphicon glyphicon-user"></i> Akun <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Pengaturan Akun</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="glyphicon glyphicon-logout"></i> Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div class="container">

     <!-- Main component for a primary marketing message or call to action -->
     <div class="jumbotron">
       <h1>Navbar example</h1>
       <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
       <p>To see the difference between static and fixed top navbars, just scroll.</p>
       <p>
         <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
       </p>
     </div>

<h1>Facilities</h1>
     <div class="row">
       <?php for ($i=0; $i < 6; $i++) { ?>
       <div class="col-md-4">
         <!-- thumbnail -->
        <div class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjgwIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDI4MCAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxYWEzYTAxMjEgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTFhYTNhMDEyMSI+PHJlY3Qgd2lkdGg9IjI4MCIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMDMuNjc5Njg3NSIgeT0iOTYuMyI+MjgweDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>lorem ipsum dolor amit sid</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
         <!-- end thumbnail -->
       </div>
         <?php } ?>    
     </div>


     <footer>
       <hr>
       &copy; 2015. GarengStudio
     </footer>
   </div> <!-- /container -->
   <script  src="dist/js/jquery.min.js">  </script>
   <script  src="dist/js/bootstrap.min.js">   </script>

  </body>
</html>
