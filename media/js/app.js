$(document).ready(function(){
//    mostrarGrupos()
    $('#cursos').change(function(){
        mostrarGrupos()
    })
    
//    mostrarTipos()
    $('#grupos').change(function(){
        mostrarTipos()
    })
    
    mostrarCantidadAlumnos()
    $('input[name="tab_codigo"]').change(function(){
        mostrarCantidadAlumnos()
    })
    
    $('.delete-archivo').click(function(e)
    {
        e.preventDefault()
        
        var $this = $(this)
        
        $.ajax({
            url: '/archivo/delete',
            type: 'POST',
            dataType: 'json',
            data: {idArchivo:  $this.attr('data-idArchivo')}})
        .done(function(response)
        {
            if(response.status == 'OK')
            {
                $this.parent().parent().remove()
            }
            else
            {
                alert('Error, recarge la páginaa')
            }
            
        }).fail(function()
        {
            alert('Error, recarge la páginab')
        })
    })
    
    $('.matricula').click(function(e){
        e.preventDefault()
        alert('Ya tiene matrícula registrada')
//        alert('No hay cursos registrados')
    })
    
    $('.no-matricula').click(function(e){
        e.preventDefault()
        alert('No tiene matrícula registrada')
    })
	
	mostrarAlumnos()
})

function mostrarGrupos()
{
    $.ajax({
            url: '/curso/getGrupos',
            type: 'POST',
            dataType: 'json',
            data: {idCurso:  $('#cursos').val()}})
        .done(function(response)
        {
            var aGrupo = response.data
            var grupos = $('#grupos')
            
            grupos.children().remove()
            grupos.append('<option value="">---</option>')
            
            for(var i in aGrupo)
            {
                grupos.append('<option value="' + aGrupo[i].cg_codigo + '">' + aGrupo[i].tab_nombre + '</option>')
            }
        }).fail(function()
        {
            alert('Error, recarge la páginac')
        })
}

function mostrarTipos()
{
    $.ajax({
            url: '/curso/getTipos',
            type: 'POST',
            dataType: 'json',
            data: {idGrupo: $('#grupos').val()}})
        .done(function(response)
        {
            var aGrupo = response.data
            var grupos = $('#tipos')
            
            grupos.children().remove()
            grupos.append('<option value="">---</option>')
            
            for(var i in aGrupo)
            {
                grupos.append('<option value="' + aGrupo[i].cgt_codigo + '">' + aGrupo[i].tab_nombre + '</option>')
            }
        }).fail(function()
        {
            alert('Error, recarge la páginad')
        })
}

function mostrarCantidadAlumnos()
{
    if($('input[name="tab_codigo"]:checked').attr('data-val') == 0)
    {
        $('#tra_cantidad_alum').hide();
        $('input[name="tra_cantidad_alum"]').prop('required', false);
    }
    else
    {
        $('#tra_cantidad_alum').show()
        $('input[name="tra_cantidad_alum"]').prop('required', true);
    }
}

function mostrarAlumnos()
{
	$('.ac-tipo').change(function(){
		
		$.ajax({
            url: '/matricula/getAlumnos',
            type: 'POST',
            dataType: 'json',
            data: {idTipo:  $(this).val()}})
        .done(function(response)
        {
			
            var aAlumno = response.data
            var tabla = $('#alumnosporcurso tbody')
            
            tabla.children().remove()
            
            for(var i in aAlumno)
            {
				var addtr = '<tr><td>'+ aAlumno[i].usu_usuario + '</td>\n\
								<td>'+ aAlumno[i].usu_nombre + '</td>\n\
								<td>'+ aAlumno[i].usu_apellido + '</td>\n\
							</tr>'
				
                tabla.append(addtr)
            }
        }).fail(function()
        {
            alert('Error, recarge la página')
        })
	})
}