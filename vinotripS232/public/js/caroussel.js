var responsiveSlider = function() {

    var slider = document.getElementsByClassName("slider");
    var sliderWidth = slider.offsetWidth;
    var slideList = document.getElementById("slideWrap");
    var count = 1;
    var items = parseInt(slideList.querySelectorAll("li").length / 2);
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    
    window.addEventListener('resize', function() {
      sliderWidth = slider.offsetWidth;
    });
    
    var prevSlide = function() {
      if(count > 1) {
        count = count - 2;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count = 1) {
        count = items - 1;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
    };
    
    var nextSlide = function() {
      if(count < items) {
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count > items -1) {
        slideList.style.left = "0px";
        count = 1;
      }
    };
    
    next.addEventListener("click", function() {
      nextSlide();
    });
    
    prev.addEventListener("click", function() {
      prevSlide();
    });
    
    setInterval(function() {
      nextSlide()
    }, 5000);
    
    };
    
    window.onload = function() {
    responsiveSlider();  
    
    }
    
    function create(tag, parent, text=null, classs=null, id=null) {
      let element = document.createElement(tag)
      if (text)
        element.appendChild(document.createTextNode(text))
      parent.appendChild(element)
      if (classs)
        element.classList.add(classs)
      if (id)
        element.id = id
      return element
    }

    let ul = document.querySelector("#slideWrap");
    let slider = document.getElementsByClassName("slider");
    console.log(slider[0].offsetWidth);
    data.forEach(unSejour => {
      let li = create("li", ul, null, null, null);
      let image = create("img", li, null, null, null);
      image.src = unSejour.photo_sejour;
      image.style.width = slider[0].clientWidth / 2 + "px";
    });
    