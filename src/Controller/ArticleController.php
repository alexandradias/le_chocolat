<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    //je déclare une variable product
    private $products =
    [
        [
            'title' => 'Article 1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 1
        ],
        [
            'title' => 'Article2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 2
        ],
        [
            'title' => 'Article 3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 3
        ],
        [
            'title' => 'Article 4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 4
        ],
        [
            'title' => 'Article 5',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 5
        ],
        [
            'title' => 'Article 6',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 6
        ],
        [
            'title' => 'Article 7',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 7
        ],
        [
            'title' => 'Article 8',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg',
        'id' => 8
        ],

    ];

    /**
     * @Route("/trot", name="trot")
     */
    public function products ()
    {

        return $this->render('trot.html.twig',
            [
                'products' => $this->products
            ]);
    }

    /**
     * @Route("/trot/{id}", name="trotFocus")
     */
    public function product ($id)
    {

        return $this->render('trotFocus.html.twig',
            [
                'product' => $this->products[$id-1]
            ]);
    }

    /**
     * @Route("/cgv", name="cgv")
     */

    public function cgv (Request $request){
        $lang = $request->query->get('lang');

        return $this->render('cgv.html.twig',[
            'lang' => $lang
            ]);
    }
}