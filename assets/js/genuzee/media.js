
document.querySelector('#myForm').addEventListener('submit',formAction)

function formAction(e){
    e.preventDefault()
    
    str = document.querySelector('input').value
    searchBlog(str)

}

function searchBlog(str)
{
    if(str.length == 0)
    {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    else
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "Genuzee.php?search="+str, true);
        xmlhttp.send();
    }
}

$(function(){
    $(".close").click(function(){
        $("#myAlert").alert();
    });
});

$(".carousel").carousel();

function init() {

    // ---===automatic slides===---
    
    let slideIndex = 1;
    showSlide(slideIndex);
    setInterval(() => showSlide((slideIndex += 1)), 5000);
    
    let btnNext = document.getElementById("btnNext");
    let btnPrev = document.getElementById("btnPrev");
    
    btnNext.addEventListener('click', function(){showSlide(slideIndex += 1);});
    
    btnPrev.addEventListener('click', function(){showSlide(slideIndex -= 1);});
    
    function showSlide(n) {
      let i;
      let slide = document.getElementsByClassName("mySlides");
    
      for (i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
      }
    
      if (n > slide.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slide.length;
      }
    
      slide[slideIndex - 1].style.display = "block";
    }
    
    // ---===end automatic slides===---
    
    }