@extends('dashboard')

@section('chat')

    <div class="card mb-3 shadow-sm">
        <div class="card-header">Live Chat</div>
        <div class="card-body">
            <div id="chat-box" class="border p-3" style="height: 300px; overflow-y: scroll;">
                @foreach($messages as $message)
                    <div class="mb-2">
                        <strong>{{ $message->user->name }}:</strong>
                        <span>{{ $message->message }}</span>
                        <small class="text-muted">{{ $message->created_at->diffForHumans() }}</small>
                    </div>
                @endforeach
            </div>
            <form action="{{ route('chat.send') }}" method="POST" id="chat-form">
                @csrf
                <input type="text" name="message" class="form-control my-2" placeholder="Type a message..." required>
                <button type="submit" class="btn btn-primary w-100">Send</button>
            </form>
        </div>
    </div>

@endsection
