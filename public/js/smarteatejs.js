window.onload = function() {
  var theForm = document.querySelector('#Myform');
  var content = theForm.elements;
  var contentArray = Array.from(content);
  contentArray.pop();
  var erro = document.querySelectorAll('.invalid-feedback')
  console.log(erro);

  var envio = theForm.addEventListener("submit", function(event) {
  contentArray.forEach( function(element) {
      if (element.value == "") {
        event.preventDefault();
        element.classList.add("is-invalid");
        element.parentElement.querySelector('.invalid-feedback').innerText = "Este campo es obligatorio";
      }
  });
  });
}
