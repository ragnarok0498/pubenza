<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
$titulo = 'Informacion';
?>
<?php
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    <h3> <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>   NUESTRO COLEGIO </h3>
                </div>
                <div class="panel-body text-justify">
                    <ul class="acr">
                        <li>
                            <input type="checkbox" checked>
                            <i></i>

                            <h3 class="ht">• Misión </h3> <br>
                            <p class="accor">Formar integralmente a la comunidad educativa de la Institución Educativa Departamental  Rural Pubenza, para forjar personas competentes en el ámbito
                                personal, social, académico y laboral; promoviendo valores y cualidades propias del ser en busca de mejorar su calidad de vida y la de su entorno.</p>
                            <br>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Visión</h3><br>
                            <p class="accor"> La Institución Educativa Departamental  Rural Pubenza se perfilara para el año 2023, como una institución líder en educación rural formando personas competentes
                                y emprendedoras, con valores como: el respeto, responsabilidad, solidaridad y tolerancia; que mejoren las condiciones de vida de su contexto.   </p>
                            <br>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Valores Institucionales</h3><br>
                            <p class="accor">• HONRADEZ: Capacidad de una persona para conservar su honor y su lealtad frente a sí mismo y los demás.  Es factor clave del  desarrollo humano y 
                                reconocimiento ante la sociedad.<br>
                                <br>
                                • RESPETO: Capacidad del ser humano de aceptar las diferencias; por lo cual  es necesario vivir en una sociedad pluralista que respete a cada ser humano
                                en toda su integridad, cualquiera sea su estado social, laboral, cultural, intelectual y religioso en que se encuentre.<br>
                                <br>
                                • RESPONSABILIDAD: Capacidad que tiene la persona para dar una respuesta ante determinada actuación, comportamiento o determinación en forma
                                oportuna y de acuerdo a los lineamientos establecidos.<br>
                                <br>
                                • SOLIDARIDAD: Capacidad de servicio que tiene el ser humano para ayudar a sus semejantes cuando se encuentran en una situación de vulnerabilidad.</p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Filosofia </h3><br>
                            <p class="accor">La Institución desarrolla una filosofía basada en:<br>
                                <br>
                                a. La formación integral del ser humano en su dimensión individual y social, desarrollándoles valores humanos y sociales, tomando opciones que lo comprometan en el servicio, en la lucha por la superación y  creando así una sociedad nueva en donde se integren la vida y la cultura.<br>
                                <br>
                                b. Ofrecer una formación académica, técnica, científica, cultural y artística, como elemento básico en el proceso de formación integral y como medio eficaz para ayudar a descubrir, a partir del análisis crítico de la realidad.<br>
                                <br>
                                c. Desarrollar procesos que lleve a los miembros de la comunidad educativa al ejercicio responsable de su libertad, a ser críticos con la realidad circundante, a buscar respuestas personales con espíritu creativo a los problemas actuales,  a establecer canales de comunicación con sus semejantes y a liberarse de todo condicionamiento que les impida su realización personal y comunitaria.<br>
                                <br>
                                d. Orientar al estudiante en la construcción  de su proyecto de vida.<br>
                                <br>  
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3> <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>  ESCUDO </h3>
                </div>
                <div class="panel-body text-justify">
                    <div class="escudo_container text-center">
                        <div class="escudo">
                            <img src="images/escudo.jpg">
                        </div>
                    </div><br>
                    <ul class="acr">
                        <li>
                            <input type="checkbox" checked>
                            <i></i>

                            <h3 class="ht text-center"> Composicion escudo</h3> <br>
                            <p class="accor"> En la parte superior encontramos dos palomas que representan la Paz y la Unión de las sedes que forman parte de nuestro colegio.
                                La iglesia con sus dos torres, son representativas de Tocaima y su religiosidad.
                                La parte central representa el sector rural, como componente de las comunidades que forman parte del colegio.
                                La pala y la pica son las herramientas con las cuáles el campesino del sector, consigue su sustento diario.
                                El MASTODONTE, representa la riqueza arqueológica que guarda Pubenza y muchos lugares de Tocaima. 
                                La cita en la  parte  inferior,  con  las  palabras,  EDUCACION,  COMPROMISO  Y  CULTURA, en  marcan  el  horizonte  que  con  esfuerzo  diario persigue  la  institución.</p>
                        <li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    <h3><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>   PRINCIPIOS Y FUNDAMENTOS QUE ORIENTAN LA COMUNIDAD EDUCATIVA.</h3>
                </div>
                <div class="panel-body text-justify">
                    <ul class="acr">
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht"> Principios </h3><br>
                            <p class="accor"> • El respeto a la persona es el fundamento que marca las relaciones entre los integrantes de la comunidad educativa.<br>
                                • La  institución promueve el desarrollo integral del individuo.<br>
                                • Los procesos educativos requiere  compromisos y responsabilidades de toda la comunidad.  </p><br>

                            <p class="accor"> La Institución desarrolla una filosofía basada en:</p><br>

                            <p class="accor">a. La formación integral del ser humano en su dimensión individual y social, desarrollándoles valores humanos y sociales, tomando opciones que lo comprometan en el servicio, en la lucha por la superación y  creando así una sociedad nueva en donde se integren la vida y la cultura.<br>
                                b. Ofrecer una formación académica, técnica, científica, cultural y artística, como elemento básico en el proceso de formación integral y como medio eficaz para ayudar a descubrir, a partir del análisis crítico de la realidad.<br>
                                c. Desarrollar procesos que lleve a los miembros de la comunidad educativa al ejercicio responsable de su libertad, a ser críticos con la realidad circundante, a buscar respuestas personales con espíritu creativo a los problemas actuales,  a establecer canales de comunicación con sus semejantes y a liberarse de todo condicionamiento que les impida su realización personal y comunitaria.<br>
                                d. Orientar al estudiante en la construcción  de su proyecto de vida.<p><br>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht"> Fundamentos</h3><br>
                            <p class="accor"> Conscientes de que el máximo valor de la persona humana radica en su índole racional, se quiere:</p><br>

                            <p class="accor">• Comprender que el máximo valor patrio es el de asegurar la convivencia,  el trabajo,  la justicia,  la igualdad,  el conocimiento,  la libertad y la paz,  dentro de los órdenes legales y con el ejercicio  de la democracia representativa y participativa.<br>
                                • Fomentar en los estudiantes una actitud de diálogo en la que se emanen el rigor lógico, los valores de la honestidad y la sinceridad,  la defensa de sus derechos y puntos de vista, con la comprensión y el respeto mutuo.<br>
                                • Enfatizar en los estudiantes el valor de la responsabilidad basada en la libertad, es decir, la capacidad para tomar decisiones propias, con el compromiso personal de asumir las consecuencias que generen sus actos.<br>
                                • Educar para la excelencia académica,  dentro de una formación integral de la personalidad.<br>
                                • Presentar a los estudiantes una amplia gama de valores que por su bondad intrínseca, sean suficiente motivación para dar sentido a sus acciones, proyectándolas en beneficio personal y comunitario.</p><br>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>  <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>   BANDERA </h3>
                </div>
                <div class="panel-body text-justify">
                    <div class="bandera_container text-center">
                        <div class="bandera">
                            <img src="images/bandera.jpg">
                        </div>
                    </div>
                    <ul class="acr">
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht text-center">  Composicion bandera </h3><br>
                            <p class="accor"><br>
                                <br>
                                Tiene forma rectangular, dividida en tres triángulos, compuesta por los colores: Verde, Blanco y Amarillo.  En el centro el escudo de la Institución.
                                El Blanco representa la Paz existente en la comunidad y la bondad de sus gentes.
                                El verde representa el ambiente rural y la esperanza en un futuro mejor.
                                El amarillo representa, la riqueza de sus tierras, los tesoros arqueológicos y su clima cálido.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">  <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span> RESEÑA HISTORICA SEDES SANTO DOMINGO</h3>
                </div>
                <div class="panel-body text-justify">
                    <ul class="acr">
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede las Mercedes</h3><br>
                            <p class="accor">
                                La escuela Las Mercedes se encuentra ubicada a 30 kilómetros  de la cabecera municipal vía al Municipio de Agua De Dios Cundinamarca por la carretera que lleva a la Orqueta y Santo Domingo.
                            </p>
                            <p class="accor">
                                La escuela Las Mercedes empezó a funcionar en lo que a la fecha funciona como la  tienda de la señora Liliana reyes. Propiedad del señor Misael  Reyes.
                            </p>
                            <p class="accor">
                                En el año 1972 don   Esteban Puentes siendo presidente de la junta de acción comunal de la vereda Las Mercedes y en representación de la comunidad hizo negocio  por un lote destinado para hacer la escuela por un valor de $ 34.000 pesos. El municipio aportó  $ 20.000 y la comunidad aporto el faltante de $14.000  pesos. 
                            </p>
                            <p class="accor"> 
                                Así se realizó un contrato con el  I.C.C.E para la construcción de la escuela. Esta entidad aporta $ 80.000 y el municipio aporta el transporte del material en la volqueta y el constructor contratado fue el señor José Machado, 
                                AL estar la escuela en una zona cafetera, esta se vio altamente favorecida por  federación  de cafeteros de Viotá Cundinamarca quienes donaron alguna parte de la ornamentación, muebles, arreglo locativo, construcción de baños, y pavimentación de la cancha deportiva.
                            </p>
                            <p class="accor"> 
                                La escuela formada por 2 salones,1  baño para niños y 1 para  niñas, 1 lavamanos , 1 cancha, 1 kiosko con techo de palma y   2 apartamentos que la federación de cafeteros lograba construir con el único fin de brindar vivienda  a los maestros que llegaran a la zona. 
                            </p>
                            <p class="accor"> 
                                Por las dificultades que se pasaban por el agua ya que allí no se cuenta con acueducto  se logró con recursos de la comunidad y municipales conseguir un ariete y luego comprar una bomba eléctrica para almacenar el agua en tanques y tener siempre agua potable para la comunidad escolar. Se resalta el apoyo constante de la administración municipal en cabeza del señor Fernando Afanador siendo director de núcleo el señor  Rodrigo Morales. 
                            </p>
                            <p class="accor">
                                Con ayuda de la comunidad y del municipio se construyó un kiosko, el cual era un espacio para compartir en comunidad ya que  era la escuela un sitio de recibimiento al personal de la asociación, de  juntas del entonces y la comunidad en general. Las Escuela Las Mercedes También fue centro de comunicación al haberse instalado un teléfono  para toda la comunidad.
                            </p>
                            <p class="accor">
                                Desde el inicio de la construcción de la escuela hasta la fecha y por testimonio de la mayoría de las docentes  se resalta la colaboración y respaldo que han brindado el señor Emiliano López y  la Señora Mery Fonseca a la escuela, a la comunidad educativa y a las docentes.
                            </p>
                            <p class="accor">
                                En el año 2009 se acordó  derribar  el kiosko ya que por su antigüedad representaba peligro para los niños, se hizo uno kiosko  nuevo con postes de madera que  la empresa de energía   había cambiado por postes de cemento. Se compró tejas de zinc y se hizo con la ayuda de los padres de familia y la comunidad educativa. También se realizaron actividades para la compra de una motobomba ya que la que había la hurtaron perjudicando  a los niños. La motobomba se compra en comodato con la alcaldía municipal. Para el año 2016 se instaló en la sede un parque de material biodegradable por parte de la UMATA y gestión de la gobernación de Cundinamarca.
                            </p>
                            <p class="accor">
                                Por decreto la escuela Las Mercedes pasó a ser sede de Santo Domingo, luego igualmente por decreto se hizo una unificación y paso a ser sede de la Institución Educativa Departamental Rural Pubenza.  
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede la Gloria </h3><br>
                            <p class="accor">
                                Hacia 1961 el señor Tomas Triviño dono el terreno para que construyeran la escuela, esta fue hecha con una enramada de palma con la ayuda de los padres de familia, en 1980 con la gestión del señor Jorge Lancheros presidente de la junta gestionaron para que el salón fuera construido en bloque que es donde se encuentra actualmente.  
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede Recreo </h3><br>
                            <p class="accor">
                                La Escuela Rural Sede El Recreo se halla en la vereda del mismo nombre.
                                Fue fundada en la hacienda del Recreo en una parcela donada por el señor Epaminondas Zárate.  
                            </p>
                            <p class="accor">
                                La escuela del Recreo es conocida también como la escuela de Bélgica por hallarse dentro de los predios de la finca de este nombre y en donde se donó el terreno para su construcción.
                            </p>
                            <p class="accor"> 
                                La escuela se fundó hace aproximadamente 50 años por iniciativa del presidente de la Junta de Acción Comunal de ese entonces.
                                El Comité de Cafeteros construyo la infraestructura actual donde funciona hasta el presente.    
                            </p>
                            <p class="accor">                  
                                En el año 2009 Compartel a través de su operador Contecol instala internet en la sede educativa, prestando servicio de conectividad a los estudiantes de la sede en cuatro (4) computadores.
                            </p>
                            <p class="accor"> 
                                En el año 2010 Computadores para Educar dona a la sede 5 computadores. En este mismo año, se construye la cocina del restaurante escolar y se adecua el comedor en instalaciones de una de las aulas de clase. En octubre de este mismo año los computadores tanto del Programa Compartel como del Programa Computadores para Educar son hurtados. En marzo del año 2011 se hace reposición de los nueve computadores hurtados después de las gestiones antes los entes correspondientes.
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede Zelandia </h3><br>
                            <p class="accor">
                                En el año de 1.965 el señor Esquivel Vargas oriundo de la vereda dono el lote para la escuela, haciéndose cargo el Municipio de su construcción.
                                Su primer profesor de apellido Casas, comenzó a laborar con 70 alumnos aproximadamente.
                            </p>
                            <p class="accor">
                                La vereda Zelandia ubicada en el perímetro rural del Municipio de Tocaima cuenta con 25 familias aproximadamente, su clima es cálido, nivel económico medio, sus fuentes principales de trabajo son la agricultura y la ganadería.
                                La escuela está constituida por 1 planta:

                                • La Sede cuenta con dos salones grandes, una sala de Computación, la cocina y un restaurante, baños para los estudiantes y baño para la docente.
                                • Hay una cancha de microfútbol y cancha de baloncesto.
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede Palacios </h3><br>
                            <p class="accor">
                                La Escuela rural palacios esta ubica en la vereda palacios del municipio de Tocaima Cundinamarca, esta vereda en tiempos pasados era la hacienda perteneciente al señor Fernando Afanador, quien con sus hermanas las señoritas afanador, conformaban un gran latifundio en esta zona, (aún se conserva la hacienda de don Afanador hoy llamada hacienda palacios).
                            </p>
                            <p class="accor">
                                El lote de la escuela fue donado por el señor Afanador en el año 1969 con gestiones del municipio y el comité de cafeteros, el terreno es de una fanegada. La primera docente que hubo de esta escuela fueron las hermanas del benefactor, Don Afanador, por esta sede han pasado más de 20 docentes; al principio solo tenía como estructura física un apartamento para el docente y dos salones, luego con ayuda del municipio se construyó el restaurante escolar y la cancha de juegos.
                            </p>
                            <p class="accor"> 
                                La población asistente a la sede rural es poca, de bajos recursos, en su mayoría de estrato uno y proveniente de las veredas aledañas como Zelandia y las Mercedes, cuya fuente económica es la agricultura y la producción de frutales como el mango, la mandarina, la naranja y pequeña producción la ganadería. 
                            </p>
                            <p class="accor"> 
                                Se encuentra ubicada a 20 km del casco urbano del municipio de Tocaima Cundinamarca por la vía que conduce a Bogotá, vía mesitas del colegio girando a mano izquierda por la vereda la horqueta.
                            </p>
                            <p class="accor"> 
                                En la actualidad cuenta con 3 aulas, 1 unidad sanitaria de servicio de los estudiantes en regular estado, comedor y cocina para refrigerio escolar, un apartamento, sala de computo un patio de recreo y zonas verdes a sus alrededores para la siembra de algunos cultivos y plantas ornamentales que embellecen y benefician la institución.
                            </p>
                            <p class="accor"> 
                                Atiende una población de 20 estudiantes niños y niñas que oscilan entre las edades de 5 años a los 13 años aproximadamente; la población es flotante ya que los padres de familia buscan mejores oportunidades de trabajo por tanto se evidencia dicha situación.
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede Santo Domingo </h3><br>
                            <p class="accor">
                                La Sede Santo Domingo fue construida por el batallón de ingenieros Francisco José de Caldas, con dineros de la alianza para el congreso, con colaboración de la junta de acción comunal, en septiembre 24 de 1966.  Para está época sólo ofrecía los servicios educación básica primaria con el modelo flexible de escuela nueva.
                            </p>
                            <p class="accor">
                                En el año 2007 se constituyó en Institución Educativa Departamental Rural Santo Domingo, con código DANE 225815000139, En donde empezó a ofrecer el servicio de Básica Secundaría, con modelo flexible de postprimaria. Su primer Rector Fue el Licenciado Álvaro Hernán Mendigaña, y adjuntaba las sedes las Mercedes, Palacios, Zelandia, El recreo, La Cajita y La Gloria.  Otros Rectores que dirigieron la institución fueron los licenciados Benjamin Riveros y Manuel Hernández, hasta que estando en cabeza del Licenciado Manuel Hernández fue anexada, junto con sus sedes, a la IEDR Pubenza, con código DANE 225815000392, y empezó a ofrecer el servicio de Básica  y Media, bajo el modelo flexible de Media Rural y en el año 2016 tuvo su primera promoción de bachilleres.
                            </p>
                            <p class="accor"> 
                                En el año 2018 fue construido el coliseo cubierto por la gobernación de Cundinamarca.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3> <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>  RESEÑAS HISTORICAS SEDES PUBENZA</h3>
                </div>
                <div class="panel-body text-justify">
                    <ul class="acr">
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Escuela rural Alto de la Viga  </h3><br>
                            <p class="accor">
                                La escuela Alto de la Viga del municipio de Tocaima, se encuentra ubicada en la vereda del mismo nombre. Dicha vereda fue  fundada 1813 porque trazando la línea férrea se encontró una viga de amarre en oro y por este hecho se denominó Alto de  la Viga.
                            </p>
                            <p class="accor">
                                La institución educativa empezó a tomar empuje en el año 1963 funcionando en una de las casas del señor Cristancho Cortes.
                            </p>
                            <p class="accor"> 
                                La profesora Dora Díaz inauguro el primer paso a la educación básica primaria para los niños de esta región;  Más tarde el señor Cortes donó un terreno y  allí construyeron el primer salón para el desarrollo de las labores educativas;  dichas labores fueron desempeñadas por el profesor Noel Torres, quien falleció mucho después. 
                            </p>
                            <p class="accor"> 
                                En esta escuela se trabaja la metodología Escuela Nueva por ser escuela unitaria y se orienta desde preescolar hasta 5°.  Se trabaja con los diferentes entes educativos: comité estudiantil, junta de acción comunal,  comité de evaluación y consejo directivo. 
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Escuela rural la tete  </h3><br>
                            <p class="accor">
                                La teté es una de las 30 veredas de Tocaima.  Para la población el nombre de la vereda proviene de la formación en unas piedras donde sale el agua gota a gota por unos orificios parecidos a las tetas de una vaca.
                            </p>
                            <p class="accor">
                                Los panches ocuparon este territorio, se han encontrado ollas, vasijas de barro, tunjos de oro que según cuentan los campesinos son niños envueltos en oro y salen llorando a esconderse.
                            </p>
                            <p class="accor"> 
                                Pasa una quebrada que está casi seca porque dicen que peleaban mucho por el agua y Dios los está castigando porque unas familias querían el agua para ellas solamente, esta agua es salada, toman agua llovida porque tienen tanques de reserva.
                            </p>
                            <p class="accor"> 
                                La escuela empezó en un ranchito de paja en la finca la primavera la profesora era de nombre Jael.  Después Abraham Vanegas  cedió un pedazo de tierra para que la escuela funcionara en mejores condiciones, siendo su profesora Yamile Vera y Susana Velásquez.
                            </p>
                            <p class="accor"> 
                                En 1981 se nombraron promotoras Clara Inés Palomo, Marina Rico y Dorely Rodríguez. Las señoritas Vanegas Gilma, Bertha, Omaira y Ofelia vendieron un lote a la licorera de Cundinamarca por un valor de $2.000 donde la escuela está construida  actualmente en ladrillo.
                            </p>
                            <p class="accor"> 
                                Su metodología es escuela Nueva, se trabaja con guías de acuerdo a los que puedan avanzar los niños;  se trabaja con los diferentes entes educativos  comité estudiantil, Junta de Acción Comunal, Comité de Evaluación y promoción y Consejo Directivo.
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Escuela La Salada  </h3><br>
                            <p class="accor">
                                Primeramente la sede la salada inicio labores en una casa prestada a orillas de carretera en el año 1940. Teniendo en cuenta las dificultades presentadas en estas instalaciones  y por  la cobertura estudiante que fue aumentado   surgió una nueva infraestructura  la cual era la casa DE LA  COOPERATIVA. Pero debido a las falencias  a nivel  de  las instalaciones  a los habitantes de esta vereda  les toco conseguir unas nuevas subestructuras.
                            </p>
                            <p class="accor">
                                Por eso tiempo el señor ENRIQUE TORRES  se apersono de su labor y arrendo en su nombre una casa  para que allí funcionara  la escuela  cerca de donde funciona actualmente.
                            </p>
                            <p class="accor"> 
                                En el año  1945  viendo las dificultes   con los estudiantes durante estos cinco años el señor SATURNINO PÉREZ  donó  el terreno  para construir la escuela , pero uno de los requisitos para lograr esta meta era  que llevara el nombre del presidente de ese tiempo( 1950-1951)  LAUREANO GÓMEZ.  Con mucho agrado  y  con anhelos los padres de familia comenzaron a construir con sus propias manos  dos salones. Posteriormente   teniendo en cuenta el aumento considerable de estudiantes ya que se  asistían niños (as) de las veredas aledañas  fue necesario  construir  nuevos salones.
                            </p>
                            <p class="accor"> 
                                En el año 1960 teniendo en cuenta los comentarios de la comunidad  la junta  de acción comunal y la junta de padres  se reunieron y deliberaron la decisión de cambiar el  nombre de la escuela  y colocar el nombre  de la quebrada que pasa  por  ahí. Por esta razón la escuela Rural la Salada. En ese momento los estudiantes venían a su aprendizaje  cada tres días.
                            </p>
                            <p class="accor"> 
                                En el 1980 la escuela estaba  con una cobertura de estudiantes aproximadamente 215 a 220  por eso necesario siete docentes,  debido a las dificultades que se presentaban a nivel transporte las juntas de acción comunal de las veredas aledañas fueron construyendo escuelas para sus  niños debido a esto la cobertura de educandos fue disminuyendo  notablemente y relativa  el personal docente  hasta este momento que se encuentra dos 
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede Malberto  </h3><br>
                            <p class="accor">
                                Hace setenta años  aproximadamente  empezó a funcionar la escuela Malberto inicio en la casa del señor Desiderio Rodríguez en arriendo que pago la comunidad la primera maestra fue la señora Teodosia Ortiz y trabajaba hasta los sábados en un calendario académico de una modalidad diferente de día de por medio un día asistían los niños y otro día las niñas escribían en bancas grandes de madera y el recreo era en el patio de la casa.
                            </p>
                            <p class="accor">
                                Debido al deterioro de la planta física y el mal estado trasladaron la escuela para otra casa en arriendo del señor Pioquinto Garzón. La escuela no duro mucho porque era una casa muy pequeña se trasladó después a la casa del señor Máximo Martínez pagando arriendo donde la comunidad comenzó a realizar bazares y rifas con la opción de comprar un lote de la señora Raimunda García en 1962 como no fue acto el terreno para construir y lo trataron de dinamitar pero no se pudo iniciar la obra.
                            </p>
                            <p class="accor"> 
                                La comunidad acordó permutar el lote con un lote del señor Capitolino Herrera por la carretera principal en 1964 se fundó la escuela Malberto actual vía Tocaima Girardot carretera principal limitando con los predios al norte con Abraham Vanegas Ortiz, al sur Capitolino Herrera, al oriente Marco Tulio García, al occidente Álvaro Izquierdo con auxilio de $10.000 pesos del gobierno se inauguró la escuela marzo de 1964.
                            </p>
                            <p class="accor"> 
                                En 1980 el DERI da un auxilio y construye un muro al frente para encerar la escuela en 1983 toma el programa de escuela nueva. 1988 se lleva a cabo la pavimentación del patio de recreo y construcción del pozo séptico. 
                            </p>
                            <p class="accor"> 
                                En 1989 la lotería de Cundinamarca dona las canchas para la práctica de microfutbol y básquetbol y en 1991 se vincula la escuela con el programa del bienestar familiar y se construyen mesones de cemento con la ayuda de la administración municipal.
                            </p>
                            <p class="accor"> 
                                1993 durante el gobierno de Guillermo Delgado se construyó un salón y un horno para una microempresa en 1994 con ayuda de policías bachilleres se diseñaron murales en la institución las artesanías duraron tres años. En el 2000 llegaron computadores para educar y se trajeron tres computadores blancos de mesa que dieron apertura a la sala de sistemas. En 2008 llego la profe María Cristina correal en 2009 se tumbó el muro que presentar un eminente  peligro para los niños. 
                            </p>
                            <p class="accor"> 
                                En el 2010 se compró un nuevo parque infantil con la ayuda del alcalde Ibarra 
                                En el 2011 llegaron cinco portátiles y el internet que duro por dos años. En 2012 se tumbaron los mesones con ayuda de la comunidad se compraron mesas rimas y con ayuda del compes en rectoría del licenciado Manuel Hernández y se inició el proyecto productivo de la siembra de sábilas las cuales se vendían a final de año para gastos de la escuela en las festividades y clausura.
                            </p>
                            <p class="accor"> 
                                En 2013 se trajeron tableros acrílicos para básquetbol y sus mayas junto con tableros para el aula. En el 2014 se hizo el encerramiento de la cancha y el parque infantil quedando la escuela encerrada en su totalidad. En agosto 2015 se diseñó el proyecto cultural muro precolombino con la colaboración de la comunidad y se adecuo el salón para biblioteca debido a que la primera infancia había clausurado ese programa tres años atrás.
                            </p>
                            <p class="accor"> 
                                En 2016 se hizo con la ayuda de un nuevo compes un nuevo parque infantil en la rectoría del licenciado Harold Cetares. En 2017 se realizó el proyecto ambiental de parque temático con llantas con la colaboración de los padres de familia. En 2018 se trajo televisor y cable HMI y en marzo se hizo la siembra de cien corales y cuarenta primaveras con la colaboración de la Umata y se adecuo el salón de juegos y restauración de los antiguos y hechura de nuevos murales por parte de la comunidad quedando pendiente para el 2019 mesas de pimpón y juegos de salón.
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Sede Vila  </h3><br>
                            <p class="accor">
                                La nueva escuela Vila de la vereda Vila del municipio de Tocaima queda localizada con respecto a la zona urbana del municipio en la parte sur occidental. Desde la cabecera municipal hasta la vereda hay carretera; para llegar a la escuela algunos niños tienen que caminar una trocha y pasar una pequeña quebrada otros por necesidad tienen que atravesar un parte de donde actualmente hay desplazamiento de tierra.
                            </p>
                            <p class="accor">
                                El plantel funciona como centro educativo desde el año 1960 en este año el señor Juan Gabriel Sastoque, dono el terreno y una pequeña casa para que allí funcionara la escuela. 
                            </p>
                            <p class="accor"> 
                                En este lugar se atendieron 35 niños en los grados primero, segundo y tercero. En 1964 la junta de acción comunal negocio, en permuta un terreno más amplio. Con el señor Rafael Romero Manrique el terreno en donde actualmente funciona el plantel. En este terreno y con la participación de la junta de acción comunal y los gobiernos departamentales y municipales se construyó la primera parte de la planta física del plantel en donde se atendieron hasta 47 niños en los grados antes mencionados de la básica primaria, con un solo educador, pues la escuela se clasificaba como unitaria.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading text-center" >
                    <h3>  <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>  CONTEXTO ECONOMICO Y NORMATIVIDAD 
                </div>
                <div class="panel-body text-justify">
                    <ul class="acr">
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Contexto Socio-cultural de la Institución</h3><br>
                            <p class="accor">
                                La Institución no recibe aportes del pago de cobros por derechos académicos de los estudiantes de acuerdo con la Ley de Gratuidad, la secretaria de educación aporta un monto determinado por estudiante para cubrir los gastos de la canasta educativa al igual que el pago del transporte de los estudiantes. 
                                Otros ingresos con los que cuenta la institución son generados por el arrendamiento de la tienda escolar.</p>
                            <p class="accor">
                                La mayor parte de la población estudiantil es de clase baja y media, están ubicados en los estratos 1 y 2. 
                                De igual manera, la institución se ha preocupado por mantener vivas las tradiciones culturales y folklóricas del municipio, apropiándolas y llevándolas a cada una de las aulas contando con la participación activa de la comunidad educativa con proyección a otros municipios. 
                            </p>
                            <p class="accor"> 
                                La institución se integra creativamente en los eventos de cultura del municipio en diferentes actividades como: comparsas, bailes, tradición oral y cuentería, además realiza anualmente semana cultural, semana deportiva, celebración de fiestas religiosas y participación en diferentes eventos interinstitucionales. 
                            </p>
                        </li> 
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h3 class="ht">• Normatividad </h3><br>
                            <p class="accor">
                                Resolución No. 04541  de 29 de diciembre de 2004, por medio de la cual se integró las instituciones educativa del municipio de Tocaima – Cundinamarca.  Y posteriormente la Resolución No. 02251 de 07 de abril de 2010 por la cual se modifica la resolución No. 04541 de diciembre de 204, por medio de la cual se integró las instituciones educativa del municipio de ‘Tocaima - Cundinamarca
                            </p>
                            <p class="accor">
                                <b>PUBENZA:</b> Resolución 011760 del 20 de Diciembre de 2007 por la cual se concede  reconocimiento de carácter oficial a la sede principal y a las sedes Resolución N° 007610 de 20 de Noviembre de 2008 por medio de la cual se concede autorización para la prestación del servicio educativo de los grados decimo y once. Resolución No. 05857 de 10 de julio de 2009 por medio de la cual se modifica la Resolución 011760 del 20 de Diciembre de 2007 y amplia el servicio educativo al nivel de media académica.  La  Resolución N° 008608 de 30 de Noviembre de 2012 por medio de la cual se concede  reconocimiento oficial a la media académica en la institución  rural Pubenza.
                            </p>
                            <p class="accor"> 
                                La educación de adultos tienen  los siguientes actos administrativos de legalización: Resolución 08227 del 20 de octubre 2009 por medio de la cual se concede reconocimiento de carácter oficial. 
                            </p>
                            <p class="accor"> 
                                <b>SANTO DOMINGO:</b> Resolución N° 000739 de 05 de Febrero  de 2008 por medio de la cual se concede reconocimiento de carácter oficial a la Institución  Santo Domingo que luego se integró como sede a la institución Pubenza . Resolución N° 001735 del 05 de Febrero del año 2015 por medio de la cual se autoriza la ampliación de la prestación del servicio educativo en el nivel de media académica rural.  Resolución No. 09243 del 15 de diciembre del 2016 por medio de la cual se concede reconocimiento oficial al nivel de media académica  en la sede Santo Domingo 
                            </p>
                            <p class="accor"> 
                                Resolución 01694 del 26 de febrero de 2013 por medio de la cual se autoriza la ampliación de la prestación del servicio educativo oficial de adultos  Sede Santo Domingo.  Resolución No. 07202 del 06 de noviembre del 2013 por la cual se modifica la Resolución No. 01694 del 26 de febrero de 2013 y se concede reconocimiento oficial al programa de educación de adultos ciclos I, II, III, IV, V Y VI a la sede rural Santo Domingo. 
                            </p>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-music" aria-hidden="true"></span>  HIMNO DE LA INSTITUCIÓN</h3>
                </div>
                <div class="panel-body text-center">
                    <p><b>Coro</b></p><br>
                    <p> Entonemos un himno de gloria
                        a pubenza con mucha emoción
                        sus ancestros que forma la historia
                        los llevamos en el corazón.</p><br><br>
                    <p><b>I</b></p><br>
                    <p>Eres templo de luz y de ciencia
                        su virtud, su saber, su valor
                        es aquí donde nace a conciencia
                        una patria con su resplandor</p>
                    <p><b>II</b></p><br>
                    <p>¡Salve! ¡salve! pujante pubenza
                        que su ejemplo olvidarlo jamás
                        la niñes es el fruto que alcanza 
                        a buscar con trabajo la paz</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/footer.inc.php';
?>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>
