function setSelectedPage(){

    var currentPage = location.pathname;
    switch (currentPage){
        case "/":
            document.getElementById("homeLink").setAttribute("class","active");
            document.getElementById("homeLinkMob").setAttribute("class","active");
            break;
        case "/about/":
            document.getElementById("aboutLink").setAttribute("class","active");
            document.getElementById("aboutLinkMob").setAttribute("class","active");
            break;
        case "/computing/":
            document.getElementById("computingLink").setAttribute("class","active");
            document.getElementById("computingLinkMob").setAttribute("class","active");
            break;
        case "/music/":
            document.getElementById("musicLink").setAttribute("class","active");
            document.getElementById("musicLinkMob").setAttribute("class","active");
            break;
        case "/contact/":
            document.getElementById("contactLink").setAttribute("class","active");
            document.getElementById("contactLinkMob").setAttribute("class","active");
            break;
    }

}
