<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container card">
	<form method="POST" action="products_added.php">
	  <div class="form-group">
	    <label for="productname">product name</label>
	    <input type="text" class="form-control" id="name" placeholder= "product name" name="name">
	   
	  </div>
	  <div class="form-group">
	    <label for="someproducts">description</label>
	    <input type="text" class="form-control" id="description" placeholder="description" name="description">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">add product</button>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>