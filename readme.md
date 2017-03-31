# Instalación AppPeliculas

+ Después de descargar o clonar el proyecto 

        $ cd nombreRepositorio

+ Ejecutar comando

        $ composer install
        
+ Modificar el nombre del archivo __.env.example.__ por __.env__ y agregar credenciales.

+ Script BD Mysql 
        
Base de datos: `cinema`

        1) Administrador: Permite hacer los dos CRUD Usuarios y Peliculas.
        
           Datos para ingresar por el admin:
           
            'email'= 'admin@gmail.com'
            
            'password' = '123456'
            
            
        2) Usuario normal: Permite hacer solo un CRUD Peliculas
        
           ejemplo de un usuario:
           
           'email'= 'katherinam35@gmail.com'
           
           'password' = '123456'

+ Generar una key .

         $ php artisan key:generate

+ Ejecutar el proyecto.

        $ php artisan serve
