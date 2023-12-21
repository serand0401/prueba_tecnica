$('input[type="file"]').change(sizefoto1)

function sizefoto1() {
  let ruta = $(this).val();
  switch ($(this).attr('data-ext')) {
    case 'jpg':
      var ext = /(.jpg|.JPG|.jpeg|.JPEG|.png|.PNG)$/i;
      break;
    default:
      alert('Ha ocurrido un error. Este campo input carece de filtro!');
      return;
  }
  var tam = this.files[0].size; {
    if (!ext.exec(ruta)) {
      swal("NO es " + $(this).attr('data-ext'), "El archivo no es " + $(this).attr('data-ext'), "error");
      $(this).val("");
      $(this).html("");
    } else {
      if (tam > 1048576) {
        swal("Archivo demasiado grande", "Los archivos deben pesar menos de 1 MB", "error");
        $(this).val("");
        $(this).html("");
      }
    }
  }
}

function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}