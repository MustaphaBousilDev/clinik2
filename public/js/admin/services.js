const inputs = document.querySelectorAll('.js-input');

    inputs.forEach(input => {
    input.addEventListener('change', function() {
        inputs.forEach(element => {
        if (element !== this) {
            element.checked = false;
        }
        });
    });
});
    const inputs1 = document.querySelectorAll('.js-input1');

    inputs1.forEach(input => {
    input.addEventListener('change', function() {
        inputs1.forEach(element => {
        if (element !== this) {
            element.checked = false;
        }
        });
    });
});
    const inputs2 = document.querySelectorAll('.js-input2');

    inputs2.forEach(input => {
    input.addEventListener('change', function() {
        inputs2.forEach(element => {
        if (element !== this) {
            element.checked = false;
        }
        });
    });
});

document.querySelector('.image__upload').addEventListener('click', function(){
        console.log('ssss')
        document.querySelector('.input_img').click() 
    })
    function displayImage(files){
        document.querySelector('.icon').style.display ="none";
        document.querySelector('.image__upload').style.border ="none";
        document.querySelector('.img_show').style.display ="block";
        document.querySelector('.img_show').style.borderRadius ="15px";
        document.querySelector('.img_show').src = URL.createObjectURL(files);
        console.log(333)

    }