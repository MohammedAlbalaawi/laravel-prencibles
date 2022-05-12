<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>All Posts</h2>

<table>
  <tr>
    <th>Title</th>
    <th>Authar</th>
    <th>Created at</th>
  </tr>

  @foreach($posts as $post)
  <tr>
    <td>{{$post['title']}}</td>
    <td>{{$post['authar']}}</td>
    <td>{{$post['date']}}</td>
  </tr>
  @endforeach
 
</table>

</body>
</html>