<html>
<head>
</head>


<body onload="foo()" >

  <h1> DONE DONE DONE </h1>

  <form action=" {{ url('/transfer') }} " id="search-theme-formthree" method="POST" >
   {{csrf_field()}}


 <button type="submit" class="btn btn-success">Buy Now</button>
 </form>

</body>
</html>
