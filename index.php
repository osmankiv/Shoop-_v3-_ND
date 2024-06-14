<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta lang="EN">
        <link rel="stylesheet" type="text/css" href="css/styel.css">

        <script type="text/javascript" src="js/javascript.js"></script>
        <link rel="icon" type="icon" href="server/self-control.png">
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


            <img src="server/balance.png"> <!--tha main icon of main page -->


            <a href="#" tabindex="0" class="delvre">
                <span>

                    <img src="server/location.png">
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
                <img src="server/search.png"></button>
                <div class=" disply_search_resalt_select" id="disply_search_resalt_select" aria-label="Floating label select example" name="disply_search_select">
            </div>  
                </div>
                     
         
           
            <!-- tha add_cart-->
            <div class="add_cart">
                <span class="space"></span>
                <select class="form_floating" valul="0" aria-label="Floating label select example" id="heading1">
                    
                     <option selected class="total" disabled></option>
                </select>
                

                <img src="server/shopping-cart (2).png">
                <span>
                    <input type="number" name="cart-num" class="cart_num" value="0" disabled id="cart_num">
                </span>
            </div>
        </header>
        <nav>
            <ul class="headinglist">
                <Li class="hlinks"><img src="server/options.png"> <a href="#" class="hlinks">ALL</a> </Li>
                <Li class="hlinks"><img src="server/bottling.png"><a href="index.php" class="hlinks">Home</a> </Li>
                <Li class="hlinks"><img src="server/tech-support.png"><a href="php/f.php?part=smart" class="hlinks">Smart</a> </Li>
                <Li class="hlinks"><img src="server/coffee-cup.png"><a href="php/f.php?part=books" class="hlinks">books</a> </Li>
                <Li class="hlinks"><img src="server/night-cream.png"><a href="php/f.php?part=food" class="hlinks">Food</a> </Li>
                <Li class="hlinks"><img src="server/5279113_blog_medium_medium logo_icon.png"><a href="logInForm.php"
                        class="hlinks">log in</a> 
                </Li>
        
                <?php
                    if( isset($_SESSION['username']) && $_SESSION['username'] == 'admin')
			{
                       echo' <Li class="hlinks control">
                                <img src="server/24-hours.png"> 
                                <a href="control-panel.php"class="hlinks">
                                    Control-panel
                                </a> 
                            </Li>';
            }
                ?>        
            </ul>

        </nav>
        <main>
            <div class="contanaerbg"></div>
            <section>
                <article>
                    <div class="items">
                        <div class="sub_items_contner">
                            <div id="dataContent"></div>
                               <?php
    								//GET DATA
            
            
            
    								//diapy items 
            
            
     								$stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `smart` ");
            
    								$stmt->execute();
    								foreach($stmt as $data)
    								{
    									if($data['id'] !=0)
    									{
    										//Display the items in the card syel
    										echo'
    										<div class="main">
    											<div class="card" id ="'.$data['id'].'" >	
    												<div class="heading" id="item_name_smart'.$data['id'].'">'.$data['heading'].'</div>
    												<div class="details">'.$data['details'].'</div>
    												<div class="price" id="item_sell_smart'.$data['id'].'">'.$data['price'].'</div>
    												<button class="btn1"onclick= buy('.$data['id'].',"smart")>Buy</button>
    												<button class="btn2" onclick=add_cart('.$data['id'].',"smart")>Add to Cart</button>
    											</div>
    											<svg class="glasses" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px"
    													viewBox="0 0 100 100" ">
    													<image id="image0" width="100" height="100" x="0" y="0" href="'.$data['image0'].'"></	image>
    											</svg>
    										</div>';
    									}
    								}						
    							?>
                           </div>
                       </div>
                                
                   </article>
                   <article>
                       <div class="items">
                           <div class="sub_items_contner">
                                
                               <?php

                                
                                
    								//GET DATA
                                
                                
    								//diapy items 
                                
                                
     								$stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `food` ");
                                
    								$stmt->execute();
    								foreach($stmt as $data)
    								{
    									if($data['id'] !=0)
    									{
    										//Display the items in the card syel
    										echo'
    										<div class="main">
    											<div class="card" id ="'.$data['id'].'" >	
    												<div class="heading" id="item_name_food'.$data['id'].'">'.$data['heading'].'</div>
    												<div class="details">'.$data['details'].'</div>
    												<div class="price" id="item_sell_food'.$data['id'].'">'.''.$data['price'].'</div>
    												<button class="btn1"onclick= buy("'.$data['id'].'","food")>Buy</button>
    												<button class="btn2" onclick=add_cart('.$data['id'].',"food")>Add to Cart</button>
    											</div>
    											<svg class="glasses" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px"
    													viewBox="0 0 100 100" xml:space="preserve">
    													<image id="image0" width="100" height="100" x="0" y="0" href="'.$data['image0'].'"></	image>
    											</svg>
    										</div>';
    									}
    								}						
    							?>
                           </div>
                       </div>
                   </article>
                   <article>
                       <div class="items">
                           <div class="sub_items_contner">
                                
                               <?php

                                
                                
    								//GET DATA
                                
                                
    								//diapy items 
                                
                                
     								$stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `items` ");
                                
    								$stmt->execute();
    								foreach($stmt as $data)
    								{
    									if($data['id'] !=0)
    									{
    										//Display the items in the card syel
    										echo'
    										<div class="main">
    											<div class="card" id ="'.$data['id'].'" >	
    												<div class="heading" id="item_name_items'.$data['id'].'">'.$data['heading'].'</div>
    												<div class="details">'.$data['details'].'</div>
    												<div class="price" id="item_sell_items'.$data['id'].'"> '.$data['price'].'</div>
    												<button class="btn1"onclick= buy('.$data['id'].',"items")>Buy</button>
    												<button class="btn2" onclick=add_cart('.$data['id'].',"items")>Add to Cart</button>
    											</div>
    											<svg class="glasses" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px"
    													viewBox="0 0 100 100" xml:space="preserve">
    													<image id="image0" width="100" height="100" x="0" y="0" href="'.$data['image0'].'"></	image>
    											</svg>
    										</div>';
    									}
    								}
                                
    							?>
                           </div>
                       </div>
                   </article>
                   <article>
                       <div class="books">
                           <div class="sub_items_contner">
                                
                               <?php



								//GET DATA


								//diapy books 


  								$stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `books` ");

								$stmt->execute();
								foreach($stmt as $data)
								{
									if($data['id'] !=0)
									{
										//Display the books in the card syel
										echo'
										<div class="main">
											<div class="card" id ="'.$data['id'].'" >	
												<div class="heading" id="item_name_books'.$data['id'].'">'.$data['heading'].'</div>
												<div class="details">'.$data['details'].'</div>
												<div class="price" id="item_sell_books'.$data['id'].'">'.$data['price'].'</div>
												<button class="btn1"onclick= buy('.$data['id'].',"books")>Buy</button>
												<button class="btn2" onclick="add_cart("'.$data['id'].'","books")">Add to Cart</button>
											</div>
											<svg class="glasses" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px"
													viewBox="0 0 100 100" xml:space="preserve">
													<image id="image0" width="100" height="100" x="0" y="0" href="'.$data['image0'].'"></	image>
											</svg>
										</div>';
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
                                    src="server/5296500_fb_social media_facebook_facebook logo_social network_icon.png"></a>
                        </li>
                        <li class="coler"><a href=""><img
                                    src="server/5296765_camera_instagram_instagram logo_icon.png"></a></li>
                        <li class="coler"><a href=""><img
                                    src="server/5296501_linkedin_network_linkedin logo_icon.png"></a></li>
                        <li class="coler"><a href=""><img
                                    src="server/5296514_bird_tweet_twitter_twitter logo_icon.png"></a></li>
                        <li class="coler"><a href=""><img
                                    src="server/291716_github_logo_social network_social_icon.png"></a></li>
                        <li class="coler"><a href=""><img src="server/5279113_blog_medium_medium logo_icon.png"></a></li>
                    </ul>
                </section>

            </div>
            <span id="copy_riten"></span>
        </footer>
        <!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/jQuery.js"></script> -->
    </body


</html>
