var ConfigurationModule = (function () {

    var Session = {

    }

    var Constants = {
        TELEGRAM_BOT_S1: '5019252636',
        TELEGRAM_BOT_S2: 'AAF1Qgq2UvUa',
        TELEGRAM_BOT_S3: 'MALSsIbXODL',
        TELEGRAM_BOT_S4: 'wRmUTpc344LI',
        TELEGRAM_BOT_NAME: 'imartgc1_bot',
        TELEGRAM_CHAT_ID: -788509468
    };

    var NewGuid = function () {
        function s4() {
            return Math.floor((1 + Math.random()) * 0x10000)
                .toString(16)
                .substring(1);
        };
        return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
    }

    // Global Messages
    var Messages = {
        serviceRequestError: `Ocurrió un error en la solicitud del servicio de datos. Asegúrate de estar conectado a Internet e inténtalo nuevamente. Si el problema persiste por favor repórtalo a la mesa de ayuda indicando la siguiente clave de rastreo: `,
        pageFunctionalityError: `Ocurrió un error en la funcionalidad de la página. Inténtalo de nuevo y si el problema persiste por favor repórtalo a la mesa de ayuda indicando la siguiente clave de rastreo: `,
        rowToDeleteNotSelected: "Debes seleccionar el registro que deseas eliminar.",
        required: "El valor de este campo es requerido",
    };

    var TelegramBotToken = function(){
        return [Constants.TELEGRAM_BOT_S1,":",Constants.TELEGRAM_BOT_S2,Constants.TELEGRAM_BOT_S3,Constants.TELEGRAM_BOT_S4].join("");
    }

    var GetURLAPITelegram = function () {
        var token = ConfigurationModule.TelegramBotToken();

        return `https://api.telegram.org/bot${token}`;
    }

    var AjaxTelegramSendPost = function (url, dataRequest) {

        var serviceUrl = `${ConfigurationModule.GetURLAPITelegram()}/${url}`;

        var ajaxPromise = $.ajax({
                url: serviceUrl,
                type: "POST",
                timeout: 0,
                data: JSON.stringify(dataRequest),
                contentType: "application/json",

            }).done(ServiceResponseHandlerForGet)
            .fail(AjaxHandlerFail);


        return ajaxPromise;
    }

    var AjaxTelegramSendGet = function (serviceUrl) {

        var serviceUrl = `${ConfigurationModule.GetURLAPITelegram()}/${serviceUrl}`;

        var ajaxPromise = $.ajax({
                url: serviceUrl,
                type: "Get",
                timeout: 0,
            }).done(ServiceResponseHandlerForGet)
            .fail(AjaxHandlerFail);

        return ajaxPromise;
    }

    var AjaxSendGet = function (serviceUrl) {

        var ajaxPromise = $.ajax({
                url: serviceUrl,
                type: "Get",
                timeout: 0,
            }).done(ServiceResponseHandlerForGet)
            .fail(AjaxHandlerFail);


        return ajaxPromise;
    }

    var AjaxSendPost = function (serviceUrl, dataRequest) {
        var ajaxPromise = $.ajax({
                url: serviceUrl,
                type: "POST",
                data: JSON.stringify(dataRequest),
                contentType: "application/json",
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
        console.log("xhr:" + message);
        console.dir(xhr);
    };

    var FormCheckValidity = function (formControl) {
        if (formControl.checkValidity() === false) {
            FormValidatedClassAdd(formControl);
            return false;
        } else {
            return true;
        }
    };

    // Add the bootstrap class to show the validation messages in case of fails
    var FormValidatedClassAdd = function (form) {
        form.classList.add('was-validated');
    };

    var FormValidatedClassRemove = function (form) {
        form.classList.remove('was-validated');
    }

    // Store an object in sessionStorage
    var SessionStorageStoreObject = function (key, object) {
        sessionStorage.setItem(key, JSON.stringify(object));
    };

    // Get an object from sessionStorage
    var SessionStorageGetObject = function (key) {
        var object = sessionStorage.getItem(key);
        return object && JSON.parse(object);
    };

    $(document).ready(function () {
        // Load [user] variable
        if (sessionStorage.SessionGuid) {
            ConfigurationModule.Session = ConfigurationModule.SessionStorageGetObject("SessionGuid");
        }
    });

    return {
        AjaxSendGet: AjaxSendGet,
        AjaxTelegramSendGet: AjaxTelegramSendGet,
        AjaxTelegramSendPost: AjaxTelegramSendPost,
        AjaxHandlerFail: AjaxHandlerFail,
        GetURLAPITelegram: GetURLAPITelegram,
        TelegramBotToken:TelegramBotToken,
        Messages: Messages,
        NewGuid: NewGuid,
        Constants: Constants,
        Session: Session,
        AjaxSendPost: AjaxSendPost,
        FormCheckValidity: FormCheckValidity,
        FormValidatedClassAdd: FormValidatedClassAdd,
        FormValidatedClassRemove: FormValidatedClassRemove,
        ServiceResponseHandlerForGet: ServiceResponseHandlerForGet,
        SessionStorageStoreObject: SessionStorageStoreObject,
        SessionStorageGetObject: SessionStorageGetObject
    }
})();
