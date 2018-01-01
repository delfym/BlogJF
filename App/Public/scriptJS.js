
function openModal() {
    document.getElementById('modal').className ="visible";
    document.getElementById('form').className = "invisible";
    document.getElementById('form').style.display = "none";
    document.getElementById('modal').style.position = "absolute";
    document.getElementById('modal').style.top = "300px";
    document.getElementById('modal').style.margin = "30px";
}

function closeModal() {
    document.getElementById('modal').className = "invisible";
    document.getElementById('form').className = "visible";
    document.getElementById('form').style.display = "";

}
