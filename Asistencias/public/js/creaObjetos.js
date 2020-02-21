
/*Crear input text*/
function add(type) {

    if (type === "text") {
        var $newDiv = $("<div id='idA' class='form-group'><label class='control-label col-md-4 col-xs-2'>Data: </label></div>");
        var $newDiv2 = $("<div class='col-md-4 col-xs-10'></div>");

        var $newInput = $("<input type='text' maxlength='10'>");
        $newInput.attr("name", "texto").attr("id", "texto").addClass("form-control");

        $newInput.appendTo($newDiv2);
        $newDiv2.appendTo($newDiv);
        $newDiv.appendTo($("#AddFormulario"));

        document.getElementById("limpiar").reset();
    }

    /*crear input number*/
    if (type === "number") {
        var $newDiv = $("<div id='idB' class='form-group'><label class='control-label col-md-5 col-xs-5'>Input Number: </label></div>");
        var $newDiv2 = $("<div class='col-md-4 col-xs-7'></div>");

        var $newInputEmail = $("<input type='number' maxlength='1'>");
        $newInputEmail.attr("name", "number").attr("id", "number").addClass("form-control");

        $newInputEmail.appendTo($newDiv2);
        $newDiv2.appendTo($newDiv);
        $newDiv.appendTo($("#AddFormulario"));

        document.getElementById("limpiar").reset();
    }

    /*Crear Input Telephone*/
    if (type === "telephone") {

        var $newDiv = $("<div id='idC' class='form-group'><label class='control-label col-md-4 col-xs-6'>Input Telephone: </label></div>");
        var $newDiv2 = $("<div class='col-md-4 col-xs-6'></div>");

        var $newInputEmail = $("<input type='telephone' maxlength='9'>");
        $newInputEmail.attr("name", "telephone").attr("id", "telephone").addClass("form-control");

        $newInputEmail.appendTo($newDiv2);
        $newDiv2.appendTo($newDiv);
        $newDiv.appendTo($("#AddFormulario"));

        document.getElementById("limpiar").reset();
    }

    /*Crear input Password*/
    if (type === "password") {
        var $newDiv = $("<div id='idD' class='form-group'><label class='control-label col-md-4 col-xs-6'>Input Password: </label></div>");
        var $newDiv2 = $("<div class='col-md-4 col-xs-6'></div>");

        var $newInputEmail = $("<input type='password' maxlength='6'>");
        $newInputEmail.attr("name", "password").attr("id", "password").addClass("form-control");

        $newInputEmail.appendTo($newDiv2);
        $newDiv2.appendTo($newDiv);
        $newDiv.appendTo($("#AddFormulario"));

        document.getElementById("limpiar").reset();
    }

    /*Crear TextArea*/
    if (type === "textarea") {
        var $newDiv = $("<div id='idE' class='form-group'><label class='control-label col-md-4 col-xs-3'>TextArea: </label></div>");
        var $newDiv2 = $("<div class='col-md-4 col-xs-9'></div>");

        var $newInputTextArea = $("<textarea maxlength='50'></textarea>");
        $newInputTextArea.attr("name", "textArea").attr("id", "textArea").addClass("form-control");

        $newInputTextArea.appendTo($newDiv2);
        $newDiv2.appendTo($newDiv);
        $newDiv.appendTo($("#AddFormulario"));

        document.getElementById("limpiar").reset();
    }

    /*Crear RadioButton*/
    if (type === "radio") {

        //var numberOfButtons = Math.floor((Math.random() * 10) + 1);
        var numberOfButtons = 3;

        var $newDiv = $("<div id='idF' class='form-group'><label class='control-label col-md-4'>Radio Buttons: </label></div>");
        var $newDiv2 = $("<div class='col-md-4'></div>");

        for (var i = 0; i < numberOfButtons; i++) {
            var $newInput = $("<input type='radio'>");
            $newInput.attr("name", "opcionRadio").attr("id", "opcionRadio").attr("value", "RadioButton" + i).addClass("text");
            if (i === 0) {
                $newInput.attr('checked', true);
            }

            $newInput.appendTo($newDiv2);
            $newDiv2.appendTo($newDiv);
            $newDiv.appendTo($("#AddFormulario"));
            $newInput.after("RadioButt" + i);
        }
        document.getElementById("limpiar").reset();
    }

    /*Crear CheckBox*/
    if (type === "checkbox") {

        //var numberOfButtons = Math.floor((Math.random() * 10) + 1);
        var numberOfButtons = 3;
        var $newDiv = $("<div id='idG' class='form-group'><label class='control-label col-md-4'>Checkboxes: </label></div>");
        var $newDiv2 = $("<div class='col-md-4'></div>");

        for (var i = 0; i < numberOfButtons; i++) {
            var $newInput = $("<input type='checkbox'>");
            $newInput.attr("name", "opcionCheck").attr("id", "opcionCheck").attr("value", "Checkbox" + i).addClass("text");
            if (i === 0) {
                $newInput.attr('checked', true);
            }

            $newInput.appendTo($newDiv2);
            $newDiv2.appendTo($newDiv);
            $newDiv.appendTo($("#AddFormulario"));
            $newInput.after("Checkbox" + i);
        }
        document.getElementById("limpiar").reset();
    }

    /*Crear select*/
    if (type === "select") {

        //var numberOfButtons = Math.floor((Math.random() * 10) + 1);
        var numberOfButtons = 4;
        var $newDiv = $("<div id='idH' class='form-group'><label class='control-label col-md-4'>Dropdown: </label></div>");
        var $newDiv2 = $("<div class='col-md-4'></div>");

        var $dropDown = $("<select></select>");
        $dropDown.attr("name", "datosSelect").attr("id", "datosSelect").addClass("form-control");

        for (var i = 0; i < numberOfButtons; i++) {
            var $option = $("<option></option>");
            $option.attr("value", "Option" + i).addClass("text").html("Option" + i);

            $option.appendTo($dropDown);
            $dropDown.appendTo($newDiv2);
            $newDiv2.appendTo($newDiv);
            $newDiv.appendTo($("#AddFormulario"));
        }
        document.getElementById("limpiar").reset();
    }

    /*Crear input Button*/
    if (type === "button") {
        var $newDiv = $("<div id='idI' class='form-group'><label class='control-label col-md-4'></label></div>");
        var $newDiv2 = $("<div class='col-md-4'></div>");

        var $newInput = $("<input type='button'>");
        $newInput.attr("onclick", "guardarDatos();").attr("value", "Guardar").addClass("btn btn-primary");

        $newInput.appendTo($newDiv2);
        $newDiv2.appendTo($newDiv);
        $newDiv.appendTo($("#AddFormulario"));

        document.getElementById("limpiar").reset();
    }

    /*Crear formulario de busqueda*/
    if (type === "consulta") {

        var $newDivR = $("<br><label class='col-md-4'></label><div id='respuesta' class='col-md-4'></div>");

        var $newDiv = $("<div id='idJ' class='form-group container'><label class='col-md-4'></label></div");

        var $newDiv2 = $("<div class='input-group col-md-4'></div>");

        var $newInput = $("<input type='text'>");
        $newInput.attr("id", "consulta").attr("placeholder", "Buscar por codigo").addClass("form-control");

        var $newSpan = $("<span class='input-group-addon' onclick='buscar();'><span class='glyphicon glyphicon-search'></span></span>");

        $newSpan.appendTo($newDiv2);
        $newInput.appendTo($newDiv2);
        $newDiv2.appendTo($newDiv);
        $newDivR.appendTo($newDiv);

        $newDiv.appendTo($("#AddFormulario"));
        document.getElementById("limpiar").reset();

    }

    /*Crear formulario para subir archivos*/
    if (type === "adjunto") {

        var $newDiv = $("<div id='idK' class='col-md-4 col-xs-12 container'></div>");

        var $newfieldset = $("<fieldset class='scheduler-border'><legend class='scheduler-border'>Subir Archivos</legend></fieldset>");

        var $newInput1 = $("<input type='file' class='col-xs-12'><br><br>");
        $newInput1.attr("name", "file").addClass("file");

        var $newInput2 = $("<button><span class='glyphicon glyphicon-cloud-upload'></span> Procesar</button>");
        $newInput2.attr("name", "process").attr("value", "").addClass("btn btn-primary btn-md");

        var $newInput3 = $("<button><span class='glyphicon glyphicon-remove'></span> Cancelar</button>");
        $newInput3.attr("").attr("").addClass("btn btn-danger btn-md");

        $newInput1.appendTo($newfieldset);
        $newInput2.appendTo($newfieldset);
        $newInput3.appendTo($newfieldset);

        $newfieldset.appendTo($newDiv);

        $newDiv.appendTo($("#AddFormulario"));
        document.getElementById("limpiar").reset();

    }

    /*Crear link para visualizar google maps*/
    if (type === "mapa") {
        var $newDiv2 = $("<div id='cont'></div>");

        var $newCont = $("<a id='idL'>Mostrar mapa <span class='glyphicon glyphicon-eye-open'></span></a>");
        $newCont.attr("href", "mapa.jsp").addClass("mapa");
        $newCont.appendTo("#AddFormulario");
        $newDiv2.appendTo("#AddFormulario");

        document.getElementById("limpiar").reset();

    }

    /*Crear codigo QR*/
    if (type === "codigo QR") {

    }
}

function remove(type) {

    if (type === "text") {
        $("#idA").remove();
    }
    if (type === "number") {
        $("#idB").remove();
    }
    if (type === "telephone") {
        $("#idC").remove();
    }
    if (type === "password") {
        $("#idD").remove();
    }
    if (type === "textarea") {
        $("#idE").remove();
    }
    if (type === "radio") {
        $("#idF").remove();
    }
    if (type === "checkbox") {
        $("#idG").remove();
    }
    if (type === "select") {
        $("#idH").remove();
    }
    if (type === "button") {
        $("#idI").remove();
    }
    if (type === "consulta") {
        $("#idJ").remove();
    }
    if (type === "adjunto") {
        $("#idK").remove();
    }
    if (type === "mapa") {
        $("#idL").remove();
    }
    if (type === "codigoQR") {
        $("#idM").remove();
    }
}

function removeAll() {
    $("#idA").remove();
    $("#idB").remove();
    $("#idC").remove();
    $("#idD").remove();
    $("#idE").remove();
    $("#idF").remove();
    $("#idG").remove();
    $("#idH").remove();
    $("#idI").remove();
    $("#idJ").remove();
    $("#idK").remove();
    $("#cont").remove();
    $("#idL").remove();
    $("#idM").remove();
}
