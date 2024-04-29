    gsap.registerPlugin(CustomEase);
    const boton = document.getElementById('animatedButton');

    gsap.set(".circle", {xPercent: '-570', yPercent: '-200'});//Editar posicion

    let xSetter = gsap.quickSetter(".circle", "x", "px"), //apply it to the #id element's x property and append a "px" unit
        ySetter = gsap.quickSetter(".circle", "y", "px") //apply it to the #id element's x property and append a "px" unit
    


boton.addEventListener("mouseenter", e => {  
      xSetter(e.x)
      ySetter(e.y)

    gsap.to(".circle", {
        background: 'black',
        scale: 80,
        duration: 0.4,
        });

    gsap.to("#animatedButton", {
        color: 'white',
    });

    });

    
boton.addEventListener("mouseout", e => {  
        xSetter(e.x)
        ySetter(e.y)
  
    gsap.to(".circle", {
        background: 'white',
        scale: 0,
        duration: 0.4,
    });

    gsap.to("#animatedButton", {
        color: 'black',
    });

    });
  