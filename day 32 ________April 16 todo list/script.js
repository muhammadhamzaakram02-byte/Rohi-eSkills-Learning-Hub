let write , add , save , delete1 , new_element , box , body  ; 
add = document.getElementById('add')

function new_function (){
 write = document.getElementById('write').value
 save = document.getElementById('save')
 delete1 = document.getElementById('delete')
 save.textContent = write 
 delete1.textContent = 'delete'
    
    
    // console.log(write1.textContent='hhh')
    // box = document.getElementById('box')
    // body = document.body
    // body.append(box)
    // let  write1 = document.getElementById('write')
    // let ok = 'kk'
    // write1.textContent = ok
    
    
}
function new_function2(){
    delete1.addEventListener('click' , function(){
        save.textContent= ""
        delete1.textContent = ''
        // let b = '4' ;
        // write1.textContent = b
        // delete1.style.visibility: hidden;
    })
}
add.addEventListener('click', function(){
    new_function()
    new_function2()
    
})
 