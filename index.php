<?php
	require_once 'libreria/Html.php';
	
	/* TESTEO: 
	 * OJO!!!!! los métodos estáticos Html me devuelven cadenas, de ahí que sólo hago un 'echo' y concateno cada una de las llamadas
	 * con puntos '.' y cerrando la última sentencia con el ';'   
	*/
	echo
	//ETIQUETAS PRINCIPALES
	Html::html_().
		Html::tab().Html::head_().
			Html::tab(2).Html::title("HTML generado con métodos estáticos de clase Html con PHP").
			Html::tab(2).Html::meta().
			Html::tab(2).Html::meta('name="description" content="Página realizada con métodos estáticos de PHP"').
			Html::tab(2).Html::link().
		Html::tab().Html::_head().
		Html::tab().Html::body_().
			//TEXTO Y WRAPPERS
			Html::tab(2).Html::div_("ClaseDiv").
				Html::tab(3).Html::seccion("Este valor va a ser 1 por defecto", "Sección H1",'seccion', '', 'IdH1').
				Html::tab(3).Html::seccion(2, "Sección H2",'seccion','IdH2').
				Html::tab(3).Html::seccion(3, "Sección H3",'seccion','IdH3').
				Html::tab(3).Html::seccion(4, "Sección H4",'seccion','IdH4').
				Html::tab(3).Html::seccion(5, "Sección H5",'seccion','IdH5').
				Html::tab(3).Html::seccion(6, "Sección H6",'seccion','IdH6').
				Html::tab(3).Html::hr().
				Html::tab(3).Html::p('Contenido de un párrafo.').
				Html::tab(3).Html::p('Contenido de un párrafo largo: Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaquepsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.	Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla.').
				Html::tab(3).Html::a_('enlace con apertura y cierre').Html::_a().
				Html::tab(3).Html::p_('Párrafo con apertura y cierre y '.Html::strong("¡¡contenido en negrita!! ").'Más párrafo después de strong.').Html::_p().
				Html::tab(3).Html::p_('Párrafo con apertura y cierre y '.Html::em("¡¡contenido en cursiva!! ").'Más párrafo después de em.').Html::_p().
				Html::tab(3).Html::p_('Superíndice: 2'.Html::sup("2").' = 4.').Html::_p().
				Html::tab(3).Html::p_('Subíndice: H '.Html::sub("2").'O -> Agua.').Html::_p().
				Html::tab(3).Html::p_('Párrafo con apertura y cierre y '.Html::span("¡¡contenido dentro de span que cambia el color de fuente a rojo!! ","","","style='color:red'").'Más párrafo después de span.').Html::_p().
				Html::tab(3).Html::p_('Párrafo con apertura y cierre y '.Html::a("enlace dentro de párrafo. ").'Más párrafo después de enlace.').Html::_p().
			Html::tab(2).Html::_div().
			Html::tab(2).Html::div_("ClaseDiv", "", "style='background:#8BC34A'").
				Html::tab(3).Html::p('¡¡Este párrafo está dentro de un div con backgroudnd verde!!').
			Html::tab(2).Html::_div().
			//LISTAS
			Html::tab(2).Html::hr().
			Html::tab(2).Html::p_().Html::strong("Listado ordenado:").Html::_p().
			Html::tab(2).Html::ol_("listado ordenado", "", 4).
				Html::tab(3).Html::li('Lista 1').
				Html::tab(3).Html::li('Lista 2').
				Html::tab(3).Html::li('Lista 3').
				Html::tab(3).Html::li('Lista 4').
				Html::tab(3).Html::li('Lista 5').
			Html::tab(2).Html::_ol().
			Html::tab(2).Html::p_().Html::strong("Listado No ordenado:").Html::_p().
			Html::tab(2).Html::ul_("listado no_ordenado", "", 4).
				Html::tab(3).Html::li('Lista 1').
				Html::tab(3).Html::li('Lista 2').
				Html::tab(3).Html::li('Lista 3').
				Html::tab(3).Html::li('Lista 4').
				Html::tab(3).Html::li('Lista 5').
			Html::tab(2).Html::_ul().
			//IMAGEN
			Html::tab(2).Html::hr().
			Html::tab(2).Html::p_().Html::strong("Imagen:").Html::_p().
			Html::tab(2).Html::img("img/logo_jlalovi.png", "Logo de jlalovi").
			//TABLA
			Html::tab(2).Html::hr().
			Html::tab(2).Html::table_("","","border=1").
				Html::tab(3).Html::caption("Tabla de prueba").
				Html::tab(3).Html::tr_().
					Html::tab(4).Html::th("Encabezado 1").
					Html::tab(4).Html::th("Encabezado 2").
					Html::tab(4).Html::th("Encabezado 3").
					Html::tab(4).Html::th("Encabezado 4").
				Html::tab(3).Html::_tr().
				Html::tab(3).Html::tr_().
					Html::tab(4).Html::td("celda 1.1").
					Html::tab(4).Html::td("celda 1.2").
					Html::tab(4).Html::td("celda 1.3").
					Html::tab(4).Html::td("celda 1.4").
				Html::tab(3).Html::_tr().
				Html::tab(3).Html::tr_().
					Html::tab(4).Html::td("celda 2.1").
					Html::tab(4).Html::td("celda 2.2").
					Html::tab(4).Html::td("celda 2.3").
					Html::tab(4).Html::td("celda 2.4").
				Html::tab(3).Html::_tr().
				Html::tab(3).Html::trTd(["celda 3.1","celda 3.2","celda 3.3","celda 3.4"]).
			Html::tab(2).Html::_table().
			//FORMULARIOS
			Html::tab(2).Html::hr().
			Html::tab(2).Html::form_("prueba_formulario.php").
				Html::tab(3).Html::fieldset_().
					Html::tab(4).Html::legend("Prueba formulario POST").
					Html::tab(4).Html::textarea("Prueba formulario", "texto", "idTextarea", true, "Label Textarea:").
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("text", "nombre", "", "idNombre", true, "Nombre:").
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("password", "clave", "", "idClave", true, "Clave:").
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("submit", "", "Enviar").
				Html::tab(3).Html::_fieldset().
			Html::tab(2).Html::_form().
			Html::tab(2).Html::form_("prueba_formulario.php", "get").
				Html::tab(3).Html::fieldset_().
					Html::tab(4).Html::legend("Prueba formulario GET").
					Html::tab(4).Html::input("checkbox", "nameCheckbox1", "Valor 1", "idCheckbox1", true, "Checkbox nº 1:", "ClaseCheckbox").
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("checkbox", "nameCheckbox2", "Valor 2", "idCheckbox2", true, "Checkbox nº 2:", "ClaseCheckbox").
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("checkbox", "nameCheckbox3", "Valor 3", "idCheckbox3", true, "Checkbox nº 3:", "ClaseCheckbox").
					Html::tab(4).Html::br().
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("radio", "nameRadio", "Valor 1", "idRadio1", true, "Radio nº 1:", "ClaseRadio").
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("radio", "nameRadio", "Valor 2", "idRadio2", true, "Radio nº 2:", "ClaseRadio").
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("radio", "nameRadio", "Valor 3", "idRadio3", true, "Radio nº 3:", "ClaseRadio").
					Html::tab(4).Html::br().
					Html::tab(4).Html::br().
					Html::tab(4).Html::select(4, ["uno"=>1,"dos"=>2,"tres"=>3], 3).
					Html::tab(4).Html::br().
					Html::tab(4).Html::br().
					Html::tab(4).Html::input("submit", "", "Enviar").
				Html::tab(3).Html::_fieldset().
			Html::tab(2).Html::_form().
		Html::tab().Html::_body().
	Html::_html();
?>