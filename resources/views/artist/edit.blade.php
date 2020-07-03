@extends('layouts.app')
@section('content')

<style>
     body {
                background-color: #282828;
                color: #000200;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

     table th {
            	background-color: #4f4f4f;
                color: #fff;
                border: 6px solid #353535;
				padding: 10px;
            }

     table td {

     			background-color: #4f4f4f;
                color: #fff;
                border: 6px solid #353535;
				padding: 10px;
     }
</style>
<div class="container">
<h2 style="color: #fff;">EDIT ARTIST DATA</h2>
<form method="post" action="{{ url('/artist/'.$row->artist_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>ARTIST NAME</th>
			<td><input type="text" name="artist_name" value="{{ $row->artist_name }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection