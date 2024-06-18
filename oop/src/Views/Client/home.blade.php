<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Đây là trang chủ</h1>

    {{-- <ul>
        <li>HTML : {!! $HTML !!}</li>
    </ul>

    <ul>
        @foreach ($arr as $item)
        <li>index:{{$loop->index}} - Name: {{$item['name']}} - Price: {{ number_format($item['price'])}}</li>
        @endforeach
    </ul> --}}

    @if (!empty($_SESSION['errors']))
        <ul>
            @foreach ($_SESSION['errors'] as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>

        @php
            unset($_SESSION['errors']);
        @endphp
    @endif

    @if (!empty($_SESSION['success']))
        
    <h1>{{$_SESSION['success']}}</h1>

    @php
        unset($_SESSION['success']);
    @endphp
@endif


    <form action="" method="POST">
        Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
        <button type="submit">Submit</button>
    </form>


</body>

</html>
