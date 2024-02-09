const wrapper = document.querySelector('.wrapper1');
const wrapperContent = wrapper.querySelector('._wrapper');
const liElements = document.querySelectorAll('.para li');

liElements.forEach(li => {
  li.addEventListener('mouseenter', () => {
    wrapperContent.innerHTML = '';
    li.querySelectorAll('img').forEach(img => {
      const imgClone = img.cloneNode(true);
      wrapperContent.appendChild(imgClone);
    });
    wrapper.style.display = 'block';
  });
});
liElements.forEach(li => {
    li.addEventListener('mouseleave', () => {
      wrapperContent.innerHTML = '';
      li.querySelectorAll('img').forEach(img => {
        const imgClone = img.cloneNode(true);
        wrapperContent.appendChild(imgClone);
      });
      wrapper.style.display = 'none';
    });
  });
  
