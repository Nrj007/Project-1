// function isValid(event) {
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;
//   var element = document.getElementById("error");

//   if (username == "" || password == "") {
//     element.style.display = "block";
//     event.preventDefault();
//     return false;
//   }

// else
// {
//   return true;
// }
// }

const leftTimeline = gsap.timeline({
  repeat: -1,
  yoyo: true,
});

leftTimeline.to(".left", {
  y: -1000,
  duration: 600,
  scrub: true,
  ease: "power1.Out",
  repeat: -1,
  skewY: 10,
  stagger: 0.5,
});

const rightTimeline = gsap.timeline({
  repeat: -1,
  yoyo: true,
});

rightTimeline.to(".right", {
  y: 1,
  duration: 600,
  scrub: true,
  ease: "power1.Out",
  repeat: -1,
  skewY: -10,
});
const second = gsap.timeline({
  repeat: -1,
  yoyo: true,
});

second.to(".second", {
  skewY: 10,
  y: -500,
  duration: 600,
  scrub: true,
  ease: "power1.Out",
  repeat: -1,
});
