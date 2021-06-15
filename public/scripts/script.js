//  naviguer image
$("#browse_file").on("click", function () {
    $("#image").click();
});

$("#image").on("change", function (e) {
    showFile(this, "#showImage");
});

// ----------------------------------------
function showFile(fileInput, img, showName) {
    if (fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(img).attr("src", e.target.result);
        };
        reader.readAsDataURL(fileInput.files[0]);
    }
    $(showName).text(fileInput.files[0].name);
}

// slider


$(window).load(function() {

        $('#slider').nivoSlider();

});


$(window).load(function() {

    $('#slider').nivoSlider({
        effect:'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 500,
        pauseTime: 3000,
        startSlide: 0,
        directionNav:false,
        controlNav:false,
        controlNavThumbs:false,
        pauseOnHover:true,
        manualAdvance:false,
        prevText:'Prev',
        nextText:'Next',
        randomStart:false,
        beforeChange:function(){},
        afterChange:function(){},
        slideshowEnd:function(){},
        lastSlide:function(){},
        afterLoad:function(){}
    });
});


// LOGIN SIGN UP-BOX
    var loginSignUp = document.getElementById('loginSignUp');

    // FOR BUTTONS
    var signUpBtn = document.getElementById('signUpBtn');
    var signInBtn = document.getElementById('signInBtn');
    // INNER BOX FOR LOGIN AND SIGNUP
    var signUp = document.getElementById('signUp');
    var signIn = document.getElementById('signIn');
    // IMAGES
    var img1 = document.querySelector('.img-1');
    var img2 = document.querySelector('.img-2');
    // CLICK EVENT FOR SIGNUP
    signUpBtn.addEventListener('click', function(){
        loginSignUp.classList.add('register');
        signIn.style.transform = 'scale(0)';
        setTimeout(function(){
            signIn.style.display = 'none';
            signUp.style.transform = 'scale(1)';
        },1200);
        setTimeout(function(){
            img1.style.transform = 'translateY(-50%) scale(0)';
            img2.style.transform = 'translateY(-50%) scale(1)';
        },300)
    })

    // CLICK EVENT FOR SIGN-IN 
    signInBtn.addEventListener('click', function(){
        loginSignUp.classList.remove('register');
        signUp.style.transform = 'scale(0)';
        signIn.style.display = 'flex';
        setTimeout(function(){
            signIn.style.transform = 'scale(1)';
        },1200)

        setTimeout(function(){
            img1.style.transform = 'translateY(-50%) scale(1)';
            img2.style.transform = 'translateY(-50%) scale(0)';
        },300)
    });

    // TO CONFIRM PASSWORD
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    } else 
        { $('#message').html('Not Matching').css('color', '#ce0033');
        }
    });
    $('form').on('submit',function(e){
        if ($('#password').val() != $('#confirm_password').val()){
            e.preventDefault();
        }
        })
        

