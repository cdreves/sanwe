<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cliente;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ClientController
 *
 * @author alacevedo
 */
class ClientController extends Controller{
    /**
     * @Route("/client/new")
     */
    public function newAction(){
        $cliente = new Cliente();
        $cliente->setNombreCliente('Allan');
        $cliente->setApellido1('Acevedo');
        $cliente->setApellido2('Matus');
        $cliente->setCiudad('Santiago');
        $cliente->setComuna('San Miguel');
        $cliente->setDireccion('Alcalde Pedro Alarcon 963');
        $cliente->setDni('16.345.706-7');
        $cliente->setEmail('allan.acevedo@gmail.com');
        $cliente->setEstado(1);
        $cliente->setFechaCreacion(new \DateTime('now'));
        $cliente->setFechaNacimiento(\DateTime::createFromFormat('Y-m-d', '1986-07-07'));
        $cliente->setNacionalidad('1');
        $cliente->setIdPaciente(null);
        $cliente->setNombrePaciente(null);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($cliente);
        $em->flush();
        
        return new Response('Producto creado');
        
    }
    
    /**
     * @Route("/client/get/{id}")
     */
    public function getAction($id){
        $cliente = new Cliente();
        $cliente->setNombreCliente('Cliente prueba');
        $cliente->setApellido1('test1');
        $cliente->setApellido2('test1');
        $cliente->setCiudad('Santiago');
        $cliente->setComuna('San Miguel');
        $cliente->setDireccion('Alcalde Pedro Alarcon 963');
        $cliente->setDni('16.345.706-7');
        $cliente->setEmail('allan.acevedo@gmail.com');
        $cliente->setEstado(1);
        $cliente->setFechaCreacion(new \DateTime('now'));
        $cliente->setFechaNacimiento(\DateTime::createFromFormat('Y-m-d', '1986-07-07'));
        $cliente->setNacionalidad('1');
        $cliente->setIdPaciente(null);
        $cliente->setNombrePaciente(null);
        
        $form = $this->createFormBuilder($cliente);
        $form->add('Dni', 'text');
        $form->add('NombreCliente', 'text');
        $form->add('Apellido1','text');
        $form->add('Apellido2','text');
        $form->add('Ciudad','text');
        $form->add('Comuna','text');
        $form->add('Direccion','text');
        $form->add('Email','text');
        $form->add('Estado','text');
        $form->add('FechaNacimiento', 'date');
        $form->add('Nacionalidad', 'text');
        $form->add('IdPaciente', 'hidden');
        $form->add('NombrePaciente', 'text');
        $form->add('Guardar', 'submit', array('label' => 'Guardar Cliente'));
        $form_hlp = $form->getForm();
        
        return $this->render('client/new.html.twig',
                array('form' => $form_hlp->createView())
                );
    }
    
}
