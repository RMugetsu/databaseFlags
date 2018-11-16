Pasos a seguir:
1. Descarga la base de datos: [world.sql.gz](http://downloads.mysql.com/docs/world.sql.gz)
2. Descomprimir el archivo descargado hasta obtener el archivo sql
3. Abre la terminal(Ubuntu):
4. Para añadir la base de datos a nuestro mysql, usamos: sudo mysql -u "usuario" -p world < world.sql
5. Para conectar a la base hay que modificar la linea que contiene: mysqli_connect('localhost','ruben','ruben123')
