<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Pivot;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('library.admin.home',['book'=>$book]);   
    }
    public function studentAllBooks()
    {
        $book = Book::all();
        return view('library.student.allbooks',['book'=>$book]);
    }
    public function create() {return view('library.admin.add'); }

    public function store(Request $request)
    {
        request()->validate(['book_name'=>'required|min:5','book_description'=>'required','author_name'=>'required']);
        Book::create($request->all());
        return redirect('/home') ;
    }

    public function show(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        return view('library.admin.bookdetails',['book_data'=>$book_data]);
    }
    
    public function edit(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        return view('library.admin.edit',['book'=>$book_data]);
    }
    public function update(Request $request, Book $book)
    {
        request()->validate(['book_name'=>'required|min:5','book_description'=>'required','author_name'=>'required']);
        $book_data=Book::findOrFail($book->id);
        $book_data->book_name=request('book_name');
        $book_data->book_description=request('book_description');
        $book_data->author_name=request('author_name');
        $book_data->save();
        return redirect('/home');   
     }

    public function destroy(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        $book_data->delete($book->id);
        return redirect('/home');
    }
    public function borrow( Request $request, $id)
    {
        $user = auth()->user()->id;
        auth()->user()->Book()->detach($id);
        auth()->user()->Book()->attach($id);
        return redirect('dashboard/');
    }
    public function borrowedbooks(User $user){
        $books = auth()->user()->book()->get();
        return view('dashboard', compact('books'));
    }
    public function unborrow( Request $request, $id)
    {
        $user = auth()->user()->id;
        auth()->user()->Book()->detach($id);
        return redirect('dashboard/'.$user);
    }
    public function search()
    {
        request()->validate(["id"=>"numeric"]);
        $input = request('id');
        $student = User::where('id', 'LIKE', '%' . $input  . '%')->get();
        return view('library.admin.search', ['student'=>$student]);
    }
    public function showAllStudents()
    {
        $all_students = User::all();
        return view('library.admin.liststudents', ['all_students'=>$all_students]);
    }
    public function moreDetails()
    {
        $input = request('id');
        $student_details = User::where('id', $input)->get();
        return view('library.admin.studentdetails', ['student_details'=>$student_details]);
    }
    public function goToBorrowedBooks(){
        $u_id = auth()->user()->id;
        return redirect('/dashboard/'.$u_id);
    }
    public function borrowedBooksAdmin(User $user)
    {
       $books =  DB::table('books')->join('pivots', 
            function ($join) {
                 $join->on('books.id', '=', 'pivots.book_id');
        })->get();
      return view('library.admin.borrow',compact('books'));
    }
    public function bookDetailes(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        return view('library.student.bookdetailes',['book_data'=>$book_data]);
    }
    public function studentProfile(){return view('library.student.profile');}
    public function profile(){ return view('library.admin.profile');}
}
