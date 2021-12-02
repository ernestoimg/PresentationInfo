/* Script to view Site/Index */
"strict mode";

var ListingModule = (function () {

    var GlobalSection = {
        // Controls  _______________________________________________________
        //nothing
        // Controls  _______________________________________________________
        //nothing
        // Functions _______________________________________________________
        GetProjectId: function () {

            var arrayURL = window.location.pathname.split('/');

            return arrayURL[arrayURL.length - 1];
        }

    }

    var ProjectDetailSection = {
        // Variables _______________________________________________________
        ProjectDetails: null,
        // Controls  _______________________________________________________
        ProjectAlias: $("#ProjectAlias"),
        ProjectDescription: $("#ProjectDescription"),
        ProjectCompany: $("#ProjectCompany"),
        ProjectType: $("#ProjectType"),
        ProjectDetail: $("#ProjectDetail"),
        GitTemplate: $("#TemplateProjectPreview"),
        GitContainer: $("#ProjectReviewContainer"),
        // Functions _______________________________________________________
        LoadTemplate: function () {

            // Get the project info
            var projectInfo = ProjectDetailSection.ProjectDetails;

            //Get the template
            var gitTemplate = ProjectDetailSection.GitTemplate.html();

            gitTemplate = gitTemplate.replace(/!token/ig, projectInfo.Id);

            // Set the values to the controls
            ProjectDetailSection.ProjectAlias.text(projectInfo.Alias);
            ProjectDetailSection.ProjectDescription.text(projectInfo.ProjectName);
            ProjectDetailSection.ProjectCompany.text(projectInfo.Company);
            ProjectDetailSection.ProjectType.text(projectInfo.ProjectType);
            ProjectDetailSection.ProjectDetail.text(projectInfo.Description);

            if (projectInfo.GitUrl != "") {
                ProjectDetailSection.GitContainer.append(gitTemplate);

                var projectUrlGitControl = $(`#ProjectUrlGit_${projectInfo.Id}`);
                var projectUrlControl = $(`#ProjectUrl_${projectInfo.Id}`);

                projectUrlControl.attr("href", projectInfo.Url);
                projectUrlGitControl.attr("href", projectInfo.GitUrl);
            }

            if (projectInfo.Url == "") {
                var projectUrlControl = $(`#ProjectUrl_${projectInfo.Id}`);

                projectUrlControl.text("No Aplica");
                projectUrlControl.attr("href", "javascript:void(0);");
            }

            ProjectTecnologySection.LoadTemplate();
        }
    }

    var ProjectTecnologySection = {
        // Variables _______________________________________________________
        ProjectTools: null,
        // Controls  _______________________________________________________
        Template: $("#TemplateToolItem"),
        Container: $("#ListTecnology"),

        // Functions _______________________________________________________
        LoadTemplate: function () {
            var projectId = GlobalSection.GetProjectId();

            var projectToolsGetPromise = ConfigurationModule.AjaxSendGet(`ProjectTools/${projectId}`);

            projectToolsGetPromise.then(function (serviceResponse) {

                if (serviceResponse.length > 0) {
                    ProjectTecnologySection.ProjectTools = serviceResponse;
                    var projectTools = serviceResponse;

                    ProjectTecnologySection.Container.empty();

                    for (var item = 0; item < projectTools.length; item++) {
                        // Get the current Item
                        var currentItem = projectTools[item];

                        var template = ProjectTecnologySection.Template.html();

                        template = template.replace(/!token/ig, currentItem.Id);

                        ProjectTecnologySection.Container.append(template);

                    }

                    ProjectTecnologySection.BindControls();
                }
                ProjectCarouselSection.LoadTemplate();
            });
        },
        BindControls: function () {
            var projectTools = ProjectTecnologySection.ProjectTools;

            for (var item = 0; item < projectTools.length; item++) {
                // Get the current item
                var currentItem = projectTools[item];
                var starts = "";

                // Get the controls 
                var projectIconTool = $(`#ProjectIconTool_${currentItem.Id}`);
                var projectToolName = $(`#ProjectToolName_${currentItem.Id}`);
                var projectDetailOfUse = $(`#DetailOfUse_${currentItem.Id}`);
                var projectUseTimeInMonths = $(`#UseTimeInMonths_${currentItem.Id}`);
                var projectRatingUse = $(`#RatingUse_${currentItem.Id}`);;

                // Bind the controls
                projectIconTool.attr("src", "data:image/png;base64," + currentItem.IconTool);
                projectToolName.text(currentItem.ToolName);
                projectDetailOfUse.text(currentItem.DetailOfUse);
                projectUseTimeInMonths.text("Tiempo de uso: " + currentItem.UseTimeInMonths + " Meses");

                for (var number = 0; number < currentItem.NivelQualification; number++) {
                    starts += `<i class="fa fa-star" aria-hidden="true"></i>`;
                }

                projectRatingUse.append(starts);

                starts = "";
            }
            
        }

    }

    var ProjectCarouselSection = {
        // Variables _______________________________________________________
        ProjectCarousel: null,
        // Controls  _______________________________________________________
        Template: $("#TemplateCarouselImages"),
        Container: $("#ProjectImageContainer"),
        // Functions _______________________________________________________
        LoadTemplate: function () {
            var projectId = GlobalSection.GetProjectId();

            var projectImageGetPromise = ConfigurationModule.AjaxSendGet(`ProjectImages/${projectId}`);

            projectImageGetPromise.then(function (serviceResponse) {

                if (serviceResponse.length > 0) {
                    ProjectCarouselSection.ProjectCarousel = serviceResponse;

                    for (var item = 0; item < serviceResponse.length; item++) {
                        var currentItem = serviceResponse[item];

                        var template = ProjectCarouselSection.Template.html();

                        template = template.replace(/!token/ig, currentItem.Id);

                        ProjectCarouselSection.Container.append(template);

                    }
                    ProjectCarouselSection.BindControls();
                }

            });
        },
        BindControls: function () {
            var projectImages = ProjectCarouselSection.ProjectCarousel;

            for (var item = 0; item < projectImages.length; item++) {
                var currentItem = projectImages[item];

                // get the controls 
                var imageControl = $(`#image_${currentItem.Id}`);
                var carouselItemControl = $(`#carouselItem_${currentItem.Id}`);


                // Bind the controls 
                imageControl.attr("src", "data:image/png;base64," + currentItem.Image);

                if (item == 0) {
                    carouselItemControl.addClass("active");
                }
            }
        }
    }

    var PageworkFlow = {

        ConsultProjectDetail: function () {

            var projectId = GlobalSection.GetProjectId();

            var ProjectDetailGetPromise = ConfigurationModule.AjaxSendGet(`GetWithDetail/${projectId}`);

            ProjectDetailGetPromise.then(function (serviceResponse) {

                ProjectDetailSection.ProjectDetails = serviceResponse[0];

                ProjectDetailSection.LoadTemplate();
            });
        }
    }

    var Init = function () {

        PageworkFlow.ConsultProjectDetail();


    }

    return {
        Init: Init
    }

})();
$(document).ready(ListingModule.Init);
