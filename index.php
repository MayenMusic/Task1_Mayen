<html>
<head>
    <meta charset="UTF-8">
    <title>Mayen HOME</title>
    
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script language="javascript">
			var slide = 0;
			setInterval(function(){
			if(slide < 2)
			{
				$(".innerslide").animate({"marginLeft": "-=705px"});			
				slide += 1;
			}
			else if(slide >= 2)
			{
				$(".innerslide").animate({"marginLeft": "0px"});			
				slide = 0;			
			}
            
		}, 5000);
        
	</script>

</head>
    
<body>
    <div class="header">
        <img src="images/Banner.png" width="330px" height="100px" style="position:absolute;
            top:30px;left:530px;">
    </div>
    
    <div class="body">
        <div class="navigation">
					<span class="link" onclick="window.location='index.php'">>>HOME</span><span          class="divider">|</span>
                    <span class="link" onclick="window.location='about.php'">ABOUT ME</span><span class="divider">|</span>
                    <span class="link" onclick="window.location='works.php'">MY WORKS</span>
				</div>&nbsp;
        
        <div class="container">&nbsp;
            <div class="photoSlider">&nbsp;
                
                <div class="slider">
					<div class="innerslide">
						<img src="images/home1.jpg" width="700px" height="400px">
						<img src="images/home2.jpg" width="700px" height="400px">
                        <img src="images/home3.jpg" width="700px" height="400px">
					</div>
				</div>&nbsp;
            
            </div>&nbsp;
            
            <div class="textBox">Who is MAYEN?
               <div class="content">
                Me:
                <ul>
                    <li>Everything's BLUE</li>
                    <li>Certified Koreanovela addict</li>
                    <li>A byahero</li>
                </ul>
                   
                Not Me:
                <ul>
                    <li>Moody</li>
                    <li>Easy go lucky</li>
                    <li>Weak</li>
                </ul>
                </div>
            </div>&nbsp;
        
        </div>
    
    </div>&nbsp;
    
    <div class="footer">
        <center>All Rights Reserved &copy Imari Elanor Malabanan 2014<br></center>
    
    </div>
</body>
</html>