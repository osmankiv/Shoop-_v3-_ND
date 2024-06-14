<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta lang="EN">
       
        <link rel="stylesheet" type="text/css" href="../css/styel.css">

        <script type="text/javascript" src="../js/javascript.js"></script>
        <link rel="icon" type="icon" href="../server/self-control.png">
        <title>osman-shoop</title>
    </head>

    <body>
        <header>

            <?php 
			
			session_start();
			//--------contion ------------
						 include 'conationDB.php';				
			///
         
			$id='';
			 
			if( isset($_SESSION['username']))
			{
				// profile
				echo '
					<div>
						<em>welcome '. $_SESSION['username'].'</em><br>
					</div>
				';
				$userName=$_SESSION['username'];
				$data_GET =$database->prepare("SELECT * FROM `user` WHERE `user_name` = '$userName' ");
				$data_GET ->execute();
				foreach($data_GET as $userId){
					$id = $userId['id'];
				}



			
				 //add user location dlevaring
			
			}

			?>

            <div id="add_messeg">
                <div class="outside outside-warning">
                    <div class="inside inside-warning">
                        <div id="head">&#129288; thanks : </div>
                        we add add item in tha card
                    </div>
                </div>
            </div>


            <img src="../server/balance.png"> <!--tha main icon of main page -->


            <a href="#" tabindex="0" class="delvre">
                <span>

                    <img src="../server/location.png">
                    deilvr to
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                            name="userLoction">
                            <option selected class="option" type="submit" >natchnal</option>
                            <option value="sudan" class="option"    onclick="uplode_tha_user_loction('.$id.')">sudan</option>
                            <option value="egpt" class="option"  onclick="uplode_tha_user_loction('.$id.')">egpt</option>
                            <option value="sudu arbia" class="option" onclick="uplode_tha_user_loction('.$id.')">sudu arbia</option>
                        </select>

                    </div>

                    <!-- uplode tha yser loction-->
                </span>
            </a>
            <!-- tha search-->
            <div class="search-box">
                <input type="search" name="search" class="search-box" placeholder="Enter name" id="search_box" onkeyup="fetch_data(this.value)">
                <button onclick="fetch_data(this.value)" name="search_submit" type="submit" id="but_fetch_data">
                    <img src="../server/search.png"></button>
               
                             <div class=" disply_search_resalt_select" id="disply_search_resalt_select" aria-label="Floating label select example"
                            name="disply_search_select">

               

            </div>  
                </div>
                     
         
           
            <!-- tha add_cart-->
            <div class="add_cart">
                <span class="space"></span>
                <select class="form_floating" valul="0" aria-label="Floating label select example" id="heading1">
                    
                     <option selected class="total" disabled></option>
                </select>
                

                <img src="../server/shopping-cart (2).png">
                <span>
                    <input type="number" name="cart-num" class="cart_num" value="0" disabled id="cart_num">
                </span>
            </div>
        </header>
       
		<?php


    		/////////////////////////////===============///////////
    		 include 'conationDB.php';                  // ====///
    		//////////////////////////////==============/////////
			if(isset($_GET['id']))
			{ $id=$_GET['id'];}
			$part=$_GET['part'];
		

    		$stmt =$database->prepare("SELECT * FROM `food` ");
			$stmt1 =$database->prepare("SELECT *FROM `items` ");
			$stmt2 =$database->prepare("SELECT *FROM `smart` ");
			$stmt00 =$database->prepare("SELECT* FROM `food` ");
			$stmt11 =$database->prepare("SELECT* FROM `items` ");
			$stmt22 =$database->prepare("SELECT* FROM `smart` ");


				$stmt->execute();
				$stmt1->execute();
				$stmt2->execute();
				$stmt00->execute();
				$stmt11->execute();
				$stmt22->execute();
		if($part =='food'){
    		foreach($stmt as $data)
    		{

    		
    			if($data['id'] == $id  )
    			{
    				//Display the items in the card syel
    				echo'
    				<div class="main_reviw">
						<div class="rating">
						   <input value="5" name="rate" id="star5" type="radio">
						   <label title="text" for="star5"></label>
						   <input value="4" name="rate" id="star4" type="radio">
						   <label title="text" for="star4"></label>
						   <input value="3" name="rate" id="star3" type="radio" checked="">
						   <label title="text" for="star3"></label>
						   <input value="2" name="rate" id="star2" type="radio">
						   <label title="text" for="star2"></label>
						   <input value="1" name="rate" id="star1" type="radio">
						   <label title="text" for="star1"></label>
						</div>
							
    					
    						
    					
    						<div class="heading_reviw" id="item_name_'.$part.''.$data['id'].'">'.$data['heading'].'</div>
    						<div class="details_reviw">'.$data['details'].'</div>
							<br>
							<div class="details_reviw">'.$data['long_details'].'</div>
							<img class="glasses_reviw" id="image0" width="100" height="100" src="../'.$data['image0'].'">
    						<div class="price_reviw" id="item_sell'.$data['id'].'">'.'$'.$data['price'].'</div>
    						
    					</div>
    					
    				</div>
				
    		        <hr>';
    			}
			}
			foreach($stmt00 as $data)
    		{
				if($data['id'] != $id  )
    			{
    		
    			
    				//Display the items in the card syel
    				echo'
    				<div class="main">
    					<div class="card" id ="'.$data['id'].'" >	
    						<div class="heading" id="item_name_'.$part.''.$data['id'].'">'.$data['heading'].'</div>
    						<div class="details">'.$data['details'].'</div>
    						<div class="price" id="item_sell'.$data['id'].'">'.'$'.$data['price'].'</div>
    						<button class="btn1"onclick= buy("'.$data['id'].'","'.$part.'")>Buy</button>
    						<button class="btn2" onclick="add_cart('.$data['id'].')">Add to Cart</button>
    					</div>
    					<svg class="glasses" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px"
    							viewBox="0 0 100 100" xml:space="preserve">
    							<image id="image0" width="100" height="100" x="0" y="0" href="../'.$data['image0'].'"></image>
    					</svg>
    				</div>
				
    		        ';
				}
    			
			}
		}	
		if($part =='items')
		{	
			foreach($stmt1 as $data1)
			{
			
				
    			
    			
    				if($data1['id'] == $id  )
    				{
					
    					//Display the items in the card syel
    					echo'
    					<div class="main_reviw">
						<div class="rating">
						   <input value="5" name="rate" id="star5" type="radio">
						   <label title="text" for="star5"></label>
						   <input value="4" name="rate" id="star4" type="radio">
						   <label title="text" for="star4"></label>
						   <input value="3" name="rate" id="star3" type="radio" checked="">
						   <label title="text" for="star3"></label>
						   <input value="2" name="rate" id="star2" type="radio">
						   <label title="text" for="star2"></label>
						   <input value="1" name="rate" id="star1" type="radio">
						   <label title="text" for="star1"></label>
						</div>
							
    					
    						
    					
    						<div class="heading_reviw" id="item_name_'.$part.''.$data1['id'].'">'.$data1['heading'].'</div>
    						<div class="details_reviw">'.$data1['details'].'</div>
							<br>
							<div class="details_reviw">'.$data1['long_details'].'</div>
							<img class="glasses_reviw" id="image0" width="100" height="100" src="../'.$data1['image0'].'">
    						<div class="price_reviw" id="item_sell'.$data1['id'].'">'.'$'.$data1['price'].'</div>
    						
    					</div>
    					
    				</div>
				
    		        <hr>';
    				}
					
			}
			foreach($stmt11 as $data1)
			{
				if($data1['id'] != $id  )
    				{
			
				
    			
    			
					
    					//Display the items in the card syel
    					echo'
    					<div class="main">
    						<div class="card" id ="'.$data1['id'].'" >	
    							<div class="heading" id="item_name_'.$part.''.$data1['id'].'">'.$data1['heading'].'</div>
    							<div class="details">'.$data1['details'].'</div>
    							<div class="price" id="item_sell'.$data1['id'].'">'.'$'.$data1['price'].'</div>
    							<button class="btn1"onclick= buy("'.$data1['id'].'","'.$part.'")>Buy</button>
    							<button class="btn2" onclick="add_cart('.$data1['id'].')">Add to Cart</button>
    						</div>
    						<svg class="glasses" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px"
    								viewBox="0 0 100 100" xml:space="preserve">
    								<image id="image0" width="100" height="100" x="0" y="0" href="../'.$data1['image0'].'"></image>
    						</svg>
    					</div>
					
    			       ';
					}
					
			}				
		}
		if($part =='smart')
		{

			foreach($stmt2 as $data2)
			{
			
    				if($data2['id'] == $id  )
    				{
					
    					//Display the items in the card syel
    					echo'
    					<div class="main_reviw">
						<div class="rating">
						   <input value="5" name="rate" id="star5" type="radio">
						   <label title="text" for="star5"></label>
						   <input value="4" name="rate" id="star4" type="radio">
						   <label title="text" for="star4"></label>
						   <input value="3" name="rate" id="star3" type="radio" checked="">
						   <label title="text" for="star3"></label>
						   <input value="2" name="rate" id="star2" type="radio">
						   <label title="text" for="star2"></label>
						   <input value="1" name="rate" id="star1" type="radio">
						   <label title="text" for="star1"></label>
						</div>
							
    					
    						
    					
    						<div class="heading_reviw" id="item_name_'.$part.''.$data2['id'].'">'.$data2['heading'].'</div>
    						<div class="details_reviw">'.$data2['details'].'</div>
							<br>
							<div class="details_reviw">'.$data['long_details'].'</div>
							<img class="glasses_reviw" id="image0" width="100" height="100" src="../'.$data2['image0'].'">
    						<div class="price_reviw" id="item_sell'.$data2['id'].'">'.'$'.$data2['price'].'</div>
    						
    					</div>
    					
    				</div>
				
    		        <hr>';
    				}
				
    				
				
			}
			foreach($stmt22 as $data2)
			{
			if($data2['id'] != $id  )
    				{
    				
					
    					//Display the items in the card syel
    					echo'
    					<div class="main">
    						<div class="card" id ="'.$data2['id'].'" >	
    							<div class="heading" id="item_name_'.$part.''.$data2['id'].'">'.$data2['heading'].'</div>
    							<div class="details">'.$data2['details'].'</div>
    							<div class="price" id="item_sell'.$data2['id'].'">'.'$'.$data2['price'].'</div>
    							<button class="btn1"onclick= buy("'.$data2['id'].'","'.$part.'")>Buy</button>
    							<button class="btn2" onclick="add_cart('.$data2['id'].')">Add to Cart</button>
    						</div>
    						<svg class="glasses" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px"
    								viewBox="0 0 100 100" xml:space="preserve">
    								<image id="image0" width="100" height="100" x="0" y="0" href="../'.$data2['image0'].'"></image>
    						</svg>
    					</div>
					
					      ';
					}
    				
				
    				
				
			}


		}
        ?>
		 </div>
                    </div>
                </article>
            </section>

        </main>
        <footer>
            <div class="accwinicon">
                <section>
                    <ul>
                        <li class="coler"><a href=""><img
                                    src="../server/5296500_fb_social media_facebook_facebook logo_social network_icon.png"></a>
                        </li>
                        <li class="coler"><a href=""><img
                                    src="../server/5296765_camera_instagram_instagram logo_icon.png"></a></li>
                        <li class="coler"><a href=""><img
                                    src="../server/5296501_linkedin_network_linkedin logo_icon.png"></a></li>
                        <li class="coler"><a href=""><img
                                    src="../server/5296514_bird_tweet_twitter_twitter logo_icon.png"></a></li>
                        <li class="coler"><a href=""><img
                                    src="../server/291716_github_logo_social network_social_icon.png"></a></li>
                        <li class="coler"><a href=""><img src="../server/5279113_blog_medium_medium logo_icon.png"></a></li>
                    </ul>
                </section>

            </div>
            <span id="copy_riten"></span>
        </footer>
        <!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/jQuery.js"></script> -->
    </body>
</html>
