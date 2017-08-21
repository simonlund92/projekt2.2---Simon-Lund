  var myIndex = 0; // laver en variable ved navn myIndex 
  carousel(); // en self-invoked function. 

  function carousel() { // functionens declaration ie. hvilken kode den skal køre. 
    var i;  // laver en variable i
    var x = document.getElementsByClassName("mySlides");  // laver en variable x som vi sætter lig med div'en "mySlides" ved hjælp af document.getElement
      for (i = 0; i < x.length; i++) {    // starter en for løkke, som har til formål at tjekke på om der er flere slides at køre igennem, altså x, i er variablen vi tæller op indtil vi rammer x. 
        x[i].style.display = "none";  // bruges til at fjerne det forhenværende billede.
      }
    myIndex++;
    if (myIndex > x.length){
      myIndex = 1;
      }   

      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 10000);     // Change image every 2 seconds
  }
