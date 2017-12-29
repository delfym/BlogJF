var w;

function popupCenter(page, largeur, hauteur, options) {
    var top=(screen.height-hauteur)/2;
    var left=(screen.width-largeur)/2;
    w = window.open(page,"","top="+top+",left="+left+",width="+largeur+",height="+hauteur+","+options);
}

function closePopup() {
    if (w.document) {
        submit();
        w.close();
    }
}

function Reporter(l) {
    var choix=l.options[l.options.selectedIndex].value;
    window.opener.document.forms["origine"].elements["choix"].value=choix;
}

function pop(){
   / addEventListener();
}

