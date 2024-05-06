const img = document.querySelectorAll('.img');
console.log(img);
img.forEach((element,index)=>{
    element.style.left = `${index*100}%`
})


setTimeout(()=>{
    img.forEach((element,index)=>{
        element.style.transform = `translateX(-${index*100}%)`
    })

},5000)




