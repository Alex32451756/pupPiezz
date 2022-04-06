$(document).ready(function () {
    function loadCareer() {
        var idTipo = $('#tipo').val();
       
        console.log(idTipo);
        if ($.trim(idTipo) != '') {
            /*get('mascotaId', { idTipo: idTipo }, function (mascotaId) {

                var old = $('#contenido').data('old') != '' ? $('#contenido').data('old') : '';

                $('#contenido').empty();
                $('#contenido').append("<h1>Seleccione Un Tipo de Mascota</h1>");

                $.each(mascotaId, function (idMascota, img) {

                    $('#contenido').append("<div class='card' id='cardMas' style='width: 18rem;'>");
                    $('#contenido').append("<img class='card-img-top' src='" + img + "' alt='Card image cap'>");
                    $('#contenido').append("<div class='card-body' style='background-color: #5ce3e5;'>");
                    $('#contenido').append("<button type='button' style='width: 200px; height: 40px; background-color: #063970' class='btn btn-primary'>Ver</button>");
                    $('#contenido').append("</div>");
                    $('#contenido').append("</div>");



                    //  $('#career').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                });
            });*/
            $.ajax({
                url: "mascotaId",
                method: 'get',
                data:{
                    idTipo: idTipo,
                    _token:$('input[name="_token"]').val()
                }
            }).done(function(res){
                var arreglo = JSON.parse(res);
                console.log(arreglo);
            })
        }
    }
    loadCareer();
    $('#tipo').on('change', loadCareer);
});

/*$(document).ready(function(){
    $ajax({
        url: '',
        method: '',
        data:{
            id:1,
            _token:$('input[name="_token"]').val()
        }
    }).done(function(res){
        var arreglo = JSON.parse(res);
        console.log(arreglo);
    })
});*/


