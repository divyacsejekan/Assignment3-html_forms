<html>
	<body>
    <?php

       
			$name=$_POST["name"];
			$addr=$_POST["addr"];
			$email=$_POST["email"];
			$mobno=$_POST["mobno"];
			$high_qual=$_POST["high_qual"];
			$dob=$_POST["dob"];
            
            
	            try {
                $user = "root";
                $pass = "root";
                $dbh = new PDO('mysql:host=localhost;dbname=FirstDB', $user, $pass);
                // echo "i am in db";
                foreach($dbh->query('SELECT * from CandidateDB') as $row) {
                    print_r($row);
                }
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $que="INSERT INTO CandidateDB (cname, addr, email, mobno, high_qual, dob) VALUES ('$name', '$addr', '$email', $mobno, '$high_qual', '$dob')";
                
                $stmt=$dbh->prepare($que);
                $stmt->execute();

                } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
                }
                $dbh = null; 
            

		?>

	</body>
</html>