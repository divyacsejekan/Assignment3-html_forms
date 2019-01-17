<html>
	<body>
    <?php

       
			$name=$_POST["name"];
			$addr=$_POST["addr"];
			$email=$_POST["email"];
			$mobno=$_POST["mobno"];
			$high_qual=$_POST["high_qual"];
			$dob=$_POST["dob"];
            
            $myfile=fopen("CandidateInfo.txt","a") or die("unable to open file");
			$txt="Name:".$name."\nAddress:".$addr."\nEmail Id:".$email."\nMobile No:".$mobno."\nHighest Qualification:".$high_qual."\nDOB:".$dob."\n\n\n\n";
			fwrite($myfile,$txt);
			fclose($myfile);
            echo "Name:".$name."<br>Address:".$addr."<br>Email Id:".$email."<br>Mobile No:".$mobno."<br>Highest Qualification:".$high_qual."<br>DOB:".$dob;
            
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