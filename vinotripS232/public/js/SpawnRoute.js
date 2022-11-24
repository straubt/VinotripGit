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

  function uneRoute(){
    route_des_vins(route_des_vins => {
      let image = create("img", null, null, null, null);
      image.src = route_des_vins[2].url_photo_route_des_vins;
    });
  }