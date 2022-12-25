<?php

function getDataBook()
{
    $books = array(
        array(
            'title' => 'Buku Pintar Teknik Hacking',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem quas similique optio alias impedit, ut atque amet, assumenda unde accusamus a. Incidunt laborum commodi beatae consectetur possimus ducimus quo eaque.',
            'author' => 'Dedik Kurniawan, Java Kurniawan',
            'publisher' => 'PT Elex Media Komputindo',
            'isbn' => '9786020219370',
            'year' => '2013',
            'total' => 5,
        ),
        array(
            'title' => 'Pacaran No Way! Why?',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem quas similique optio alias impedit, ut atque amet, assumenda unde accusamus a. Incidunt laborum commodi beatae consectetur possimus ducimus quo eaque.',
            'author' => 'Ahmad Masrul',
            'publisher' => 'PT Elex Media Komputindo',
            'isbn' => '9786020269597',
            'year' => '2015',
            'total' => 2
        ),
    );

    return $books;
}

function showBooks($books)
{
    if ($books == null)
    {
        $books = getDataBook();
    }

    $view = include 'books/index.php';
    return $view;
}

function createNewBook()
{
    $view = include 'books/create.php';
    return $view;
}

function storeNewBook()
{
    $books = getDataBook();

    $data = array(
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'publisher' => $_POST['publisher'],
        'isbn' => $_POST['isbn'],
        'year' => $_POST['year'],
        'total' => $_POST['total']
    );
    
    array_push($books, $data);

    return showBooks($books);
}

function editBook($id)
{
    $books = getDataBook();

    $book = $books[$id];

    $view = include 'books/edit.php';
    return $view;
}

function updateBook($id)
{
    $books = getDataBook();

    $data = array(
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'publisher' => $_POST['publisher'],
        'isbn' => $_POST['isbn'],
        'year' => $_POST['year'],
        'total' => $_POST['total']
    );
    
    $books[$id] = $data;

    return showBooks($books);
}

function deleteBook($id)
{
    $books = getDataBook();

    \array_splice($books, $id, 1);

    showBooks($books);
}
?>