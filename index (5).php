
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPG</title>
    <style>
    
    
    
    
    /* CSS styles for the navigation bar */
nav {
    background-color: #333;
    padding: 10px 20px;
    text-align: center;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}

nav a:hover {
    text-decoration: underline;
}
    
    /* CSS OF NAV FIRST */
    nav {
            background-color: #333;
            padding: 10px 20px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }
        /* CSS styles from your previous website here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        #chat-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        #chat-messages {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ccc;
            background-color: #e9ecef;
            padding: 10px;
        }

        #chat-messages > div {
            margin-bottom: 10px;
        }

        footer {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        #message-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            margin-right: 10px;
        }

        #send-button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact Us</a>
    </nav>

    <div id="chat-container">
        <header>
            <h1>Welcome to TOPG</h1>
            <p>Your ultimate destination for nostalgic live chatting!</p>
        </header>
        <div id="chat-messages"></div>
        <footer>
            <input type="text" id="message-input" placeholder="Type your message here...">
            <button id="send-button">Send</button>
        </footer>
        <div class="error-message" id="error-message" style="display: none;"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const chatMessages = document.getElementById("chat-messages");
            const messageInput = document.getElementById("message-input");
            const sendButton = document.getElementById("send-button");
            const errorMessageDiv = document.getElementById("error-message");

            function showError(message) {
                errorMessageDiv.textContent = message;
                errorMessageDiv.style.display = 'block';
                setTimeout(() => {
                    errorMessageDiv.style.display = 'none';
                }, 5000);
            }

            function fetchMessages() {
                fetch("fetch_messages.php")
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to fetch messages.');
                        }
                        return response.text();
                    })
                    .then(data => {
                        chatMessages.innerHTML = data;
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    })
                    .catch(error => {
                        showError(error.message);
                    });
            }

            function sendMessage() {
                const message = messageInput.value;
                if (message.trim() !== "") {
                    fetch("send_message.php?message=" + encodeURIComponent(message))
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Failed to send message.');
                            }
                            return response.text();
                        })
                        .then(data => {
                            messageInput.value = "";
                            fetchMessages();
                        })
                        .catch(error => {
                            showError(error.message);
                        });
                }
            }

            sendButton.addEventListener("click", sendMessage);
            messageInput.addEventListener("keyup", (event) => {
                if (event.key === "Enter") {
                    sendMessage();
                }
            });

            setInterval(fetchMessages, 1000); // Fetch messages every second
            fetchMessages(); // Initial fetch
        });
    </script>
    
    <blockquote>
        <hr />
        <span style="color: #ff0000;"><strong>Donate</strong></span> <strong>us:</strong>
        <hr />
        <center>
            <a href="https://www.buymeacoffee.com/druvx13" target="_blank" rel="noopener">
                <img class="aligncenter" style="height: 37px !important; width: 170px !important; box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important; -webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" />
            </a>
            <center>
                <hr />
                <div id="container"></div>
    </blockquote>
    
</body>
</html>