<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>Images</th>
            </tr>
            @foreach ($pics as $pic )
                <tr>
                    <td>
                        <img src="{{ asset('/storage/picturs/'.$pic->image)}}" class="" alt="{{ $pic->image }}" height="100%" width="100%">

                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>