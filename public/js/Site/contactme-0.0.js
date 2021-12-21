/* Script to view Site/user/contactme */
"use strict"

var ContactMeModule = (function () {

    var GlobalSection = {
        // Variables _______________________________________________________
        ContacteMeResult: null,
        // Controls  _______________________________________________________
        AlertContainer: $("#AlertContainer"),
        TemplateAlert: $("#TemplateAlert"),
        Container: $("#AlertContainer"),
        // Functions _______________________________________________________
        ShowAlertConainer: function (response) {
            var template = GlobalSection.TemplateAlert.html();
            var response = response;
            var container = GlobalSection.Container;

            template = template.replace(/<!--Message-->/ig, response.message);

            if (!response.hasError) {
                template = template
                .replace(/!class_type/ig, "alert-success")
                .replace(/!class_icon/ig, "fa-thumbs-o-up");
            } else {
                template = template
                .replace(/!class_type/ig, "alert-danger")
                .replace(/!class_icon/ig, "fa-thumbs-o-down");
            }
            container.append(template);
        }, 
        CleanControls:function(){
            // clean the controls
            ContactMeSection.Email.val("");
            ContactMeSection.Message.val("");
            ContactMeSection.Issue.val("");

            ConfigurationModule.FormValidatedClassRemove(ContactMeSection.Form);
        }
    };

    var ContactMeSection = {
        // Variables _______________________________________________________
        //nothing
        // Controls  _______________________________________________________
        Form: $("#ContactMeForm")[0],
        Button: $("#SaveComment"),
        Email: $("#EmailCommentControl"),
        Message: $("#MessageCommentControl"),
        Issue: $("#IssueCommentControl"),
        // Functions _______________________________________________________
        FormValidate: function () {
            return ConfigurationModule.FormCheckValidity(ContactMeSection.Form);
        },
        GetValues: function () {
            return {
                Id: ConfigurationModule.NewGuid(),
                Email: ContactMeSection.Email.val(),
                Issue: ContactMeSection.Issue.val(),
                Message: ContactMeSection.Message.val(),
            }
        }
    };

    var PageworkFlow = {

        SaveMsgContact: function () {
            if (ContactMeSection.FormValidate()) {

                ContactMeSection.Button.attr("disabled",true);

                var dataRequest = ContactMeSection.GetValues();

                var contactmePostPromise = ConfigurationModule.AjaxSendPost('addMessage', dataRequest);

                contactmePostPromise.then(function (serviceResponse) {

                    if (!serviceResponse.hasError) {

                        GlobalSection.CleanControls();

                        GlobalSection.ShowAlertConainer(serviceResponse);
                    }else{
                        GlobalSection.ShowAlertConainer(serviceResponse);
                    }

                    ContactMeSection.Button.attr("disabled",false);

                })
            }
        }
    }

    var Init = function () {

        ContactMeSection.Button.off("click").click(PageworkFlow.SaveMsgContact);
    };

    return {
        Init: Init,
    }

}());

$(document).ready(ContactMeModule.Init);
