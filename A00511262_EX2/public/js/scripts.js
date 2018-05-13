/**
 * Opens confirmation modal to delete patients
 */
$('.deleteForm').on('click', function(e){
    
    var form = $(this).attr('data-form');
    var body = '<p>Esta acción eliminará de forma permanente al paciente';
    $('.modal-title').html('Eliminar paciente');
    if(patient.name != null){
        body +=' '+patient.name+' '+patient.last_name;
    }
        body += '. ¿Desea continuar?</p>';
    
    $('.modal-body').html(body);
    $('.modal-footer').append('<button class="btn btn-danger deletePatient ">Eliminar paciente</button>');
    $('#myModal').modal('show');
    $('.deletePatient').on('click', function(){
        $('.'+form).submit();
    });
    
});

    $(".search").keyup(function () {
        $('.detail.collapse').removeClass('show');
        var searchTerm = $(".search").val();
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
            
            $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
            });
            
            $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
            $(this).attr('visible','false');
            });
        
            $(".results tbody tr:containsi('" + searchSplit + "')").not('.detail').each(function(e){
            $(this).attr('visible','true');
            });
            var jobCount = $('.results tbody tr[visible="true"]').length;
          if(jobCount == '0') {$('.no-result').show();}
            else {$('.no-result').hide();}      
  });