gsap.registerPlugin(CustomEase);

let tl =gsap.timeline({
    yoyo: true,
    repeat: 1,
});

tl.to('.cuadrado_1', {
    duration: 0.2,
    x: "random(0, 1000, 5)",
    delay: 0,
    borderRadius: '50%',
    //    background: 'red',

    //    scale: 2,
     //hace que vuelva a su posicion inicial
});    

tl.to('.cuadrado_2', {
    duration:1,
    x: "400",
    delay: 0,
    //    borderRadius: '50%',
    rotate: 360,
},'-=0.25');    

tl.to('#cuadrado3', {
    duration:0.3,
    x: "random(0, 1000, 5)",
    delay: 0,
    borderRadius: '50%',
},'-=0.25'); 

//Anidar acciones
tl.to('.cuadrado_4', {
    duration:1,
    x: "random(0, 1000, 5)",
    //ease: 'steps(4)', //darle vida al llegar y no sea tan seco
    delay: 0,
},'-=0.25')
.to('.cuadrado_4', { rotation: 180 });   
   

//para que un objeto me siga el cursos
//el x y y dependera de donde esta posicionado el obj
gsap.set("#cuadrado1", {xPercent: -350, yPercent: -550});

let xSetter = gsap.quickSetter("#cuadrado1", "x", "px"), //apply it to the #id element's x property and append a "px" unit
    ySetter = gsap.quickSetter("#cuadrado1", "y", "px") //apply it to the #id element's x property and append a "px" unit

window.addEventListener("mousemove", e => {  
  xSetter(e.x)
  ySetter(e.y)
});

//setter es para ubicar un valor fijo y el to es para que se mueva a.
gsap.set("#cuadrado3", {xPercent: -250, yPercent: -450});

let xTo = gsap.quickTo("#cuadrado3", "x", {duration: 0.6, ease: "power3"}),
    yTo = gsap.quickTo("#cuadrado3", "y", {duration: 0.6, ease: "power3"});

window.addEventListener("mousemove", e => {
  xTo(e.clientX);
  yTo(e.clientY);
});



//cambiar de color
gsap.to("#cuadrado2", {
    "--myColor":"red", 
    yoyo:true, 
    repeat:20, 
    duration: 0.5
});




const tl2 = gsap.timeline({
    scrollTrigger: {
      trigger: ".contenedor",
      start: "calc(top +50%)",
      end: "+=300",
      scrub: 1,
      pin: true, //deja fijo el cont desde donde inicia hasta el end
      markers: true //Marcadores
    }
});

tl2.to(".cuadrado_5", {background: "yellow"})
tl2.to(".cuadrado_4", {borderRadius: '50%'})
tl2.to(".cuadrado_5", {x:200})
tl2.to(".cuadrado_5", {background: 'transparent', transition: '0.3s'})

