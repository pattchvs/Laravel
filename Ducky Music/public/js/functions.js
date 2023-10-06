        // Function to get the current time formatted as HH:mm:ss
        function getCurrentTime() {
            const currentDate = new Date();
            const hours = currentDate.getHours();
            const minutes = currentDate.getMinutes().toString().padStart(2, '0');
            const seconds = currentDate.getSeconds().toString().padStart(2, '0');

            return hours + ':' + minutes + ':' + seconds;
        }

        // Function to get the appropriate greeting based on the current time
        function getGreeting() {
            const currentHour = new Date().getHours();
            let greeting;

            if (currentHour >= 5 && currentHour < 12) {
                greeting = 'Bom dia,';
            } else if (currentHour >= 12 && currentHour < 18) {
                greeting = 'Boa tarde,';
            } else {
                greeting = 'Boa noite,';
            }

            return greeting;
        }

        // Update the HTML elements with the greeting and the current time
        function updateGreetingAndTime() {
            const greetingElement = document.getElementById('greeting');
            const currentTimeElement = document.getElementById('currentTime');

            if (greetingElement && currentTimeElement) {
                const greeting = getGreeting();
                const currentTime = getCurrentTime();

                greetingElement.textContent = greeting;
                currentTimeElement.textContent = currentTime;
            }
        }

        // Call the function once on page load and then update the time every second
        updateGreetingAndTime();
        setInterval(updateGreetingAndTime, 1000);
   