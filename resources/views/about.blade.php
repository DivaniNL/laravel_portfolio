<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-08D3R47MKX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-08D3R47MKX');
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<link href="{{url('/css/test.min.css')}}" rel="stylesheet"/>    
	<link href="{{url('/css/personal.min.css')}}" rel="stylesheet"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, user-scalable=no" />
<meta name="description" 
content="This is the personal Portfolio-website of Divani Development">
	<link rel="icon" type="image/png" href="{{url('/img/divani.png')}}">  
	<title>About</title>
</head>
    <body>

	<main class="container aboutcontainer">
	<aside class="servers">
	<div class="servers-collection home">
			<div class="server focusable server-friends unread" role="button" aria-label="Friends unread">
				<a  class="server-icon " href="/home"><div class="server-icon"><img src="{{url('/img/divani.png')}}"></div></a>
			</div>
		</div>

		
		<div class="servers-collection not-home">
			<div class="server focusable active" role="button" aria-label="My Server">
				<div class="server-icon"><img alt="discord_image" src="https://discordapp.com/assets/0e291f67c9274a1abdddeb3fd919cbaa.png" /></div>
			</div>
		</div>
	</aside>
	
	<aside class="channels" id="channels">
		<header id="hamburgerMenu" class="channels-header focusable">
			<h3 class="channels-header-name">Divani Development</h3>
			<svg aria-label="Dropdown" class="channels-header-dropdown"><use xlink:href="#icon-dropdown" /></svg>
		</header>
				
		<section class="channels-list" id="channels-list">
			<header class="channels-list-header focusable">
				<h1>Text Channels</h1>
			</header>
			
			<ul class="channels-list-text" id="texts">
        		<li class="channel focusable channel-text ">
					<a href="/home"><span class="channel-name">general</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
				
				<li class="channel focusable channel-text">
					<a href="/projects"><span class="channel-name">projects</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
            </li>
           <li class="channel focusable channel-text active">
					<a href="#"><span class="channel-name">about</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
				<li class="channel focusable channel-text ">
				<a href="/contact"><span class="channel-name">contact</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
			</ul>
			
			<header class="channels-list-header header-voice focusable">
				<h1>Voice Channels</h1>
            </header>

            <ul class="channels-list-voice" id="voices">
				<li class="channel focusable channel-text ">
					<a href="/home"><span class="channel-name">general</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
				
				<li class="channel focusable channel-text">
					<a href="/projects"><span class="channel-name">projects</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
            </li>
           <li class="channel focusable channel-text active">
					<a href="#"><span class="channel-name">about</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
				<li class="channel focusable channel-text ">
				<a href="/contact"><span class="channel-name">contact</span></a>
					<button class="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
			</ul>
		</section>
		
		<footer class="channels-footer">
			<img class="avatar" alt="Avatar" src="https://discordapp.com/assets/0e291f67c9274a1abdddeb3fd919cbaa.png" />
			<div class="channels-footer-details">
				<span class="username">Visitor</span>
				<span class="tag">#0001</span>
			</div>
			<div class="channels-footer-controls button-group">
				<button aria-label="Mute" class="button button-mute"><svg><use xlink:href="#icon-mute" /></svg></button>
				<button aria-label="Deafen" class="button button-deafen"><svg><use xlink:href="#icon-deafen" /></svg></button>
				<button aria-label="Settings" class="button button-settings"><svg><use xlink:href="#icon-settings" /></svg></button>
			</div>
		</footer>
	</aside>
		
	<div class="vert-container">
		<div class="menu">
			<h1 class="menu-name">about</h1>
	</div>
		<section class="chat">
			<div class="content5">
				<img id="profile" src="{{url('/img/pf.jpg')}}">  
				<h1>About Me</h1>
				<h2>My name is Dylan van Nierop, a <!--20 years--> 20 year old Dutch guy.</h3>
				<p>After graduating from High School I had a leap year. 
				This happened because I wanted to become a physical therapist in the first place, but after three months, 
				I decided to drop out because I lost interest in the job.
				<br>
				During this leap year I did a course to become a fitness trainer. 
				I also successfully finished the Fitness Master course at the same organisation.
				<br>
				In September 2019 I started studying Webdeveloper at the Graphic Lyceum in Utrecht. I hope to graduate in the summer of 2022.</p> 
				<p>
				Besides loving to code websites and webapplications, 
				I enjoy to spend the rest of my time playing games, getting some excercise in or outside the gym, 
				watching tv or a movie, not to mention I am a huge Formula 1 enthousiast.
            	</p>
				<br>
				<!--- skills -->
				<h1>My Skills</h1>
				<div class="skills flex row">

				<div class='skill_item'>
					<h2 class='skill_title'>HTML</h2>	
					<div class="progress">
  						<div class="progress-value html"><span>90%</span></div>
					</div>
				</div>
				
				<div class='skill_item'>
					<h2 class='skill_title'>CSS</h2>	
					<div class="progress">
  						<div class="progress-value css"><span>90%</span></div>
					</div>
				</div>
				<div class='skill_item'>
					<h2 class='skill_title'>SASS</h2>	
					<div class="progress">
  						<div class="progress-value sass"><span>80%</span></div>
					</div>
				</div>
				<div class='skill_item'>
					<h2 class='skill_title'>Javascript</h2>	
					<div class="progress">
  						<div class="progress-value javascript"><span>80%</span></div>
					</div>
				</div>
				<div class='skill_item'>
					<h2 class='skill_title'>PHP</h2>	
					<div class="progress">
  						<div class="progress-value php"><span>75%</span></div>
					</div>
				</div>
				<div class='skill_item'>
					<h2 class='skill_title'>JQuery</h2>	
					<div class="progress">
  						<div class="progress-value jquery"><span>60%</span></div>
					</div>
				</div>
				<div class='skill_item'>
					<h2 class='skill_title'>React</h2>	
					<div class="progress">
  						<div class="progress-value react"><span>30%</span></div>
					</div>
				</div>
				<div class='skill_item'>
					<h2 class='skill_title'>Laravel</h2>	
					<div class="progress">
  						<div class="progress-value laravel"><span>30%</span></div>
					</div>
				</div>

				
				</div>
				
				
			</div>
		</section>
	</div>
