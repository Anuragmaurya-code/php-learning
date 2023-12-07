<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="otp-form">
        <h2>OTP Verification</h2>
        <input type="text" id="phone" placeholder="Enter your phone number">
        <button id="send-otp">Send OTP</button>
        <input type="text" id="otp" placeholder="Enter OTP">
        <button id="verify-otp">Verify OTP</button>
        <p id="otp-status"></p>
    </div>

    <script type="text/javascript">
        // Function to generate a random OTP
        function generateOTP() {
            return Math.floor(1000 + Math.random() * 9000);
        }

        // Function to send OTP to the provided phone number
        function sendOTP(phone, otp) {
            alert("OTP sent to " + phone + ": " + otp);
        }

        // Event listener for the "Send OTP" button
        document.getElementById("send-otp").addEventListener("click", function () {
            const phone = document.getElementById("phone").value;
            const otp = generateOTP();
            sendOTP(phone, otp);
        });

        // Event listener for the "Verify OTP" button
        document.getElementById("verify-otp").addEventListener("click", function () {
            const enteredOTP = document.getElementById("otp").value;
            const phone = document.getElementById("phone").value;
            const otp = sessionStorage.getItem(phone);

            if (enteredOTP === otp) {
                document.getElementById("otp-status").innerText = "OTP Verified!";
            } else {
                document.getElementById("otp-status").innerText = "Invalid OTP. Please try again.";
            }
        });
    </script>
</body>
</html>
