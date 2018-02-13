/**
 * Created by thiag on 04/02/2018.
 */


const result = document.querySelectorAll('.excluir')
    result.forEach(function(item){
        item.addEventListener('click',function(e){
            if(!confirm('Tem certeza que quer excluir!!!')){
                e.preventDefault()
                this.setAttribute("disabled", "disabled")

            }
        })
    })

