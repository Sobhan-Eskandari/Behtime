/**
 * Created by sobhaneskandari on 4/5/17.
 */
var width = window.innerWidth;
var alert = `<div style="text-align:center;width:50px;height:50px;background-color: green;
                          opacity: 0.5;position:fixed;bottom: 0px;border-radius: 50px">
               <p style="padding-top: 12px;color: white" id="sizeOfPageDetector">hi</p>
             </div>`;
document.body.innerHTML += alert;
let detector = document.getElementById("sizeOfPageDetector");
detectsize()
window.addEventListener('resize', function(event){
    // do stuff here
    console.log(window.innerWidth);
    detectsize()
});

function detectsize() {
    let width = window.innerWidth;
    if (width >= 1200){
        detector.textContent = "XL";
    }
    if (width >= 992 && width < 1200){
        detector.textContent = "LG";
    }
    if (width >= 768 && width < 992){
        detector.textContent = "MD";
    }
    if (width >= 576 && width < 768){
        detector.textContent = "SM";
    }
    if (width < 576){
        detector.textContent = "XS";
    }
}