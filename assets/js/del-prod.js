const delProd = document.getElementById('delete-product-btn');
const form = document.getElementById('del-form')

delProd.addEventListener('click', async()=> {
    form.submit();
    console.log('cliquei')
    setTimeout(()=>{
        window.location.reload();
    },100);
})