

var id = null;    
    function myMove() {
            var elem = document.getElementById("sideBox");
            var pos1 = 59;
            var pos2 = 100;
            clearInterval(id);
            id = setInterval(frame, 10);
            function frame() {
            if (pos1 == 100) {
            clearInterval(id);
           
            
            } else {
            pos1++; 
            pos2--; 
            elem.style.clipPath = "polygon(0 0, "+ pos1 +"% 0, "+pos2+"% 100%, 0 100%)"; 
            
            }
        }
    }

    function myMoveBack() {
            var elem = document.getElementById("sideBox");
            var pos1 = 59;
            var pos2 = 100;
            var moved = 0;
            console.log(moved)
            clearInterval(id);
            id = setInterval(frame, 10);
            function frame() {
            if (pos1 == 100) {
            clearInterval(id);
            
            } else  {
            pos1++; 
            pos2--; 
            elem.style.clipPath = "polygon(0 0, "+ pos2 +"% 0, "+pos1+"% 100%, 0 100%)"; 
            
            }
        }
    }