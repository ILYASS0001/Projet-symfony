<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return new Response(content: "Hello World !");
    }
    
    #[Route('/about/{name}', name: 'app_about')]
    public function about(string $name): Response
    {
        return new Response(content: "Hello ". $name ." !");
    }

    #[Route('/contact/{name}', name: 'app_contact')]
    public function contact(string $name = "Anonymous"): Response
    {
        return new Response(content: "Hello ". $name ." !");
    }

    #[Route('/cat/{name}', name: 'app_cat', requirements: ['name '=>'\d+'])]  
    public function cat(int $name = 1): Response
    {
        return new Response(content: "Hello ". $name ." !");
    }

    #[Route( '/add-book', name: 'app_book_add' )]  
    public function addBook(): Response
    {
        $book = new Book();

        $bookForm = $this->createForm( BookType::class, $book);
        

        return $this->render( 'dummy/book.html.twig', [
            "bookForm" => $bookForm
        ]);
    }
}
