
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>


	<link rel="stylesheet" type="text/css" href="Add.css">
	<title></title>
</head>
<body>

		<div class="add">
			<h2 style="margin-left: 50px;">Add a place</h2>
			<form method="POST" action="insert.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					Spot name:
				</td>
				<td>
					<input type="text" name="spotname" placeholder="Enter spot name"/>
				</td>
			</tr>
			
			<tr>
				<td>
					Location:
				</td>
				<td>
					<input type="text" name="location" placeholder="Enter location please"/>
				</td>
			</tr>
			
			<tr>
				<td>
					Image:
				</td>
				  <td>
                <div align="left">
                    <input style="" name="image" type="file" size="50"/>
                </div></td>
			</tr>
			<tr>
				<td >
					Description:
				</td>
				<td>
					<textarea name="descr"> </textarea>
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<button name="submit">SUBMIT</button>
				</td>
			</tr>
		</table>
	</form>
</div> 

</body>
</html>



