/* Script to view Site/Index */
"strict mode";

var IndexModule = (function () {

    // Encapsulate the GlobalSection
    var GlobalSection = {
        // Variables _______________________________________________________
        PersonalInfo: null,
        // Controls  _______________________________________________________
        IconPause: $("#ElemIconPause"),
        PauseIconCarousel: $("#PauseIconCarousel"),
        ChatBox: $(".chatbox"),
        ChatBoxTitle: $(".chatbox__title"),
        ChatboxTitleClose: $(".chatboxTitleClose"),
        ChatboxCredentials: $(".chatbox__credentials"),
        ChatboxBody:$(".chatbox__body"),
        SendCommentChatBox: $("#SendCommentChatBox"),
        MessageChatBox: $("#MessageChatBox"),
        TemplateResponseClient: $("#TemplateResponseClient"),
        TemplateResponseIMG: $("#TemplateResponseIMG"),
        // Functions _______________________________________________________
        ChangeIcon: function (event) {
            var control = $(`#${event.target.id}`);
            var id = control.data("WorkExpId");
            if (id == undefined) {
                id = event.currentTarget.id.substring(event.currentTarget.id.indexOf("_") + 1, event.currentTarget.id.length);
            }
            var workexperiences = WorkExperiencesSection.WorkExperiences;

            workexperiences = workexperiences.filter(element => {
                return element.Id != id;
            });

            // Loop through worlExperiences
            for (var item = 0; item < workexperiences.length; item++) {
                // get the current item 
                var currentItem = workexperiences[item];

                var buttonElement = $(`#ElemIconPause_${currentItem.Id}`);

                if (buttonElement.hasClass("fa-pause")) {
                    buttonElement.removeClass("fa-pause").addClass("fa-play");
                } else {
                    buttonElement.removeClass("fa-play").addClass("fa-pause");
                }

                buttonElement.off("click").click(GlobalSection.ChangeIcon);
            }

            if (control.hasClass("fa-pause")) {
                control.removeClass("fa-pause").addClass("fa-play");
                WorkExperiencesSection.Container.trigger('stop.owl.autoplay');
                buttonElement.off("click").click(GlobalSection.ChangeIcon);
                return;
            }

            if (control.hasClass("fa-play")) {
                control.removeClass("fa-play").addClass("fa-pause");
                WorkExperiencesSection.Container.trigger('play.owl.autoplay', [7000]);
                buttonElement.off("click").click(GlobalSection.ChangeIcon);
                return;
            }


        }
    };


    var PersonalInfoSection = {
        // Variables _______________________________________________________
        //nothing
        // Controls  _______________________________________________________
        FullNameTitle: $("#FullNameTitle"),
        ProfessionTitle: $("#ProfessionTitle"),
        // Functions _______________________________________________________
        BindControls: function () {
            // Get the persona info
            var personaInfo = GlobalSection.PersonalInfo;

            // Bind the values to the controls
            PersonalInfoSection.FullNameTitle.text(personaInfo.Name.concat(" ", personaInfo.FirstName, " ", personaInfo.SecondName));
            PersonalInfoSection.ProfessionTitle.text(personaInfo.AcademicGrade.concat(" en ", personaInfo.Profession));

            // 

            HobbiesSection.LoadTemplate();
        }
    }

    var HobbiesSection = {
        // Variables _______________________________________________________
        HobbiesActive: null,
        // Controls  _______________________________________________________
        Container: $("#ContainerHobbies"),
        Template: $("#TemplateHobby"),
        // Functions _______________________________________________________
        LoadTemplate: function () {
            var HobbiesGetPromise = ConfigurationModule.AjaxSendGet("Hobbies");

            HobbiesGetPromise.then(function (serviceResponse) {
                HobbiesSection.HobbiesActive = serviceResponse;

                var activeHobbies = serviceResponse;

                // Loop through activeHobbies items
                for (var item = 0; item < activeHobbies.length; item++) {
                    // get the item
                    var hobby = activeHobbies[item];

                    var template = HobbiesSection.Template.html();

                    template = template
                        .replace(/!token/ig, hobby.Id);

                    HobbiesSection.Container.append(template);
                }

                // 
                HobbiesSection.BindControls();
            });
        },
        BindControls: function () {
            // Get the Active Hobbies 
            var activeHobbies = HobbiesSection.HobbiesActive;

            // Loop thought the items in hobby 
            for (var i = 0; i < activeHobbies.length; i++) {
                // Get the item 
                var item = activeHobbies[i];

                // Get the controls 
                var iconControl = $(`#icon_${item.Id}`);
                var nameControl = $(`#name_${item.Id}`);

                // Bind controls 
                iconControl.append(item.IconName);
                nameControl.text(item.HobbieName);
            }

            // Call LoadTemplate function in ProjectSection
            ProjectSection.LoadTemplate();
        }
    }

    var ProjectSection = {
        // Variables _______________________________________________________
        Projects: null,
        // Controls  _______________________________________________________
        TemplateHeader: $("#TemplateHeaderProyect"),
        TemplateBody: $("#TemplateDetailProyect"),
        MenuProjectContainer: $("#MenuProjectContainer"),
        DetailProjectContainer: $("#DetailProjectContainer"),
        // Functions _______________________________________________________
        LoadTemplate: function () {
            var projectGetPromise = ConfigurationModule.AjaxSendGet("Projects");

            projectGetPromise.then(function (serviceReponse) {
                ProjectSection.Projects = serviceReponse;

                for (var projectItem = 0; projectItem < serviceReponse.length; projectItem++) {
                    // Get the project Info
                    var projectInfo = serviceReponse[projectItem];

                    var templateMenu = ProjectSection.TemplateHeader.html();
                    var templateBody = ProjectSection.TemplateBody.html();

                    templateMenu = templateMenu.replace(/!token/ig, projectInfo.Id);
                    templateBody = templateBody.replace(/!token/ig, projectInfo.Id);

                    ProjectSection.MenuProjectContainer.append(templateMenu);
                    ProjectSection.DetailProjectContainer.append(templateBody);
                }

                ProjectSection.BindControls();
            });
        },
        BindControls: function () {
            var projectsInfo = ProjectSection.Projects;

            for (var projectItem = 0; projectItem < projectsInfo.length; projectItem++) {
                // Get the projectInfo
                var projectInfo = projectsInfo[projectItem];

                // Get the controls 
                var IconControl = $(`#icon_${projectInfo.Id}`);
                var AliasControl = $(`#alias_${projectInfo.Id}`);
                var TitleControl = $(`#title_${projectInfo.Id}`);
                var Description = $(`#description_${projectInfo.Id}`);
                var Image = $(`#image_${projectInfo.Id}`);

                IconControl.append(projectInfo.Icon);
                AliasControl.text(projectInfo.Alias);
                TitleControl.text(projectInfo.ProjectName);
                Description.text(projectInfo.Description);
                Image.attr('src', "data:image/jpg;base64," + projectInfo.Image);

            }
            // Add the active class to first Control
            ProjectSection.MenuProjectContainer.children().first().addClass('active');
            ProjectSection.DetailProjectContainer.children().first().addClass("active");

            // Call LoadTemplate function in CoursesSection
            CoursesSection.LoadTemplate();

        }
    }

    var CoursesSection = {
        // Variables _______________________________________________________
        Courses: null,
        // Controls  _______________________________________________________
        TemplateItem: $("#TemplateCourseItem"),
        TemplateRow: $("#TemplateRowItem"),
        TemplateCarouse: $("#TemplateCarousel"),
        ContainerGroupItem: $("#ContainerGroupItem"),
        MainCarousel: $("#MainCarousel"),
        OwlList: $(".owl-listing"),
        // Functions _______________________________________________________
        LoadTemplate: function () {
            var coursesGetPromise = ConfigurationModule.AjaxSendGet("Courses");

            coursesGetPromise.then(function (serviceResponse) {
                // Get the serviceResponse to global variable
                CoursesSection.Courses = serviceResponse;
                var countItem = 0;
                var templateItemCourse = "";
                var bodyCarouse = "";
                var templateCarouse = CoursesSection.TemplateCarouse.html();

                for (var item = 0; item < serviceResponse.length; item++) {

                    countItem += 1;
                    // Get the current course item
                    var currentCourseItem = serviceResponse[item];

                    templateItemCourse += CoursesSection.TemplateItem.html();

                    templateItemCourse = templateItemCourse.replace(/!token/ig, currentCourseItem.Id);

                    //if (countItem % 3 == 0) {
                    var templateRow = CoursesSection.TemplateRow.html();
                    templateRow = templateRow.replace(/<!--container-->/ig, templateItemCourse);
                    bodyCarouse += templateRow;
                    countItem = 0;
                    templateItemCourse = "";
                    //}
                }
                /*
                if (countItem >= 1) {
                    var templateRow = CoursesSection.TemplateRow.html();

                    templateRow = templateRow.replace(/<!--container-->/ig, templateItemCourse);

                    bodyCarouse += templateRow;
                }*/

                templateCarouse = templateCarouse.replace(/<!--carousel-->/ig, bodyCarouse);

                CoursesSection.MainCarousel.append(templateCarouse);

                CoursesSection.BindControls();
            });
        },
        BindControls: function () {
            var courses = CoursesSection.Courses;

            for (var item = 0; item < courses.length; item++) {
                var currentCourse = courses[item];

                // Get Controls
                var schoolNameControl = $(`#CourseSchoolName_${currentCourse.Id}`);
                var courseIMGControl = $(`#CourseIMG_${currentCourse.Id}`);
                var coursePeriodControl = $(`#CoursePeriod_${currentCourse.Id}`);
                var courseTitleControl = $(`#CourseTitle_${currentCourse.Id}`);
                var courseMethodTitleControl = $(`#CourseMethodTitle_${currentCourse.Id}`);
                var courseIconProjectControl = $(`#CourseIconProject_${currentCourse.Id}`);
                var courseMethodTitleControl = $(`#CourseMethodTitle_${currentCourse.Id}`);
                var courseTitleProjectControl = $(`#CourseTitleProject_${currentCourse.Id}`);
                var courseDescriptionControl = $(`#CourseDescription_${currentCourse.Id}`);

                schoolNameControl.text(currentCourse.SchoolName);
                courseIMGControl.attr('src', "data:image/jpg;base64," + currentCourse.ImageCourse);
                coursePeriodControl.text(new Date(currentCourse.StartPeriod).getFullYear() + " - " + new Date(currentCourse.EndPeriod).getFullYear());
                courseTitleControl.text(currentCourse.Title);
                courseMethodTitleControl.text(currentCourse.MethodTitle);
                courseIconProjectControl.append(currentCourse.Icon.replace(/fa-3x/ig, "fa-2x"));
                courseMethodTitleControl.text(currentCourse.MethodTitle);
                courseTitleProjectControl.text(" Proyecto: " + currentCourse.ProjectName);
                courseDescriptionControl.append(currentCourse.Description);
            }

            WorkExperiencesSection.LoadTemplate();
        }
    }

    var WorkExperiencesSection = {
        // Variables _______________________________________________________
        WorkExperiences: null,
        // Controls  _______________________________________________________
        Template: $("#TemplateWorkExp"),
        Container: $("#carousel-content"),
        // Functions _______________________________________________________ 
        LoadTemplate: function () {
            var workExperiencesGetPromise = ConfigurationModule.AjaxSendGet('WorkExperiences');

            workExperiencesGetPromise.then(function (serviceReponse) {

                if (serviceReponse.length > 0) {
                    var dataResponse = serviceReponse;
                    WorkExperiencesSection.WorkExperiences = serviceReponse;

                    for (var i = 0; i < dataResponse.length; i++) {
                        // Get the currentItem
                        var currentWorkExp = dataResponse[i];

                        var template = WorkExperiencesSection.Template.html();

                        template = template.replace(/!token/ig, currentWorkExp.Id);

                        WorkExperiencesSection.Container.append(template);
                    }

                    WorkExperiencesSection.BindControls();
                }
            });
        },
        BindControls: function () {
            var workExperiences = WorkExperiencesSection.WorkExperiences;
            const MonthName = ["ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGT", "SEPT", "OCT", "NOV", "DIC"];

            for (var i = 0; i < workExperiences.length; i++) {
                // Get the current item
                var currentItem = workExperiences[i];

                // Get the controls 
                var workExpTitleControl = $(`#workExpTitle_${currentItem.Id}`);
                var workExpDescControl = $(`#workExpDesc_${currentItem.Id}`);
                var workExpCicleControl = $(`#workExpCicle_${currentItem.Id}`);
                var workExpCorpControl = $(`#workExpCorp_${currentItem.Id}`);
                var elemIconPauseControl = $(`#ElemIconPause_${currentItem.Id}`);

                // Set the values the controls 
                workExpTitleControl.text(currentItem.JobTitle);
                workExpDescControl.text(currentItem.FunctionDescription);
                workExpCicleControl.text(MonthName[new Date(currentItem.StartDate).getMonth()] + " " + new Date(currentItem.StartDate).getFullYear() + " - " +
                    MonthName[new Date(currentItem.EndDate).getMonth()] + " " + new Date(currentItem.EndDate).getFullYear()
                );
                workExpCorpControl.text(currentItem.Company);

                elemIconPauseControl.data("WorkExpId", currentItem.Id);
                elemIconPauseControl.off("click").click(elemIconPauseControl, GlobalSection.ChangeIcon);
            }

            WorkExperiencesSection.Container.owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                responsiveClass: true,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true
            });
        }
    }

    var Pageworkflow = {
        ConsultPersonalInfo: function () {
            var PersonalInfoGetPromise = ConfigurationModule.AjaxSendGet("PersonaInfo");

            PersonalInfoGetPromise.then(function (serviceResponse) {
                // Assign the serviceResponse to Global variable
                GlobalSection.PersonalInfo = serviceResponse;

                // Bind the controls
                PersonalInfoSection.BindControls();
            });
        },
        ToggleChatBox: function () {
            GlobalSection.ChatBox.toggleClass('chatbox--tray');
            GlobalSection.ChatBox.removeClass('chatbox--empty');
        },
        CloseChatBox: function (e) {
            e.stopPropagation();
            GlobalSection.ChatBox.addClass('chatbox--closed');
        },
        TransitionedChatBox: function () {
            if (GlobalSection.ChatBox.hasClass('chatbox--closed'))
                GlobalSection.ChatBox.remove();
        },
        CredentialsChatBox: function (e) {
            e.preventDefault();

        },
        SendCommentChatBox: function () {
            var message = GlobalSection.MessageChatBox.val();

            if (Boolean(message)) {
                var template = GlobalSection.TemplateResponseClient.html();

                template = template.replace(/<!--Message-->/ig,message);

                GlobalSection.ChatboxBody.append(template);

                GlobalSection.MessageChatBox.val("");
            }

        }
    }

    var Init = function () {
        Pageworkflow.ConsultPersonalInfo();

        // Set the events to the controls
        GlobalSection.ChatBoxTitle.on("click").click(Pageworkflow.ToggleChatBox);
        GlobalSection.ChatboxTitleClose.on("click").click(Pageworkflow.CloseChatBox);
        GlobalSection.ChatBox.on('transitionend', function () {
            Pageworkflow.TransitionedChatBox();
        });
        GlobalSection.ChatboxCredentials.on('click').click(Pageworkflow.CredentialsChatBox);

        GlobalSection.SendCommentChatBox.on('click').click(Pageworkflow.SendCommentChatBox);
    };

    return {
        Init: Init,
    }

})();
$(document).ready(IndexModule.Init);
