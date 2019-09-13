<?php
 	require 'unset.php';
 	require 'req.php'
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Image</title>
	<link rel="stylesheet" href="">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
​
<div class="record">
	
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="photo"/>
		<br/>
		<input type="submit" name="btn" value="Submit"/>
	</form>
​
​
	<?php
		$query = "SELECT * FROM upload ORDER BY id DESC";
​
		$result = mysqli_query($link, $query);
​
		if(mysqli_num_rows($result) > 0){
        
	        while($row = mysqli_fetch_array($result))
	        { 
	        	echo "<div class=''>";
	        	
	        		echo "<a href='#' class='delete' data-id='".$row['id']."'>Delete</a>";
​
		        	echo "<img src='image/".$row['image']."' class='delete' data-id='".$row['id']."' height='200' width='200'> </br>";
	        	
	        	echo "</div>";
	    		
	    	}
​
    	}
​
	?>
​
</div>
​
<script type="text/javascript">	
	$('.delete').click(function(e){
		
		e.preventDefault();
​
		var id = $(this).data("id");
​
		$('.delete[data-id=' + id + ']').addClass('remove');
​
		// return;
		
		  $.ajax({
            url: "delete.php/"+id,
            type: "POST",
            data: {
                "id": id,
            },
            success: function(response)
            {
                var jsonData = JSON.parse(response);
 
                if (jsonData.success == "1")
                {	 
                	$('.remove').remove();
                }
                else
                {
                    alert('There was a problem while deleting!');
                }
           }
       });
	})
</script>	

	
</body>
</html>