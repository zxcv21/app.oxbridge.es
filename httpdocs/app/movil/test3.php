<style>
#torta { 
	position: relative; 
	height: 300px; width: 300px; 
	overflow: hidden; 
	border-radius: 100%; 
	background-color: #53A7F1; 
	background-image: linear-gradient(72deg, #7C6ABF, #7C6ABF 49.9%, transparent 50.1%, transparent 100%); 
	} 
#torta::before { 
	content: ''; 
	position: absolute; 
	height: 100%; width: 100%; 
	top: 0; left: 0; 
	border-radius: inherit; 
	background-color: #7C6ABF; 
	clip: rect(0, 300px, 150px, 0px); 
	background-image; 
	}
</style>

<div id=torta></div>