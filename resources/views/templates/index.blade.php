
<!DOCTYPE html>
<html>
<head>
    <title>Боковая панель</title>

    <base href="{{ url('/templates') }}">
   <link rel="stylesheet" href="slyles.css">
</head>
<body>


<div class="sidebar">

    <a href="{{ route('content1') }}" class="template-button">Шаблон 1</a>
    <a href="{{ route('content2') }}" class="template-button">Шаблон 2</a>

</div>


<div class="content-container">

</div>
</body>
</html>
