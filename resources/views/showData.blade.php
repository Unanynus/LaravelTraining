<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
        @csrf
    <table>
        <tr>
            <th><strong>Name</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>password</strong></th>

        </tr>
        @foreach($users as $use)
        <tr>
            <td>{{$use->name}}</td>
            <td>{{$use->email}}</td>
            <td>{{$use->password}}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>