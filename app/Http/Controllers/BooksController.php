<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Authors;
use App\Models\Categories;
use App\Models\Ratings;

class BooksController extends Controller
{
    public function indexBooks()
    {
        $books = Books::join('categories', 'categories.id', 'books.categories_id')
            ->join('authors', 'authors.id', 'books.authors_id')
            ->join('ratings', 'ratings.id', 'books.ratings_id')
            ->orderBy('ratings.average_rating', 'desc')
            ->select(
                'books.id',
                'books.book_name',
                'categories.category_name as category_name',
                'authors.author_name as author_name',
                'ratings.average_rating as average_rating',
                'ratings.voter as voter'
            )
            ->limit(10)
            ->get();
        return view('page.books', compact('books'));
    }

    public function filterBooks(Request $request)
    {
        $cari = $request->get('cari');
        $show = $request->get('show');
        $books = Books::join('categories', 'categories.id', 'books.categories_id')
            ->join('authors', 'authors.id', 'books.authors_id')
            ->join('ratings', 'ratings.id', 'books.ratings_id')
            ->select(
                'books.id',
                'books.book_name',
                'categories.category_name as category_name',
                'authors.author_name as author_name',
                'ratings.average_rating as average_rating',
                'ratings.voter as voter'
            )
            ->where('books.book_name', 'LIKE', '%' . $cari . '%')
            ->orwhere('authors.author_name', 'LIKE', '%' . $cari . '%')
            ->take($show)
            ->get();
        return view('page.books', compact('books'));
    }

    public function indexAuthor()
    {
        $books = Books::join('ratings', 'ratings.id', 'books.ratings_id')
            ->join('authors', 'authors.id', 'books.authors_id')
            ->select(
                'books.id',
                'authors.author_name as author_name',
                'ratings.voter as voter'
            )
            ->orderBy('ratings.voter', 'desc')
            ->limit(10)->get();
        return view('page.authors', compact('books'));
    }

    public function indexRating()
    {
        return view('page.ratings');
    }
}
