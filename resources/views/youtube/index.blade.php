<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($items as $item)

        <a href="{{route('youtube.item', ['video' => $item->id])}}">
        </a>
        <p>{{ $item->description }}</p>
        <span>{{ $item->author }}</span>
        <a href="$item->link">$item->title</a>.
    @endforeach
</body>
</html>