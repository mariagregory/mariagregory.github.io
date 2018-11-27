<!DOCTYPE html> 
<html lang="en"> 
<head>
	<!--
			Final Project by Mariia Gregory
			Class: CIS-72A 42735 
			Instructor: Scott McLeod
	--> 
	<meta charset="utf-8"> 
	<title>Mariia Gregory's World</title> 
	<link type="text/css" rel="stylesheet" href="layout.css" />
	<link type="text/css" rel="stylesheet" href="main.css" />
</head> 
<body>
	<header>
		<p id="top"><a href="home.html" title="Home Page"><img src="logo_beach.jpg" alt="Governor's Beach, Cyprus" /></a></p>
	</header>
	<nav>
		<p><strong>Home</strong></p>						
		<p><a href="mylinks.htm" title="Links">Favorite Links</a></p>
		<p><a href="myresume.html" title="Resume">Resume</a></p>
		<p><a href="myadventures.html" title="Adventures">My Adventures</a></p>
		<p><a href="myfeedback.html" title="Feedback">Feedback</a></p>
	</nav>
	<main>
		<h1>Home</h1>
		<div class="pictures">
			<img id="bicycle" src="bicycle.jpg" alt="Bycicle in Catalina Island" /><br/>
				Bicycle Ride in Catalina Island,<br/>CA. November 2015<br /><br />
			<img id="snow" src="snow.jpg" alt="Snowy weather in Chlyabinsk" /><br />
				Snowy Day in Chelyabinsk, <br />South Ural, Russia. April 2014
		</div>
		<div class="about">
			<p style="font-weight: bold; font-style: italic; font-size: 105%;">Hello dear guests and welcome to my personal web site! </p>
			<p>My name is Mariia Gregory, and here I tried to systemize information about myself. I hope you like being here, and if you find that we have anything in common, 
				we could befriend. </p>
			<p>I am from Chelyabinsk, Russia. I have been living in Southern California, USA, since 2014. 
			My husband is from Cyprus, and he presently lives and works in Riverside. I am studying computer applications at Riverside Community College, improving my English, 
			and taking care of my cat. </p>
			<p>My parents and my brother live in Russia, and my husband's family members live in Cyprus. We also have relatives in Belarus, Greece, England, 
			and Australia. It is difficult to meet with our dear ones often, but we try to visit them at least once in a year.
			We are thinking about moving to Greece in the future, may be in about three years from now.</p>
			<p>I am a multispeaker. My native language is Russian. I'm fluent in English, cognizant of Greek, and I have basic knowledge of both Spanish 
			and Italian. I enjoy learning about different cultures, and foreign languages make big part of my interests.</p>
			<p>Photos on the right illustrate my lifestyle. The upper one is made in Catalina Island, California, when my spouse and I rented a two-seat bicycle and drove around. 
			It was a day full of emotions. The second photo (the lower one) is taken in April 2014 when all of a sudden, in a middle of the blossoming spring, 
			snow attacked us! No secret that the weather in Ural is unpredictable, and there is almost nothing in the nature that can really shock us. 
			Not even <a href="myadventures.html#meteorite" title="Chelyabinsk Meteorite"><b>falling meteorites!</b></a></p>
			<h2>My hobbies and activities:</h2>
			<ol>
				<li><b>Hiking</b> (but not of extreme kind)</li>
				<li><b>Dancing</b> Zumba, Folk, and Ballroom styles</li>
				<li>Learning <b>Foreign Languages</b></li>
			</ol>
			<h2>My obsessions:</h2>
			<ul>
				<li><b>Detective Stories</b> in books and movies. I like to read Agatha Christie, Hercule Poirot, 
				and Arthur Conan Doyle.</li>
				<li><b>Love Stories</b> in films and series, including latin american ones. I often use them as a noisy background, 
					while making my homework or chores. 
					Among the recent novels I saw are <i>Rebelde</i> (Mexico) and <i>Knives of Love</i> (Greece).</li>
				<li><b>Immigration</b> and <b>International Politics</b>. I spend a lot of time reading stories on immigration (since it concerned me), 
					and I am also curious about political and social environment in different countries, including North Korea.   
					I read news, watch documentaries, and sometimes participate in online discussions.
				</li>
				<li><b>Traveling</b> and <b>Dancing</b>. Go to <a href="myadventures.html" title="Maria Gregory's Adventures">My Adventures page</a> 
						to view photos, videos, and read more about it. See you there!
				</li>
			</ul>
			<p style="text-align:right"><a href="#top" title="Go to Top of Page"><img src="back2top.gif" style="border: none" alt="top of page button" /></a></p>
		</div>
	</main>
	
<footer>Copywright &copy; 2016. All rights belong to Mariia Gregory.</footer>
	
	<!-- To take away all dotted underlines for image-like links -->
	
<script>
        window.onload = function(){
			var a_img = document.getElementsByTagName('img');
			for (i=0; i<a_img.length; i++){
				if (a_img[i].parentNode.tagName == 'A')
					a_img[i].parentNode.style.border = 'none';
                }
            }
     </script>
	
</body> 
</html>
