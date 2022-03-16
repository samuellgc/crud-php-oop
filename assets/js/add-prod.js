const registerProd = document.getElementById('save-prod');
const form = document.getElementById('product_form');
const sku = document.getElementById('sku');
const nam = document.getElementById('name');
const price = document.getElementById('price');

registerProd.addEventListener('click', async(e)=> {
    if(sku.value === '' || nam.value === '' || price.value === ''){
        e.preventDefault
        alert('Please, provide the right data');
    }else if(price.value <= 0){
        e.preventDefault
        alert('Please, the field value it is incorrect');
    }else{
        e.preventDefault();    
        form.submit();
        setTimeout(()=>{
            window.location.href = "index.php";
        },100);
    }
})
