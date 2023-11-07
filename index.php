<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
        }

        .container {
            width: 50;
            margin: center;
            padding: 20px;
        }

        .property {
            width: 250px;
            margin-top: 200px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;

          
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
        }

        p {
            font-size: 16px;
        }


        .custom-button {
            margin-top: center ;
          
            width: 150px; /* Set the width */
            height: 40px; /* Set the height */
            font-size: 16px; /* Set the font size */
        }
    </style>
    
</head>
<body>
    <header>
        <h1>Welcome to RM Cabal Real Estate</h1>
    </header>
    <center>
    <div>

        <div class = "property"> 
   <a href = "listings.php"> 


<button class = "custom-button" > view more listings </button>

</a>
        </div>
    
    </div>
    </center>
    <center>
    <div>
<div class =property>
    <a href="appointment.php">
        <button class = "custom-button"> Book an appointment </button>
    </a>

</div>
    </div>
    </center>
    <footer>
        &copy; <?php echo date("Y"); ?> Real Estate Listings
    </footer>
   
</body>
</html>
