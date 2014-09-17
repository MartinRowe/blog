<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All the Postss</title>
   <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" /> -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<br />
<br />
<br />

<div class=grid><!--
    
--><!--
    
 --><!--

--><div class="grid__item  six-twelfths">
      <!--   <p class=demo-block-red-white>Six Twelfths</p> -->
      <div class=demo-block-gray-white> 
        <a href="{{ action('PostsController@index') }}" >The Blog Posts</a>
      </div>
      @yield('content')
    </div><!--

--><!--
    
--><div class="grid__item  five-twelfths">
<!--        <p class=demo-block-red-white>Five Twelfths</p> -->
    </div><!--

    --><!--
    
--><div class="grid__item  one-twelfth">
    <!--    <p class=demo-block-red-white>One Twelfth</p> -->
        <div class="marginalia">
          <p class="marginalia  desk-one-fifth">Marginalia</p>
        </div>
        
    </div><!--
--></div>
    
</body>
</html>
