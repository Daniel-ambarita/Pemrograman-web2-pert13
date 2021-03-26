<!DOCTYPE html>
<html>
<head>
	<title>Form Artikel</title>
	
</head>
<body>
	<div id="container">
	<h1>Form Berita</h1>
		
		<form action="proses.php" method="post">
			<p>
				<b>Judul :</b><br>
				<input type="text" name="title"/>
			</p>
			<p>
				<b>Penulis :</b><br>
				<input type="text" name="author"/>
			</p>
			<p>
				<b>Lead :</b><br>
				<textarea name="abstraksi" rows="4" cols="30"></textarea>
			</p>
			<p>
				<b>Content :</b><br>
				<textarea name="konten" rows="8" cols="45"></textarea>
			</p>
			
			<p>
				<input type="submit" name="submit" value="Add" class="tombol"/> 
			   	<input type="reset" name="batal" value="Reset" class="tombol"/>
			</p>
		</form>
	</div>
</body>
</html>