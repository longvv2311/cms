
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store-user')}}" method="post">
        @csrf
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">

        <select name="role_id" id="">
            @foreach ($roles as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="create">
    </form>
</body>
</html>