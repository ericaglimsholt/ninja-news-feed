<?php

function printPosts() {
$users = [
	"user1" => [
	"name" => "Princess Consuela Banana Hammock",
	"id" => 1,
	"avatar" => "avatars/pheobe.png",
],

	"user2" => [
	"name" => "Ms Chanandler Bong",
	"id" => 2,
	"avatar" => "avatars/chandler.png",
],

	"user3" => [
	"name" => "Rachel Karen Green",
	"id" => 3,
	"avatar" => "avatars/racheal.png",
],

	"user4" => [
	"name" => "Joseph Stalin",
	"id" => 4,
	"avatar" => "avatars/joey.png",
],

	"user5" =>[
	"name" => "Dr. Geller \"Ross\"",
	"id" => 5,
	"avatar" => "avatars/ross.png",
],
];

$posts = [
	"post1" => [
		"title" => "Give me bacon",
		"textContent" => "Bacon ipsum dolor amet burgdoggen corned beef meatball, meatloaf chuck shoulder jowl biltong tail hamburger salami venison ham. Bacon chuck shankle, bresaola biltong porchetta drumstick frankfurter burgdoggen chicken rump capicola t-bone leberkas. Bresaola tail meatloaf strip steak pork chop. Tenderloin sausage doner, strip steak salami picanha ribeye ham hock short loin kielbasa venison turkey ham hamburger. Leberkas pig chicken landjaeger tri-tip short loin pancetta shoulder, turducken tenderloin boudin capicola hamburger picanha meatloaf.",
		"author" => 1,
		"date" => "2016-01-01",
		"likes" => 11,
],
	"post2" => [
		"title" => "Give me bacon",
		"textContent" => "Hamburger shoulder tenderloin ham hock ham frankfurter, landjaeger alcatra jowl doner short loin pig. Short loin burgdoggen prosciutto swine boudin pig. Sirloin beef biltong pork belly. Kielbasa andouille cupim spare ribs frankfurter pig landjaeger, ham brisket pork belly. Jowl corned beef tri-tip kevin ham hock beef ribs tenderloin boudin fatback kielbasa landjaeger ground round. Pig pastrami alcatra, strip steak cow turducken turkey rump chicken salami pork belly tri-tip. Pork chop fatback filet mignon, pig flank porchetta beef.",
		"author" => 2,
		"date" => "2016-01-02",
		"likes" => 12,
],
	"post3" => [
		"title" => "Give me bacon",
		"textContent" => "Burgdoggen jowl filet mignon jerky flank short loin. Tenderloin pork short loin turducken ground round alcatra tri-tip. Capicola sirloin shank jerky chicken pork chop flank pork fatback tenderloin ribeye shankle ground round swine. Jerky spare ribs short ribs meatball tri-tip hamburger doner cupim cow alcatra capicola sausage swine tongue. Venison kevin pig jerky salami ground round meatloaf shoulder ribeye ham hock pancetta tenderloin meatball chicken.",
		"author" => 3,
		"date" => "2016-01-03",
		"likes" => 13,
],
	"post4" => [
		"title" => "Give me bacon",
		"textContent" => "Pancetta flank cow short ribs, beef ham hock chicken boudin corned beef bacon swine burgdoggen capicola. Pork chop capicola pork loin shank ham, hamburger boudin sirloin salami doner pig. Jerky shankle spare ribs, tenderloin alcatra prosciutto ball tip short ribs ham hock fatback hamburger. Pastrami short loin prosciutto, ball tip filet mignon pork beef ribs. Andouille spare ribs pork ground round tail beef flank biltong tongue shoulder. Pork tenderloin doner hamburger ground round. Cupim ball tip prosciutto pork belly, swine fatback porchetta spare ribs venison ham hock.",
		"author" => 4,
		"date" => "2016-01-05",
		"likes" => 14,
],
	"post5" => [
		"title" => "Give me bacon",
		"textContent" => "Tri-tip strip steak chicken short loin ball tip hamburger pig spare ribs sausage jerky cupim pork chop leberkas. Bacon meatball drumstick tenderloin. Chicken tri-tip turkey biltong, bresaola jerky ball tip cupim boudin short ribs. Sirloin pork belly pig venison short ribs, salami fatback. Filet mignon rump shankle biltong picanha spare ribs. Porchetta sirloin sausage tongue biltong, chicken burgdoggen bresaola swine doner cow pork chop chuck.",
		"author" => 5,
		"date" => "2016-01-04",
		"likes" => 15,
],

];


	//$avatar = $users["avatar"];

echo '<br>';
function dateCompare($a, $b) {
	return $b["date"] > $a["date"];
}

usort($posts, "dateCompare");


	for($i = 0; $i < count($posts); $i++) {
		$post = $posts[$i];
		// innehållet från post
		for($a = 1; $a <= count($users); $a++) {
			$user = $users["user$a"];
			// innehållet från user

			if($post["author"] == $user["id"]){
				printPost($post, $user);
				// skriver ut i funktionen printpost
			}
		}
	}
}



function printPost($post, $user) {
	echo  "<div id='post'> <div id='information'>";
	echo "<img style='width:50px;height:auto;padding-right:10px;' src='" . $user['avatar'] . "'></img>";
  echo  "<h3>" . $user['name'] . "</h3>" . "<p>" . $post['date'] . "</p>" . "</div>" .	"<p>" . $post['title'] . "</p>" .	"<p>" . $post['textContent'] . "</p>";
  echo  "<div id='likes'>";
  echo  "<img src='thumbs.png' alt='Gilla markeringar' style='width:17px;height:17px;padding-right:10px;'>";
  echo 	"<p>" . $post['likes'] . "</p>";
  echo  "</div>";
  echo	"</div>";
	// det som skrivs ut
}


//}


?>


<html>
	<head>
    <meta charset="8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="x-ua-comptatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <title>Ninja News Feed</title>

	</head>
	<body>

<div class="wrapper">


		<h1>Ninja News Feed</h1>



    <div id="newpost">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
          <input id="newPost" type="text" name="newPost" value="" placeholder="Hej Monica Geller-Bing, vad gör du just nu?"> </br>
          <input type="submit" name="submit" value="Skicka inlägg" id="submit">
        </form>
      </div>


			<?php	if ($_POST['submit']) {


				//function newPost() {
					$new = $_POST['newPost'];

					$newPost = [
						"title" => "Give me bacon",
						"textContent" => $new,
						"author" => 5,
						"date" => date('Y-m-d'),
						"likes" => 15,
					];

					$newUser = [
					"name" => "Monica Geller-Bing",
					"id" => 5,
					"avatar" => "avatars/monica.jpg",
				];

				printPost($newPost, $newUser);
				// skriver ut ett nytt inlägg
			} ?>


<div id="post">

    </div>




<!--
    <div id="comments">
      <div id="information">
        <img src="avatars/avatar.png" alt="Profile Picture" style="width:30px;height:auto;padding-right:10px;">
        <h3>Erica Glimsholt</h3>
        <p>Kommenterat: 2016-10-05 10:10</p>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt nulla nec faucibus commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div> -->

	<?php printPosts();?>

</div>



	</body>
</html>
