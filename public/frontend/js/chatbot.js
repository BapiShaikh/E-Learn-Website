function sendMessage() {
    const userInput = document.getElementById('userInput');
    const message = userInput.value.trim();
    if (message) {
        const messagesDiv = document.getElementById('messages');
        const userMessage = document.createElement('div');
        userMessage.className = 'user-message';
        userMessage.textContent = message;
        messagesDiv.appendChild(userMessage);
        userInput.value = '';
        messagesDiv.scrollTop = messagesDiv.scrollHeight;

        // Simulate bot response (for demo purposes)
        setTimeout(() => {
            const botMessage = document.createElement('div');
            botMessage.className = 'bot-message';
            botMessage.textContent = 'This is a bot response.';
            messagesDiv.appendChild(botMessage);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }, 1000);
    }
}
