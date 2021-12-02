<?php

use Illuminate\Database\Seeder;

use App\Models\Hobbies;
use App\Models\PersonalInformation;
use App\Models\Projects;
use App\Models\Education;
use App\Models\ProjectTools;
use App\Models\ProjectImageListModel;
use App\Models\WorkExperienceModel;
use App\Classes\GuidRandomGenerate;
use Illuminate\Support\Arr;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

use Database\Seeders\ProjectTool;

class DatabaseSeeder extends Seeder
{
    public $dir = null;

    public function getId()
    {
        return $this->dir;
    }

    public function setId($dir)
    {
        $this->dir = $dir;
    }

    function __construct()
    {
        $this->dir = base_path();
    }

  

    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        $directory = $this->dir . "\public\images\proyectos";
        $newGuidGen = new GuidRandomGenerate;
        

        // Add info to Hobbies table
        Hobbies::create(['Id' => $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)), 'HobbieName' => 'Soccer', 'IsVisible' => '1', 'IconName' => '<i class="fa fa-futbol-o fa-3x" aria-hidden="true"></i>']);
        Hobbies::create(['Id' => $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)), 'HobbieName' => 'Caminar', 'IsVisible' => '1', 'IconName' => '<i class="fa fa-road fa-3x" aria-hidden="true"></i>']);
        Hobbies::create(['Id' => $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)), 'HobbieName' => 'Conciertos', 'IsVisible' => '1', 'IconName' => '<i class="fa fa-users fa-3x" aria-hidden="true"></i>']);
        Hobbies::create(['Id' => $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)), 'HobbieName' => 'Bailar', 'IsVisible' => '1', 'IconName' => '<i class="fa fa-music fa-3x" aria-hidden="true"></i>']);
        Hobbies::create(['Id' => $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)), 'HobbieName' => 'Viajar', 'IsVisible' => '1', 'IconName' => '<i class="fa fa-plane fa-3x" aria-hidden="true"></i>']);
        Hobbies::create(['Id' => $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)), 'HobbieName' => 'Leer', 'IsVisible' => '1', 'IconName' => '<i class="fa fa-book fa-3x" aria-hidden="true"></i>']);

        // Add info to PersonalInfo table
        PersonalInformation::create(['Id' => $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)), 'Name' => 'Ernesto Iván', 'FirstName' => 'Martínez', 'SecondName' => 'García', 'CURP' => 'MAGE950415HPLRRR08', 'Address' => 'Nogal #27 Col. Bosques de Manzanilla', 'CP' => '32767', 'BirthDay' => '15', 'BirthMonth' => '04', 'BirthYear' => '1995', 'LicenseNumber' => '', 'Nationality' => 'Méxicana', 'Email' => 'ivan.2015.puebla@gmail.com', 'MaritalStatus' => 'Soltero', 'Profession' => 'Tecnologías de la Información', 'AcademicGrade' => 'Ingeniería']);

        $project0 = new ProjectCollection;
        $project0->Id = 'f2ab91a1-11fc-473b-b1c3-4fb804bf2cb4';
        $project0->Alias = "Evoticket";
        $project0->ProjectName = "ADECUACIÓN DE SISTEMA FAVEO EVOTICKET";
        $project0->Description = "Publicación en Hosting GoDaddy y adaptación del sistema de FAVEO en versión gratuita en hosting GODADDY,así como adición de funcionalidades especificas para levantamiento de TICKET para el área de sistemas EVOLUCIONE.";
        $project0->Icon = '<i class="fa fa-ticket fa-3x mt-2" aria-hidden="true"></i>';
        $project0->IsVisible = '1';
        $project0->Company = "EVOLUCIONE";
        $project0->ProjectType = "WEB";
        $project0->Url = "https://evoticket.evolucione.mx/public/";
        $project0->GitUrl = "https://github.com/ernestoimg/Evoticket.git";
        $project0->Abr = "EVT";

        $project1 = new ProjectCollection;
        $project1->Id = 'f5fb34a5-2fe1-4668-9bce-11a64b2ca6d9';
        $project1->Alias = "Contpaq";
        $project1->ProjectName = "MIGRACIÓN DE SISTEMA CONTPAQ DE EVOLUCIONE";
        $project1->Description = "Lider y operador de cambio de servidor para alojamiento del sistema CONTPAQ en sus módulos de Nóminas, Contabilidad y Comercial, así como translado de información historica almacenada en SQL SERVER, servicios y corrección de errores durante la operación en nuevo servidor";
        $project1->Icon = '<i class="fa fa-desktop fa-3x mt-2" aria-hidden="true"></i>';
        $project1->IsVisible = '1';
        $project1->Company = "EVOLUCIONE";
        $project1->ProjectType = "ESCRITORIO";
        $project1->Url = "";
        $project1->GitUrl = "";
        $project1->Abr = "CPQ";


        $project2 = new ProjectCollection;
        $project2->Id = 'cbbc25df-1e2e-4894-a005-3f72f7fef690';
        $project2->Alias = "Monitor";
        $project2->ProjectName = "DESARROLLO DE APLICACIÓN PARA MONITOREO DE SERVIDORES";
        $project2->Description = "Lider y desarrollador de software mediante C# y Powershell para la obtención de registros del Visor de Eventos de Windows y carga de información en SQL Server, con el proposito de mostrar errores y ejecuciones de los servicios de las aplicaciones de Facturación, cálculo de nómina y reclutamiento de la organización así como la graficación de datos en PowerBI";
        $project2->Icon = '<i class="fa fa-file-text-o fa-3x mt-2" aria-hidden="true"></i>';
        $project2->IsVisible = '1';
        $project2->Company = "EVOLUCIONE";
        $project2->ProjectType = "ESCRITORIO";
        $project2->Url = "";
        $project2->GitUrl = "https://github.com/ernestoimg/MonitorServidores.git";
        $project2->Abr = "MON";

        $project3 = new ProjectCollection;
        $project3->Id = '52ca0905-fb39-4a45-896c-cd15d0b42d0e';
        $project3->Alias = "Planner";
        $project3->ProjectName = "DESARROLLO DE SISTEMA WEB PLANNER";
        $project3->Description = "Encargado de desarrollo FrontEnd en sistema diseñado para captura de platillos por días naturales y tiempos de comida creado en C#ASP.net. Se desarrollarón reglas de validación, así como animaciones y obtención de datos desde estructuras JSON con JQuery y JavaScript. Adicionalmente se agregarón alertas para informar sobre los errores en la captura de datos del usuario";
        $project3->Icon = '<i class="fa fa-calendar fa-3x mt-2" aria-hidden="true"></i>';
        $project3->IsVisible = '1';
        $project3->Company = "EUREST";
        $project3->ProjectType = "WEB";
        $project3->Url = "";
        $project3->GitUrl = "";
        $project3->Abr = "PLN";

        $project4 = new ProjectCollection;
        $project4->Id = '2aa39b8d-09e9-499a-b5a9-3971a5db2775';
        $project4->Alias = "Ecommerce";
        $project4->ProjectName = "DESARROLLO DE SISTEMA WEB ECOMMERCE";
        $project4->Description = "Desarrollo un sistema de Ecommerce para la empresa Eurest,donde ejecuto las funciones de desarrollo Frontend con JQuery Organization y consumo de recursos de servicios API, adicionalmente se diseñan las plantillas con Bootstrap 5";
        $project4->Icon = '<i class="fa fa-shopping-cart fa-3x mt-2" aria-hidden="true"></i>';
        $project4->IsVisible = '1';
        $project4->Company = "EUREST";
        $project4->ProjectType = "WEB";
        $project4->Url = "";
        $project4->GitUrl = "";
        $project4->Abr = "ECM";

        $project5 = new ProjectCollection;
        $project5->Id = 'e6bf7b3c-e000-4180-b270-320ffb621656';
        $project5->Alias = "Chorus";
        $project5->ProjectName = "DESARROLLO DE SISTEMA WEB CHORUS";
        $project5->Description = "Desarrollo de sistema diseñado para generación de servicios de transalado de turistas a sus hoteles en zona de Cancún para las empresas SMART & SHUTTLES Y SMILE N GO. El sistema está diseñado en Angular 10 y ASP.Net Core 3 (API Rest)";
        $project5->Icon = '<i class="fa fa-taxi fa-3x mt-2" aria-hidden="true"></i>';
        $project5->IsVisible = '1';
        $project5->Company = "TEIA";
        $project5->ProjectType = "WEB";
        $project5->Url = "https://devpdvportal.azurewebsites.net/login";
        $project5->GitUrl = "https://github.com/ernestoimg/Corus.git";
        $project5->Abr = "CHR";

        $project6 = new ProjectCollection;
        $project6->Id = '9acac9a1-d39b-4427-a9df-866d7bbfdf87';
        $project6->Alias = "DevOPS";
        $project6->ProjectName = "Migracion de proyectos TFS a Azure DEVOPS Cloud";
        $project6->Description = "Planeación y ejecución de migración de proyectos de HDI almacenados en TFS On-Premise a suscripción de Azure DevOPs, así como aplicación de políticas, grupos de usuarios y revisión de cambios de los proyectos.";
        $project6->Icon = '<i class="fa fa-code fa-3x mt-2" aria-hidden="true"></i>';
        $project6->IsVisible = '1';
        $project6->Company = "TEIA";
        $project6->ProjectType = "IAAS";
        $project6->Url = "";
        $project6->GitUrl = "";
        $project6->Abr = "DEV";

        $project7 = new ProjectCollection;
        $project7->Id = '4825b347-565b-40a6-a75b-b6ba95063163';
        $project7->Alias = "Gestión de Cursos";
        $project7->ProjectName = "Gestión de cursos para trabajadores de Federal Mogul";
        $project7->Description = "Creación y diseño de Software en VisualBasic.Net para la gestión de cursos por parte de los operadores de la planta Federal Mogul, además de la gestión de la información de empleados. Modificación de los registros de la Base de Datos SQL Server de los cursos de los empleados";
        $project7->Icon = '<i class="fa fa-id-card-o fa-3x mt-2" aria-hidden="true"></i>';
        $project7->IsVisible = '0';
        $project7->Company = "FEDERAL MOGUL";
        $project7->ProjectType = "ESCRITORIO";
        $project7->Url = "";
        $project7->GitUrl = "";
        $project7->Abr = "CRS";

        $project8 = new ProjectCollection;
        $project8->Id = '457fb84e-36d5-4bdb-b3b3-19f3e540843a';
        $project8->Alias = "OpenStack";
        $project8->ProjectName = "Creación de Nube OpenStack";
        $project8->Description = "Creación de nube Opensatck en servidor Red Hat, así como mantenimiento de switches Cisco y creación de instancias en Ubunto y NetApp Cluster para integrar en el sistema.";
        $project8->Icon = '<i class="fa fa-cloud fa-3x mt-2" aria-hidden="true"></i>';
        $project8->IsVisible = '0';
        $project8->Company = "T-SYSTEMS";
        $project8->ProjectType = "IAAS";
        $project8->Url = "";
        $project8->GitUrl = "";
        $project8->Abr = "OSK";

        $project9 = new ProjectCollection;
        $project9->Id = 'e8d2b3a3-8c7f-4acb-94ab-26c843541ad2';
        $project9->Alias = "Auditorías";
        $project9->ProjectName = "Auditor Interno ISO 9001";
        $project9->Description = "Generación de reuniones, sesiones y auditorías de revisión para cumplimiento interno de los procesos, procedimientos y estandares de la empresa Evolucione.";
        $project9->Icon = '<i class="fa fa-tasks fa-3x mt-2" aria-hidden="true"></i>';
        $project9->IsVisible = '0';
        $project9->Company = "EVOLUCIONE";
        $project9->ProjectType = "AUDITORÍA";
        $project9->Url = "";
        $project9->GitUrl = "";
        $project9->Abr = "CAL";

        $project10 = new ProjectCollection;
        $project10->Id = 'da7fec94-b144-4ad6-90c1-f480e8d62861';
        $project10->Alias = "Auditorías";
        $project10->ProjectName = "Auditor Interno ISO 27001:2015";
        $project10->Description = "Auditorías y evaluaciones de la seguridad de los servidores y los sistemas de la organización EVOLUCIONE.";
        $project10->Icon = '<i class="fa fa-shield fa-3x mt-2" aria-hidden="true"></i>';
        $project10->IsVisible = '0';
        $project10->Company = "EVOLUCIONE";
        $project10->ProjectType = "AUDITORÍA";
        $project10->Url = "";
        $project10->GitUrl = "";
        $project10->Abr = "SEG";

        $project11 = new ProjectCollection;
        $project11->Id = 'd431f226-e7a1-4048-b7e6-cb7cba44a730';
        $project11->Alias = "Miembro de la brigada organizacional";
        $project11->ProjectName = "Brigada contra incendios y primeros auxilios";
        $project11->Description = "Integrante de la brigada de primeros auxilios, rescate e incendios de la organización EVOLUCIONE.";
        $project11->Icon = '<i class="fa fa-plus-square fa-3x mt-2" aria-hidden="true"></i>';
        $project11->IsVisible = '0';
        $project11->Company = "EVOLUCIONE";
        $project11->ProjectType = "N/A";
        $project11->Url = "";
        $project11->GitUrl = "";
        $project11->Abr = "BRG";

        $project12 = new ProjectCollection;
        $project12->Id = "dd5fa12f-0e36-4060-96ef-b3a4dd29a17f";
        $project12->Alias = "Databrick";
        $project12->ProjectName = "Databricks Developer Foundations";
        $project12->Description = "Badge: <a href='https://credentials.databricks.com/e2ead26c-66f3-4d0f-89ef-bc257a7bba0b#gs.fllidc' style='word-wrap: break-word'>Consultar aqui:</a>";
        $project12->Icon = '<i class="fa fa-plus-square fa-3x mt-2" aria-hidden="true"></i>';
        $project12->IsVisible = '0';
        $project12->Company = "TEIA";
        $project12->ProjectType = "IAAS";
        $project12->Url = "";
        $project12->GitUrl = "";
        $project12->Abr = "DBC";

        $projects = array($project0, $project1, $project2, $project3, $project4, $project5, $project6, $project7, $project8, $project9, $project10, $project11, $project12);

        $count = 1;

        foreach ($projects as $project) {

            $files = scandir($directory);

            $base64 = '';

            if ($project->IsVisible == '1') {
                $path = base_path() . '\public\images\project-image-' . $count . '.jpg';
                $image = file_get_contents($path);
                $base64 = base64_encode($image);
            }


            // Add info to Project table 
            Projects::create([
                'Id' => $project->Id,
                'ProjectName' => $project->ProjectName,
                'Alias' => $project->Alias,
                'Icon' => $project->Icon,
                'Description' => $project->Description,
                'Image' => $base64,
                'Order' => $count,
                'IsVisible' => $project->IsVisible,
                'Company' => $project->Company,
                'ProjectType' => $project->ProjectType,
                "Url" => $project->Url,
                "GitUrl" => $project->GitUrl,
                "Abr" => $project->Abr
            ]);

            //$items = array_filter(array_keys($files),);

            foreach($files as $file ){
                $result = stripos($file,$project->Abr);
                if($result !== false){
                    $pathProjectImage = $directory."\\". $file;
                    $projectImage = file_get_contents($pathProjectImage);
                    $projectImageB64 = base64_encode($projectImage);

                    ProjectImageListModel::create([
                        "Id"=> $newGuidGen->guidv4(openssl_random_pseudo_bytes(16)),
                        "ProjectId"=>$project->Id,
                        "Image"=>$projectImageB64
                    ]);
                }
            }
            $count += 1;
        }


        $course1 = new CoursesCollection;
        $course1->Id = 'd9227057-8be4-48f2-9829-295f73c2e7ee';
        $course1->SchoolName = 'UNIVERSIDAD TECNOLÓGICA DE PUEBLA';
        $course1->Title = 'TÉCNICO EN TÉCNOLGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN';
        $course1->StartPeriod = "2013-07-02";
        $course1->EndPeriod = "2015-05-18";
        $course1->MethodTitle = "Practicas y estadías";
        $course1->ProjectId = "457fb84e-36d5-4bdb-b3b3-19f3e540843a";
        $course1->OrderItem = '1';

        $course2 = new CoursesCollection;
        $course2->Id = 'c59c256b-2bfd-4dd6-821c-2f3a12ce6e44';
        $course2->SchoolName = 'UNIVERSIDAD TECNOLÓGICA DE PUEBLA';
        $course2->Title = 'INGENIERÍA EN TÉCNOLGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN';
        $course2->StartPeriod = "2015-06-15";
        $course2->EndPeriod = "2017-04-24";
        $course2->MethodTitle = "Practicas y estadías";
        $course2->ProjectId = "4825b347-565b-40a6-a75b-b6ba95063163";
        $course2->OrderItem = '2';

        $course3 = new CoursesCollection;
        $course3->Id = '17640769-40a5-4928-b2f3-2342b145f1b7';
        $course3->SchoolName = 'EVOLUCIONE';
        $course3->Title = 'AUDITORIAS ISO 9001:2015';
        $course3->StartPeriod = "2017-06-12";
        $course3->EndPeriod = "2021-02-01";
        $course3->MethodTitle = "Auditorias";
        $course3->ProjectId = "e8d2b3a3-8c7f-4acb-94ab-26c843541ad2";
        $course3->OrderItem = '4';

        $course4 = new CoursesCollection;
        $course4->Id = '48d315c1-9c9d-4a58-bea7-cb48cb815949';
        $course4->SchoolName = 'EVOLUCIONE';
        $course4->Title = 'AUDITORIAS ISO 27001:2015';
        $course4->StartPeriod = "2019-06-12";
        $course4->EndPeriod = "2021-02-01";
        $course4->MethodTitle = "Auditorias";
        $course4->ProjectId = "da7fec94-b144-4ad6-90c1-f480e8d62861";
        $course4->OrderItem = '5';

        $course5 = new CoursesCollection;
        $course5->Id = '97e887ae-8f99-4c1e-bd51-2e2cb958b4b8';
        $course5->SchoolName = 'EVOLUCIONE';
        $course5->Title = 'BRIGADA DE PRIMEROS AUXILIOS';
        $course5->StartPeriod = "2019-02-04";
        $course5->EndPeriod = "2021-02-01";
        $course5->MethodTitle = "N/A";
        $course5->ProjectId = "d431f226-e7a1-4048-b7e6-cb7cba44a730";
        $course5->OrderItem = '3';

        $course6 = new CoursesCollection;
        $course6->Id = '';
        $course6->SchoolName = 'DATABRICKS';
        $course6->Title = 'DATABRICKS DEVELOPER FOUNDATIONS';
        $course6->StartPeriod = "2021-07-19";
        $course6->EndPeriod = "2021-08-01";
        $course6->MethodTitle = "Certificado - Badge";
        $course6->ProjectId = "dd5fa12f-0e36-4060-96ef-b3a4dd29a17f";
        $course6->OrderItem = '6';

        // 

        $courses = array($course1, $course2, $course3, $course4, $course5, $course6);

        $countCourses = 1;
        foreach ($courses as $course) {
            $base64CourseImage = '';

            $pathImageCourse = base_path() . '\public\images\course-image-' . $countCourses . '.jpg';
            $imageCourse = file_get_contents($pathImageCourse);
            $base64CourseImage = base64_encode($imageCourse);

            Education::create([
                'Id' => $course->Id,
                'SchoolName' => $course->SchoolName,
                'Title' => $course->Title,
                'StartPeriod' => $course->StartPeriod,
                'EndPeriod' => $course->EndPeriod,
                'MethodTitle' => $course->MethodTitle,
                'ProjectId' => $course->ProjectId,
                'ImageCourse' => $base64CourseImage,
                'OrderItem' => $course->OrderItem
            ]);

            $countCourses += 1;
        }

        WorkExperienceModel::create([
            "Id" => "96c3aecd-ea85-4169-b7be-0bce832019f6",
            "Company" => "EVOLUCIONE",
            "StartDate" => "2017-06-01",
            "EndDate" => "2021-01-29",
            "JobTitle" => "Ejecutivo de TI",
            "FunctionDescription" => "Desarrollo de sistemas web en Laravel,así como modificación y adaptabilidad a sistemas existentes de la empresa, migración de información 
             en SQL Server y MySQL, así como soporte y corrección de errores a sistemas contables Contpaqi, Fortia y Dynamics NAV,
             tanto fiscales como operativos. Realizo mantenimiento a equipos de cómputo portátil y de escritorio, además de implementar 
             servidores Windows y Linux, también fui encargado del desarrollo de un programa con PowerShell y C# para monitoreo de los servers.
             Adicionalemente se implemento graficas estadisticos con PowerBI para presentación de información de facturación y fallos 
             de los servidores requeridos por las normas ISO de la organización.",
            "Order" => "3"
        ]);

        WorkExperienceModel::create([
            "Id" => "78f412e3-b78d-4a00-bb55-62ab81aa9e24",
            "Company" => "Drym Inmobiliar",
            "StartDate" => "2017-03-06",
            "EndDate" => "2017-06-05",
            "JobTitle" => "AUXILIAR DE SISTEMA",
            "FunctionDescription" => "Desarrollo de mejoras en página oficial de la empresa en CodeIgniter y diseños de plantillas Bootstrap, así como encargado de soporte técnico e intalaciones de RED alambrica de la empresa",
            "Order" => "2"
        ]);

        WorkExperienceModel::create([
            "Id" => "07319596-ade9-445d-8446-d92a7ea9094f",
            "Company" => "Federal Mogul",
            "StartDate" => "2016-12-01",
            "EndDate" => "2017-03-06",
            "JobTitle" => "Practicas profesionales",
            "FunctionDescription" => "Creación y diseño de Software en Visual Basic.Net para la gestión de cursos por parte de los operadores de la planta Federal Mogul, además de la gestión de la información de empleados. Modificación de los registros de la Base de Datos SQL Server de los cursos de los empleados",
            "Order" => "1"
        ]);

        WorkExperienceModel::create([
            "Id" => "29ce62c9-7e5d-442d-87b3-1624fd95fa47",
            "Company" => "TEIA Consultoria",
            "StartDate" => "2021-02-08",
            "EndDate" => "2021-02-08",
            "JobTitle" => "Desarrollador JR Front-End",
            "FunctionDescription" => "Encargado de la programación Front-End [Angular 10], así como apoyo en proyecto de arquitectura de migración de proyectis en TFS a Azure DEVOPS Cloud para clientes de la organización. Manejo de bases de datos para consulta de información en SQL Server y CosmosDB ",
            "Order" => "4"
        ]);

        WorkExperienceModel::create([
            "Id" => "c6e06605-7eb2-4603-9c4d-39ad05e9933b",
            "Company" => "Chronos IT",
            "StartDate" => "2020-10-05",
            "EndDate" => "2021-02-08",
            "JobTitle" => "Desarrollador Front-End",
            "FunctionDescription" => "Integrante en equipo de desarrollo IT, ejecutando las funciones de programación Front End (JQuery y javascript), adicionamente programación y soporte en servicios Rest API desarrollados en C#.",
            "Order" => "5"
        ]);

        $this->call(ProjectTool::class);
    }
}

class ProjectCollection
{
    public $Id;
    public $Alias;
    public $ProjectName;
    public $Icon;
    public $Description;
    public $Image;
    public $Order;
    public $IsVisible;
    public $Company;
    public $ProjectType;
    public $ProjectReference;
    public $GitUrl;
    public $Url;
    public $Abr;
}

class CoursesCollection
{
    public $Id;
    public $SchoolName;
    public $Title;
    public $StartPeriod;
    public $EndPeriod;
    public $MethodTitle;
    public $ProjectId;
    public $OrderItem;
}

class ProjectToolsCollection
{
    //"Id","ToolName","UserTimeMonths","NivelQualification","ProjectId","DetailOfUse","IconTool"
    public $Id;
    public $ToolName;
    public $UserTimeMonths;
    public $NivelQualification;
    public $ProjectId;
    public $DetailOfUse;
}
