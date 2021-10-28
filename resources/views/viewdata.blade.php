<!DOCTYPE html>
<html>
  <head>
    <title>View</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<style>
body {
    font-family: 'Karla';
    font-size: 14px;
    color: #787D80;
    letter-spacing: .2px;
    background:darkgrey;
}

.container {
    width: 950px;
    margin: auto;
}

table {
    width: 100%;
}

th, td {
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
    color: black;
    font-weight: bold;
}

th {
    text-align: left;
    background-color: #F2F2F2;
    color: black;
}

tr:nth-child(odd) {
    background: #F9F9F9;
    border-top: 1px solid transparent;
    border-left: 1px solid transparent;
}

tr:nth-child(even) {
    background: #FFF;
    border-top: 1px solid transparent;
    border-left: 1px solid transparent;
}

tr:hover {
    background-color: #EBF5FB;
    cursor: default;
    border: 1px solid #67B2E4;
}


        </style>
  </head>
  <body>
    <div class="container">
    <table border = "1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Phone</td>
<td>Email</td>
<td>Password</td>
<td>Edit/Delete</td>
</tr>
@foreach($viewdata as $data)
    <tr> 
      <th>{{$data->id}}</th>   
      <th>{{$data->name}}</th>
      <th>{{$data->phone}}</th>
      <th>{{$data->email}}</th>
      <th>{{$data->password}}</th>
      <th>
      <a href = 'edit/{{ $data->id }}'>Edit</a>
      <a href = 'delete/{{ $data->id }}'>Delete</a>
      </th>
    </tr>

       @endforeach
</table>
</div>
</body>
</html>
