<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact_us;

class Contact_usController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $contact_uss = Contact_us::orderBy('created_at', 'desc')->paginate(5);
        return view ('/cms/contact_us/index')->with('contact_uss', $contact_uss);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    public function store(){
        $contact = new Contact_us();

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->subject = request('subject');
        $contact->message = request('message');

        $contact->save();

        return view('/contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
        Contact_us::create($request->all());

        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('saquib.gt@gmail.com');
                $message->to('saquib.rizwan@cloudways.com', 'Admin')->subject('Cloudways Feedback');
            });
        return back()->with('success', 'Thanks for contacting us!');
    }
}