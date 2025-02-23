document.addEventListener("DOMContentLoaded", function() {
    const chatBox = document.getElementById("chat-box");
    const chatForm = document.getElementById("chat-form");
    const messageInput = document.getElementById("message");

    chatForm.addEventListener("submit", function(event) {
        event.preventDefault();
        let message = messageInput.value.trim();

        if (message !== "") {
            fetch("/api/chat/send", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                    },
                    body: JSON.stringify({ message: message })
                }).then(response => response.json())
                .then(data => {
                    messageInput.value = "";
                    loadMessages();
                });
        }
    });

    function loadMessages() {
        fetch("/api/chat/messages")
            .then(response => response.json())
            .then(messages => {
                chatBox.innerHTML = "";
                messages.forEach(msg => {
                    chatBox.innerHTML += `<p><strong>${msg.user}:</strong> ${msg.message}</p>`;
                });
                chatBox.scrollTop = chatBox.scrollHeight;
            });
    }

    setInterval(loadMessages, 3000); // Refresh messages every 3 seconds
});