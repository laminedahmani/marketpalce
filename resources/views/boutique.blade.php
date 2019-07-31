<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>liste boutique</title>
</head>
<body>
	
<ul>
	@foreach($bouti as $bouti)
	<li>{{ $bouti->nom }}</li>
	<li>{{ $bouti->prenom }}</li>
	<li>{{ $bouti->password }}</li>
	@endforeach
</ul>


</body>
</html>