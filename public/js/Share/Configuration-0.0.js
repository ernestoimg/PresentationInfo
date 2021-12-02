var ConfigurationModule = (function () {

    var Constants = {

    };

    // Global Messages
    var Messages = {
        serviceRequestError: `Ocurrió un error en la solicitud del servicio de datos. Asegúrate de estar conectado a Internet e inténtalo nuevamente. Si el problema persiste por favor repórtalo a la mesa de ayuda indicando la siguiente clave de rastreo: `,
        pageFunctionalityError: `Ocurrió un error en la funcionalidad de la página. Inténtalo de nuevo y si el problema persiste por favor repórtalo a la mesa de ayuda indicando la siguiente clave de rastreo: `,
        rowToDeleteNotSelected: "Debes seleccionar el registro que deseas eliminar."
    };

    var AjaxSendGet = function (serviceUrl) {

        var ajaxPromise = $.ajax({
                url: serviceUrl,
                type: "Get",
                timeout: 0,
            }).done(ServiceResponseHandlerForGet)
            .fail(AjaxHandlerFail);


        return ajaxPromise;
    }


    // Function to hand a service response
    var ServiceResponseHandlerForGet = function (serviceResponse) {
        // Return the data contained in the service response
        return serviceResponse;
    };

    // Function to hand an ajax fail
    var AjaxHandlerFail = function (xhr, status, errorThrown) {
        // Set default message
        var message = ConfigurationModule.Messages.serviceRequestError;

        // Verify the JSON message received
        if (xhr.responseJSON !== undefined && xhr.responseJSON.error_description !== undefined) {
            message = xhr.responseJSON.error_description;
        }

        // Log error in the console
        console.log("Error: " + errorThrown);
        console.log("Status: " + status);
        console.log("xhr:");
        console.dir(xhr);
    };

    return {
        AjaxSendGet: AjaxSendGet,
        AjaxHandlerFail: AjaxHandlerFail,
        Messages: Messages,
        Constants: Constants,
        ServiceResponseHandlerForGet: ServiceResponseHandlerForGet
    }
})();
