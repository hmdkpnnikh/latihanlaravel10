<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*
{
   
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

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

<h2>Data Pegawai</h2>

<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>No Telpon</th>
  </tr>
    @php
        $no=1;
    @endphp
    @foreach ($data as $row )
    <tr>
        <td>{{ $no++}}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->jeniskelamin }}</td>
        <td>0{{ $row->notelpon }}</td>
    </tr>
    @endforeach
 
 
</table>

</body>
</html>

