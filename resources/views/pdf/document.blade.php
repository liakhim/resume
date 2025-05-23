<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h1 { color: #444; }
    </style>
</head>
<body>
<h1>{{ $title }}</h1>
<p>{{ $content }}</p>
<p>Сгенерировано: {{ date('d.m.Y H:i') }}</p>
</body>
</html>
