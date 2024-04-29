gsap.registerPlugin(CustomEase);

window.addEventListener("load",function() {
   //evento click
    this.document.getElementById("btnEnvio").addEventListener("click",function () {
        document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
        gsap.to("#cuadrado1",{x:'800', delay:1, width: '+=50%',rotate:360, background:"blue"});
    }) 

    // //eventlodblclick
    // this.document.getElementById("btnEnvio").addEventListener("dblclick",function () {
    //     document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
    // }) 

    //Evento Mouseover
    this.document.getElementById("cuadrado1").addEventListener("mouseover",function () {
        document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
        gsap.to("#cuadrado1",{delay:0.25, background:"green"});
    }) 

    //Evento Mouseout
    // this.document.getElementById("btnEnvio").addEventListener("mouseout",function () {
    //     document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
    // }) 

    //Evento Keyup
    // this.document.getElementById("cajatexto").addEventListener("keyup",function () {
    //     document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
    // }) 

    //Evento Focus
    // this.document.getElementById("cajatexto").addEventListener("focus",function () {
    //     document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
    // })     

    //Evento Blur
    // this.document.getElementById("cajatexto").addEventListener("blur",function () {
    //     document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
    // })     
    
    //Evento Change
    // this.document.getElementById("opciones").addEventListener("change",function () {
    //     document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
    // })     

    //Evento Change con Radios
    // var opciones = this.document.querySelectorAll("input[type=radio]");
    // opciones.forEach((o) => {
    //     o.addEventListener("change", function() {
    //             document.getElementById("mensaje").innerHTML = document.getElementById("cajatexto").value;
    //     })
    // });

    const elemento = document.getElementById('body');

    elemento.addEventListener('mousemove', (event) => {
      console.log(`Posición X: ${event.clientX}, Posición Y: ${event.clientY}`);
      document.getElementById("coordenadas").innerHTML = `Posición X: ${event.clientX}, Posición Y: ${event.clientY}`;
    });

});