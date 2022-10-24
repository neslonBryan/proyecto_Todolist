                                                        Documentacion:

LISTADO DE CLASES Y METODOS


--clase : conexion (db.php)
    *metodo: __construct (constructor por defecto , donde se inicializa las variables)
    * metodo: conectar (para hacer la conexion)
--clase : USER(consultas.php)
    * metodo getUser (para obtener verificar el usuario en la BD)
--clase : metodos(acciones.php)
    * metodo mostrarDatos 
    * metodo insertarTarea
    * metodo actualizarTarea
    * metodo eliminarTarea
--clase : usuario(verificar.php)
    * metodo verificarUsuario
--clase : comprobar
    * metodo: insertarUsuario
    * metodo: verificarUsuario


Hola señor Dev a continuacion tienes la documentacion del proyecto :

********* carpeta baseDatos

    Un archivo en formato sql que corresponde a la base de datos usada en el proyecto (mysql)

    El otro corresponde al archivo para la conexion , en esta se implento una clase conexion que tiene los atributos necesarios para hacer la conexion con la base de datos , en el metodo constructor le damos valores a los atributos , asi mismo tenemos un metodo conectar  con una variable "conn" que nos sirve para usar una extension mysqli y asi pasarle los parametros del constructor.

********  consultas.php:

    Tenemos una clase "USER" que extiende de la clase conexion, la extension servira para poder usar la conexion , dentro de la clase "USER" una funcion "getUser" que tiene los parametros "$email , $contraseña" , tiene una variable "$sql" que guarda una consulta que nos permitira verificar la cantidad de usuarios con la variable $email y $contraseña que estan registrados , nos devolvera un valor booleano (true si hay un usuario que tenga el valor de esas variables , false si no hay ningun usuario con el valor de esas variables).

********  index.php:

    Tenemos un formulario que enviara datos al achivo controlador.php a travez del metodo POST ,en la parte inicial del documento tenemos un pedazo de codigo en php que nos rediccionara a nuestro crud si una session esta iniciada.

********  controladro.php:

    Tiene una condicional con la que cada vez que se presione el boton iniciar session("submit") a travez del metodo POST guardara el valor del email y contraseña en las variables con sus respectivos nombres  , tiene otra condicional para que los campos no esten vacios , y en caso de que esten nos mandara una alerta con el mensaje "email y/o contraseña vacio(s)" ; en caso de que no esten vacios crea una instacion de la clase USER(consultas.php) , luego tenemos una condicional que llamara al metodo getUser con los parametros guardados si es verdadero inicia sesion , crea una variable session en la variable email y nos redirecciona a sistema/principal.php ; caso contrario  nos mostrara el mensaje "El usuario no existe".

********** Carpeta sistema

    --Cuenta con un archivo principal.php que sera como el index de esta carpeta , en la liena 8 tenemos una condicional en la cual comprobamos la existencia del susuario y mientras esto suceda se aplicara : 

    creacion de una variable $iniciouser que nos permitira guardar la session del usuario , linea 27 le damos la bienvenida a $iniciouser ;luego creamos un formulario con un campo para ingresar la tarea.
    
    Tenemos otro formulario para mostrarlos los datos , y para que los datos no se mezclen ponemos un pequeño codigo php en el cual : 
    instanciamos un objeto de la clase metodos(acciones.php) para poder usar sus metodos, hacemos un for each(bucle para recorrer los elementos de la base de datos)
    y mientras este se ejecute creara filas con 3 columnas , una en la que nos muestran nuestra tarea y las tras 2 donde estan los botones para editar y eliminar.

    Finalmente tenemos un boton para cerrar la session con nombre cerrarSession que se podra ejecutar en la linea 2 del archivo , primero iniciamos la session , despues hacemos la condicional para saber si se presiono el boton en caso de que sea asi la session actual se cierra y nos redireciona a ../index.php sin forma de poder volver a entrar sin logearse.

    --  editar.php
    Tenemos un pequeño formulario para poder editar la tarea , esto atravez de la instancia de conexion el cual se ejecuta y atravez del $id  que conseguimos por el metodo GET ejecutamos la consulta para hallar la tarea con ese $id y en la variable resultado ejecutamos un mysql_query que nos servira para ejecutar la consulta , la variable $ver
    nos servira para modificar la tarea de la fila que tenga el numero $id.
    
    --  consultas.php
    Tenemos una clase llamada metodos , que tiene 4 metdos:
    - mostrarDatos , que nos servira para mostrar datos.
    - insertaTarea que insrtara la tarea , requiere el email.
    - actualizarTarea , actualiza la tarea .
    - eliminarTarea , elimina la tare y requiere el id de la tarea.

    **** Sub-carpeta procesos
    tiene 3 archivos que  requiere tanto la conexion a la base de datos y la clase acciones .

    ----- actualizar.php
   acepta los campos enviados por el metodo POST (id ,titulotarea) y los guarda en un arreglo , se instacia un objeto de la clase metodos(acciones.php) y en una condicional usamos el metodo actualizar tarea si el resultado es 1 entonces nos regresa a la pagina principal  con la tarea actualizada

    ---- eliminar.php
    se vale del id enviado por el metodo POST , instancia la clase metodos y con una condicional define si se elima y nos refresca la pagina o nos muestra un mensaje con error

    ---- insertar.php
    acepta los campos enviados por el metodo POST (id ,titulotarea) y los guarda en un arreglo , se instacia un objeto de la clase metodos(acciones.php) con una condicional usa el metodo actualizar tarea esperando 1 como resultado para refrescar la pagina con la tarea ya ingresada.



