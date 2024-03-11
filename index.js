
    document.addEventListener('DOMContentLoaded', function () {
        var chatContainer = document.getElementById('chatContainer');
        var chatInput = document.getElementById('chatInput');
        var chatForm = document.getElementById('chatForm');

        chatForm.addEventListener('submit', function (event) {
            event.preventDefault();
            handleUserInput();
        });

        function handleUserInput() {
            var userInput = chatInput.value.trim();
            if (userInput !== '') {
                displayMessage('user', userInput);
                simulateBotResponse(userInput);
                chatInput.value = '';
            }
        }

        function simulateBotResponse(userInput) {
            // Basic chatbot logic
            var botResponse = 'I appreciate your input!';
            displayMessage('bot', botResponse);
        }

        function displayMessage(sender, message) {
            var messageElement = document.createElement('div');
            messageElement.classList.add('message', sender);
            messageElement.textContent = message;
            chatContainer.appendChild(messageElement);
        }
    });

