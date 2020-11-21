<header>
    <div>
        <div id="line">
            <span id="1" class="line"></span>
            <span id="2" class="line"></span>
            <span id="3" class="line"></span>
        </div>
        <img src="admin/home.png" style="position: absolute;left: 45%;width: 67px;">
        <img src="admin/ecrit.png" style="position: absolute;left: 48.5%;top: 8px;width: 163px;">
    </div>
    <nav id="nav_list" style="width:1900px;">
        <div>
            <ul style="background-color: white; width:340px">
                <li><a href="home.php" id="aA">Home</a></li><br>
                <li><a href="portfolio.php" id="aA">Portfolio</a></li>
                <li id="more">
                    <a href="articles.php" id="aA" class="create_art">Articles</a>
                    <ul style="display:none;" id="append">
                        <li style="padding: 10px;margin-left: 46px;list-style:square;"><a href="#" id="aA" >Test1</a></li>
                        <li style="padding: 10px;margin-left: 46px;list-style:square;"><a href="#" id="aA">Test2</a></li>
                        <li style="padding: 10px;margin-left: 46px;list-style:square;"><a href="#" id="aA">Test3</a></li>
                    </ul>
                </li>
                <li><a href="presentation.php" id="aA">About</a></li>
                <li><a href="contact.php" id="aA">Contact</a></li>
                <li><a href="shop.php" id="aA">Shop</a></li>
            </ul>
            <div style="width:1700px;height:1200px;background-color:rgba(51,51,51,0.71); visibility:visible;opacity:1;"></div>
        </div>        
    </nav>
</header>

<script>
$(function(){
    $("#more").on("mouseenter",function(){//id de la barre de recherche  
        $("#append").show("slide", { direction: "up" });   
    });
    $("#more").on("mouseleave",function(){//id de la barre de recherche  
        $("#append").hide("slide", { direction: "up" });   
    });
});


</script>