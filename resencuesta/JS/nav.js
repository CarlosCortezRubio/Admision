$(document).ready(function() {
    $('li').on('click', function() {
        $('li').removeClass('active');
        $(this).addClass('active');
    });
    $('#campoBusqueda').keyup(function() {
        this.value = (this.value + '').replace(/[^0-9]/g, '');
    });


});

function validar(valor) {
    alert(valor);
    if (isNaN(valor)) {
        return false;
    }
}

function buscarRegistro(op, valor1, valor2) {
    $(".upload-msg").text('Cargando...');
    $("#registrar").css("display", "none");
    var data = new FormData();
    data.append('op', op);
    data.append('idp', valor1);
    data.append('idc', valor2);

    $.ajax({
        url: "../PHP/consultar.php",
        type: "POST",
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            if (data != '') {
                mensaje = data;
            } else {
                mensaje = valor;
            }
            $("#respuesta").html(mensaje);
            $('#tabla_contenido').DataTable({
                "paging": true,
                "dom": '<f>B<t>lp',
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "info": false

            });
        }
    });


}