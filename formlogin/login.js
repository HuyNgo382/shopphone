function doLogin(){
    let email = document.getElementById('email1').value
    let password = document.getElementById('password1').value
    
    login(email, password)
}

function login(email, password){
    let params = {'email': email, 'password': password}
    $.post('login.php', params, function(data){
        let res = JSON.parse(data)
        if(res.code == 200){
           alert('susess')
        }else{
          alert('loginfail')
        }
    })
}

// register
function doRegister() {
    let email = document.getElementById('email2').value
    let password = document.getElementById('password2').value
    register(email , password)
}
function register(email , password) {
    let paranms  = {'email' : email , 'password' :password}
    $.post('login.php' , paranms , function(data){
         
        let res = JSON.parse(data)
        if(res.code == true) {
            window.location = 'login.php'
        }else {
            alert('register Fail')
        }
    })
}