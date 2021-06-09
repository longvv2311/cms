<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{route('user.update',$user->id)}}" method="post">
    @csrf
    @method('Put')
    <input type="text"name="email" placeholder="email" value="{{$user->email}}">
    <input type="text"name="name" placeholder="name" value="{{$user->name}}">
    <select name="role_id" id="">
      @foreach ($roles as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
  </select>
    <input type="submit" value="update">
  </form>
  @if (session()->has('success'))
      <p style="color:green">{{session()->get('success')}}</p>
  @endif
</body>
</html>