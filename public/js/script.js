var username = document.getElementById("ime");
var prezime = document.getElementById("prez");
var btn = document.getElementById('button');
var mail = document.getElementById('email');
var modal = document.getElementById("myModal");



document.addEventListener("keydown", function (e) {
  if (e.keyCode === 27) {
    modal.style.display = "none";
  }
});



function euroConverter(){
                document.converter.dollar.value = Number(document.converter.euro.value * 1.13006).toFixed(3);
                document.converter.din.value = Number(document.converter.euro.value * 117.21).toFixed(3);
                }
function dollarConverter(){
                document.converter.euro.value = Number(document.converter.dollar.value * 0.88491).toFixed(3);
                document.converter.din.value = Number(document.converter.dollar.value * 103.49).toFixed(3);
                }
function dinConverter(){
                document.converter.dollar.value = Number(document.converter.din.value * 0.00853).toFixed(3);
                document.converter.euro.value = Number(document.converter.din.value * 0.009).toFixed(3);
                }


btn.addEventListener('click',function () {
	
	if (username.value.trim().length <= 3 || prezime.value.trim().length <= 3 ) {
	alert('Pogresan unos');
	return;
	}
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value)===false)
		{
		alert("Unesite ispravan email");
		return;
		}
	else
		alert("Poslata forma");
	} 
	
);