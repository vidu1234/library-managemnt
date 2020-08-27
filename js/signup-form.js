
document.getElementById('button-signup').addEventListener("click", function() {
	document.querySelector('.bg-modal-signup').style.display = "flex";
});

document.querySelector('.close-signup').addEventListener("click", function() {
	document.querySelector('.bg-modal-signup').style.display = "none";
});
