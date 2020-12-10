<!DOCTYPE html>
<html>
   <head>
       <title> @yield('title', 'Laravel pagina') </title>
   </head>
   <body>

       @yield('content')

       <ul>
           <li><a href="/">Home</a></li>
           <li><a href="/overons">Over ons</a></li>
           <li><a href="/contact">Contact</a></li>
       </ul>
   </body>
</html>