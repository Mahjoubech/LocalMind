<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        // Retrieve all messages for the authenticated user
        $messages = Message::with('user')->get();

        return view('chat.chat', compact('messages'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Save the message to the database
        Message::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        return redirect()->route('chat.index')->with('success', 'Message sent!');
    }

    public function show(User $user)
    {
        $qstuser = $user->question()->paginate(3);
        return view('users.showProfile', compact('user', 'qstuser'));
    }
    public function edit(User $user)
    {
        $editing = true;
        $qstuser = $user->question()->paginate(3);

        return view('users.editProfile', compact('user', 'editing', 'qstuser'));
    }
    public function update(User $user)
    {
        $validate = request()->validate([
            'name' => 'required|min:3|max:40',
            'email'  => 'required|email',
            'location' => 'required',
            'image' => 'image',
            'about' => 'required|min:1|max:255'

        ]);

        if (request()->has('image')) {

            if (!empty($user->profile_picture)) {
                $deleted = Storage::disk('public')->delete($user->profile_picture);
                if (!$deleted) {
                    echo 'fuck of';
                }
            }
            $imagePath = request()->file('image')->store('profile', 'public');
            $validate['profile_picture'] = $imagePath;
        }
        $user->update($validate);
        return redirect()->route('profile');
    }

    public function profile()
    {

        $user =  Auth::user();
        return $this->show($user);
    }

}
