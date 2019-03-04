


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        
         document.getElementById("myTopnav").style.position = "fixed";
         document.getElementById("myTopnav").style.width = "50%";
         document.getElementById("myTopnav").style.marginTop = "0px";
         document.getElementById("myTopnav").style.overflow = "scroll";
         document.getElementById("closebtn").style.fontSize = "20px";
         document.getElementById("logo1").style.display = "none";
         document.getElementById("nav-info").style.display = "block";
         document.body.style.overflow = "hidden";
         document.getElementById("page").style.opacity = "0.3";

        document.getElementById("myTopnav").style.height = "100%";
		document.getElementById("icon").style.display = "none";
        document.getElementById("xmas").style.display = "none";



    }


     else {
        x.className = "topnav";
         document.getElementById("myTopnav").style.backgroundColor = "rgba(225,225,225,0.95);";
         document.body.style.overflow = "scroll";
         document.getElementById("page").style.opacity = "1";

        document.getElementById("myTopnav").style.width = "100%";
        document.getElementById("myTopnav").style.height = "auto";
         document.getElementById("myTopnav").style.paddingTop = "0px";
        document.getElementById("myTopnav").style.opacity = "1";
        document.getElementById("icon").style.display = "block";
        document.getElementById("myTopnav").style.overflow = "hidden";
         document.getElementById("logo1").style.display = "block";
         document.getElementById("nav-info").style.display = "none";
        document.getElementById("xmas").style.display = "block";





    }

    window.onresize=function(){
            

        
x.className = "topnav";
         document.getElementById("myTopnav").style.backgroundColor = "rgba(225,225,225,0.95);";
         document.body.style.overflow = "scroll";
         document.getElementById("page").style.opacity = "1";

        document.getElementById("myTopnav").style.width = "100%";
        document.getElementById("myTopnav").style.height = "auto";
         document.getElementById("myTopnav").style.paddingTop = "0px";
        document.getElementById("myTopnav").style.opacity = "1";
        document.getElementById("icon").style.display = "block";
        document.getElementById("myTopnav").style.overflow = "hidden";
         document.getElementById("logo1").style.display = "block";
         document.getElementById("nav-info").style.display = "none";
        document.getElementById("xmas").style.display = "block";



    }
  




}

