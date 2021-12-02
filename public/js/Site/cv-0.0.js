"use strict"

var CVModule = (function () {

    var GlobalSection = {
        // Variables _______________________________________________________
        CVInfo: null,
        // Controls  _______________________________________________________
        DownloadButton: $(".DownloadButton"),
        // Functions _______________________________________________________
        LoadTemplate: function () {

            var CVGetPromise = ConfigurationModule.AjaxSendGet('CV/GetCV');

            CVGetPromise.then(function (serviceResponse) {

                if (serviceResponse.length > 0) {
                    CVModule.CVInfo = serviceResponse;

                    var cvInfo = serviceResponse;

                    for (var i = 0; i < cvInfo.length; i++) {
                        // Get the current Item 
                        var currentItem = cvInfo[i];

                        // Get the control 
                        var downloadButton = GlobalSection.DownloadButton;

                        // Set the info to the control
                        downloadButton.attr('href', "data:application/pdf;base64," + currentItem.file);
                        downloadButton.attr('download',currentItem.name);
                    }
                }
            });

        }
    }

    var PageworkFlow = {

        GenerateCV: function () {

            GlobalSection.LoadTemplate();
        }
    }

    var Init = function () {

        PageworkFlow.GenerateCV();


    }

    return {
        Init: Init
    };

})();
$(document).ready(CVModule.Init);
