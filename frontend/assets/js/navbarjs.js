

const categoryy = document.querySelector("#categoryy");
const categor = document.querySelector(".category");
const categorId = document.querySelector("#categor");

  function  showMenu(){
    // e.preventDefault()
    // categorId.className = 'show'


    if (categorId.className === 'hide') {
        categorId.className = 'show'
    }else{
    categorId.className = 'hide'

    }
    console.log('hello')
    console.log(categor, 'categor')
    console.log(categoryy, 'categoryy')
  }