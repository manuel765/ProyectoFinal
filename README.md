# ProyectoFinal
Proyecto Final de Curso Web 2017

Requerimentos del sistema:
-------------------------
 + Mysql.
 + XAMPP
 + Windows 7 o superior
 + Sistema Operativo de 32 bits
 
Integrantes:
-------------------------
  + Anotense
  + Anotense
  + Anotense
  + Anotense
  + Luis Marquez Valdez.

Instalación del sistema:
-------------------------

1. Inicializar XAMPP y Mysql.
2. Descargar el repositorio completo (boton verde, Clone or dowload/Dowload ZIP).
3. Extraer el contenido del archivo .ZIP en: C:\xampp\htdocs 
4. Entrar en la carpeta recien descomprimida ( C:\xampp\htdocs\ProyectoFinal-master)
5. Entrar en la carpeta BD (C:\xampp\htdocs\ProyectoFinal-master\BD)
6. Copiar el Archivo "usuarios.sql" en C:\xampp\mysql\bin <!-----IMPORTANTE ---->
7. Abrir CMD (WINDOWS+R).
8. colocar: cd/xampp/mysql/bin
10. colocar: mysql -u root
11. colocar: create database usuarios;  
12. colocar: exit;
13. colocar: mysql -u root usuarios < usuarios.sql <!-----SUPER IMPORTANTE ---->
14. CERRAR CMD
15. ir a: C:\htdocs\ProyectoFinal-master\templates
16. Abrir main.html en el navegador favorito.
17. cambiar el URL: file:///C:/xampp/htdocs/ProyectoFinal-master/Templates/main.html
18. por: http://localhost/ProyectoFinal-master/Templates/main.html <!--IMPORTANTE-->
19. Registrarse.
20. Iniciar Sesion.
21. Checar INFORMACION DE USUARIO ADMINISTRADOR en: C:\xampp\htdocs\ProyectoFinal-master\BD\Usuario administrador LEER.txt <!-----IMPORTANTE ---->
24. EL SISTEMA ESTA LISTO.
