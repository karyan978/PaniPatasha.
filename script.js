document.addEventListener('DOMContentLoaded', function () {
  const titles = ["Fanta", "CocaCola", "Pepsi", "M dew",];
  const models = [
    "issest/fanta_can.glb",
    "issest/1.glb",
    "issest/2.glb",
    "issest/3.glb",
  ];

  // const bgColors = [
  //   "#000000",
  //   "#DDF6D2",
  //   "#064e3b",
  //   "#F14A00",
  //   "#2F5249",
  //   "#555879",
  // ];

  let index = 0;
  const roleElement = document.getElementById('role');
  const fanta = document.getElementById('fanta');

  //  const body = document.body; 

  // Initial animation
  gsap.to("#greeting", { opacity: 1, y: 0, duration: 0.8, delay: 0.2 });
  gsap.to("#subheading", { opacity: 1, y: 0, duration: 0.8, delay: 0.4 });
  gsap.to("#role", { opacity: 1, y: 0, duration: 0.8, delay: 0.6 });
  gsap.to("#cta-button", { opacity: 1, y: 0, duration: 0.8, delay: 0.8 });
  gsap.to("#image-container", { opacity: 1, scale: 1, duration: 0.8, delay: 1 });

  // Role switcher
  setInterval(() => {
    index = (index + 1) % titles.length;
    // index = (index + 1) % models.length;

    gsap.to(roleElement, {
      opacity: 0,
      y: -20,
      duration: 0.5,
      onComplete: () => {
        roleElement.textContent = titles[index];
        gsap.to(roleElement, {
          opacity: 1,
          y: 0,
          duration: 0.5
        });
      }
    });

    gsap.to(fanta, {
      opacity: 0,
      scale: 0.95,
      duration: 0.5,
      onComplete: () => {
        fanta.src = models[index];
        gsap.to(fanta, {
          opacity: 1,
          scale: 1,
          duration: 0.5
        });
      }
    });
  }, 3000);
});

//         document.addEventListener('DOMContentLoaded', function () {
//     const titles = ["Black", "Sujuki", "Yamaha","heloo","world"];
//      const subheadings = ["Black", "Sujuki", "Yamaha","heloo","world"];
//     const models = [
//         "asset/cafe_racer_motorcycle.glb",
//         "asset/kawashaki_ninja_h2.glb",
//         "asset/classic_motorbike.glb",
//         "asset/1.glb",
//         "asset/2.glb",
//     ];
//     const bgColors = [
//         "#000000",
//         "#DDF6D2",
//         "#064e3b",
//         "#F14A00",
//          "#2F5249",
//         "#555879",
//     ];

//     let index = 0;
//     const roleElement = document.getElementById('role');
//     const profileModel = document.getElementById('honda');
//     const subheading = document.getElementById('subheading');

//     const body = document.body; // background change karne ke liye

//     // Initial animation
//     gsap.to("#greeting", { opacity: 1, y: 0, duration: 0.8, delay: 0.2 });
//     gsap.to("#subheading", { opacity: 1, y: 0, duration: 0.8, delay: 0.4 });
//     gsap.to("#role", { opacity: 1, y: 0, duration: 0.8, delay: 0.6 });
//     gsap.to("#cta-button", { opacity: 1, y: 0, duration: 0.8, delay: 0.8 });
//     gsap.to("#image-container", { opacity: 1, scale: 1, duration: 0.8, delay: 1 });

//     // Set initial background color
//     body.style.backgroundColor = bgColors[index];

//     // Role switcher
//     setInterval(() => {
//         index = (index + 1) % titles.length;
//          index = (index + 1) % subheadings.length;

//         // Update role text
//         gsap.to(roleElement, {
//             opacity: 0,
//             y: -20,
//             duration: 0.5,
//             onComplete: () => {
//                 roleElement.textContent = titles[index];
//                 gsap.to(roleElement, {
//                     opacity: 1,
//                     y: 0,
//                     duration: 0.5
//                 });
//             }
//         });
//         gsap.to(subheading, {
//             opacity: 0,
//             y: -20,
//             duration: 0.5,
//             onComplete: () => {
//                 subheading.textContent = subheadings[index];
//                 gsap.to(roleElement, {
//                     opacity: 1,
//                     y: 0,
//                     duration: 0.5
//                 });
//             }
//         });


//         // Update 3D model
//         gsap.to(profileModel, {
//             opacity: 0,
//             scale: 0.95,
//             duration: 0.5,
//             onComplete: () => {
//                 profileModel.setAttribute("src", models[index]);

//                 // Change background color
//                 gsap.to(body, {
//                     backgroundColor: bgColors[index],
//                     duration: 1
//                 });

//                 gsap.to(profileModel, {
//                     opacity: 1,
//                     scale: 1,
//                     duration: 0.5
//                 });
//             }
//         });
//     }, 8000);
// });



gsap.registerPlugin(ScrollTrigger);

// Timeline
var tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".page2",
    start: "top 80%",
    end: "top 0%",
    // rotateX: 90, 
    scrub: 1,
    // markers: true  
  }
});

// Animation
tl.to("#fanta", {
  top: "100%",
  left: "13%",
  zIndex: 9,

}, 'nimbu');
tl.to("#orange-cut", {
  top: "153%",
  left: "25%",
  zIndex: 1,
}, 'nimbu')
tl.to("#leaf", {
  top: "103%",
  left: "19%",
  rotate: -50,
  zIndex: 1,
}, 'nimbu')
tl.to("#leaf2", {
  top: "157%",
  left: "8%",
  rotate: -90,
  zIndex: 1,
}, 'nimbu')
tl.to("#orange-group", {
  top: "172%",
  right: "4%",
  rotate: 360,
  zIndex: 1,
}, 'nimbu')
tl.to("#leaf5", {
  top: "117%",
  left: "77%",
  zIndex: 1,
}, 'nimbu')



var tl2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".page3",
    start: "0% 80%",
    end: "70% 50%",
    // rotateX: 90, 
    scrub: 1,
    // markers: true     
  }
});
tl2.to("#fanta", {
  height: "60%",
  top: "215%",
  left: "40%",
}, 'fanta')
tl2.to("#orange-cut", {
  width: "23%",
  top: "205%",
  left: "38%",
}, 'fanta')

tl2.from("#orange2", {
  top: "20%",
  rotate: "-90deg",
  left: "-100%",
  zIndex: 9,
}, 'orange')

tl2.from("#coca-cola", {
  top: "5%",
  rotate: "10deg",
  left: "-100%",
  zIndex: 9,
}, 'orange')

tl2.from("#orange3", {
  top: "20%",
  rotate: "-90deg",
  right: "-100%",
  zIndex: 9,
}, 'orange')

tl2.from("#sprite", {
  top: "10%",
  rotate: "-10deg",
  right: "-100%",
  zIndex: 9,
}, 'orange')


var tl3 = gsap.timeline({
  scrollTrigger: {
    trigger: ".page4",
    start: "75% 50%",
    end: "100% 50%",
    duration: 1,
    scrub: 5,
    // markers: true,  
    pin: true
  }
});
tl3.to("#poznan", {
  width: "100%",
  height: "100%",
})




