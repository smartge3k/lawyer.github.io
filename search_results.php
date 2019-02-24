<!DOCTYPE html>
<html lang="en">
	<?php 
		require_once('includes/connection.php');
		require_once('includes/head.php');
	?>
<body>
	<?php  require_once('includes/header.php'); ?>

    <div class="container-fluid bg-4 text-center">    <br>
        <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
            <h3 style="text-align:center;">Search Results</h3><br>
            <div class="row">            
                <?php
                	if(isset($_POST['search_submit']) && $_POST['search_submit'] == 'Yes'){
						//echo "<pre>"; print_r($_POST); echo "</pre>";
						if(isset($_POST['header_search']) && $_POST['header_search'] == 'Yes'){
							$search_query = "SELECT * FROM lawyers_signup l 
								INNER JOIN lawyers_proficiencies lp
								ON lp.lawyer_id = l.lawyer_id
								WHERE lp.lawyer_proficiency LIKE '%".$_POST['header_search_str']."%' OR (l.city LIKE '%".$_POST['header_search_str']."%' OR l.province LIKE '%".$_POST['header_search_str']."%')
							";
						}
						else{
							$search_query = "SELECT * FROM lawyers_signup l 
								INNER JOIN lawyers_proficiencies lp
								ON lp.lawyer_id = l.lawyer_id
								WHERE lp.lawyer_proficiency LIKE '%".$_POST['category']."%'	AND (l.city LIKE '%".$_POST['city_province']."%' OR l.province LIKE '%".$_POST['city_province']."%')
							";
						}
						//echo $search_query;
						$errors = array(); 
						$results = mysqli_query($db, $search_query) or die(mysqli_error($db));
						if(mysqli_num_rows($results) > 0){
							foreach($results as $result){ ?>
								<div class="col-sm-4"> 
                                    <p><?php echo $result['lawyer_proficiency']; ?></p>
                                    <div class="card">
                                        <img src="b.jpg" alt="Lawyer Photo" style="width:100%">
                                        <h1><?php echo $result['lawyer_firstname']." ".$result['lawyers_lastname']; ?></h1>
                                        <p class="title"><?php echo $result['city'].", ".$result['province']; ?></p>
                                        <p><?php echo $result['lawyers_llm'] != ""?$result['lawyers_llm']:$result['lawyers_llb']; ?></p>
                                        <div>
                                            <!--<div>
                                                <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                                                <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                                                <a class="social" href="#"><i class="fa fa-linkedin"></i></a>  
                                            </div>-->
                                            <p><button class="contactbtn">Contact</button></p>
                                        </div>
                                    </div>
                                </div>
							<?php }
						}
						else{
							echo "No Results Found";
						}
					}
				?>
                
            </div>
        </div>
    </div>

    <?php  require_once('includes/footer.php'); 
    		require_once('includes/head.php');
    ?>

</body>
</html>
