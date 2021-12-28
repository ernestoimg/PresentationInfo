<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectTools;
use App\Models\AttachFilesModel;
use App\Classes\GuidRandomGenerate;


class ProjectTool extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newGuid = new GuidRandomGenerate;
        //
        $tool0 = new ProjectToolsCollection;
        $tool0->Id = "af9b60de-790d-4441-8dbc-566165c9c966";
        $tool0->ToolName = "Laravel";
        $tool0->UserTimeMonths = "12";
        $tool0->NivelQualification = "4";
        $tool0->ProjectId = "f2ab91a1-11fc-473b-b1c3-4fb804bf2cb4";
        $tool0->DetailOfUse = "El sistema Faveo esta diseñado en laravel en su versión 5.7, del cual se crearón nuevos recursos para integración de módulos adicionales para adinistración y reporteo de los tickets de soporte levantados en la empresa internamente, así como implementación de métodos de evaluación del servicio y envio de correos electrónicos como notificaciones.";

        $tool1 = new ProjectToolsCollection;
        $tool1->Id = "e64d398c-bd97-41ec-b77d-fefde4e8c95a";
        $tool1->ToolName = "Javascript";
        $tool1->UserTimeMonths = "12";
        $tool1->NivelQualification = "3";
        $tool1->ProjectId = "f2ab91a1-11fc-473b-b1c3-4fb804bf2cb4";
        $tool1->DetailOfUse = "Se utilizó javascript en el sistema para animaciones, funciones, diseño, redireccionamiento y validación de datos que se ingresan en los controles del sistema. Adicionalmente en las respuestas de información obtenidas por Ajax se utilizó para la lectura de las respuestas JSON recibidas.";

        $tool2 = new ProjectToolsCollection;
        $tool2->Id = "277a96de-8b47-42f5-981a-f1fef0f55d51";
        $tool2->ToolName = "JQuery";
        $tool2->UserTimeMonths = "12";
        $tool2->NivelQualification = "4";
        $tool2->ProjectId = "f2ab91a1-11fc-473b-b1c3-4fb804bf2cb4";
        $tool2->DetailOfUse = "Su principal funcionalidad fue el uso de AJAX para consulta, inserción, actualización y borrado de información sobre el sistema, así como la manipulación de controles. Así como el uso de librerias como DataTables para el muestreo de información.";

        $tool3 = new ProjectToolsCollection;
        $tool3->Id = "870cb6c1-36f5-49d8-a467-8df847432666";
        $tool3->ToolName = "Bootstrap";
        $tool3->UserTimeMonths = "12";
        $tool3->NivelQualification = "4";
        $tool3->ProjectId = "f2ab91a1-11fc-473b-b1c3-4fb804bf2cb4";
        $tool3->DetailOfUse = "Herramienta utilizado para el maquetado de las vistas del sistema, haciendo las vistas responsivas y con ayuda de blade ocultar y mostrar fragmentos de página de acuerdo a los permisos del usuario logueado.";

        //f5fb34a5-2fe1-4668-9bce-11a64b2ca6d9
        $tool4 = new ProjectToolsCollection;
        $tool4->Id = "edb1bce3-967a-4d52-8d25-031f47d3d051";
        $tool4->ToolName = "SQL Server 2014";
        $tool4->UserTimeMonths = "24";
        $tool4->NivelQualification = "4";
        $tool4->ProjectId = "f5fb34a5-2fe1-4668-9bce-11a64b2ca6d9";
        $tool4->DetailOfUse = "Gestor de base de datos utilizado para el sistema Contpaq, se realizarón Procedimientos Almacenados, Jobs, Triggers y Vistas para generación de reportes, respaldos automatizados de bases de datos, así como la utilización de comandos como SQL-Invoque en power shell para ejecución de procedimientos almacenados.";

        $tool5 = new ProjectToolsCollection;
        $tool5->Id = "12f070cb-33ae-40b6-91ff-06128cf65cb0";
        $tool5->ToolName = "Windows Server 2012";
        $tool5->UserTimeMonths = "6";
        $tool5->NivelQualification = "3";
        $tool5->ProjectId = "f5fb34a5-2fe1-4668-9bce-11a64b2ca6d9";
        $tool5->DetailOfUse = "Ambientamiento de servidor windows server para alojar sistema de contpaq, así como liberación de puertos en firewall y configuración de los módulos de Contpaq Contabilidad, Comercial y Nóminas.";

        $tool6 = new ProjectToolsCollection;
        $tool6->Id = "9d1ca14a-05bf-44ed-91b3-7fca0c9cdc88";
        $tool6->ToolName = "Contpaq Contabilidad";
        $tool6->UserTimeMonths = "12";
        $tool6->NivelQualification = "3";
        $tool6->ProjectId = "f5fb34a5-2fe1-4668-9bce-11a64b2ca6d9";
        $tool6->DetailOfUse = "Soporte y mantenimiento así como migración del sistema a nuevo alojamiento manteniendo los respaldos y configuración del módulo.";

        $tool7 = new ProjectToolsCollection;
        $tool7->Id = "2eca15d8-26c1-4adc-9323-9bb2746cb7a2";
        $tool7->ToolName = "Contpaq Comercial";
        $tool7->UserTimeMonths = "12";
        $tool7->NivelQualification = "3";
        $tool7->ProjectId = "f5fb34a5-2fe1-4668-9bce-11a64b2ca6d9";
        $tool7->DetailOfUse = "Soporte y mantenimiento así como migración del sistema a nuevo alojamiento manteniendo los respaldos y configuración del módulo.";

        $tool8 = new ProjectToolsCollection;
        $tool8->Id = "446c1a58-e98b-406c-9bb7-9f44b9f58b94";
        $tool8->ToolName = "Contpaq Nóminas";
        $tool8->UserTimeMonths = "12";
        $tool8->NivelQualification = "3";
        $tool8->ProjectId = "f5fb34a5-2fe1-4668-9bce-11a64b2ca6d9";
        $tool8->DetailOfUse = "Soporte y mantenimiento así como migración del sistema a nuevo alojamiento manteniendo los respaldos y configuración del módulo.";

        $tool9 = new ProjectToolsCollection;
        $tool9->Id = "9bfeb8aa-edbf-40b1-b0a9-2bb8210ec4a7";
        $tool9->ToolName = "Windows Form C#";
        $tool9->UserTimeMonths = "6";
        $tool9->NivelQualification = "4";
        $tool9->ProjectId = "cbbc25df-1e2e-4894-a005-3f72f7fef690";
        $tool9->DetailOfUse = "Lenguaje de programación utlizado para la creación de la aplicación, se utilizó proyecto de tipo Windows Form para la creación de la interfaz.";

        $tool10 = new ProjectToolsCollection;
        $tool10->Id = "d72286c9-b225-4a5e-af80-b7a51881e5cb";
        $tool10->ToolName = "PowerShell";
        $tool10->UserTimeMonths = "6";
        $tool10->NivelQualification = "4";
        $tool10->ProjectId = "cbbc25df-1e2e-4894-a005-3f72f7fef690";
        $tool10->DetailOfUse = "Generación de comandos con parametros para la obtención de la información de manera especifica del equipo donde se encuentra instalado con el uso de la dll System32.dll ";

        //
        $tool11 = new ProjectToolsCollection;
        $tool11->Id = "6e0223cd-a687-4d92-b36e-5537afa114fc";
        $tool11->ToolName = "Angular 10";
        $tool11->UserTimeMonths = "6";
        $tool11->NivelQualification = "4";
        $tool11->ProjectId = "e6bf7b3c-e000-4180-b270-320ffb621656";
        $tool11->DetailOfUse = "Se utiliza Angular Material para la generación de las vistas del sistemas. Para los form se utiliza los eventos de inicialización de las clases para animaciones y reglas de negocio de llenado de los controles para el cargado de catalogos, así como los componentes del framework ejemplo en las conversiones de fechas para respetar uso horario de Cancún o SWAL para muestra de alertas de operaciones.";

        $tool12 = new ProjectToolsCollection;
        $tool12->Id = "247b76bd-dfb6-4141-9db5-bc0b9449c648";
        $tool12->ToolName = "Typescript";
        $tool12->UserTimeMonths = "6";
        $tool12->NivelQualification = "5";
        $tool12->ProjectId = "e6bf7b3c-e000-4180-b270-320ffb621656";
        $tool12->DetailOfUse = "Se realizan clases TS para modelado de información que se recibe o que se envia a las Apis y realizar las operaciones de Actualización, Consulta e Inserción de información a los catalogos. De igual manera la utilización de las clases TS para funcionalidad de los componentes integrados en el sistema.";

        $tool13 = new ProjectToolsCollection;
        $tool13->Id = "8072ff8d-4be4-41e6-920c-71c14d1de346";
        $tool13->ToolName = "HTML";
        $tool13->UserTimeMonths = "6";
        $tool13->NivelQualification = "5";
        $tool13->ProjectId = "e6bf7b3c-e000-4180-b270-320ffb621656";
        $tool13->DetailOfUse = "Se utiliza lenguaje HTML para las vistas de los componentes. Creación de las forms, ventanas modales y maquetado de las vistas.";

        $tool14 = new ProjectToolsCollection;
        $tool14->Id = "7460af3d-69f2-49b7-ae84-69674e214a91";
        $tool14->ToolName = "CSS";
        $tool14->UserTimeMonths = "6";
        $tool14->NivelQualification = "5";
        $tool14->ProjectId = "e6bf7b3c-e000-4180-b270-320ffb621656";
        $tool14->DetailOfUse = "Uso de las hojas de estilo para manipulación de la visualización de los componenste html del sistema.";

        $tool15 = new ProjectToolsCollection;
        $tool15->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool15->ToolName = "Bootstrap";
        $tool15->UserTimeMonths = "6";
        $tool15->NivelQualification = "5";
        $tool15->ProjectId = "52ca0905-fb39-4a45-896c-cd15d0b42d0e";
        $tool15->DetailOfUse = "Uso de clases Bootstrap versión 4, así como vistas para los módulos de manera responsiva.";

        $tool16 = new ProjectToolsCollection;
        $tool16->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool16->ToolName = "JQuery 3.2";
        $tool16->UserTimeMonths = "6";
        $tool16->NivelQualification = "4";
        $tool16->ProjectId = "52ca0905-fb39-4a45-896c-cd15d0b42d0e";
        $tool16->DetailOfUse = "Creación de funcionaes para manipulación de validaciones, envio de información y obtención de información consumientos metodos API REst con Ajax, así como uso de DataTable API para el muestreo de información en tablas. Adicionalmente se generan animaciones para los controles al momento de ejecuta alguna opción en las vistas o al no cumplir con alguna validación en el sistema.";

        $tool17 = new ProjectToolsCollection;
        $tool17->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool17->ToolName = "Javascript";
        $tool17->UserTimeMonths = "6";
        $tool17->NivelQualification = "4";
        $tool17->ProjectId = "52ca0905-fb39-4a45-896c-cd15d0b42d0e";
        $tool17->DetailOfUse = "Generación de funciones y clases para lectura de las respuestas en formato JSON obtenidos en las consultas AJAX, almacenamiento de información en variables de sesión y validaciones de seguridad.";

        $tool18 = new ProjectToolsCollection;
        $tool18->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool18->ToolName = "CSS";
        $tool18->UserTimeMonths = "6";
        $tool18->NivelQualification = "4";
        $tool18->ProjectId = "52ca0905-fb39-4a45-896c-cd15d0b42d0e";
        $tool18->DetailOfUse = "Utilizado para manipular y custimizar controles HTML, así como manipulación de las dimenciones de los controles utilizando funciones @media.";

        $tool19 = new ProjectToolsCollection;
        $tool19->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool19->ToolName = "Bootstrap";
        $tool19->UserTimeMonths = "12";
        $tool19->NivelQualification = "4";
        $tool19->ProjectId = "2aa39b8d-09e9-499a-b5a9-3971a5db2775";
        $tool19->DetailOfUse = "Manejo de framework en su versión 5 para la generación de las vistas, diseño responsivo para dispositivos moviles, animaciones de componentes y ordenamientos de elementos.";

        $tool20 = new ProjectToolsCollection;
        $tool20->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool20->ToolName = "JQuery";
        $tool20->UserTimeMonths = "12";
        $tool20->NivelQualification = "4";
        $tool20->ProjectId = "2aa39b8d-09e9-499a-b5a9-3971a5db2775";
        $tool20->DetailOfUse = "Utilizado para la obtención y envio de datos a servicios API con ajax, así como uso de DataTable Api para muestreo de información en tablas para los portales de administración y carga de catalogos, manipulación de los elementos en DOM para agregar productos al Carro de compras, así como uso de API de EVO para los pagos con tarjeta.";

        $tool21 = new ProjectToolsCollection;
        $tool21->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool21->ToolName = "Javascript";
        $tool21->UserTimeMonths = "12";
        $tool21->NivelQualification = "4";
        $tool21->ProjectId = "2aa39b8d-09e9-499a-b5a9-3971a5db2775";
        $tool21->DetailOfUse = "La función principal es la lectura de la información obtenida de las APIs consumidas con respuestas en formato JSON, así como creación de funciones para mapeo de datos, validación de estructuras y prevención de errores al momento de que se envia información a las API´s.";

        $tool22 = new ProjectToolsCollection;
        $tool22->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool22->ToolName = "C#";
        $tool22->UserTimeMonths = "6";
        $tool22->NivelQualification = "3";
        $tool22->ProjectId = "2aa39b8d-09e9-499a-b5a9-3971a5db2775";
        $tool22->DetailOfUse = "Lenguaje utilizado para la creación de proyectos Rest API, modelado de datos DTO, controladores y modelos de negocio para la generación de las consultas basados en Stores Procedures, así como pruebas unitarias para verificación de la funcionalidad.";

        $tool23 = new ProjectToolsCollection;
        $tool23->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool23->ToolName = "SQL Server";
        $tool23->UserTimeMonths = "6";
        $tool23->NivelQualification = "5";
        $tool23->ProjectId = "2aa39b8d-09e9-499a-b5a9-3971a5db2775";
        $tool23->DetailOfUse = "El gestor de base de datos para el proyecto, creación de procedimientos almacenados para la devolución de información en las diferentes bases de datos utilizados en el proyecto.";


        $tool24 = new ProjectToolsCollection;
        $tool24->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool24->ToolName = "Azure Storage Account";
        $tool24->UserTimeMonths = "4";
        $tool24->NivelQualification = "3";
        $tool24->ProjectId = "2aa39b8d-09e9-499a-b5a9-3971a5db2775";
        $tool24->DetailOfUse = "Contenedores creados en Azure para almacenamiento de archivos, imágenes y platillas para el sistema, del cual se realiza conexiones desde la aplicación para obtener acceso a los contenedores.";
        
        $tool25 = new ProjectToolsCollection;
        $tool25->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool25->ToolName = "TFS";
        $tool25->UserTimeMonths = "6";
        $tool25->NivelQualification = "4";
        $tool25->ProjectId = "9acac9a1-d39b-4427-a9df-866d7bbfdf87";
        $tool25->DetailOfUse = "Teams Foundation Server, servidor que almacena soluciones de proyectos desarrollados en Visual Studio. Del cual se realizó el proceso de actualización a Azure DevOps Server junto con los collection.";

        $tool26 = new ProjectToolsCollection;
        $tool26->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool26->ToolName = "Azure DevOps Server";
        $tool26->UserTimeMonths = "6";
        $tool26->NivelQualification = "3";
        $tool26->ProjectId = "9acac9a1-d39b-4427-a9df-866d7bbfdf87";
        $tool26->DetailOfUse = "Azure DevOps Server, plataforma para almacenamiento de repositorios, así como el control de software, para dicho proyecto se desarrollaron plantillas Agile y CMMI para procesar la documentación, backlog e historicos de cambios del TFS a Azure DevOps Server.";

        $tool27 = new ProjectToolsCollection;
        $tool27->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool27->ToolName = "Git Bash";
        $tool27->UserTimeMonths = "6";
        $tool27->NivelQualification = "4";
        $tool27->ProjectId = "9acac9a1-d39b-4427-a9df-866d7bbfdf87";
        $tool27->DetailOfUse = "Herramienta de control de cambios que permite conectarse medienta consola para carga de los archivos de proyectos. Se hizo uso de la herramienta para obtener cambios de repositorios creados en Azure DevOps y posteriormente se realizó la carga de los proyectos almacenados en TFS para subirlos a la cloud.";
        
        $tool28 = new ProjectToolsCollection;
        $tool28->Id = $newGuid->guidv4(openssl_random_pseudo_bytes(16));
        $tool28->ToolName = "Visual Studio";
        $tool28->UserTimeMonths = "6";
        $tool28->NivelQualification = "4";
        $tool28->ProjectId = "9acac9a1-d39b-4427-a9df-866d7bbfdf87";
        $tool28->DetailOfUse = "Manejo del IDE para conexión y obtención de los proyectos de TFS. Adicionalmente se crearón Workspaces y se actualizarón dependencias de los proyectos para cargar correctamente los repositorios a Azure DevOps Server.";
        
        $tools = array(
            $tool0, $tool1, $tool2, $tool3, $tool4, $tool5, $tool6, $tool7, $tool8, $tool9, $tool10, $tool11,
            $tool12, $tool13, $tool14, $tool15, $tool16, $tool17, $tool18, $tool19, $tool20, $tool21, $tool22,
            $tool23, $tool24, $tool25, $tool26, $tool27, $tool28
        );

        $toolcounter = 1;
        foreach ($tools as $tool) {
            $base64CourseImage = '';

            $pathImageCourse = base_path() . '\public\images\tool-' . $toolcounter . '.png';
            $imageCourse = file_get_contents($pathImageCourse);
            $base64CourseImage = base64_encode($imageCourse);

            ProjectTools::create([
                "Id" => $tool->Id,
                "ToolName" => $tool->ToolName,
                "UseTimeInMonths" => $tool->UserTimeMonths,
                "NivelQualification" => $tool->NivelQualification,
                "ProjectId" => $tool->ProjectId,
                "DetailOfUse" => $tool->DetailOfUse,
                "IconTool" => $base64CourseImage
            ]);

            $toolcounter += 1;
        }

        $pathPDF = base_path() . '\public\pdf\IMGC.pdf';
        $PdfContent = file_get_contents($pathPDF);
        $base64PDF = base64_encode($PdfContent);

        AttachFilesModel::create([
            'id' => $newGuid->guidv4(openssl_random_pseudo_bytes(16)),
            'name' => "ErnestoIvanMartinezGarcia",
            'file' => $base64PDF,
            'type' => 'pdf'
        ]);
    }
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
