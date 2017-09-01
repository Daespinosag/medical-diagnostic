$(document).ready(function () {

    $('a#modalButton').click(function () {

        $('form input#name').val('');
        $('form input#last_name_1').val('');
        $('form input#last_name_2').val('');
        $('form input#email').val('');
        $('form input#identification_card').val('');

        /*$('#formModal').toggleClass('in');
        $('#formModal').attr('style', 'display: block;');
        $('#formModal').prepend('<div class="modal-backdrop fade in" style="height: 627px;"></div>');*/

        //$('#formModal').modal('toggle');
        //$('.modal-backdrop').hide();
    });

    /*function toggleModal(){

    }*/

    $('button#patientSearch').click(function () {

        var modalFormGroup = $('div#formModal .form-group');
        var document = $('#searchDocument').val();
        var spanError = $('span#searchError');

        /*var searchDocument = $('#searchDocument');
        var searchButton = $('button#patientSearch');
        var cancelButton = $('button#patientSearchCancel');*/

        if(document !== null && document !== ''){

            /*searchDocument.attr('disabled');
            searchButton.attr('disabled');
            cancelButton.attr('disabled');*/
            $.post('/medical-diagnostic/patientData/' + document, { _token: $('[name=\'_token\']').val() },function(response) {

                if(response){

                    if(response){
                        modalFormGroup.removeClass('has-error');
                        spanError.html('');
                        spanError.hide();

                        console.dir(response);

                        $('form input#name').val(response.name);
                        $('form input#last_name_1').val(response.last_name_1);
                        $('form input#last_name_2').val(response.last_name_2);
                        $('form input#email').val(response.email);
                        $('form input#identification_card').val(response.identification_card.trim());

                        if(response.gender === 'M'){
                            $("input#gender").first().prop("checked", true);
                        }else{
                            $("input#gender").first().prop("checked", true);
                        }

                        $('#patientSearchCancel').trigger('click');
                        $('#patientSearchCancel').trigger('click');

                        /*searchDocument.removeAttr('disabled');
                        searchButton.removeAttr('disabled');
                        cancelButton.removeAttr('disabled');*/
                    }else{
                        modalFormGroup.addClass('has-error');
                        spanError.html('<strong>Documento no encontrado</strong>');
                        spanError.show();

                        /*searchDocument.removeAttr('disabled');
                        searchButton.removeAttr('disabled');
                        cancelButton.removeAttr('disabled');*/
                    }
                }
            });
        }else{
            modalFormGroup.addClass('has-error');
            spanError.html('<strong>Debe ingresar un número de documento</strong>');
            spanError.show();
        }
    });
});