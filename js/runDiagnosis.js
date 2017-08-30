$(document).ready(function () {

    var casesList = [];
    var modalFormGroup = $('div#formModal .form-group');
    var errorList = $('ul#error');
    var messageList = $('ul#message');

    var document = $('input#document').val();
    var token = $('input#_token').val();

    var htmlError = '';

    $('a#modalSearchCasesButton').click(function () {

        htmlError = '';
        messageList.html('');
        modalFormGroup.removeClass('has-error');
        errorList.html('');
        errorList.hide();
        $('#caseNumber').children('option:not(:first)').remove();

        $.post('/patientClinicalData/' + document, { _token: token },function(response) {

            casesList = response;

            $.each(response, function(key, value) {

                if(key === 'errors'){

                    console.dir(value);

                    $.each(value, function(key, value) {
                        htmlError += '<li><strong>' + value + '</strong></li>'
                    });

                    if (value.length > 0){
                        modalFormGroup.addClass('has-error');
                        errorList.html(htmlError);
                        errorList.show();
                    }
                }else{
                    $('#caseNumber')
                        .append($("<option></option>")
                            .attr("value", key)
                            .text(key));

                    console.dir(value);
                }
            });
        });
    });

    $('button#generateDiagnosis').click(function () {

        var selectError = $("span#selectError");
        var selectedValue = $("#caseNumber option:selected").val();
        htmlError = '';
        messageList.html('');

        if(selectedValue !== '' && selectedValue !== null){

            modalFormGroup.removeClass('has-error');
            selectError.html('');
            selectError.hide();

            $.post('/generateDiagnosis/' + document, { _token: token, case: casesList[selectedValue] },function(response) {
                console.dir(response);

                $.each(response['error'], function(key, value) {
                    htmlError += '<li><strong>' + value + '</strong></li>'
                });
                if (response['error'].length > 0){
                    modalFormGroup.addClass('has-error');
                    errorList.html(htmlError);
                    errorList.show();
                }

                messageList.html('<strong>Diagnósticos generados correctamente.</strong>');
                $('button#generateDiagnosis').attr('disabled', 'disabled');
            });

        }else{
            modalFormGroup.addClass('has-error');
            selectError.html('Debe seleccionar un valor');
            selectError.show();
        }
    });

    $('button#generateDiagnosisCancel').click(function () {
        $('button#generateDiagnosis').attr('disabled', false);
        location.reload();
    });
});