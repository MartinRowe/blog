<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Posts</title>
   <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" /> -->
        <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>
<body>
    
<div class=grid><!--
    
--><!--
    
 --><!--

--><div class="grid__item  six-twelfths">
        <p>One Twelfth</p>
         <p class=demo-block-grey-white>The comments on the right hand side of the screen show design principles.</p>
  </p>
    </div><!--

--><!--
    
--><div class="grid__item  five-twelfths">
        <p>eleven Twelfth</p>
        <div class="marginalia">
        <p class="marginalia  desk-one-fifth">This page is an example of grid based sparse design.</p>
      </div>
        
    </div><!--

    --><!--
    
--><div class="grid__item  one-twelfth">
        <p>eleven Twelfth</p>
        <div class="marginalia">
        <p class="marginalia  desk-one-fifth">This page is an example of grid based sparse design.</p>
      </div>
        
    </div><!--


--></div>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('PostsController@index') }}" class="navbar-brand">Blog Posts Collection</a>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
