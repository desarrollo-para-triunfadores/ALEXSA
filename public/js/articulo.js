$('#side-articulos-li').addClass('active')
$('#side-articulos-ul').addClass('menu-open')
$('#side-ele-articulos').addClass('active')

var imagen_articulo_create = '', imagen_articulo_update = ''

function completar_campos (articulo) {
  console.log(articulo)
  $('#editar_nombre').val(articulo.nombre)
  $('#editar_descripcion').val(articulo.descripcion)
  $('#editar_marca_id').val(articulo.marca_id).trigger('change')
  $('#editar_minimo_vendible').val(articulo.minimo_vendible)
  $('#editar_subrubro_id').val(articulo.subrubro_id).trigger('change')
  // $('#color_id').val(articulo.color_id).trigger("change")
  $('#editar_material_id').val(articulo.material_id).trigger('change')
  $('#editar_umedida_id').val(articulo.umedida_id).trigger('change')
  $('#form-update').attr('action', '/admin/articulos/' + articulo.id)
  $('#boton-modal-update').click()
}

function abrir_modal_borrar (id) {
  $('#form-borrar').attr('action', '/admin/articulos/' + id)
  $('#boton-modal-borrar').click()
}

// Datatable - instaciación del plugin
var table = $('#tabla_articulos').DataTable({
  'language': tabla_traducida, // esta variable esta instanciada donde están declarados todos los js.
})

instaciar_filtros()
function instaciar_filtros () {
  // Datatables | filtro individuales - instanciación de los filtros
  $('#tabla_articulos tfoot th').each(function () {
    var title = $(this).text()
    if (title !== '') {
      if (title !== 'Acciones') { // ignoramos la columna de los botones
        $(this).html('<input nombre="' + title + '" type="text" placeholder="Buscar ' + title + '" />')
      }
    }
  })
  // Datatables | filtro individuales - búsqueda 
  table.columns().every(function () {
    var that = this
    $('input', this.footer()).on('keyup change', function () {
      if (that.search() !== this.value) {
        that.search(this.value).draw()
      }
    })
  })
}

// Croppie.js | create

// se instancia el plugin
var basic_nuevo = $('#main-cropper_nuevo').croppie({
  enableExif: true,
  viewport: {
    width: 275,
    height: 275,
    type: 'circle'
  },
  boundary: {
    width: 275,
    height: 275
  },
  update: function (data) {
    basic_nuevo.croppie('result', 'blob').then(function (html) {
      imagen_articulo_create = html
    })
  }
})

// carga imagen al plugin
function readFile (input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader()
    reader.onload = function (e) {
      $('#main-cropper_nuevo').croppie('bind', {
        url: e.target.result
      })
    }
    reader.readAsDataURL(input.files[0])
  }
}

// evento sobre el botón subir
$('.actionUpload-nuevo input').on('change', function () {
  readFile(this)
})

// Croppie.js | update
// se instancia el plugin
var basic_update = $('#main-cropper_update').croppie({
  enableExif: true,
  viewport: {
    width: 275,
    height: 275,
    type: 'circle'
  },
  boundary: {
    width: 275,
    height: 275
  },
  update: function (data) {
    basic_update.croppie('result', 'blob').then(function (html) {
      imagen_articulo_update = html
    })
  }
})

// carga imagen al plugin
function readFile2 (input) {
  if (input.files && input.files[0]) {
    var reader2 = new FileReader()
    reader2.onload = function (e) {
      $('#main-cropper_update').croppie('bind', {
        url: e.target.result
      })
    }
    reader2.readAsDataURL(input.files[0])
  }
}

// evento sobre el botón subir
$('.actionUpload-update input').on('change', function () {
  readFile2(this)
})

// Enviar datos.

function mandar (tipo_form) { // tipo_form puede ser create o update
  var redireccion = '/admin/articulos'
  // // Este método sirve para ver el contenido del formdata
  // for (var pair of formData.entries())
  // {
  // console.log(pair[0]+ ', '+ pair[1])
  // }
  var form = $('#form-' + tipo_form)
  var url = form.attr('action')
  var token = $('#token-' + tipo_form).val()
  var formData = new FormData(document.getElementById('form-' + tipo_form))
  if ((tipo_form === 'create') && (imagen_articulo_create !== '')) {
    formData.append('imagen', imagen_articulo_create)
  } else if ((tipo_form === 'update') && (imagen_articulo_update !== '')) {
    formData.append('imagen', imagen_articulo_update)
  }

  $.ajax(url, {
    headers: {'X-CSRF-TOKEN': token},
    method: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data)
      $('#modal-'+tipo_form).modal('toggle');
      bootbox.dialog({
        title: 'Registración exitosa',
        message: 'Los datos se han registrado de manera exitosa.',
        className: 'modal-success',
        buttons: {
          cancel: {
            label: 'cerrar',
            className: 'btn btn-outline pull-right',
            callback: function () {
              window.location.href = redireccion
            }
          }
        }
      })
    },
    error: function () {
      console.log('Upload error')
    }
  })
}


/**Funcion para cuando se seleccione el subrubro se setee rubro que corresponde **/
$('select#subrubro_id').on('change', function () {
  $.ajax({
      dataType: 'json',
      url: "/admin/rubros", //ruta que contendra el metodo para obtener lo que necesitamos, dentro del contolador
      data: {
          buscarRubro: true,
          id: $('#subrubro_id').val()
      },
      success: function (data) {
          console.log(data);  //recibimos el RUBRO que corresponde al subrubro seleccionado
          var rubro = JSON.parse(data);
          $('#rubro_id').val(rubro.id).trigger('change')
      }
  });
});