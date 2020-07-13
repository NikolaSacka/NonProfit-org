<?php
session_start();
$page="comment.php";
include_once ('layout/header.php');
?>

		<!-- Page -->
        
        	<div id="page">
            	<div class="container">
                    <header>
                    <h4>Komentari</h4>
                    </header>

                    <div class="comment-section">

                    <?php 
                    require_once 'php/comment-list.php';

                    $row = $sql;
                    
                    foreach ($row as $rows){
                    
                        echo "<li>"; $rows['name']; "<br>";
                                   $rows['comment'];"</li>";
                    
                    }
                    var_dump($rows);
                    
                    ?>
                   
                    </div>

                    <hr>

                    <div class="comment-form-container">
                        <form id="frm-comment" action="php/comment-add.php">
                            <label> <h2> Pišite nam </h2> </label>
                            <div class="input-row">


                                <label for="name">
                                    <input class="input-field" type="text" name="name" id="name" placeholder="Vaše ime" />
                                </label>
                                    </div>

                            <?php if(isset( $_SESSION['nameErr'])): ?>

                                <?php
                                unset($_SESSION['nameErr']);
                                ?>
                            <?php endif; ?>

                            <div class="input-row">
                                <label for="comment">
                                    <textarea class="input-field" type="text" name="comment" id="comment" placeholder="Dodaj komentar" style="width: 100%;"></textarea>
                                </label>
                            </div>


                            <?php if(isset( $_SESSION['commErr'])): ?>

                                <?php
                                unset($_SESSION['commErr']);
                                ?>
                            <?php endif; ?>

                            <div>
                                <input type="submit" class="publish publish-style1 btn-publish " id="submitButton"
                                       value="Objavi komentar" /><br>
                            </div>
<!--                            <span id="comment-message">Komentar ste uspešno dodali! </span>-->

                        </form>
                    </div>

                </div>
            </div>
            
		<!-- /Page -->

<?php include_once ('layout/footer.php');?>



	</body>
</html>