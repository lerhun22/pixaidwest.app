<!DOCTYPE html>
<meta lang='fr'>
<meta charset ='utf-8'>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pix Aid Ouest</title>

	<!-- Fonts -->
	<link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

	<div class="modal-header">
		<h1>@yield('top')</h1>
	</div>
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

	<div class="panel-footer">
		<h6>@yield('bottom')</h6>
	</div>

	<script src="{{ mix('js/app.js') }}"></script>
	@yield('scripts')	
</body>
</html>