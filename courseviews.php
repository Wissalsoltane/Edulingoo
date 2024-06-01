<?php

        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "edulingo";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
   
        
        // Fetch the courses from the database
        $sql = "SELECT name, type, skill, level, file FROM course";
        $result = $conn->query($sql);
        $courses = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $courses[] = $row;
            }
        }
        $conn->close();
		

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video and PDF</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


 <div class="container"> 
        <div class="section video-section">
            <h2>VIDEO</h2>
            <div class="video-container">
                <video controls>
                <source src="reading.mp4" type="video/mp4">
         
                </video>
                <video controls>
                    <source src="your-video-file2.mp4" type="video/mp4">
         
                </video>
            </div>
        </div>
        <div class="section pdf-section">
            <h2>PDF</h2>
            <div class="pdf-folder">
                
                <ul>
                    <li><a href="your-pdf-file1.pdf" target="_blank">PDF 1</a></li>
                    <li><a href="your-pdf-file2.pdf" target="_blank">PDF 2</a></li>
                    <li><a href="your-pdf-file3.pdf" target="_blank">PDF 3</a></li>
                   
                </ul>
            </div>
        </div>
   
    <button class="logout-button" onclick="logout()">Log Out</button>

    <script>
        function logout() {
          
            alert('You have been logged out.');
    
            window.location.href = 'login.html';
        }
    </script>
</body>
</html>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
    direction: rtl; 
}

.container {
    display: flex;
    width: 90%;
    height: 80%;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.section {
    flex: 1;
    padding: 20px;
    box-sizing: border-box;
}

.video-section {
    background-color: #f9f9f9;
    border-left: 1px solid #ccc; 
}

.pdf-section {
    background-color: #fff;
}

h2 {
    text-align: center;
    color: #333;
}

.video-container {
    display: flex;
    justify-content: flex-start; 
    gap: 10px; 
}

video {
    width: 48%; 
    height: auto;
    border: 1px solid #ccc; 
    border-radius: 5px; 
}

.pdf-folder {
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
}

.pdf-folder p {
    font-size: 18px;
    margin-bottom: 15px;
}

.pdf-folder ul {
    list-style-type: none;
    padding: 0;
}

.pdf-folder li {
    margin-bottom: 10px;
}

.pdf-folder a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s;
}

.pdf-folder a:hover {
    color: #0056b3;
}
.logout-button {
    position: absolute;
    bottom: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: #d9534f;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.logout-button:hover {
    background-color: #c9302c;
}


</style>