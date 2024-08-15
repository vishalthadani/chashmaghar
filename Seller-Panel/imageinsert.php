	<?php
		require './class/dbclass.php';
	?>
	<!DOCTYPE html>

			
		<head>
		</head>
		<body>
			<form method="POST" enctype="multipart/form-data">
<!--			<label>Place Name : </label><br/>
			<input type="text" name="pname" placeholder="Enter place name"><br/>
			
			<label> Place Description: </label><br/>
			<textarea name="pdes" rows="4"> Enter place description </textarea><br/>-->

			<label> Place Image </label><br/>
			<input type="file" id="photo-img" accept="image/png,image/jpg,image/jpeg" name="image"><br/>
			

			<button type="submit" name="formsubmit">UPLOAD IMAGE</button>
			</form>
		

		<?php
			if(!isset($_POST['formsubmit'])){
                        }
                        else{
					$filename = addslashes($_FILES['image']['name']);
					$tmpname = addslashes($_FILES['image']['tmp_name']);

					date_default_timezone_set("Asia/calcutta");
					$currentdt = (string)(date("YmdHis"));
					$extension = pathinfo($filename,PATHINFO_EXTENSION);
					$image_path = './product_image/'.$currentdt.".".$extension;
					
					if($filename){
						move_uploaded_file($_FILES['image']['tmp_name'],"./product_images/$image_path");
					}

					$res = mysqli_query($conn,"insert into product_tbl(product_id, product_img1) values ('7','{$image_path}')") or die(mysqli_error($conn));

					if($res){
						echo "Image inserted successfully";
					}
					else{
						echo "Something went wrong";
					}
										
			}
		?>

		</body>
	</html>