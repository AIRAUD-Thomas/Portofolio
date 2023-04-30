 // Variables
 let game = document.getElementById("game");
 let timer = document.getElementById("timer");
 let score = document.getElementById("score");
 let bubbles = [];
 let points = 0;
 let seconds = 60;
 let intervalId;
 let color = "rgb(" + Math.random() * 255 + ", " + Math.random() * 255 + ", " + Math.random() * 255 + ")";  

 // Créer une bulle
 function createBubble() {
   let bubble = document.createElement("div");
   bubble.className = "bubble";
   bubble.style.left = Math.floor(Math.random() * (game.offsetWidth - 40)) + "px";
   bubble.style.top = Math.floor(Math.random() * (game.offsetHeight - 40)) + "px";
   game.appendChild(bubble);
   bubbles.push(bubble);
   bubble.addEventListener("click", function() {
     game.removeChild(bubble);
     bubbles.splice(bubbles.indexOf(bubble), 1);
     points++;
     score.textContent = "Score : " + points;
   });
 }

 // Générer des bulles
 function generateBubbles() {
   let intervalId = setInterval(function() {
     createBubble();
   }, 500);
   setTimeout(function() {
     clearInterval(intervalId);
     endGame();
   }, 60000);
 }

 // Chronomètre
 function startTimer() {
   intervalId = setInterval(function() {
     seconds--;
     timer.textContent = "Temps restant : " + seconds;
     if (seconds === 0) {
       clearInterval(intervalId);
       endGame();
     }
   }, 1000);
 }

 // Fin du jeu
 function endGame() {
   for (var i = 0; i < bubbles.length; i++) {
     game.removeChild(bubbles[i]);
   }
   bubbles = [];
   if (points >= 20) {
     alert("Bravo ! Vous avez gagné !");
   } else {
     alert("Dommage, vous avez perdu !");
   }
   points = 0;
   seconds = 60;
   score.textContent = "Score : 0";
   timer.textContent = "Temps restant : 60";
   generateBubbles();
   startTimer();
 }

 // Démarrer le jeu
 
 document.getElementById("btn").addEventListener("click", function() {
  generateBubbles();
  startTimer();
});
