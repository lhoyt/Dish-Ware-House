<?php
    include ('includes/header2.html');
    require('connectToDatabase.php');
    $price = 40.00;
?>         
</div>

	<div id="teaPot">
			<img alt="Red Tea Pot Set Flower Print" src="images/teaPot.JPG" />
        </div>
        <div id="text">
            <h1>Red Tea Pot Set</h1>
            <h4>Price: $40.00</h4>
            <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
            Duis semper massa vel urna facilisis <br> faucibus.
            Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
            sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
            Suspendisse in elit <br> libero, ut cursus quam.</p>
        </div>
    <form action="cart.php" method="post">
        
        <p>Quantity: <input type="int" name="quantity" size="5" value="quantity" <?Php echo $_POST['quantity']; ?>></p>

        <input type = "hidden" name = "price" value =  <?php echo $price; ?> />
        <input type = "hidden" name = "member_id" value =  <?php echo $member_id; ?> />
        <p> <input type="submit" name="submit" value="Add to Cart"/></p>
    </form>
            <div id="redSet">
            	<img alt="Red Plate Set Flower Print" src="images/redPlates.JPG"  />
            </div>
            <div id="text2">
                <h1>Red Plate Set <br> Flower Print</h1>
                <h4>Price: $30.00</h4>
                <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                Duis semper massa vel urna facilisis <br> faucibus.
                Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                Suspendisse in elit libero, ut cursus quam.</p>
            </div>
            	<div id="blueSet">
                    <img alt="Blue Plate Set Flower Print" src="images/blueDishSet.JPG"  />
            	</div>
                <div id="text3">
                    <h1>Blue Plate Set <br> Flower Print</h1>
                    <h4>Price: $30.00</h4>
                    <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                    Duis semper massa vel urna facilisis <br> faucibus.
                    Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                    sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                    Suspendisse in elit <br> libero, ut cursus quam.</p>
                </div>
                    <div id="redPlate">
            		<img alt="Red Plate Set Flower Print 2" src="images/completeRedDishSet.JPG"  />
                    </div>
                    <div id="text4">
                        <h1>Red Plate Set Flower Print 2</h1>
                        <h4>Price: $20.00</h4>
                        <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                        Duis semper massa vel urna facilisis <br> faucibus.
                        Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                        sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                        Suspendisse in elit <br> libero, ut cursus quam.</p>
                    </div>
            		<div id="sideChop">
                            <img alt="Side View of Chopstick Rests" src="images/sideViewRests.JPG"  />
            		</div>
                        <div id="text5">
                            <h1>Side View of <br> Chopstick Rests</h1>
                            <h4>Price: $5.00</h4>
                            <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                            Duis semper massa vel urna facilisis <br> faucibus.
                            Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                            sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                            Suspendisse in elit <br> libero, ut cursus quam.</p>
                        </div>
                            <div id="sauce">
                                <img alt="Two Sauce Dishes Red/Blue Flower Print" src="images/sauceDishes.JPG"  />
                            </div>
                            <div id="text6">
                                <h1>Two Sauce Dishes Red/Blue Flower Print</h1>
                                <h4>Price: $5.00</h4>
                                <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                                Duis semper massa vel urna facilisis <br> faucibus.
                                Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                                sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                                Suspendisse in elit <br> libero, ut cursus quam.</p>
                            </div>
                                <div id="brownPlate">
                                    <img alt="Brown Rectangle Flower Print Plate" src="images/rectanglePlate.JPG"  />
           			</div>
                                <div id="text7">
                                    <h1>Brown Rectangle Flower <br> Print Plate</h1>
                                    <h4>Price: $25.00</h4>
                                    <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                                    Duis semper massa vel urna facilisis <br> faucibus.
                                    Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                                    sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                                    Suspendisse in elit <br> libero, ut cursus quam.</p>
                                </div>
                                    <div id="greenYellow">
                                        <img alt="Green and Yellow Medium/Tall Bubble Glasses" src="images/greenYellowCups.JPG"  />
                                    </div>
                                    <div id="text8">
                                        <h1>Green and Yellow Medium/Tall Bubble Glasses</h1>
                                        <h4>Price: $15.00</h4>
                                        <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                                        Duis semper massa vel urna facilisis <br> faucibus.
                                        Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                                        sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                                        Suspendisse in elit <br> libero, ut cursus quam.</p>
                                    </div>
            				<div id="blueMug">
                                            <img alt="Blue Coffee Mug" src="images/blueMug.JPG"  />
            				</div>
            				<div id="text9">
                                            <h1>Blue Coffee Mug</h1>
                                            <h4>Price: $5.00</h4>
                                            <p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
                                            Duis semper massa vel urna facilisis <br> faucibus.
                                            Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
                                            sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
                                            Suspendisse in elit <br> libero, ut cursus quam.</p>
            				</div>
                                            <div id="allPurpose">
            					<img alt="Two All Purpose Glasses" src="images/allPurposeGlasses.JPG"  />
                                            </div>
                                            <div id="text10">
            					<h1>Two All Purpose Glasses</h1>
            					<h4>Price: $10.00</h4>
            					<p>Maecenas vel libero eu risus ultrices rutrum non sit <br> amet velit.
            					Duis semper massa vel urna facilisis <br> faucibus.
            					Etiam quis orci turpis. Sed ullamcorper, nisi <br> non adipiscing molestie,
            					sapien arcu dictum nulla, eu <br> accumsan libero quam ornare quam.
            					Suspendisse in elit libero, ut cursus quam.</p>
                                            </div>

<?php
    include ('includes/footer.html');
?>
