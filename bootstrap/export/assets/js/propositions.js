var modal_activer = document.getElementById('modal_activer_sugg');

var input = document.getElementById('add_sugg_modal');

modal_activer.addEventListener('shown.bs.modal', function () {
  input.focus()
});

const tx = document.getElementsByTagName("textarea");

for (let i = 0; i < tx.length; i++) {
  tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
  tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
  this.style.height = "auto";
  this.style.height = (this.scrollHeight) + "px";
}