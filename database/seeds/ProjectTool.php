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

        $tools = array($tool0, $tool1, $tool2, $tool3, $tool4, $tool5, $tool6, $tool7, $tool8, $tool9, $tool10, $tool11, $tool12, $tool13, $tool14);

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
            'id'=>$newGuid->guidv4(openssl_random_pseudo_bytes(16)),
            'name'=>"ErnestoIvanMartinezGarcia",
            'file'=>$base64PDF,
            'type'=>'pdf'
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

