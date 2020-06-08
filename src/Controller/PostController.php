<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Form\PostType;
use App\Entity\Jeux;
use App\Entity\User;
use App\Entity\Vente;

class PostController extends AbstractController
{
    
    /**
     * @Route("/", name="home")
     */
    public function index(){
        $repository = $this -> getDoctrine() -> getRepository(Jeux::class);
        $jeux = $repository -> findAll();

        return $this -> render('post/index.html.twig', [
            'jeux' => $jeux
        ]);
    }

    /**
    * @Route("/post/{id}", name="post")
    */
    public function post($id){
        //1 : Récupérer les données (infos, commentaires)

        $manager = $this -> getDoctrine() -> getManager();
        $jeux = $manager -> find(Jeux::class, $id);

        $repo2 = $this -> getDoctrine() -> getRepository(Vente::class);
        $vente = $repo2 -> findAll();


        //2 : Afficher la vue (avec les data transmises)
        return $this -> render('post/show.html.twig', [
            'jeux' => $jeux,
            'vente' => $vente
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function Compte(Request $request){
        $User = new User();

        $form = $this ->createForm(PostType::class, $User);
        $form -> handleRequest($request);

        if($form -> isSubmitted()){

            $manager = $this -> getDoctrine() -> getmanager();

            $manager -> persist($User);
            $manager -> flush();
        }

        return $this -> render('compte/connexion.html.twig');

    }


}
