<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Digital ID</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <p>Display JSON file on HTML page:</p>
    <p id="demo"></p>
    
    <script>
        var i;
        var peopleinfo = "";
        var people = [
{"roll_no":"0","fulL_name":"Ajaya Mandal","photo":"images/photos/ajaya.jpg","batch":"071bct501","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"1","fulL_name":"Amit Kumar Patel","photo":"images/photos/amit.jpg","batch":"071bct502","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"2","fulL_name":"Anish Parajuli","photo":"images/photos/anish1.jpg","batch":"071bct503","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"3","fulL_name":"Anish Shrestha","photo":"images/photos/anish2.jpg","batch":"071bct504","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"4","fulL_name":"Ankit Shrestha","photo":"images/photos/ankit1.jpg","batch":"071bct505","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"5","fulL_name":"Ankit Tapariya","photo":"images/photos/ankit2.jpg","batch":"071bct506","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"6","fulL_name":"Anuj Poudel","photo":"images/photos/anuj.jpg","batch":"071bct507","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"7","fulL_name":"Anup Kumar Pokhrel","photo":"images/photos/anup.jpg","batch":"071bct508","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"8","fulL_name":"Atul Khatri","photo":"images/photos/atul.jpg","batch":"071bct509","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"9","fulL_name":"Basanta Chaulagain","photo":"images/photos/basanta.jpg","batch":"071bct510","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"10","fulL_name":"Bhuwan Bhatt","photo":"images/photos/bhuwan.jpg","batch":"071bct511","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"11","fulL_name":"Bipin Khatiwada","photo":"images/photos/bipin.jpg","batch":"071bct512","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"12","fulL_name":"Bishal Baniya","photo":"images/photos/bishal1.jpg","batch":"071bct513","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"13","fulL_name":"Bishal Chaulagain","photo":"images/photos/bishal2.jpg","batch":"071bct514","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"14","fulL_name":"Bishnu Kumar Lama","photo":"images/photos/bishnu.jpg","batch":"071bct515","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"15","fulL_name":"Dip Kumar Pradhan Newar","photo":"images/photos/dip.jpg","batch":"071bct516","dob":"0000-00-00","faculty":"bct"},
{"roll_no":"16","fulL_name":"Enish Paneru","photo":"images/photos/enish.jpg","batch":"071bct517","dob":"0000-00-00","faculty":"bct"}
]
;
        for (i = 0; i < people.length; i++) {
          
            peopleinfo += people[i].roll_no + "<br>" + people[i].fulL_name + "<br>" + people[i].batch + "<br>" + people[i].faculty + "<br><p>********</p>";
        }

        
            document.getElementById("demo").innerHTML = peopleinfo;
        
    </script>
</body>
</html>
