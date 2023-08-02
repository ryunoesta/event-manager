<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ダッシュボード</title>
</head>
<body>
    
    @if ($events->isNotEmpty())
        <ul>
            @foreach ($events as $event)
                <li>
                    {{ $event->title }}
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>