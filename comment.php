<?php
$page="comment.php";
include_once ('layout/header.php');
?>

		<!-- Page -->
        
        	<div id="page">
            	<div class="container">
                	<div class="commentsection">
                    <!-- Comment section --><h2 class="main-title">Postavite komentare</h2><br>
					
					<form action="php/postcomment.php">
					<p>Unesi ime: <br>
                        <label>
                            <input  type="text" placeholder="Ime">
                        </label>
                    </p>

					<p>Dodaj komentar: <br>
                        <label for="comment">
                            <textarea name="comment" id="comment" placeholder="Komentariši"></textarea>
                        </label>
                    </p>
					<input type="button" value="submit">
					</form>
                    	
                    </div>
                </div>
            </div>
            
		<!-- /Page -->

<?php include_once ('layout/footer.php');?>



	</body>
</html>