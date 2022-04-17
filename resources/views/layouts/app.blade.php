<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>@yield('title') - MS </title>

    @livewireStyles
</head>

<body>

    @yield('content')

    @livewireScripts
</body>

</html>