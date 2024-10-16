

<?php
$conn = mysqli_connect("localhost", "root", "", "cruddb");

if(!$conn){
      die(mysqli_error($conn));
}

$sql = "SELECT DATE TIME FROM crud WHERE id = 23";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $end_time = $row['TIME']; // তারিখ সংরক্ষণ
} else {
    echo "No event found";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <script>
        // PHP থেকে ডেটা জাভাস্ক্রিপ্টে পাঠানো
        var endTime = new Date("<?php echo $end_time; ?>").getTime();

        // কাউন্টডাউন ফাংশন
        var countdown = setInterval(function() {
            var now = new Date().getTime();
            var timeRemaining = endTime - now;

            // সময় হিসাব করা
            var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            // HTML এ কাউন্টডাউন দেখানো
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " 
            + minutes + "m " + seconds + "s ";

            // কাউন্টডাউন শেষ হলে
            if (timeRemaining < 0) {
                clearInterval(countdown);
                document.getElementById("countdown").innerHTML = "Event Ended";
            }
        }, 1000);
    </script>
</head>
<body>

<h1>Countdown to Event From Database</h1>
<p id="countdown"></p>

</body>
</html>
