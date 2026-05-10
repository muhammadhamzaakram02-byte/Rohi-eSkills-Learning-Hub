let btn1 , btn2 , btn3 , btn4 , btn5 , box , img ;
btn1 = document.querySelector('.btn1')
btn2 = document.querySelector('.btn2')
btn3 = document.querySelector('.btn3')
btn4 = document.querySelector('.btn4')
btn5 = document.querySelector('.btn5')
box = document.querySelector('.box')
img = document.querySelector('img')

btn1.addEventListener('click' , function(){
box.style.backgroundColor = 'green'
img.src = 'blog-img-1.jpg'

})
btn2.addEventListener('click', function(){
box.style.backgroundColor = 'blue'
img.src = 'blog-img-2.jpg'
})
btn3.addEventListener('click', function(){
box.style.backgroundColor = 'black'
img.src = 'blog-img-3.jpg'
})
btn4.addEventListener('click', function(){
box.style.backgroundColor = 'yellow'
img.src = 'item1-project1.png'
})
btn5.addEventListener('click', function(){
box.style.backgroundColor = 'red'
img.src = 'item2-project1.png'
})