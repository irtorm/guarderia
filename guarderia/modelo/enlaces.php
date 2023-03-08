<?php
class Paginas
{
    //metodo donde se obtiene la ruta del archivo
    static public function enlacesPaginasModelo($enlaces)
    {
        if($enlaces == 'principal')
        {
            $modulo = 'vistas/modulos/principal.php';
        }
        else if($enlaces == 'alta_persona')
        {
            $modulo = 'vistas/modulos/alta_persona.php';
        }
        else if($enlaces == 'agregarNino')
        {
            $modulo = 'vistas/modulos/agregar_nino.php';
        }
        else if($enlaces == 'agregarFamiliar')
        {
            $modulo = 'vistas/modulos/agregar_familiar.php';
        }
       else if($enlaces == 'agregarRecogida')
        {
            $modulo = 'vistas/modulos/agregar_recoger.php';
        }
       else if($enlaces == 'agregarAlergia')
        {
            $modulo = 'vistas/modulos/agregar_alergias.php';
        }
       else if($enlaces == 'agregar_platillo')
        {
            $modulo = 'vistas/modulos/agregar_platillo.php';
        }

        else
        {
            $modulo = 'vistas/modulos/principal.php';
        }
        //regresamos la ruta dentro de una variable la ruta del archivo dentro de una variable

        return $modulo;
    }
}
