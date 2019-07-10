<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
    * @Route("/home", name="home")
    */
    public function home ()
    {
        //propriété privee sur le travail d'adrien à voir ? afin de ne pas call le tab tout ke temps????
        $articles = [
            0 => [
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lsa-conso.fr/mediatheque/8/2/9/000033928_94.jpg'
            ],
            1 => [
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-ECLAIR-DE-GENIE.jpg'
            ],
            2 => [
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg'
            ],
            3 => [
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lsa-conso.fr/mediatheque/8/2/9/000033928_94.jpg'
            ],
            4 => [
                'title' => 'Article 5',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-ECLAIR-DE-GENIE.jpg'
            ],
            5 => [
                'title' => 'Article 6',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg'
            ],

        ];
        //je recupère les 3 derniers éléments de mon tableau
        $lastArticles = array_slice($articles, 0, 3);

        return $this->render('homepage.html.twig',
            [
                'articles' => $lastArticles
            ]

        );
    }


    /**
     * @Route("/articles", name="articles")
     */

        public function articles ()
    {

        $articles = [

            0 => [
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lsa-conso.fr/mediatheque/8/2/9/000033928_94.jpg'
            ],
            1 => [
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-ECLAIR-DE-GENIE.jpg'
            ],
            2 => [
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg'
            ],
            3 => [
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lsa-conso.fr/mediatheque/8/2/9/000033928_94.jpg'
            ],
            4 => [
                'title' => 'Article 5',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-ECLAIR-DE-GENIE.jpg'
            ],
            5 => [
                'title' => 'Article 6',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg'
            ],

        ];


        return $this-> render ('articles.html.twig',
            [

                'articles' => $articles
            ]

        );
    }


    //je crée ma route en y ajoutant dans mon chemin ma wildcard id ce qui recupère un article à partir de sa key
    //les chiffres sont des keys et représentent l'id de l'article
    /**
     * @Route("/focus/{id}", name="focus")
     */
    // je déclare une méthode article avec une valeur 'id' en paramètre
    public function focus ($id)
    {
        // les id sont indiquées en key à l'intérieur de ma variable articles [array] un array est un type de variable (<table> est un tableau en HTML)
        //key=>valeur
        $articles = [

            0 => [
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lsa-conso.fr/mediatheque/8/2/9/000033928_94.jpg'
            ],
            1 => [
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-ECLAIR-DE-GENIE.jpg'
            ],
            2 => [
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg'
            ],
            3 => [
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lsa-conso.fr/mediatheque/8/2/9/000033928_94.jpg'
            ],
            4 => [
                'title' => 'Article 5',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-ECLAIR-DE-GENIE.jpg'
            ],
            5 => [
                'title' => 'Article 6',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://sous-titre.eu/wp-content/uploads/2017/01/tendances-patisserie-luxe-buche-de-noel-pouchkine.jpg'
            ],

        ];

    //la méthode 'render' compile le fichier twig en HTML afin de renvoyer une réponse obligatoire
    // elle renvoit également l'article correspondant à la requete
    return $this-> render ('focus.html.twig',
        [
            //je récupère la valeur correspondant à la key $id de l'array $articles que je stocke dans la variable twig 'articles'
            'articles' => $articles[$id]
        ]

    );

    }

    //____________________________________________________________________________________________________

}