const images = document.querySelectorAll('.main img');
const wrapper = document.querySelector('.wrapper');
const wrapperContent = wrapper.querySelector('._wrapper');
const layoutElement = document.querySelector('._layout_');
const icon=document.querySelector('.icon');
const images1 = document.querySelectorAll('.main1 img');
images1.forEach(image => {
  image.addEventListener('click', () => {
    const imageClone1 = image.cloneNode(true);
    wrapperContent.innerHTML = '';
    wrapperContent.appendChild(icon);
    wrapperContent.appendChild(imageClone1);
    wrapper.style.display = 'block';
   layoutElement.style.filter = 'blur(10px)';
  });
});
images.forEach(image => {
  image.addEventListener('click', () => {
    const imageClone = image.cloneNode(true);
    wrapperContent.innerHTML = '';
    wrapperContent.appendChild(icon);
    wrapperContent.appendChild(imageClone);
    wrapper.style.display = 'block';
   layoutElement.style.filter = 'blur(10px)';
  });
});
wrapperContent.addEventListener('click',()=>
{
wrapper.style.display="none";
layoutElement.style.filter = 'blur(0px)';
});

icon.addEventListener('click',()=>{
  wrapper.style.display="none";

  layoutElement.style.filter = 'blur(0px)';
})

const t1 = gsap.timeline({

});
t1.set(".wrapper",{

})
t1.to(".wrapper",{
 opacity:1.5,
  ease: "power1.Out",
})