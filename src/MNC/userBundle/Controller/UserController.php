<?php

namespace MNC\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
      //  return $this->render('MNCuserBundle:Default:index.html.twig');
      //  return new Response ('Bienvenido a mi modulo de Usuarios');

      //Estoy conectado a los servicios para manejo de BD
      $em = $this->getDoctrine()->getManager();

      //Obtiene todos los datos de la tabla User
      $users= $em->getRepository('MNCuserBundle:User')->findAll();


/*
      $res = 'Lista de usuarios <br/>';
      //Recorro todos los usuarios obtenidos de la base de datos
      foreach ($users as $user) {
        $res.= 'Usuario: '. $user->getUsername() . ' - Email: ' . $user->getEmail() . ' <br/>';
      }
      return new Response ($res);
*/

  //Renderizar la accion a una vista
  return $this->render('MNCuserBundle:User:index.html.twig',array( 'users' => $users ) );

    }

    public function addAction()
    {
      //  return $this->render('MNCuserBundle:Default:index.html.twig');
        return new Response ('Bienvenido a mi modulo de Usuarios');
    }

    public function editAction($id)
    {
      //  return $this->render('MNCuserBundle:Default:index.html.twig');
        return new Response ('Bienvenido a mi modulo de Usuarios');
    }

    public function viewAction($id)
    {
        $respository = $this->getDoctrine()->getRepository('MNCuserBundle:User');
        $user= $respository->find($id);
        return new Response ('Usuario: '. $user->getUsername() . ' - Email: ' . $user->getEmail() . ' <br/>');
    }

    public function deleteAction($id)
    {
      //  return $this->render('MNCuserBundle:Default:index.html.twig');
        return new Response ('Bienvenido a mi modulo de Usuarios');
    }



    // A modo de ejemplo Parametros dentro de una ruta
    public function parametersAction($page)
    {
        return new Response ('Este es mi Articulo ' . $page);
    }

}