</main>
<div class="viewer-footer">
    <p>Copyright &copy; 2020 - <?php echo date('Y')?> Divani Development</p>
</div>

<!-- ICONS -->
<svg id="icon-friends" viewBox="-289 382 32 27.1"><style id="style3">.st0{fill:#FFFFFF;} .st1{opacity:0.6;}</style><g id="g4145" fill="#fff"><path id="path5" d="M-273 409.1c-4.1 0-6.8-.6-7.9-1.7-.5-.6-.6-1.1-.6-1.3 0-.7.1-2.9.6-3.8.1-.3.5-1 4.5-2.4-1.6-1.4-2.6-4-2.6-7.1 0-4.2 2.3-7 5.9-7.1h.1c3.6.1 5.9 2.8 5.9 7.1 0 3.1-1 5.7-2.6 7.1 4 1.4 4.4 2.1 4.5 2.4.4.9.5 3.1.6 3.8 0 .2 0 .7-.6 1.3-1.1 1.1-3.7 1.7-7.8 1.7zm0-2c5.1 0 6.2-.9 6.4-1.1-.1-1.1-.2-2.3-.3-2.7-.6-.4-2.9-1.3-4.8-1.9l-.7-.2-.1-2 .7-.3c1.7-.6 2.8-3.1 2.8-6.1 0-3.1-1.5-5-3.9-5.1-2.5 0-4 2-4 5.1 0 3 1.1 5.5 2.8 6.1l.7.3-.1 2-.7.2c-1.9.6-4.2 1.5-4.8 1.9-.1.4-.3 1.6-.3 2.7.1.2 1.3 1.1 6.3 1.1z" class="st0"/><g id="g7" class="st1" opacity=".6"><path id="path9" d="M-257 402.4c0-.7-.1-2.9-.6-3.8-.1-.3-.5-1-4.5-2.4 1.6-1.4 2.6-4 2.6-7.1 0-4.2-2.3-7-5.9-7.1h-.1c-1.9 0-3.5.8-4.5 2.2.6.3 1.2.6 1.8 1 .7-.8 1.6-1.3 2.8-1.3 2.4 0 3.9 2 3.9 5.1 0 3-1.1 5.5-2.8 6.1l-.7.3.1 2 .7.2c1.9.6 4.3 1.5 4.8 1.9.1.4.3 1.6.3 2.7-.2.2-1 .8-3.8 1 .1.6.2 1.2.2 2 2.5-.2 4.2-.8 5-1.6.7-.5.7-1 .7-1.2z" class="st0"/><path id="path11" d="M-287 402.3c.1-1.1.2-2.3.3-2.7.6-.4 2.9-1.3 4.8-1.9l.7-.2.1-2-.7-.3c-1.6-.6-2.8-3.1-2.8-6.1 0-3.1 1.5-5 4-5.1 1.2 0 2.1.5 2.8 1.3.5-.4 1.1-.8 1.8-1-1-1.4-2.6-2.2-4.5-2.2h-.1c-3.6 0-5.9 2.8-5.9 7.1 0 3.1 1 5.7 2.6 7.1-4 1.4-4.4 2.1-4.5 2.4-.4.9-.5 3.1-.6 3.8 0 .2 0 .7.6 1.3.8.9 2.5 1.4 5.1 1.6 0-.7.1-1.4.2-2-2.9-.3-3.7-.9-3.9-1.1z" class="st0"/></g></g></svg>

<svg id="icon-mute" viewBox="0 0 16 16"><path fill="#5D6063" d="M12.5,8v1c0,2.2-1.8,4-4,4h-1c-2.2,0-4-1.8-4-4V8h-1v1 c0,2.8,2.2,5,5,5v1H7c-0.3,0-0.5,0.2-0.5,0.5C6.5,15.8,6.7,16,7,16h2c0.3,0,0.5-0.2,0.5-0.5C9.5,15.2,9.3,15,9,15H8.5v-1 c2.8,0,5-2.2,5-5V8H12.5z M8,12c1.9,0,3.5-1.6,3.5-3.5v-5C11.5,1.6,9.9,0,8,0C6.1,0,4.5,1.6,4.5,3.5v5C4.5,10.4,6.1,12,8,12z M5.5,3.5C5.5,2.1,6.6,1,8,1c1.4,0,2.5,1.1,2.5,2.5v5C10.5,9.9,9.4,11,8,11c-1.4,0-2.5-1.1-2.5-2.5V3.5z"/></svg>

<svg id="icon-deafen" viewBox="0 0 16 16"><path fill="#5D6063" d="M15.9,9C16,8.7,16,8.3,16,8c0-4.4-3.6-8-8-8C3.6,0,0,3.6,0,8 c0,0.3,0,0.7,0.1,1h0C0,9.2,0,9.3,0,9.5v4C0,14.3,0.7,15,1.5,15h2C4.3,15,5,14.3,5,13.5v-4C5,8.7,4.3,8,3.5,8h-2 C1.3,8,1.2,8,1,8.1C1,8.1,1,8,1,8c0-3.9,3.1-7,7-7c3.9,0,7,3.1,7,7c0,0,0,0.1,0,0.1C14.8,8,14.7,8,14.5,8h-2C11.7,8,11,8.7,11,9.5 v4c0,0.8,0.7,1.5,1.5,1.5h2c0.8,0,1.5-0.7,1.5-1.5v-4C16,9.3,16,9.2,15.9,9L15.9,9z M1.5,9h2C3.8,9,4,9.2,4,9.5v4 C4,13.8,3.8,14,3.5,14h-2C1.2,14,1,13.8,1,13.5v-4C1,9.2,1.2,9,1.5,9z M15,13.5c0,0.3-0.2,0.5-0.5,0.5h-2c-0.3,0-0.5-0.2-0.5-0.5 v-4C12,9.2,12.2,9,12.5,9h2C14.8,9,15,9.2,15,9.5V13.5z"/></svg>

<svg id="icon-settings" viewBox="0 0 16 16"><path fill="#5D6063" d="M8,5C6.3,5,5,6.3,5,8c0,1.7,1.3,3,3,3c1.7,0,3-1.3,3-3 C11,6.3,9.7,5,8,5z M8,10c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C10,9.1,9.1,10,8,10z M16,8c0-1-0.8-1.9-1.8-2 c-0.1-0.3-0.3-0.7-0.4-1c0.7-0.8,0.6-1.9-0.1-2.7c-0.7-0.7-1.9-0.8-2.7-0.1c-0.3-0.2-0.6-0.3-1-0.4C9.9,0.8,9,0,8,0 C7,0,6.1,0.8,6,1.8C5.7,1.9,5.3,2.1,5,2.2C4.2,1.6,3.1,1.6,2.3,2.3C1.6,3.1,1.6,4.2,2.2,5C2.1,5.3,1.9,5.7,1.8,6C0.8,6.1,0,7,0,8 c0,1,0.8,1.9,1.8,2c0.1,0.3,0.3,0.7,0.4,1c-0.7,0.8-0.6,1.9,0.1,2.7c0.7,0.7,1.9,0.8,2.7,0.1c0.3,0.2,0.6,0.3,1,0.4 C6.1,15.2,7,16,8,16c1,0,1.9-0.8,2-1.8c0.3-0.1,0.7-0.3,1-0.4c0.8,0.7,1.9,0.6,2.7-0.1c0.7-0.7,0.8-1.9,0.1-2.7 c0.2-0.3,0.3-0.6,0.4-1C15.2,9.9,16,9,16,8z M13.4,9c-0.1,0.8-0.5,1.5-0.9,2.1l0.4,0.4c0.4,0.4,0.4,1,0,1.4c-0.4,0.4-1,0.4-1.4,0 l-0.4-0.4C10.5,13,9.8,13.3,9,13.4V14c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1v-0.6c-0.8-0.1-1.5-0.5-2.1-0.9l-0.4,0.4 c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-1,0-1.4l0.4-0.4C3,10.5,2.7,9.8,2.6,9H2C1.4,9,1,8.6,1,8c0-0.6,0.4-1,1-1h0.6 C2.7,6.2,3,5.5,3.5,4.9L3.1,4.5c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0l0.4,0.4C5.5,3,6.2,2.7,7,2.6V2c0-0.6,0.4-1,1-1 c0.6,0,1,0.4,1,1v0.6c0.8,0.1,1.5,0.5,2.1,0.9l0.4-0.4c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4l-0.4,0.4C13,5.5,13.3,6.2,13.4,7 H14c0.6,0,1,0.4,1,1c0,0.6-0.4,1-1,1H13.4z"/></svg>

<svg id="icon-dropdown" viewBox="0 0 18 18"><style>.dd{stroke:#ABADAF;stroke-width:2px;stroke-dashoffset:1;stroke-dasharray:inherit}</style><path class="dd" stroke="#FFF" d="M4.5 4.5l9 9" stroke-linecap="round"></path><path class="dd" stroke="#FFF" d="M13.5 4.5l-9 9" stroke-linecap="round"></path></svg>

<svg id="icon-invite" viewBox="0 0 16 16"><path fill="#fff" d="M6.3,3.4L8,1.7v9.8C8,11.8,8.2,12,8.5,12C8.8,12,9,11.8,9,11.5V1.7l1.7,1.7c0.2,0.2,0.5,0.2,0.7,0c0.2-0.2,0.2-0.5,0-0.7L8.9,0.2c0,0,0,0,0-0.1C8.8,0,8.6,0,8.5,0c0,0,0,0,0,0c0,0,0,0,0,0C8.4,0,8.2,0,8.1,0.1c0,0,0,0,0,0.1L5.6,2.7c-0.2,0.2-0.2,0.5,0,0.7C5.8,3.5,6.1,3.5,6.3,3.4z M14,4h-1.5v1h1C13.8,5,14,5.2,14,5.5v9c0,0.3-0.2,0.5-0.5,0.5h-10C3.2,15,3,14.8,3,14.5v-9C3,5.2,3.2,5,3.5,5h1V4H3C2.4,4,2,4.4,2,5v10c0,0.6,0.4,1,1,1h11c0.6,0,1-0.4,1-1V5C15,4.4,14.6,4,14,4z"/></svg>

<svg id="icon-channel-settings" viewBox="0 0 16 16"><path fill="#fff" d="M8,5C6.3,5,5,6.3,5,8c0,1.7,1.3,3,3,3c1.7,0,3-1.3,3-3 C11,6.3,9.7,5,8,5z M8,10c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C10,9.1,9.1,10,8,10z M16,8c0-1-0.8-1.9-1.8-2 c-0.1-0.3-0.3-0.7-0.4-1c0.7-0.8,0.6-1.9-0.1-2.7c-0.7-0.7-1.9-0.8-2.7-0.1c-0.3-0.2-0.6-0.3-1-0.4C9.9,0.8,9,0,8,0 C7,0,6.1,0.8,6,1.8C5.7,1.9,5.3,2.1,5,2.2C4.2,1.6,3.1,1.6,2.3,2.3C1.6,3.1,1.6,4.2,2.2,5C2.1,5.3,1.9,5.7,1.8,6C0.8,6.1,0,7,0,8 c0,1,0.8,1.9,1.8,2c0.1,0.3,0.3,0.7,0.4,1c-0.7,0.8-0.6,1.9,0.1,2.7c0.7,0.7,1.9,0.8,2.7,0.1c0.3,0.2,0.6,0.3,1,0.4 C6.1,15.2,7,16,8,16c1,0,1.9-0.8,2-1.8c0.3-0.1,0.7-0.3,1-0.4c0.8,0.7,1.9,0.6,2.7-0.1c0.7-0.7,0.8-1.9,0.1-2.7 c0.2-0.3,0.3-0.6,0.4-1C15.2,9.9,16,9,16,8z M13.4,9c-0.1,0.8-0.5,1.5-0.9,2.1l0.4,0.4c0.4,0.4,0.4,1,0,1.4c-0.4,0.4-1,0.4-1.4,0 l-0.4-0.4C10.5,13,9.8,13.3,9,13.4V14c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1v-0.6c-0.8-0.1-1.5-0.5-2.1-0.9l-0.4,0.4 c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-1,0-1.4l0.4-0.4C3,10.5,2.7,9.8,2.6,9H2C1.4,9,1,8.6,1,8c0-0.6,0.4-1,1-1h0.6 C2.7,6.2,3,5.5,3.5,4.9L3.1,4.5c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0l0.4,0.4C5.5,3,6.2,2.7,7,2.6V2c0-0.6,0.4-1,1-1 c0.6,0,1,0.4,1,1v0.6c0.8,0.1,1.5,0.5,2.1,0.9l0.4-0.4c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4l-0.4,0.4C13,5.5,13.3,6.2,13.4,7 H14c0.6,0,1,0.4,1,1c0,0.6-0.4,1-1,1H13.4z"/></svg>
<script>
    const $ = document.querySelectorAll.bind(document);

$(".focusable, .button").forEach(el => {
	// blur only on mouse click
	// for accessibility, keep focus when keyboard focused
	el.addEventListener("mousedown", e => e.preventDefault());
	el.setAttribute("tabindex", "0");
});
document.getElementById("hamburgerMenu").addEventListener("click", hamburgerMenu);
function hamburgerMenu(){
	console.log("test");
	document.getElementById("channels").classList.toggle("showchannels");
	document.getElementById("channels-list").classList.toggle("show");
}

$(".server").forEach(el => {
	el.addEventListener("click", () => {
		const activeServer = $(".server.active")[0];
		activeServer.classList.remove("active");
		activeServer.removeAttribute("aria-selected");
		
		el.classList.add("active");
        el.setAttribute("aria-selected", true);
        
    });
    
})

$(".channel-text").forEach(el => {
	el.addEventListener("click", () => {
		$(".channel-text.active")[0].classList.remove("active");
		el.classList.add("active");
	});
})

// focus/blur on channel header click
$(".channels-header")[0].addEventListener("click", e => {
	e.preventDefault();
	
	const focused = document.activeElement === e.target;
	focused ? e.target.blur() : e.target.focus();
});


</script>
</body>
</html>